<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Page Hero Banner -->
<section class="page-banner">
  <div class="container page-banner-content">
    <span class="section-tag" style="background: rgba(255,255,255,0.15); color: #ffffff;">
      <i class="ph-bold ph-compass"></i> Discover the World
    </span>
    <h1>Extraordinary Destinations</h1>
    <p>From sacred jungle sanctuaries in Southeast Asia to towering snow-capped peaks in the Alps, find the landscape that moves you.</p>
  </div>
</section>

<!-- Filter Tabs & Destination Grid -->
<section style="padding: 60px 0 90px;">
  <div class="container">
    
    <!-- Category Filter Tabs -->
    <div class="filter-tabs">
      <button type="button" class="filter-tab-btn <?= ($current_category ?? 'all') === 'all' ? 'active' : '' ?>" data-filter-category="all">
        All Destinations
      </button>
      <button type="button" class="filter-tab-btn <?= ($current_category ?? '') === 'tropical' ? 'active' : '' ?>" data-filter-category="tropical">
        🌴 Tropical & Island
      </button>
      <button type="button" class="filter-tab-btn <?= ($current_category ?? '') === 'alpine' ? 'active' : '' ?>" data-filter-category="alpine">
        🏔️ Alpine & Mountains
      </button>
      <button type="button" class="filter-tab-btn <?= ($current_category ?? '') === 'cultural' ? 'active' : '' ?>" data-filter-category="cultural">
        ⛩️ Cultural & Historic
      </button>
      <button type="button" class="filter-tab-btn <?= ($current_category ?? '') === 'safari' ? 'active' : '' ?>" data-filter-category="safari">
        🦁 Safari & Wildlife
      </button>
      <button type="button" class="filter-tab-btn <?= ($current_category ?? '') === 'coastal' ? 'active' : '' ?>" data-filter-category="coastal">
        ⛵ Coastal & Romance
      </button>
    </div>

    <!-- Search Query Notice (if any) -->
    <?php if (!empty($search_query)): ?>
      <div style="margin-bottom: 24px; font-size: 1rem; color: var(--text-muted);">
        Showing search results for: <strong>"<?= esc($search_query) ?>"</strong> 
        <a href="<?= base_url('destinations') ?>" style="color: var(--accent); margin-left: 8px;">Clear search</a>
      </div>
    <?php endif; ?>

    <!-- Destinations Grid -->
    <div class="destinations-grid">
      <?php if (!empty($destinations)): ?>
        <?php foreach ($destinations as $dest): ?>
          <div class="destination-card" data-category="<?= esc($dest['category']) ?>">
            <div class="destination-img-box">
              <img src="<?= esc($dest['image']) ?>" alt="<?= esc($dest['title']) ?>" class="destination-img">
              <span class="destination-badge"><?= esc($dest['badge'] ?? $dest['tag']) ?></span>
              <div class="destination-rating-pill">
                <span class="star">★</span>
                <span><?= esc($dest['rating']) ?></span>
                <span style="color: var(--text-muted); font-size: 0.72rem;">(<?= esc($dest['reviews_count']) ?>)</span>
              </div>
            </div>

            <div class="destination-body">
              <div class="destination-meta">
                <span><i class="ph ph-map-pin"></i> <?= esc($dest['country']) ?></span>
                <span>&bull;</span>
                <span><i class="ph ph-sun"></i> <?= esc($dest['weather']) ?></span>
              </div>

              <h3 class="destination-title">
                <a href="<?= base_url('destinations/' . $dest['slug']) ?>"><?= esc($dest['title']) ?></a>
              </h3>

              <p class="destination-overview"><?= esc($dest['overview']) ?></p>

              <div style="background: #f8fafc; padding: 8px 12px; border-radius: var(--radius-sm); margin-bottom: 14px; font-size: 0.8rem; color: var(--text-muted);">
                <i class="ph-bold ph-calendar"></i> <strong>Best Season:</strong> <?= esc($dest['best_season']) ?>
              </div>

              <ul class="destination-highlights-list">
                <?php foreach (array_slice($dest['highlights'], 0, 3) as $hl): ?>
                  <li><span class="check">✓</span> <?= esc($hl) ?></li>
                <?php endforeach; ?>
              </ul>

              <div class="destination-footer">
                <div class="destination-price-tag">
                  <span class="label">Starting From</span>
                  <div class="price"><?= esc($dest['currency'] ?? '$') ?><?= number_format($dest['price_from']) ?></div>
                </div>
                <div class="destination-actions">
                  <a href="https://wa.me/15553828687?text=Hi%20WanderLuxe!%20I'd%20like%20to%20plan%20a%20trip%20to%20<?= urlencode($dest['title']) ?>.%20Could%20you%20please%20share%20details%20and%20rates%3F" target="_blank" class="btn-icon-wa" title="WhatsApp inquiry about <?= esc($dest['title']) ?>">
                    <i class="ph-bold ph-whatsapp-logo"></i>
                  </a>
                  <a href="<?= base_url('destinations/' . $dest['slug']) ?>" class="btn btn-outline-primary btn-sm">
                    Explore Guide
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <div style="grid-column: 1 / -1; text-align: center; padding: 60px; background: #ffffff; border-radius: var(--radius-lg);">
          <h3>No destinations found</h3>
          <p style="color: var(--text-muted); margin: 10px 0 20px;">Try adjusting your search criteria or category filter.</p>
          <a href="<?= base_url('destinations') ?>" class="btn btn-primary">View All Destinations</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Custom Itinerary Consultation CTA -->
<section style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); padding: 70px 0; border-top: 1px solid var(--border-light);">
  <div class="container container-narrow" style="text-align: center;">
    <span class="section-tag accent"><i class="ph-bold ph-sparkle"></i> Bespoke Travel Design</span>
    <h2 style="font-size: 2.3rem; margin: 12px 0;">Looking for a Country Not Listed Here?</h2>
    <p style="color: var(--text-muted); font-size: 1.05rem; margin-bottom: 28px;">
      Our senior concierge team has orchestrated private expeditions in over 70 countries worldwide. Tell us your dream travel wish-list and we will design a custom itinerary with private guides.
    </p>
    <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
      <a href="<?= base_url('contact') ?>" class="btn btn-primary">
        <i class="ph-bold ph-pencil-simple"></i> Request Custom Itinerary
      </a>
      <a href="https://wa.me/15553828687?text=Hi%20WanderLuxe%20Concierge!%20I'm%20looking%20for%20a%20custom%20destination%20itinerary." target="_blank" class="btn btn-whatsapp">
        <i class="ph-bold ph-whatsapp-logo"></i> Consult via WhatsApp
      </a>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
