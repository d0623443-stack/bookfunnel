<?php

namespace App\Controllers;

use App\Models\DestinationModel;
use App\Models\PackageModel;

class Home extends BaseController
{
    public function index(): string
    {
        $destModel = new DestinationModel();
        $pkgModel = new PackageModel();

        $data = [
            'title' => 'WanderLuxe - Bespoke Journeys & Luxury World Expeditions',
            'meta_description' => 'Discover unforgettable worldwide journeys, luxury private escapes, and bespoke tour packages with WanderLuxe. Instant WhatsApp travel support available 24/7.',
            'active_nav' => 'home',
            'featured_destinations' => $destModel->getFeatured(4),
            'featured_packages' => $pkgModel->getFeatured(3),
            'all_destinations' => $destModel->getAll(),
        ];

        return view('pages/home', $data);
    }
}
