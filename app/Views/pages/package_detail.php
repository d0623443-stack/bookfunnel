<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Package Detail Hero -->
<section style="position: relative; background: #061922; color: #ffffff; padding: 100px 0 60px; overflow: hidden;">
  <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: url('<?= esc($package['image']) ?>') center/cover no-repeat; opacity: 0.35;"></div>
  
  <div class="container" style="position: relative; z-index: 2;">
    <div style="margin-bottom: 16px;">
      <a href="<?= base_url('packages') ?>" style="color: rgba(255,255,255,0.7); display: inline-flex; align-items: center; gap: 6px;">
        <i class="ph-bold ph-arrow-left"></i> Back to All Tour Packages
      </a>
    </div>

    <div style="display: flex; gap: 10px; margin-bottom: 14px;">
      <span class="section-tag accent" style="margin-bottom: 0;">
        <?= esc($package['category_label']) ?>
      </span>
      <span class="section-tag" style="background: rgba(255,255,255,0.15); color: #ffffff; margin-bottom: 0;">
        <?= esc($package['duration']) ?>
      </span>
    </div>

    <h1 style="font-size: 3.2rem; color: #ffffff; margin-bottom: 16px;"><?= esc($package['title']) ?></h1>
    <p style="font-size: 1.15rem; color: rgba(255,255,255,0.85); max-width: 760px; line-height: 1.6; margin-bottom: 28px;">
      <?= esc($package['overview']) ?>
    </p>

    <div style="display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
      <div>
        <span style="font-size: 0.85rem; color: rgba(255,255,255,0.7);">All-Inclusive Price</span>
        <div style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">
          $<?= number_format($package['price']) ?> <span style="font-size: 0.9rem; font-weight: 500; color: rgba(255,255,255,0.7);">/ person</span>
        </div>
      </div>

      <div style="display: flex; gap: 12px; margin-left: auto;">
        <a href="<?= base_url('contact?destination=' . urlencode($package['destination']) . '&package=' . urlencode($package['title'])) ?>" class="btn btn-accent btn-lg">
          <i class="ph-bold ph-calendar-check"></i> Book This Package
        </a>
        <a href="https://wa.me/15553828687?text=Hi%20WanderLuxe!%20I'm%20inquiring%20about%20booking%20the%20package:%20<?= urlencode($package['title']) ?>%20($<?= $package['price'] ?>).%20Please%20share%20booking%20steps." target="_blank" class="btn btn-whatsapp btn-lg">
          <i class="ph-bold ph-whatsapp-logo"></i> WhatsApp Inquiry
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Package Detail Itinerary & Inclusions -->
<section style="padding: 70px 0;">
  <div class="container">
    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px;">
      
      <!-- Left Column: Day-by-Day Itinerary & Inclusions -->
      <div>
        <!-- Inclusions Box -->
        <div style="background: #ffffff; border-radius: var(--radius-lg); border: 1px solid var(--border-light); padding: 30px; margin-bottom: 40px; box-shadow: var(--shadow-sm);">
          <h2 style="font-size: 1.6rem; margin-bottom: 18px;">What's Included in This Package</h2>
          <div style="display: grid; grid-template-columns: 1fr; gap: 12px;">
            <?php foreach ($package['inclusions'] as $inc): ?>
              <div style="display: flex; align-items: center; gap: 12px; font-size: 0.98rem;">
                <span style="color: #10b981; font-weight: 800; font-size: 1.1rem;">✓</span>
                <span><?= esc($inc) ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Day-by-Day Itinerary -->
        <h2 style="font-size: 2rem; margin-bottom: 24px;">Day-by-Day Itinerary</h2>
        <div style="display: flex; flex-direction: column; gap: 18px; margin-bottom: 40px;">
          <?php foreach ($package['itinerary'] as $day): ?>
            <div style="background: #ffffff; border-radius: var(--radius-md); border: 1px solid var(--border-light); padding: 22px; display: flex; gap: 20px; box-shadow: var(--shadow-sm);">
              <div style="background: var(--primary-subtle); color: var(--primary); font-weight: 800; font-size: 0.95rem; padding: 8px 16px; border-radius: var(--radius-sm); height: fit-content; white-space: nowrap;">
                <?= esc($day['day']) ?>
              </div>
              <div>
                <h4 style="font-size: 1.15rem; margin-bottom: 6px;"><?= esc($day['title']) ?></h4>
                <p style="color: var(--text-muted); font-size: 0.92rem; margin: 0;">
                  Personal private guide and luxury transportation provided throughout the day. Meals and private entry access arranged by your dedicated expedition concierge.
                </p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right Column: Quick Booking Card -->
      <div>
        <div style="background: #ffffff; border-radius: var(--radius-lg); border: 1px solid var(--border-light); padding: 30px; box-shadow: var(--shadow-md); position: sticky; top: 100px;">
          <h3 style="font-size: 1.4rem; margin-bottom: 16px;">Reserve Your Spot</h3>

          <div style="display: flex; flex-direction: column; gap: 14px; margin-bottom: 24px;">
            <div style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 8px;">
              <span style="color: var(--text-muted);">Duration:</span>
              <strong><?= esc($package['duration']) ?></strong>
            </div>
            <div style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 8px;">
              <span style="color: var(--text-muted);">Group Size:</span>
              <strong><?= esc($package['max_group']) ?></strong>
            </div>
            <div style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 8px;">
              <span style="color: var(--text-muted);">Rating:</span>
              <strong style="color: #d97706;">★ <?= esc($package['rating']) ?> / 5.0</strong>
            </div>
            <div style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 8px;">
              <span style="color: var(--text-muted);">Price per Guest:</span>
              <strong style="font-size: 1.25rem; color: var(--primary);">$<?= number_format($package['price']) ?></strong>
            </div>
          </div>

          <div style="display: flex; flex-direction: column; gap: 12px;">
            <a href="<?= base_url('contact?destination=' . urlencode($package['destination']) . '&package=' . urlencode($package['title'])) ?>" class="btn btn-accent" style="width: 100%;">
              <i class="ph-bold ph-calendar-plus"></i> Submit Booking Request
            </a>
            <a href="https://wa.me/15553828687?text=Hello%20WanderLuxe!%20I%20want%20to%20book%20the%20package:%20<?= urlencode($package['title']) ?>.%20Please%20guide%20me." target="_blank" class="btn btn-whatsapp" style="width: 100%;">
              <i class="ph-bold ph-whatsapp-logo"></i> Instant WhatsApp Booking
            </a>
          </div>

          <div style="margin-top: 20px; font-size: 0.8rem; color: var(--text-muted); text-align: center;">
            <i class="ph-bold ph-shield-check" style="color: #10b981;"></i> 100% Flexible Cancellation & Refund Guarantee
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?= $this->endSection() ?>
