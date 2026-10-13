<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- 1. Hero Section -->
<section class="hero">
  <div class="container hero-wrapper">
    <div class="hero-content">
      <div class="hero-badge">
        <i class="ph-bold ph-sparkle"></i> Handcrafted Worldwide Luxury Travel
      </div>
      <h1 class="hero-title">
        Discover The Unseen <br>
        <span class="highlight">Wonders of Earth</span>
      </h1>
      <p class="hero-description">
        Curated journeys designed for curious souls. Dwell in private clifftop villas, ride historic alpine trains, track the Big Five across the Serengeti, and receive 24/7 dedicated concierge care.
      </p>

      <div class="hero-cta-group">
        <a href="<?= base_url('packages') ?>" class="btn btn-accent btn-lg">
          <i class="ph-bold ph-compass"></i> Explore Tour Packages
        </a>
        <a href="https://wa.me/15553828687?text=Hi%20WanderLuxe!%20I'm%20planning%20my%20next%20vacation%20and%20would%20love%20some%20recommendations." target="_blank" class="btn btn-whatsapp btn-lg">
          <i class="ph-bold ph-whatsapp-logo"></i> Instant WhatsApp Chat
        </a>
      </div>

      <div class="hero-stats-row">
        <div class="hero-stat-item">
          <h4><span class="stat-counter" data-target="54">54</span>+</h4>
          <p>Global Destinations</p>
        </div>
        <div class="hero-stat-item">
          <h4><span class="stat-counter" data-target="12500">12,500</span>+</h4>
          <p>Satisfied Travelers</p>
        </div>
        <div class="hero-stat-item">
          <h4><span class="stat-counter" data-target="99">99</span>.4%</h4>
          <p>5-Star Reviews</p>
        </div>
      </div>
    </div>

    <!-- Visual Floating Showcase -->
    <div class="hero-visual-card">
      <div class="hero-card-main">
        <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=800&q=80" alt="Bali Luxury Villa" class="hero-card-img">
        <div class="hero-card-info">
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <span class="section-tag accent" style="margin-bottom: 0;">Featured Escape</span>
            <span style="color: #fbbf24; font-weight: 700; font-size: 0.9rem;">★ 4.95 / 5.0</span>
          </div>
          <h3 style="margin-top: 10px;">Bali & Nusa Islands Sanctuary</h3>
          <p>7 Days &bull; 5-Star Private Pool Villa &bull; Guided Temples</p>
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="font-size: 1.3rem; font-weight: 800; color: #ffffff;">From $1,499</span>
            <a href="<?= base_url('contact?destination=Bali&package=Bali+Bliss') ?>" class="btn btn-outline-white btn-sm">Inquire Now</a>
          </div>
        </div>
      </div>

      <div class="hero-floating-pill">
        <div style="width: 42px; height: 42px; border-radius: 50%; background: var(--whatsapp-light); color: var(--whatsapp-dark); display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
          <i class="ph-bold ph-whatsapp-logo"></i>
        </div>
        <div>
          <h5 style="font-size: 0.9rem; margin-bottom: 2px;">Live WhatsApp Support</h5>
          <p style="font-size: 0.78rem; color: var(--text-muted); margin: 0;">Response time: ~3 mins</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2. Quick Search & Trip Finder Filter Bar -->
