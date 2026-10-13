<?php

namespace App\Models;

use CodeIgniter\Model;

class DestinationModel extends Model
{
    protected array $destinations = [
        [
            'id' => 1,
            'slug' => 'bali-indonesia',
            'title' => 'Bali & Nusa Islands',
            'country' => 'Indonesia',
            'region' => 'Southeast Asia',
            'category' => 'tropical',
            'tag' => 'Tropical Paradise',
            'rating' => 4.9,
            'reviews_count' => 380,
            'duration' => '7 - 10 Days',
            'price_from' => 1299,
            'currency' => '$',
            'badge' => 'Most Popular',
            'best_season' => 'April to October',
            'weather' => '27°C - 31°C Sunny',
            'overview' => 'Immerse yourself in lush emerald rice terraces, sacred Hindu water temples, pristine turquoise beaches, and luxurious private cliffside villas.',
            'highlights' => [
                'Ubud Sacred Monkey Forest & Rice Terraces',
                'Nusa Penida Kelingking T-Rex Cliff',
                'Sunset at Uluwatu Temple & Kecak Dance',
                'Private Floating Breakfast & Spa Retreat'
            ],
            'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=1200&q=80',
            'featured' => true,
        ],
        [
            'id' => 2,
            'slug' => 'swiss-alps',
            'title' => 'Swiss Alps & Zermatt',
            'country' => 'Switzerland',
            'region' => 'Western Europe',
            'category' => 'alpine',
            'tag' => 'Alpine Wonder',
            'rating' => 4.95,
            'reviews_count' => 290,
            'duration' => '8 - 12 Days',
            'price_from' => 2450,
            'currency' => '$',
            'badge' => 'Bucket List',
            'best_season' => 'June to Sept & Dec to March',
            'weather' => '18°C Summer / -2°C Winter',
            'overview' => 'Marvel at the dramatic pyramid peak of the Matterhorn, ride the panoramic Glacier Express, and hike along crystal alpine lakes in St. Moritz.',
            'highlights' => [
                'Matterhorn Glacier Paradise 3,883m',
                'Glacier Express Scenic Train Journey',
                'Lake Lucerne Private Yacht Cruise',
                'Traditional Swiss Fondue Tasting & Luxury Chalets'
            ],
            'image' => 'https://images.unsplash.com/photo-1530122037265-a5f1f91d3b99?auto=format&fit=crop&w=1200&q=80',
            'featured' => true,
        ],
        [
            'id' => 3,
            'slug' => 'kyoto-japan',
            'title' => 'Kyoto & Historic Japan',
            'country' => 'Japan',
            'region' => 'East Asia',
            'category' => 'cultural',
            'tag' => 'Cultural Heritage',
            'rating' => 4.92,
            'reviews_count' => 415,
            'duration' => '8 - 10 Days',
            'price_from' => 2190,
            'currency' => '$',
            'badge' => 'Top Rated',
            'best_season' => 'March to May & Oct to Nov',
            'weather' => '16°C - 22°C Mild',
            'overview' => 'Walk through thousand vermilion Torii gates at Fushimi Inari, experience authentic Zen meditation, bamboo groves of Arashiyama, and kaiseki cuisine.',
            'highlights' => [
                'Fushimi Inari Shrine & Golden Pavilion',
                'Sagano Romantic Bamboo Train & Groves',
                'Exclusive Traditional Tea Ceremony with Geisha',
                'Bullet Train Ride to Mount Fuji & Hakone'
            ],
            'image' => 'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&w=1200&q=80',
            'featured' => true,
        ],
        [
            'id' => 4,
            'slug' => 'santorini-greece',
            'title' => 'Santorini & Cyclades',
            'country' => 'Greece',
            'region' => 'Southern Europe',
            'category' => 'coastal',
            'tag' => 'Romantic Escape',
            'rating' => 4.88,
            'reviews_count' => 340,
            'duration' => '6 - 8 Days',
            'price_from' => 1750,
            'currency' => '$',
            'badge' => 'Romantic Pick',
            'best_season' => 'May to October',
            'weather' => '25°C - 29°C Sunny',
            'overview' => 'Gaze at world-famous caldera sunsets in Oia, unwind in whitewashed cave suites with private plunge pools, and sail the Aegean in a private catamaran.',
            'highlights' => [
                'Oia Castle Sunset Viewing',
                'Private Catamaran Cruise with Volcanic Hot Springs',
                'Red Beach & Black Sand Perissa Shorelines',
                'Assyrtiko Wine Tasting at Cliffside Vineyards'
            ],
            'image' => 'https://images.unsplash.com/photo-1570077188670-e3a8d69ac5ff?auto=format&fit=crop&w=1200&q=80',
            'featured' => true,
        ],
        [
            'id' => 5,
            'slug' => 'serengeti-tanzania',
            'title' => 'Serengeti & Ngorongoro',
            'country' => 'Tanzania',
            'region' => 'East Africa',
            'category' => 'safari',
            'tag' => 'Wildlife & Safari',
            'rating' => 4.97,
            'reviews_count' => 180,
            'duration' => '7 - 10 Days',
            'price_from' => 3100,
            'currency' => '$',
            'badge' => 'Eco-Luxury',
            'best_season' => 'June to October & Jan to Feb',
            'weather' => '22°C - 28°C Warm',
            'overview' => 'Witness the world-renowned Great Wildebeest Migration, track the Big Five with expert Maasai trackers, and stay in ultra-exclusive luxury tented safari camps.',
            'highlights' => [
                'Great Migration River Crossing Tracking',
                'Sunrise Hot Air Balloon Flight over Serengeti Plains',
                'Ngorongoro Crater Floor Safari Game Drive',
                'Authentic Maasai Cultural Community Encounter'
            ],
            'image' => 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1200&q=80',
            'featured' => true,
        ],
        [
            'id' => 6,
            'slug' => 'amalfi-coast-italy',
            'title' => 'Amalfi Coast & Capri',
            'country' => 'Italy',
            'region' => 'Southern Europe',
            'category' => 'coastal',
            'tag' => 'Mediterranean Glamour',
            'rating' => 4.89,
            'reviews_count' => 265,
            'duration' => '5 - 7 Days',
            'price_from' => 1980,
            'currency' => '$',
            'badge' => 'Signature Choice',
            'best_season' => 'May to September',
            'weather' => '24°C - 30°C Sunny',
            'overview' => 'Perched pastel villas tumbling down sheer cliffs into the cobalt sea, fragrant lemon orchards, Michelin-starred seaside dining, and private Riva boat charters to Capri.',
            'highlights' => [
                'Positano Cliffside Exploration & Beach Clubs',
                'Blue Grotto Private Wooden Boat Excursion in Capri',
                'Ravello Villa Rufolo Panoramic Gardens',
                'Artisan Limoncello & Fresh Handmade Pasta Workshop'
            ],
            'image' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=1200&q=80',
            'featured' => false,
        ],
        [
            'id' => 7,
            'slug' => 'banff-canada',
            'title' => 'Banff & Canadian Rockies',
            'country' => 'Canada',
            'region' => 'North America',
            'category' => 'alpine',
            'tag' => 'Mountain Wilderness',
            'rating' => 4.93,
            'reviews_count' => 210,
            'duration' => '7 - 9 Days',
            'price_from' => 2200,
            'currency' => '$',
            'badge' => 'Adventure Pick',
            'best_season' => 'June to September & Dec to April',
            'weather' => '19°C Summer / -5°C Winter',
            'overview' => 'Gaze at the surreal turquoise glow of Lake Louise and Moraine Lake, traverse the Icefields Parkway, spot wild grizzly bears, and relax in natural thermal hot springs.',
            'highlights' => [
                'Canoeing on Glacial Emerald Waters of Lake Louise',
                'Columbia Icefield Columbia Ice Explorer on Ancient Glaciers',
                'Banff Gondola to Sulphur Mountain Summit',
                'Stay at Iconic Fairmont Chateau Lake Louise'
            ],
            'image' => 'https://images.unsplash.com/photo-1503614472-8c93d56e92ce?auto=format&fit=crop&w=1200&q=80',
            'featured' => false,
        ],
        [
            'id' => 8,
            'slug' => 'cappadocia-turkey',
            'title' => 'Cappadocia & Fairy Chimneys',
            'country' => 'Turkey',
            'region' => 'Eurasia',
            'category' => 'cultural',
            'tag' => 'Mythic Landscape',
            'rating' => 4.91,
            'reviews_count' => 310,
            'duration' => '4 - 6 Days',
            'price_from' => 1150,
            'currency' => '$',
            'badge' => 'Iconic View',
            'best_season' => 'April to June & Sept to Nov',
            'weather' => '20°C - 26°C Clear',
            'overview' => 'Wake up before dawn to hundreds of glowing hot air balloons ascending over honeycombed hills, explore ancient underground cities, and sleep in historic cave hotels.',
            'highlights' => [
                'Sunrise Hot Air Balloon Flight over Rose Valley',
                'Kaymakli Underground City Exploration',
                'Goreme Open-Air Museum Cave Frescoes',
                'Sunset Horseback Trail Riding through Love Valley'
            ],
            'image' => 'https://images.unsplash.com/photo-1570939274717-7eda259b50ed?auto=format&fit=crop&w=1200&q=80',
            'featured' => false,
        ]
    ];

    public function getAll(?string $category = null): array
    {
        if ($category && $category !== 'all') {
            return array_values(array_filter($this->destinations, function ($d) use ($category) {
                return $d['category'] === $category;
            }));
        }
        return $this->destinations;
    }

    public function getFeatured(int $limit = 4): array
    {
        $featured = array_filter($this->destinations, function ($d) {
            return !empty($d['featured']);
        });
        return array_slice(array_values($featured), 0, $limit);
    }

    public function getBySlug(string $slug): ?array
    {
        foreach ($this->destinations as $d) {
            if ($d['slug'] === $slug) {
                return $d;
            }
        }
        return null;
    }

    public function search(string $query): array
    {
        $query = strtolower(trim($query));
        if ($query === '') {
            return $this->destinations;
        }

        return array_values(array_filter($this->destinations, function ($d) use ($query) {
            return str_contains(strtolower($d['title']), $query)
                || str_contains(strtolower($d['country']), $query)
                || str_contains(strtolower($d['region']), $query)
                || str_contains(strtolower($d['tag']), $query);
        }));
    }
}
