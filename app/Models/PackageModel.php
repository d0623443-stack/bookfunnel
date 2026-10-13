<?php

namespace App\Models;

use CodeIgniter\Model;

class PackageModel extends Model
{
    protected array $packages = [
        [
            'id' => 1,
            'slug' => 'bali-tropical-luxury-escape',
            'title' => 'Bali Bliss: Tropical Luxury & Sacred Temples',
            'destination' => 'Bali & Nusa Islands, Indonesia',
            'destination_slug' => 'bali-indonesia',
            'category' => 'luxury',
            'category_label' => 'Luxury Escape',
            'duration' => '7 Days / 6 Nights',
            'days' => 7,
            'price' => 1499,
            'original_price' => 1899,
            'rating' => 4.95,
            'reviews_count' => 142,
            'badge' => 'Best Seller',
            'max_group' => 'Small Group (Max 8)',
            'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=1200&q=80',
            'overview' => 'Experience the zenith of Balinese indulgence with private villa stays with infinity pools, sacred water purification ceremonies, speedboat excursions to Nusa Penida, and romantic sunset beach dinners.',
            'inclusions' => [
                '6 Nights in 5-Star Private Pool Villa (Ubud & Seminyak)',
                'Daily Gourmet Breakfast & 4 Chef Special Dinners',
                'Private AC Chauffeur & English Speaking Tour Guide',
                'VIP Fast-boat to Nusa Penida & Private Island Tour',
                'Traditional Balinese 90-min Herbal Spa Treatment',
                'All Temple Admissions & Sacred Sarong Attire'
            ],
            'itinerary' => [
                ['day' => 'Day 1', 'title' => 'VIP Airport Arrival & Check-in at Ubud Jungle Villa'],
                ['day' => 'Day 2', 'title' => 'Tegalalang Rice Terraces, Coffee Plantation & Tirta Empul'],
                ['day' => 'Day 3', 'title' => 'Mount Batur Sunrise Jeep Tour & Natural Hot Springs'],
                ['day' => 'Day 4', 'title' => 'Transfer to Seminyak & Sunset at Uluwatu Cliff Temple'],
                ['day' => 'Day 5', 'title' => 'Private Speedboat to Nusa Penida: Kelingking & Broken Beach'],
                ['day' => 'Day 6', 'title' => 'Leisure Beach Day, Spa Treatment & Candlelight Jimbaran Dinner'],
                ['day' => 'Day 7', 'title' => 'Souvenir Shopping & Private Chauffeur Airport Drop-off']
            ]
        ],
        [
            'id' => 2,
            'slug' => 'swiss-alps-matterhorn-panoramic',
            'title' => 'Swiss Alpine Majesty & Glacier Express',
            'destination' => 'Swiss Alps & Zermatt, Switzerland',
            'destination_slug' => 'swiss-alps',
            'category' => 'adventure',
            'category_label' => 'Scenic Adventure',
            'duration' => '8 Days / 7 Nights',
            'days' => 8,
            'price' => 2850,
            'original_price' => 3290,
            'rating' => 4.98,
            'reviews_count' => 98,
            'badge' => 'Top Rated',
            'max_group' => 'Private / Small Group',
            'image' => 'https://images.unsplash.com/photo-1530122037265-a5f1f91d3b99?auto=format&fit=crop&w=1200&q=80',
            'overview' => 'Ride through the heart of the Swiss Alps on the iconic Glacier Express panoramic train, ascend the Matterhorn Glacier Paradise cable car, and stay in boutique alpine chalets.',
            'inclusions' => [
                '7 Nights in Premier Alpine Heritage Hotels',
                '1st Class Glacier Express Excellence Class Passes',
                'Swiss Travel Pass with Unlimited Panoramic Mountain Railways',
                'Matterhorn Glacier Paradise Summit Ticket (3,883m)',
                'Traditional Swiss Cheese & Chocolate Fondue Masterclass',
                'Private English Certified Alpine Mountain Guide'
            ],
            'itinerary' => [
                ['day' => 'Day 1', 'title' => 'Arrival in Zurich & Scenic Train to Lucerne'],
                ['day' => 'Day 2', 'title' => 'Mount Pilatus Golden Roundtrip & Lake Lucerne Cruise'],
                ['day' => 'Day 3', 'title' => 'Board Glacier Express from Andermatt to Zermatt'],
                ['day' => 'Day 4', 'title' => 'Gornergrat Cogwheel Train & Matterhorn Reflection Lakes'],
                ['day' => 'Day 5', 'title' => 'Matterhorn Glacier Paradise 360° Viewing Platform & Ice Palace'],
                ['day' => 'Day 6', 'title' => 'Transfer to Interlaken & Lauterbrunnen Valley of 72 Waterfalls'],
                ['day' => 'Day 7', 'title' => 'Jungfraujoch - Top of Europe 3,454m High Alpine Wonder'],
                ['day' => 'Day 8', 'title' => 'Scenic Return to Zurich International Airport']
            ]
        ],
        [
            'id' => 3,
            'slug' => 'japan-golden-route-kyoto-tokyo',
            'title' => 'Imperial Japan: Kyoto Shrines & Tokyo Neon',
            'destination' => 'Kyoto, Tokyo & Hakone, Japan',
            'destination_slug' => 'kyoto-japan',
            'category' => 'cultural',
            'category_label' => 'Cultural Immersion',
            'duration' => '9 Days / 8 Nights',
            'days' => 9,
            'price' => 3190,
            'original_price' => 3650,
            'rating' => 4.93,
            'reviews_count' => 175,
            'badge' => 'Cultural Jewel',
            'max_group' => 'Max 10 Travelers',
            'image' => 'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&w=1200&q=80',
            'overview' => 'Immerse yourself into historic temples and neon-lit futuristic streets. Ride the Shinkansen bullet train, experience authentic Ryokan hot springs, and partake in private tea ceremonies.',
            'inclusions' => [
                '8 Nights Luxury Accommodation (inc. 2 Nights Traditional Ryokan Onsen)',
                'Unlimited 7-Day Japan Rail Pass (Green Car Ordinary/Reserved)',
                'Authentic Kaiseki Multi-Course Dinners Included',
                'Private Fushimi Inari & Arashiyama Guided Tour',
                'Mount Fuji & Lake Ashi Pirate Ship Cruise',
                'Tokyo Tsukiji Outer Market Food Tasting Tour'
            ],
            'itinerary' => [
                ['day' => 'Day 1', 'title' => 'Welcome to Tokyo & Shinjuku Neon Skyline Sunset'],
                ['day' => 'Day 2', 'title' => 'Asakusa Senso-ji, Meiji Shrine & Shibuya Crossing'],
                ['day' => 'Day 3', 'title' => 'Day Excursion to Hakone & Mt. Fuji Onsen Bath'],
                ['day' => 'Day 4', 'title' => 'Bullet Train to Ancient Capital Kyoto'],
                ['day' => 'Day 5', 'title' => 'Fushimi Inari 10,000 Torii & Kinkaku-ji Golden Pavilion'],
                ['day' => 'Day 6', 'title' => 'Arashiyama Bamboo Forest & Traditional Geisha Tea Ceremony'],
                ['day' => 'Day 7', 'title' => 'Nara Deer Park & Todai-ji Great Bronze Buddha'],
                ['day' => 'Day 8', 'title' => 'Osaka Dotonbori Street Food Odyssey'],
                ['day' => 'Day 9', 'title' => 'Sayonara Japan - Kansai / Haneda Departure']
            ]
        ],
        [
            'id' => 4,
            'slug' => 'santorini-romantic-cyclades-odyssey',
            'title' => 'Santorini Sunset Romance & Aegean Sailing',
            'destination' => 'Santorini & Mykonos, Greece',
            'destination_slug' => 'santorini-greece',
            'category' => 'honeymoon',
            'category_label' => 'Honeymoon & Romance',
            'duration' => '6 Days / 5 Nights',
            'days' => 6,
            'price' => 1890,
            'original_price' => 2250,
            'rating' => 4.96,
            'reviews_count' => 110,
            'badge' => 'Honeymoon Favorite',
            'max_group' => 'Couples / Private',
            'image' => 'https://images.unsplash.com/photo-1570077188670-e3a8d69ac5ff?auto=format&fit=crop&w=1200&q=80',
            'overview' => 'Indulge in idyllic Mediterranean romance with cliffside cave suites, five-hour sunset catamaran yachting with unlimited Greek wines, and private coastal dining.',
            'inclusions' => [
                '5 Nights in Luxury Caldera View Suite with Private Heated Jacuzzi',
                'Daily Champagne Breakfast on Your Private Veranda',
                '5-Hour Private Sunset Catamaran Sailing with BBQ & Wine',
                'Sommelier-Guided Cliffside Wine Tour & 6 Local Wine Pairings',
                'Roundtrip VIP Airport & Port Transfers in Mercedes Van',
                'Complimentary Sunset Photo Session by Professional Photographer'
            ],
            'itinerary' => [
                ['day' => 'Day 1', 'title' => 'Arrival in Thira & Champagne Welcome at Oia Cliffside Suite'],
                ['day' => 'Day 2', 'title' => 'Oia to Imerovigli Caldera Walking Trail & Cliffside Sunset'],
                ['day' => 'Day 3', 'title' => 'Private Catamaran Cruise: Red Beach, White Beach & Hot Springs'],
                ['day' => 'Day 4', 'title' => 'Ancient Akrotiri Ruins & Pyrgos Medieval Village Exploration'],
                ['day' => 'Day 5', 'title' => 'Santo Wines Sunset Tasting & 4-Course Farewell Dinner'],
                ['day' => 'Day 6', 'title' => 'Morning Espresso on the Terrace & Airport Transfer']
            ]
        ],
        [
            'id' => 5,
            'slug' => 'serengeti-big-five-safari',
            'title' => 'Serengeti & Ngorongoro: Big Five Luxury Safari',
            'destination' => 'Serengeti & Ngorongoro, Tanzania',
            'destination_slug' => 'serengeti-tanzania',
            'category' => 'adventure',
            'category_label' => 'Wildlife Safari',
            'duration' => '7 Days / 6 Nights',
            'days' => 7,
            'price' => 3450,
            'original_price' => 3990,
            'rating' => 4.99,
            'reviews_count' => 84,
            'badge' => 'Ultimate Safari',
            'max_group' => 'Max 6 in Custom 4x4',
            'image' => 'https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1200&q=80',
            'overview' => 'The ultimate African wildlife odyssey. Observe lions, leopards, rhinos, elephants, and cape buffalo up close with custom open-roof 4x4 Land Cruisers and five-star luxury tented safari camps.',
            'inclusions' => [
                '6 Nights in Luxury Safari Lodges & Glamorous Tented Camps',
                'All National Park & Ngorongoro Conservation Area Conservation Fees',
                'Unlimited Game Drives in Custom 4x4 Land Cruiser with Pop-up Roof',
                'All Gourmet Meals & Campfire Bush Sundowners with Drinks',
                'Professional Certified Tanzanian Wildlife Naturalist Guide',
                'Domestic Bush Flight between Serengeti and Arusha'
            ],
            'itinerary' => [
                ['day' => 'Day 1', 'title' => 'Arusha Arrival & Tarangire National Park Elephant Herds'],
                ['day' => 'Day 2', 'title' => 'Lake Manyara Flamingo Haven & Tree-Climbing Lions'],
                ['day' => 'Day 3', 'title' => 'Descent into Ngorongoro Crater - World’s Largest Inactive Caldera'],
                ['day' => 'Day 4', 'title' => 'Fly into Central Serengeti & Afternoon Big Cat Game Tracking'],
                ['day' => 'Day 5', 'title' => 'Full Day Serengeti Great Migration Tracking & Bush Picnic'],
                ['day' => 'Day 6', 'title' => 'Sunrise Hot Air Balloon Flight & Evening Boma Dinner'],
                ['day' => 'Day 7', 'title' => 'Scenic Bush Flight back to Kilimanjaro International Airport']
            ]
        ],
        [
            'id' => 6,
            'slug' => 'amalfi-coast-capri-private-cruise',
            'title' => 'Amalfi Coast Glamour & Private Capri Cruise',
            'destination' => 'Amalfi, Positano & Capri, Italy',
            'destination_slug' => 'amalfi-coast-italy',
            'category' => 'luxury',
            'category_label' => 'Coastal Luxury',
            'duration' => '6 Days / 5 Nights',
            'days' => 6,
            'price' => 2150,
            'original_price' => 2550,
            'rating' => 4.91,
            'reviews_count' => 129,
            'badge' => 'Classic Glamour',
            'max_group' => 'Private Tour',
            'image' => 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=1200&q=80',
            'overview' => 'Dwell in clifftop elegance overlooking azure Mediterranean waters. Sip limoncello under lemon canopies, cruise to Capri on a private speedboat, and discover picturesque Positano alleys.',
            'inclusions' => [
                '5 Nights in Luxury Clifftop Positano / Amalfi Boutique Hotel',
                'Private Riva Speedboat Charter to Capri with Blue Grotto Visit',
                'Daily Prosecco Breakfast & Michelin-Star Welcome Dinner',
                'Private Mercedes Chauffeur along the Scenic Amalfi Drive',
                'Ravello Villa Rufolo Panoramic Gardens VIP Tour',
                'Limoncello & Traditional Pizza Crafting Masterclass'
            ],
            'itinerary' => [
                ['day' => 'Day 1', 'title' => 'Naples VIP Transfer along Amalfi Coast to Positano'],
                ['day' => 'Day 2', 'title' => 'Positano Pastel Village Walks & Spiaggia Grande Beach Club'],
                ['day' => 'Day 3', 'title' => 'Private Speedboat to Capri, Faraglioni Rocks & Blue Grotto'],
                ['day' => 'Day 4', 'title' => 'Ravello Clifftop Gardens & Symphony of Fragrant Lemon Groves'],
                ['day' => 'Day 5', 'title' => 'Amalfi Cathedral, Paper Museum & Romantic Farewell Dinner'],
                ['day' => 'Day 6', 'title' => 'Scenic Morning Espresso & Transfer to Naples / Rome']
            ]
        ]
    ];

    public function getAll(?string $category = null): array
    {
        if ($category && $category !== 'all') {
            return array_values(array_filter($this->packages, function ($p) use ($category) {
                return $p['category'] === $category;
            }));
        }
        return $this->packages;
    }

    public function getFeatured(int $limit = 3): array
    {
        return array_slice($this->packages, 0, $limit);
    }

    public function getBySlug(string $slug): ?array
    {
        foreach ($this->packages as $p) {
            if ($p['slug'] === $slug) {
                return $p;
            }
        }
        return null;
    }

    public function getByDestinationSlug(string $destSlug): array
    {
        return array_values(array_filter($this->packages, function ($p) use ($destSlug) {
            return ($p['destination_slug'] ?? '') === $destSlug;
        }));
    }
}
