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
            'title' => 'Inquiries & Booking Submissions - WanderLuxe Concierge',
            'meta_description' => 'Review recent travel inquiries and bookings submitted through the WanderLuxe website.',
            'active_nav' => 'inquiries',
            'inquiries' => $inquiries,
        ];

        return view('pages/inquiries_list', $data);
    }
}
