<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Tour Packages Banner -->
<section class="page-banner">
  <div class="container page-banner-content">
    <span class="section-tag accent" style="background: rgba(227, 100, 20, 0.2); color: #ffedd5;">
      <i class="ph-bold ph-suitcase-rolling"></i> Curated Expeditions
    </span>
    <h1>Bespoke Tour Packages</h1>
    <p>Every itinerary is masterfully crafted with 5-star boutique accommodations, private local guides, culinary tastings, and all ground logistics seamlessly arranged.</p>
  </div>
</section>

<!-- Filter Tabs & Packages Grid -->
<section style="padding: 60px 0 90px;">
  <div class="container">

    <!-- Category Filter Tabs -->
    <div class="filter-tabs">
      <a href="<?= base_url('packages?category=all') ?>" class="filter-tab-btn <?= ($current_category ?? 'all') === 'all' ? 'active' : '' ?>">
        All Packages
      </a>
      <a href="<?= base_url('packages?category=luxury') ?>" class="filter-tab-btn <?= ($current_category ?? '') === 'luxury' ? 'active' : '' ?>">
        ✨ Luxury Escapes
      </a>
      <a href="<?= base_url('packages?category=adventure') ?>" class="filter-tab-btn <?= ($current_category ?? '') === 'adventure' ? 'active' : '' ?>">
        🧗 Active Adventure
      </a>
      <a href="<?= base_url('packages?category=cultural') ?>" class="filter-tab-btn <?= ($current_category ?? '') === 'cultural' ? 'active' : '' ?>">
        🏛️ Cultural Immersion
      </a>
      <a href="<?= base_url('packages?category=honeymoon') ?>" class="filter-tab-btn <?= ($current_category ?? '') === 'honeymoon' ? 'active' : '' ?>">
        💍 Honeymoon & Romance
      </a>
    </div>

    <!-- Packages Grid -->
    <div class="packages-grid">
      <?php if (!empty($packages)): ?>
        <?php foreach ($packages as $pkg): ?>
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

              <div style="display: flex; gap: 8px; margin-bottom: 12px; font-size: 0.85rem; color: var(--text-muted);">
                <span><i class="ph ph-users"></i> <?= esc($pkg['max_group']) ?></span>
                <span>&bull;</span>
                <span style="color: #d97706; font-weight: 700;">★ <?= esc($pkg['rating']) ?> (<?= esc($pkg['reviews_count']) ?> reviews)</span>
              </div>

              <p class="package-overview"><?= esc($pkg['overview']) ?></p>

              <div class="package-inclusions">
                <h5>Signature Inclusions</h5>
                <ul>
                  <?php foreach (array_slice($pkg['inclusions'], 0, 4) as $inc): ?>
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
                  <a href="https://wa.me/15553828687?text=Hello%20WanderLuxe!%20I'm%20interested%20in%20the%20package:%20<?= urlencode($pkg['title']) ?>%20($<?= $pkg['price'] ?>).%20Please%20let%20me%20know%20availability." target="_blank" class="btn btn-whatsapp btn-sm" title="Chat on WhatsApp about this package">
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
      <?php else: ?>
        <div style="grid-column: 1 / -1; text-align: center; padding: 60px; background: #ffffff; border-radius: var(--radius-lg);">
          <h3>No packages found in this category</h3>
          <p style="color: var(--text-muted); margin: 10px 0 20px;">Try browsing our other vacation categories.</p>
          <a href="<?= base_url('packages') ?>" class="btn btn-primary">View All Packages</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Custom Package Builder Banner -->
<section style="background: linear-gradient(135deg, #0f4c5c 0%, #061922 100%); color: #ffffff; padding: 80px 0;">
  <div class="container container-narrow" style="text-align: center;">
    <span class="section-tag" style="background: rgba(255,255,255,0.15); color: #ffffff;">
      <i class="ph-bold ph-magic-wand"></i> Tailor-Made Itinerary
    </span>
    <h2 style="font-size: 2.5rem; color: #ffffff; margin: 16px 0 12px;">Desire a 100% Customized Tour?</h2>
    <p style="font-size: 1.15rem; color: rgba(255,255,255,0.85); margin-bottom: 30px;">
      Our travel designers specialize in creating bespoke journeys for solo adventurers, honeymooning couples, and multi-generational families. Tell us your interests, timeline, and budget.
    </p>

    <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
      <a href="<?= base_url('contact') ?>" class="btn btn-accent btn-lg">
        <i class="ph-bold ph-pencil-simple"></i> Customize My Itinerary
      </a>
      <a href="https://wa.me/15553828687?text=Hi%20WanderLuxe!%20I'd%20like%20to%20build%20a%20tailor-made%20custom%20tour%20package." target="_blank" class="btn btn-whatsapp btn-lg">
        <i class="ph-bold ph-whatsapp-logo"></i> Design Over WhatsApp
      </a>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
