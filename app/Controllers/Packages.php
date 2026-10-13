<?php

namespace App\Controllers;

use App\Models\PackageModel;

class Packages extends BaseController
{
    public function index(): string
    {
        $pkgModel = new PackageModel();
        $category = $this->request->getGet('category') ?? 'all';

        $packages = $pkgModel->getAll($category);

        $data = [
            'title' => 'Curated Tour Packages & Itineraries - WanderLuxe',
            'meta_description' => 'Browse our award-winning luxury tour packages. 5-star accommodations, private chauffeurs, English-speaking guides, and bespoke adventures.',
            'active_nav' => 'packages',
            'packages' => $packages,
            'current_category' => $category,
        ];

        return view('pages/packages', $data);
    }

    public function detail(string $slug): string
    {
        $pkgModel = new PackageModel();
        $package = $pkgModel->getBySlug($slug);

        if (!$package) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Package '$slug' not found.");
        }

        $data = [
            'title' => $package['title'] . ' - WanderLuxe Tour Package',
            'meta_description' => $package['overview'],
            'active_nav' => 'packages',
            'package' => $package,
        ];

        return view('pages/package_detail', $data);
    }
}
