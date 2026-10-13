<?php

namespace App\Controllers;

use App\Models\InquiryModel;

class Home extends BaseController
{
    public function index(): string
    {
        helper(['form']);

        $data = [
            'title' => 'Nexora IT - Enterprise Cloud, Custom Software, AI & Cyber Solutions',
            'meta_description' => 'Nexora delivers high-performance custom software engineering, AWS/Azure cloud migration, AI workflows, and 24/7 managed cybersecurity for ambitious enterprises.',
            'validation' => \Config\Services::validation(),
        ];

        return view('pages/it_landing', $data);
    }

    public function submit()
    {
        helper(['form']);

        $inquiryModel = new InquiryModel();
        $rules = $inquiryModel->getValidationRules();

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('#contact-form'))
                ->withInput()
                ->with('errors', $this->validator->getErrors())
                ->with('status_error', 'Please resolve the highlighted fields in the project inquiry form.');
        }

        $postData = $this->request->getPost();
        $savedRecord = $inquiryModel->saveInquiry($postData);

        return redirect()->to(base_url('#contact-form'))
            ->with('success', 'Your IT consultation request has been received! Our Solutions Architect will reach out within 2 hours.')
            ->with('ticket', $savedRecord);
    }
}
