<?php

namespace App\Controllers;

use App\Models\DestinationModel;
use App\Models\PackageModel;

class Destinations extends BaseController
{
    public function index(): string
    {
        $destModel = new DestinationModel();
        $category = $this->request->getGet('category') ?? 'all';
        $search = $this->request->getGet('q');

        if ($search) {
            $destinations = $destModel->search($search);
        } else {
            $destinations = $destModel->getAll($category);
        }

        $data = [
            'title' => 'World-Class Destinations - WanderLuxe Expeditions',
            'meta_description' => 'Explore handcrafted luxury destinations across Bali, the Swiss Alps, Kyoto, Santorini, the Serengeti, and beyond. Plan your dream getaway.',
            'active_nav' => 'destinations',
            'destinations' => $destinations,
            'current_category' => $category,
            'search_query' => $search ?? '',
        ];

        return view('pages/destinations', $data);
    }

    public function detail(string $slug): string
    {
        $destModel = new DestinationModel();
        $pkgModel = new PackageModel();

        $destination = $destModel->getBySlug($slug);

        if (!$destination) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Destination '$slug' not found.");
        }

        $relatedPackages = $pkgModel->getByDestinationSlug($slug);

        $data = [
            'title' => $destination['title'] . ' Travel Guide & Tours - WanderLuxe',
            'meta_description' => $destination['overview'],
            'active_nav' => 'destinations',
            'destination' => $destination,
            'related_packages' => $relatedPackages,
        ];

        return view('pages/destination_detail', $data);
    }
}
