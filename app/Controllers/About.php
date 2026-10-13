<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'About WanderLuxe - Our Story, Philosophy & Certified Guides',
            'meta_description' => 'Learn how WanderLuxe designs authentic, life-enriching travel experiences. 15+ years of bespoke travel excellence, certified guides, and sustainable tourism.',
            'active_nav' => 'about',
            'team' => [
                [
                    'name' => 'Elena Rostova',
                    'role' => 'Founder & Chief Expedition Director',
                    'experience' => '18 Years Experience',
                    'bio' => 'Former National Geographic contributing photographer turned expedition designer, dedicated to transformative cultural journeys.',
                    'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80',
                ],
                [
                    'name' => 'Marcus Vance',
                    'role' => 'Lead Alpine & Wilderness Guide',
                    'experience' => 'UIAGM Certified Mountain Guide',
                    'bio' => 'Summited 40+ peaks worldwide. Expert in alpine logistics, safety protocols, and scenic trail navigation.',
                    'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=600&q=80',
                ],
                [
                    'name' => 'Amina Al-Mansoor',
                    'role' => 'Senior Luxury Safari Specialist',
                    'experience' => 'Wildlife Biologist & Conservationist',
                    'bio' => 'Born in Tanzania, Amina oversees ethical safari routes and luxury bush encounters with indigenous tribal leaders.',
                    'image' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=600&q=80',
                ],
                [
                    'name' => 'Kenji Takahashi',
                    'role' => 'East Asia Cultural Concierge',
                    'experience' => 'Historian & Kaiseki Gastronome',
                    'bio' => 'Curates private access to centuries-old Kyoto Zen monasteries, private tea masters, and artisan master workshops.',
                    'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=600&q=80',
                ]
            ],
            'milestones' => [
                ['year' => '2011', 'title' => 'Founded in Zurich & London', 'desc' => 'Started with 4 bespoke European alpine routes.'],
                ['year' => '2015', 'title' => 'Expansion to Asia & Africa', 'desc' => 'Launched Bali, Japan and Tanzania luxury safari expeditions.'],
                ['year' => '2019', 'title' => 'Global Sustainable Tourism Award', 'desc' => 'Certified 100% carbon-neutral private expedition programs.'],
                ['year' => '2024', 'title' => '12,000+ Happy Explorers', 'desc' => 'Awarded World Travel Awards Best Luxury Tour Operator.'],
            ]
        ];

        return view('pages/about', $data);
    }
}