<section class="container search-bar-section">
  <div class="search-bar-box">
    <form action="<?= base_url('destinations') ?>" method="get" class="search-form">
      <div class="search-field">
        <label><i class="ph ph-map-pin"></i> Where To?</label>
        <select name="category">
          <option value="all">All Destinations</option>
          <option value="tropical">Tropical & Islands (Bali, etc)</option>
          <option value="alpine">Alpine & Mountains (Swiss Alps, Banff)</option>
          <option value="cultural">Historic & Cultural (Kyoto, Turkey)</option>
          <option value="safari">Wildlife & Safari (Serengeti)</option>
          <option value="coastal">Coastal & Romance (Santorini, Amalfi)</option>
        </select>
      </div>

      <div class="search-field">
        <label><i class="ph ph-calendar"></i> Travel Season</label>
        <select name="season">
          <option value="any">Any Season</option>
          <option value="spring">Spring (Mar - May)</option>
          <option value="summer">Summer (Jun - Aug)</option>
          <option value="autumn">Autumn (Sep - Nov)</option>
          <option value="winter">Winter Wonderland (Dec - Feb)</option>
        </select>
      </div>

      <div class="search-field">
        <label><i class="ph ph-users"></i> Travelers</label>
        <select name="guests">
          <option value="2">2 Guests (Couple / Duo)</option>
          <option value="1">Solo Explorer</option>
          <option value="4">Family (3 - 5 Guests)</option>
          <option value="group">Private Small Group (6+)</option>
        </select>
      </div>

      <div class="search-field">
        <label><i class="ph ph-wallet"></i> Travel Style</label>
        <select name="style">
          <option value="luxury">Luxury & Boutique</option>
          <option value="adventure">Active Adventure</option>
          <option value="honeymoon">Honeymoon & Romance</option>
          <option value="cultural">Heritage & Immersion</option>
        </select>
      </div>

      <div>
        <button type="submit" class="btn btn-primary" style="height: 48px; width: 100%;">
          <i class="ph-bold ph-magnifying-glass"></i> Find Trips
        </button>
      </div>
    </form>
  </div>
</section>

<!-- 3. Featured Destinations Showcase -->
<section style="padding: 20px 0 80px;">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="ph-bold ph-globe-hemisphere-west"></i> Curated Destinations</span>
      <h2>Iconic Sanctuaries Across The Globe</h2>
      <p>From the snowcapped crowns of Switzerland to the idyllic sun-drenched calderas of Greece, experience timeless luxury tailored to you.</p>
    </div>

    <div class="destinations-grid">
      <?php foreach ($featured_destinations as $dest): ?>
        <div class="destination-card" data-category="<?= esc($dest['category']) ?>">
          <div class="destination-img-box">
            <img src="<?= esc($dest['image']) ?>" alt="<?= esc($dest['title']) ?>" class="destination-img">
            <span class="destination-badge"><?= esc($dest['badge'] ?? $dest['tag']) ?></span>
            <div class="destination-rating-pill">
              <span class="star">★</span>
              <span><?= esc($dest['rating']) ?></span>
            </div>
          </div>

          <div class="destination-body">
            <div class="destination-meta">
              <span><i class="ph ph-map-pin"></i> <?= esc($dest['country']) ?></span>
              <span>&bull;</span>
              <span><i class="ph ph-clock"></i> <?= esc($dest['duration']) ?></span>
            </div>

            <h3 class="destination-title">
              <a href="<?= base_url('destinations/' . $dest['slug']) ?>"><?= esc($dest['title']) ?></a>
            </h3>

            <p class="destination-overview"><?= esc($dest['overview']) ?></p>

            <ul class="destination-highlights-list">
              <?php foreach (array_slice($dest['highlights'], 0, 2) as $hl): ?>
                <li><span class="check">✓</span> <?= esc($hl) ?></li>
              <?php endforeach; ?>
            </ul>

            <div class="destination-footer">
              <div class="destination-price-tag">
                <span class="label">Starting From</span>
                <div class="price"><?= esc($dest['currency'] ?? '$') ?><?= number_format($dest['price_from']) ?></div>
              </div>
              <div class="destination-actions">
                <a href="https://wa.me/15553828687?text=Hi%20WanderLuxe!%20I'd%20like%20to%20know%20more%20about%20traveling%20to%20<?= urlencode($dest['title']) ?>." target="_blank" class="btn-icon-wa" title="WhatsApp inquiry about <?= esc($dest['title']) ?>">
                  <i class="ph-bold ph-whatsapp-logo"></i>
                </a>
                <a href="<?= base_url('destinations/' . $dest['slug']) ?>" class="btn btn-outline-primary btn-sm">
                  View Details
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 40px;">
      <a href="<?= base_url('destinations') ?>" class="btn btn-primary btn-lg">
        Explore All Destinations <i class="ph-bold ph-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<!-- 4. Featured Tour Packages -->
