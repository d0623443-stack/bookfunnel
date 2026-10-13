<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Destination Detail Hero -->
<section style="position: relative; background: #061922; color: #ffffff; padding: 100px 0 60px; overflow: hidden;">
  <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: url('<?= esc($destination['image']) ?>') center/cover no-repeat; opacity: 0.35;"></div>
  
  <div class="container" style="position: relative; z-index: 2;">
    <div style="margin-bottom: 16px;">
      <a href="<?= base_url('destinations') ?>" style="color: rgba(255,255,255,0.7); display: inline-flex; align-items: center; gap: 6px;">
        <i class="ph-bold ph-arrow-left"></i> Back to All Destinations
      </a>
    </div>

    <div style="display: flex; gap: 10px; margin-bottom: 14px;">
      <span class="section-tag" style="background: rgba(255,255,255,0.15); color: #ffffff; margin-bottom: 0;">
        <?= esc($destination['country']) ?>
      </span>
      <span class="section-tag accent" style="margin-bottom: 0;">
        <?= esc($destination['tag']) ?>
      </span>
    </div>

    <h1 style="font-size: 3.5rem; color: #ffffff; margin-bottom: 16px;"><?= esc($destination['title']) ?></h1>
    <p style="font-size: 1.2rem; color: rgba(255,255,255,0.85); max-width: 720px; line-height: 1.6; margin-bottom: 28px;">
      <?= esc($destination['overview']) ?>
    </p>

    <div style="display: flex; gap: 16px; flex-wrap: wrap;">
      <a href="<?= base_url('contact?destination=' . urlencode($destination['title'])) ?>" class="btn btn-accent btn-lg">
        <i class="ph-bold ph-calendar-check"></i> Book a Trip Here
      </a>
      <a href="https://wa.me/15553828687?text=Hi%20WanderLuxe!%20I'm%20inquiring%20about%20a%20trip%20to%20<?= urlencode($destination['title']) ?>.%20Please%20share%20available%20dates%20and%20rates." target="_blank" class="btn btn-whatsapp btn-lg">
        <i class="ph-bold ph-whatsapp-logo"></i> Inquire on WhatsApp
      </a>
    </div>
  </div>
</section>

<!-- Destination Key Facts & Highlights -->
<section style="padding: 70px 0;">
  <div class="container">
    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px;">
      
      <!-- Left: Highlights & Details -->
      <div>
        <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Curated Highlights of <?= esc($destination['title']) ?></h2>
        <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.7; margin-bottom: 30px;">
          <?= esc($destination['overview']) ?> Our private tours ensure you experience both the celebrated highlights and hidden gems closed to standard tourist crowds.
        </p>

        <h3 style="font-size: 1.4rem; margin-bottom: 16px;">What Makes This Journey Special</h3>
        <div style="display: grid; grid-template-columns: 1fr; gap: 14px; margin-bottom: 40px;">
          <?php foreach ($destination['highlights'] as $hl): ?>
            <div style="display: flex; align-items: center; gap: 12px; padding: 14px 18px; background: #ffffff; border-radius: var(--radius-md); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
              <div style="width: 32px; height: 32px; border-radius: 50%; background: var(--primary-subtle); color: var(--primary); display: flex; align-items: center; justify-content: center; font-weight: 800;">
                ✓
              </div>
              <span style="font-weight: 600; font-size: 1rem;"><?= esc($hl) ?></span>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Related Tour Packages -->
        <?php if (!empty($related_packages)): ?>
          <h3 style="font-size: 1.6rem; margin-bottom: 20px;">Available Packages for this Destination</h3>
          <div style="display: flex; flex-direction: column; gap: 20px;">
            <?php foreach ($related_packages as $pkg): ?>
              <div style="background: #ffffff; border: 1px solid var(--border-light); border-radius: var(--radius-md); padding: 22px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; box-shadow: var(--shadow-sm);">
                <div>
                  <span class="section-tag accent" style="margin-bottom: 6px; font-size: 0.75rem;"><?= esc($pkg['duration']) ?></span>
                  <h4 style="font-size: 1.25rem; margin-bottom: 4px;"><?= esc($pkg['title']) ?></h4>
                  <p style="color: var(--text-muted); font-size: 0.9rem; margin: 0;"><?= esc($pkg['category_label']) ?> &bull; <?= esc($pkg['max_group']) ?></p>
                </div>
                <div style="display: flex; align-items: center; gap: 14px;">
                  <div style="text-align: right;">
                    <div style="font-size: 1.4rem; font-weight: 800; color: var(--primary);">$<?= number_format($pkg['price']) ?></div>
                    <span style="font-size: 0.8rem; color: var(--text-muted);">per person</span>
                  </div>
                  <a href="<?= base_url('packages/' . $pkg['slug']) ?>" class="btn btn-outline-primary btn-sm">View Package</a>
                  <a href="<?= base_url('contact?destination=' . urlencode($destination['title']) . '&package=' . urlencode($pkg['title'])) ?>" class="btn btn-accent btn-sm">Book</a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>

      <!-- Right: Travel Fast Facts Box -->
      <div>
        <div style="background: #ffffff; border-radius: var(--radius-lg); border: 1px solid var(--border-light); padding: 30px; box-shadow: var(--shadow-md); position: sticky; top: 100px;">
          <h3 style="font-size: 1.35rem; margin-bottom: 20px;">Destination Overview</h3>

          <div style="display: flex; flex-direction: column; gap: 18px; margin-bottom: 30px;">
            <div>
              <span style="font-size: 0.78rem; text-transform: uppercase; color: var(--text-muted); font-weight: 700;">Country & Region</span>
              <div style="font-weight: 700; font-size: 1.05rem;"><?= esc($destination['country']) ?> (<?= esc($destination['region']) ?>)</div>
            </div>

            <div>
              <span style="font-size: 0.78rem; text-transform: uppercase; color: var(--text-muted); font-weight: 700;">Best Time To Visit</span>
              <div style="font-weight: 700; font-size: 1.05rem;"><?= esc($destination['best_season']) ?></div>
            </div>

            <div>
              <span style="font-size: 0.78rem; text-transform: uppercase; color: var(--text-muted); font-weight: 700;">Typical Weather</span>
              <div style="font-weight: 700; font-size: 1.05rem;"><?= esc($destination['weather']) ?></div>
            </div>

            <div>
              <span style="font-size: 0.78rem; text-transform: uppercase; color: var(--text-muted); font-weight: 700;">Recommended Length</span>
              <div style="font-weight: 700; font-size: 1.05rem;"><?= esc($destination['duration']) ?></div>
            </div>

            <div>
              <span style="font-size: 0.78rem; text-transform: uppercase; color: var(--text-muted); font-weight: 700;">Traveler Rating</span>
              <div style="font-weight: 700; font-size: 1.05rem; color: #d97706;">★ <?= esc($destination['rating']) ?> / 5.0 (<?= esc($destination['reviews_count']) ?> reviews)</div>
            </div>
          </div>

          <div style="display: flex; flex-direction: column; gap: 10px;">
            <a href="<?= base_url('contact?destination=' . urlencode($destination['title'])) ?>" class="btn btn-primary" style="width: 100%;">
              Inquire About <?= esc($destination['title']) ?>
            </a>
            <a href="https://wa.me/15553828687?text=Hi%20WanderLuxe!%20I'm%20inquiring%20about%20visiting%20<?= urlencode($destination['title']) ?>." target="_blank" class="btn btn-whatsapp" style="width: 100%;">
              <i class="ph-bold ph-whatsapp-logo"></i> Instant WhatsApp Chat
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?= $this->endSection() ?>
