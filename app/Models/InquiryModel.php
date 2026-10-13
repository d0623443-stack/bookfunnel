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
        $this->sqliteDbFile = WRITEPATH . 'it_services.db';
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
                $pdo->exec("CREATE TABLE IF NOT EXISTS it_inquiries (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    ticket_id TEXT UNIQUE,
                    full_name TEXT NOT NULL,
                    company_name TEXT,
                    email TEXT NOT NULL,
                    phone TEXT NOT NULL,
                    service_needed TEXT NOT NULL,
                    budget_range TEXT,
                    timeline TEXT,
                    project_details TEXT,
                    whatsapp_contact TEXT DEFAULT 'Yes',
                    status TEXT DEFAULT 'New',
                    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
                )");
            }
        } catch (\Throwable $e) {
            log_message('error', 'SQLite init error: ' . $e->getMessage());
        }
    }

    /**
     * Validation rules for the IT consultation / quote form
     */
    public function getValidationRules(array $options = []): array
    {
        return [
            'full_name' => [
                'rules'  => 'required|min_length[2]|max_length[100]',
                'errors' => [
                    'required'   => 'Please provide your full name or primary contact name.',
                    'min_length' => 'Name must have at least 2 characters.'
                ]
            ],
            'email' => [
                'rules'  => 'required|valid_email|max_length[120]',
                'errors' => [
                    'required'    => 'Please provide a valid business email address.',
                    'valid_email' => 'Please enter a valid email format.'
                ]
            ],
            'phone' => [
                'rules'  => 'required|min_length[7]|max_length[25]',
                'errors' => [
                    'required'   => 'Please provide a phone or WhatsApp number for project consultation.',
                    'min_length' => 'Please provide a valid phone number.'
                ]
            ],
            'service_needed' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Please select the primary IT service required.'
                ]
            ],
            'project_details' => [
                'rules'  => 'permit_empty|max_length[3000]',
            ]
        ];
    }

    /**
     * Store new inquiry in JSON and SQLite
     */
    public function saveInquiry(array $data): array
    {
        $ticketId = 'NEX-' . date('ym') . '-' . strtoupper(substr(bin2hex(random_bytes(3)), 0, 5));

        $record = [
            'id'               => time() . rand(100, 999),
            'ticket_id'        => $ticketId,
            'full_name'        => trim($data['full_name'] ?? ''),
            'company_name'     => trim($data['company_name'] ?? 'Not specified'),
            'email'            => strtolower(trim($data['email'] ?? '')),
            'phone'            => trim($data['phone'] ?? ''),
            'service_needed'   => trim($data['service_needed'] ?? 'General IT Consultation'),
            'budget_range'     => trim($data['budget_range'] ?? '$5,000 - $15,000'),
            'timeline'         => trim($data['timeline'] ?? '1 - 3 Months'),
            'project_details'  => trim($data['project_details'] ?? ''),
            'whatsapp_contact' => !empty($data['whatsapp_opt_in']) ? 'Yes' : 'No',
            'status'           => 'New Lead',
            'created_at'       => date('Y-m-d H:i:s'),
        ];

        // 1. JSON Persistence
        $all = $this->getAllInquiries();
        array_unshift($all, $record);
        @file_put_contents($this->storageFile, json_encode($all, JSON_PRETTY_PRINT));

        // 2. SQLite Persistence
        try {
            if (extension_loaded('pdo_sqlite')) {
                $pdo = new PDO('sqlite:' . $this->sqliteDbFile);
                $stmt = $pdo->prepare("INSERT INTO it_inquiries 
                    (ticket_id, full_name, company_name, email, phone, service_needed, budget_range, timeline, project_details, whatsapp_contact, status, created_at)
                    VALUES (:tid, :name, :company, :email, :phone, :service, :budget, :timeline, :details, :wa, :status, :created)");
                $stmt->execute([
                    ':tid'      => $record['ticket_id'],
                    ':name'     => $record['full_name'],
                    ':company'  => $record['company_name'],
                    ':email'    => $record['email'],
                    ':phone'    => $record['phone'],
                    ':service'  => $record['service_needed'],
                    ':budget'   => $record['budget_range'],
                    ':timeline' => $record['timeline'],
                    ':details'  => $record['project_details'],
                    ':wa'       => $record['whatsapp_contact'],
                    ':status'   => $record['status'],
                    ':created'  => $record['created_at'],
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
     * Find inquiry by Ticket ID
     */
    public function findByTicket(string $ticketId): ?array
    {
        $all = $this->getAllInquiries();
        foreach ($all as $item) {
            if (strcasecmp($item['ticket_id'] ?? '', $ticketId) === 0 || strcasecmp($item['reference_id'] ?? '', $ticketId) === 0) {
                return $item;
            }
        }
        return null;
    }
}

