<?php

namespace App\Models;

use CodeIgniter\Model;
use PDO;

class InquiryModel extends Model
{
    protected string $storageFile;
    protected string $sqliteDbFile;

    public function __construct()
    {
        parent::__construct();
        $this->storageFile = WRITEPATH . 'inquiries.json';
        $this->sqliteDbFile = WRITEPATH . 'tourism.db';
        $this->initSqlite();
    }

    /**
     * Initializes SQLite table if PDO SQLite is available.
     */
    protected function initSqlite(): void
    {
        try {
            if (extension_loaded('pdo_sqlite')) {
                $pdo = new PDO('sqlite:' . $this->sqliteDbFile);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->exec("CREATE TABLE IF NOT EXISTS inquiries (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    reference_id TEXT UNIQUE,
                    full_name TEXT NOT NULL,
                    email TEXT NOT NULL,
                    phone TEXT NOT NULL,
                    destination TEXT NOT NULL,
                    package_name TEXT,
                    travel_date TEXT NOT NULL,
                    guests INTEGER DEFAULT 1,
                    travel_style TEXT,
                    message TEXT,
                    whatsapp_contact TEXT,
                    status TEXT DEFAULT 'pending',
                    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
                )");
            }
        } catch (\Throwable $e) {
            log_message('error', 'SQLite init error: ' . $e->getMessage());
        }
    }

    /**
     * Validation rules for the tourism inquiry / booking form
     */
    public function getValidationRules(array $options = []): array
    {
        return [
            'full_name' => [
                'rules'  => 'required|min_length[2]|max_length[100]',
                'errors' => [
                    'required'   => 'Please enter your full name.',
                    'min_length' => 'Your full name must have at least 2 characters.'
                ]
            ],
            'email' => [
                'rules'  => 'required|valid_email|max_length[120]',
                'errors' => [
                    'required'    => 'Please enter your contact email address.',
                    'valid_email' => 'Please provide a valid email address.'
                ]
            ],
            'phone' => [
                'rules'  => 'required|min_length[6]|max_length[25]',
                'errors' => [
                    'required'   => 'Please enter your phone or WhatsApp number.',
                    'min_length' => 'Please enter a valid phone number.'
                ]
            ],
            'destination' => [
                'rules'  => 'required|max_length[150]',
                'errors' => [
                    'required' => 'Please select or specify your intended destination.'
                ]
            ],
            'travel_date' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Please select your desired travel date.'
                ]
            ],
            'guests' => [
                'rules'  => 'required|integer|greater_than_equal_to[1]|less_than_equal_to[50]',
                'errors' => [
                    'required'              => 'Please indicate the number of guests.',
                    'greater_than_equal_to' => 'There must be at least 1 guest.',
                    'less_than_equal_to'    => 'For groups larger than 50, please contact our VIP group concierge.'
                ]
            ],
            'message' => [
                'rules'  => 'permit_empty|max_length[2000]',
            ]
        ];
    }

    /**
     * Store new inquiry in JSON and SQLite
     */
    public function saveInquiry(array $data): array
    {
        $referenceId = 'WLX-' . date('ym') . '-' . strtoupper(substr(bin2hex(random_bytes(3)), 0, 5));

        $record = [
            'id'               => time() . rand(100, 999),
            'reference_id'     => $referenceId,
            'full_name'        => trim($data['full_name'] ?? ''),
            'email'            => strtolower(trim($data['email'] ?? '')),
            'phone'            => trim($data['phone'] ?? ''),
            'destination'      => trim($data['destination'] ?? 'Custom Expedition'),
            'package_name'     => trim($data['package_name'] ?? 'Custom Package'),
            'travel_date'      => trim($data['travel_date'] ?? date('Y-m-d', strtotime('+30 days'))),
            'guests'           => (int) ($data['guests'] ?? 1),
            'travel_style'     => trim($data['travel_style'] ?? 'Luxury'),
            'message'          => trim($data['message'] ?? ''),
            'whatsapp_contact' => !empty($data['whatsapp_opt_in']) ? 'Yes' : 'No',
            'status'           => 'New',
            'created_at'       => date('Y-m-d H:i:s'),
        ];

        // 1. Save to JSON File Storage
        $all = $this->getAllInquiries();
        array_unshift($all, $record);
        @file_put_contents($this->storageFile, json_encode($all, JSON_PRETTY_PRINT));

        // 2. Save to SQLite if PDO is available
        try {
            if (extension_loaded('pdo_sqlite')) {
                $pdo = new PDO('sqlite:' . $this->sqliteDbFile);
                $stmt = $pdo->prepare("INSERT INTO inquiries 
                    (reference_id, full_name, email, phone, destination, package_name, travel_date, guests, travel_style, message, whatsapp_contact, status, created_at)
                    VALUES (:ref, :name, :email, :phone, :dest, :pkg, :tdate, :guests, :style, :msg, :wa, :status, :created)");
                $stmt->execute([
                    ':ref'     => $record['reference_id'],
                    ':name'    => $record['full_name'],
                    ':email'   => $record['email'],
                    ':phone'   => $record['phone'],
                    ':dest'    => $record['destination'],
                    ':pkg'     => $record['package_name'],
                    ':tdate'   => $record['travel_date'],
                    ':guests'  => $record['guests'],
                    ':style'   => $record['travel_style'],
                    ':msg'     => $record['message'],
                    ':wa'      => $record['whatsapp_contact'],
                    ':status'  => $record['status'],
                    ':created' => $record['created_at'],
                ]);
            }
        } catch (\Throwable $e) {
            log_message('error', 'SQLite insertion error: ' . $e->getMessage());
        }

        return $record;
    }

    /**
     * Retrieve all inquiries
     */
    public function getAllInquiries(): array
    {
        if (file_exists($this->storageFile)) {
            $content = @file_get_contents($this->storageFile);
            $decoded = json_decode($content, true);
            if (is_array($decoded)) {
                return $decoded;
            }
        }
        return [];
    }

    /**
     * Find inquiry by Reference ID
     */
    public function findByReference(string $referenceId): ?array
    {
        $inquiries = $this->getAllInquiries();
        foreach ($inquiries as $inq) {
            if (strcasecmp($inq['reference_id'] ?? '', $referenceId) === 0) {
                return $inq;
            }
        }
        return null;
    }
}
