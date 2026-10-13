<?php

namespace App\Controllers;

use App\Models\InquiryModel;

class Inquiries extends BaseController
{
    public function index(): string
    {
        $inquiryModel = new InquiryModel();
        $inquiries = $inquiryModel->getAllInquiries();

        $data = [
            'title' => 'Client IT Consultations & Project Quotes - Nexora Admin',
            'inquiries' => $inquiries,
        ];

        return view('pages/inquiries_list', $data);
    }
}