<section style="padding: 80px 0; background-color: #f1f5f9;">
  <div class="container">
    <div class="section-header">
      <span class="section-tag accent"><i class="ph-bold ph-tag"></i> Ready-To-Book Itineraries</span>
      <h2>Handcrafted Tour Packages</h2>
      <p>Every itinerary is vetted by our certified local travel specialists, with 5-star accommodations, chauffeur transfers, and exclusive private entry.</p>
    </div>

    <div class="packages-grid">
      <?php foreach ($featured_packages as $pkg): ?>
        <div class="package-card">
          <div class="package-img-box">
            <img src="<?= esc($pkg['image']) ?>" alt="<?= esc($pkg['title']) ?>" class="package-img">
            <span class="package-badge"><?= esc($pkg['badge']) ?></span>
            <span class="package-duration-tag"><i class="ph ph-clock"></i> <?= esc($pkg['duration']) ?></span>
          </div>

          <div class="package-body">
            <div class="package-destination-tag">
              <i class="ph ph-map-pin"></i> <?= esc($pkg['destination']) ?>
            </div>

            <h3 class="package-title">
              <a href="<?= base_url('packages/' . $pkg['slug']) ?>"><?= esc($pkg['title']) ?></a>
            </h3>

            <p class="package-overview"><?= esc($pkg['overview']) ?></p>

            <div class="package-inclusions">
              <h5>Key Inclusions</h5>
              <ul>
                <?php foreach (array_slice($pkg['inclusions'], 0, 3) as $inc): ?>
                  <li><span class="check">✓</span> <?= esc($inc) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>

            <div class="package-footer">
              <div class="package-price-box">
                <span class="orig-price">$<?= number_format($pkg['original_price']) ?></span>
                <div class="current-price">$<?= number_format($pkg['price']) ?> <span>/ person</span></div>
              </div>

              <div class="package-cta-group">
                <a href="https://wa.me/15553828687?text=Hello%20WanderLuxe!%20I'm%20interested%20in%20booking%20the%20package:%20<?= urlencode($pkg['title']) ?>%20($<?= $pkg['price'] ?>).%20Please%20share%20details." target="_blank" class="btn btn-whatsapp btn-sm" title="WhatsApp Booking">
                  <i class="ph-bold ph-whatsapp-logo"></i> WhatsApp
                </a>
                <a href="<?= base_url('contact?destination=' . urlencode($pkg['destination']) . '&package=' . urlencode($pkg['title'])) ?>" class="btn btn-accent btn-sm">
                  Book Now
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 40px;">
      <a href="<?= base_url('packages') ?>" class="btn btn-primary btn-lg">
        Browse All Packages <i class="ph-bold ph-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<!-- 5. Why Choose WanderLuxe Section -->
<section style="padding: 90px 0;">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="ph-bold ph-shield-check"></i> Uncompromising Standard</span>
      <h2>Why Travelers Entrust Their Journeys To Us</h2>
      <p>We blend intimate local access with flawless VIP execution, ensuring your precious time away is completely transcendent.</p>
    </div>

    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon-box">
          <i class="ph-bold ph-buildings"></i>
        </div>
        <h3>Handpicked Luxury Stays</h3>
        <p>From private cliffside villas in Bali to heritage Swiss chalets, every property is inspected for luxury, intimacy, and supreme hospitality.</p>
      </div>

      <div class="feature-card">
        <div class="feature-icon-box accent-icon">
          <i class="ph-bold ph-user-circle-gear"></i>
        </div>
        <h3>100% Tailored Itineraries</h3>
        <p>No cookie-cutter itineraries. Every route is sculpted around your pace, culinary affinities, and desired level of adrenaline or relaxation.</p>
      </div>

      <div class="feature-card">
        <div class="feature-icon-box wa-icon">
          <i class="ph-bold ph-whatsapp-logo"></i>
        </div>
        <h3>Instant 24/7 WhatsApp Care</h3>
        <p>Have a question about a flight transfer, restaurant reservation, or weather check? Message your private concierge on WhatsApp anytime.</p>
      </div>

      <div class="feature-card">
        <div class="feature-icon-box gold-icon">
          <i class="ph-bold ph-plant"></i>
        </div>
        <h3>Certified Sustainable Tourism</h3>
        <p>We are a certified GSTC partner. Every expedition offsets 100% of carbon emissions and supports local wildlife conservation and heritage artisans.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6. Real Traveler Testimonials -->
