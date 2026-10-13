<?php

namespace App\Controllers;

use App\Models\InquiryModel;
use App\Models\DestinationModel;
use App\Models\PackageModel;

class Contact extends BaseController
{
    public function index(): string
    {
        helper(['form']);

        $destModel = new DestinationModel();
        $pkgModel = new PackageModel();

        // Check if query params provided prefilled choices
        $prefillDestination = $this->request->getGet('destination') ?? '';
        $prefillPackage = $this->request->getGet('package') ?? '';

        $data = [
            'title' => 'Contact Us & Book a Tour - WanderLuxe Expeditions',
            'meta_description' => 'Contact the WanderLuxe concierge team or submit an inquiry for custom trips, private tours, and packages. Instant WhatsApp chat available.',
            'active_nav' => 'contact',
            'all_destinations' => $destModel->getAll(),
            'all_packages' => $pkgModel->getAll(),
            'prefill_destination' => $prefillDestination,
            'prefill_package' => $prefillPackage,
            'validation' => \Config\Services::validation(),
        ];

        return view('pages/contact', $data);
    }

    public function submit()
    {
        helper(['form']);

        $inquiryModel = new InquiryModel();
        $rules = $inquiryModel->getValidationRules();

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors())
                ->with('status_error', 'Please resolve the highlighted errors before submitting.');
        }

        $postData = $this->request->getPost();
        $savedRecord = $inquiryModel->saveInquiry($postData);

        // Store flash data for confirmation
        return redirect()->to(base_url('contact/confirmation?ref=' . urlencode($savedRecord['reference_id'])))
            ->with('success', 'Your booking inquiry has been submitted successfully!')
            ->with('inquiry', $savedRecord);
    }

    public function confirmation(): string
    {
        $ref = $this->request->getGet('ref');
        $inquiryModel = new InquiryModel();

        $inquiry = null;
        if ($ref) {
            $inquiry = $inquiryModel->findByReference($ref);
        }

        if (!$inquiry && session()->get('inquiry')) {
            $inquiry = session()->get('inquiry');
        }

        $data = [
            'title' => 'Booking Confirmation - WanderLuxe Expeditions',
            'meta_description' => 'Your WanderLuxe travel inquiry has been received. Our dedicated travel specialist is preparing your bespoke itinerary.',
            'active_nav' => 'contact',
            'inquiry' => $inquiry,
            'ref' => $ref,
        ];

        return view('pages/confirmation', $data);
    }
}