<section style="padding: 90px 0; background: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="ph-bold ph-chat-circle-dots"></i> Traveler Stories</span>
      <h2>Loved by Sophisticated Voyagers</h2>
      <p>Read real impressions from guests who experienced WanderLuxe custom tours.</p>
    </div>

    <div class="testimonials-grid">
      <div class="testimonial-card">
        <div class="testimonial-stars">★★★★★</div>
        <p class="testimonial-quote">"Our honeymoon in Santorini and the Swiss Alps was pure magic. From the private catamaran in Oia to our Glacier Express suite, every single detail was seamless. The WhatsApp concierge responded in under 2 minutes every time!"</p>
        <div class="testimonial-author">
          <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80" alt="Sarah & David" class="author-avatar">
          <div class="author-info">
            <h4>Sarah & David Reynolds</h4>
            <p>San Francisco, CA &bull; Santorini & Swiss Alps</p>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="testimonial-stars">★★★★★</div>
        <p class="testimonial-quote">"Tracking the Great Migration in Tanzania was a lifelong dream. WanderLuxe secured us an unbelievable luxury tented camp where elephants literally drank from the watering hole in front of our veranda."</p>
        <div class="testimonial-author">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80" alt="Dr. Michael Vance" class="author-avatar">
          <div class="author-info">
            <h4>Dr. Michael Vance</h4>
            <p>London, UK &bull; Serengeti Big Five Safari</p>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="testimonial-stars">★★★★★</div>
        <p class="testimonial-quote">"Traveling to Kyoto with private access to ancient Zen gardens and a traditional tea ceremony with a Geisha master was something money usually cannot buy. Flawless organization from arrival to departure."</p>
        <div class="testimonial-author">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=150&q=80" alt="Caroline Dubois" class="author-avatar">
          <div class="author-info">
            <h4>Caroline Dubois</h4>
            <p>Geneva, Switzerland &bull; Imperial Japan Tour</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 7. Bottom Call to Action Banner -->
<section style="background: linear-gradient(135deg, #09202a 0%, #0f4c5c 100%); color: #ffffff; padding: 80px 0; text-align: center;">
  <div class="container container-narrow">
    <span class="section-tag whatsapp-tag" style="background: rgba(37, 211, 102, 0.2); color: #4ade80;">
      <i class="ph-bold ph-whatsapp-logo"></i> Instant Trip Planning
    </span>
    <h2 style="font-size: 2.8rem; color: #ffffff; margin: 16px 0 14px;">Ready To Embark On Your Next Expedition?</h2>
    <p style="font-size: 1.15rem; color: rgba(255, 255, 255, 0.85); margin-bottom: 34px;">
      Fill out our quick booking inquiry or chat directly with our senior travel specialists on WhatsApp. We design your personalized proposal within 24 hours.
    </p>

    <div style="display: flex; justify-content: center; align-items: center; gap: 16px; flex-wrap: wrap;">
      <a href="<?= base_url('contact') ?>" class="btn btn-accent btn-lg">
        <i class="ph-bold ph-paper-plane-tilt"></i> Submit Trip Inquiry
      </a>
      <a href="https://wa.me/15553828687?text=Hello%20WanderLuxe!%20I'm%20ready%20to%20plan%20my%20trip." target="_blank" class="btn btn-whatsapp btn-lg">
        <i class="ph-bold ph-whatsapp-logo"></i> Chat On WhatsApp (+1 555-382-8687)
      </a>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
