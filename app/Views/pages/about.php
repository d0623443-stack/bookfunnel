<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- About Page Banner -->
<section class="page-banner">
  <div class="container page-banner-content">
    <span class="section-tag" style="background: rgba(255,255,255,0.15); color: #ffffff;">
      <i class="ph-bold ph-heart"></i> Our Story & Ethos
    </span>
    <h1>Crafting Unforgettable Journeys Since 2011</h1>
    <p>We believe travel shouldn't just be about visiting a place—it should be about feeling connected to its soul, its heritage, and its people.</p>
  </div>
</section>

<!-- Company Story Section -->
<section style="padding: 80px 0;">
  <div class="container">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
      <div>
        <span class="section-tag"><i class="ph-bold ph-compass"></i> Who We Are</span>
        <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Redefining The Art of Bespoke Travel</h2>
        <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.7; margin-bottom: 20px;">
          Founded by seasoned expedition photojournalists and Swiss hospitality directors, <strong>WanderLuxe</strong> emerged from a shared frustration with commercialized, crowded mass tourism.
        </p>
        <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.7; margin-bottom: 24px;">
          Over the past decade and a half, we have assembled an elite global network of private guides, historians, conservationists, and boutique hoteliers. We open doors to places ordinary tourists never get to see—from after-hours access to Kyoto shrines to secluded sunset catamaran charters in Greece.
        </p>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 30px;">
          <div style="background: #f8fafc; padding: 20px; border-radius: var(--radius-md); border-left: 4px solid var(--primary);">
            <h4 style="font-size: 1.8rem; color: var(--primary); font-weight: 800; margin-bottom: 4px;">15+</h4>
            <p style="color: var(--text-muted); font-size: 0.9rem; margin: 0;">Years Designing Bespoke Journeys</p>
          </div>
          <div style="background: #f8fafc; padding: 20px; border-radius: var(--radius-md); border-left: 4px solid var(--accent);">
            <h4 style="font-size: 1.8rem; color: var(--accent); font-weight: 800; margin-bottom: 4px;">12,500+</h4>
            <p style="color: var(--text-muted); font-size: 0.9rem; margin: 0;">Guests Satisfied Worldwide</p>
          </div>
        </div>
      </div>

      <div>
        <div style="position: relative;">
          <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?auto=format&fit=crop&w=1000&q=80" alt="Travelers exploring mountains" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); width: 100%; height: 420px; object-fit: cover;">
          <div style="position: absolute; bottom: -20px; right: -20px; background: #ffffff; padding: 20px 26px; border-radius: var(--radius-md); box-shadow: var(--shadow-lg); display: flex; align-items: center; gap: 14px;">
            <div style="width: 48px; height: 48px; border-radius: 50%; background: var(--whatsapp-light); color: var(--whatsapp-dark); display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
              <i class="ph-bold ph-whatsapp-logo"></i>
            </div>
            <div>
              <h5 style="margin: 0; font-size: 1rem;">Direct Travel Support</h5>
              <p style="margin: 0; color: var(--text-muted); font-size: 0.85rem;">Private Concierge on WhatsApp</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Expedition Leaders & Team -->
<section style="padding: 80px 0; background-color: #f1f5f9;">
  <div class="container">
    <div class="section-header">
      <span class="section-tag accent"><i class="ph-bold ph-users-three"></i> The Curators</span>
      <h2>Meet Our Expedition Leaders</h2>
      <p>Passionate explorers and certified field specialists dedicated to tailoring your ultimate vacation experience.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 26px;">
      <?php foreach ($team as $member): ?>
        <div style="background: #ffffff; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); transition: transform 0.3s ease;">
          <img src="<?= esc($member['image']) ?>" alt="<?= esc($member['name']) ?>" style="width: 100%; height: 260px; object-fit: cover;">
          <div style="padding: 24px;">
            <span class="section-tag" style="margin-bottom: 6px; font-size: 0.75rem;"><?= esc($member['experience']) ?></span>
            <h3 style="font-size: 1.25rem; margin-bottom: 4px;"><?= esc($member['name']) ?></h3>
            <p style="color: var(--accent); font-size: 0.88rem; font-weight: 700; margin-bottom: 12px;"><?= esc($member['role']) ?></p>
            <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.5; margin: 0;"><?= esc($member['bio']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Company Milestones -->
<section style="padding: 80px 0;">
  <div class="container container-narrow">
    <div class="section-header">
      <span class="section-tag"><i class="ph-bold ph-hourglass-medium"></i> Our Heritage</span>
      <h2>Milestones That Shaped Us</h2>
      <p>A look at key moments along our journey of travel innovation.</p>
    </div>

    <div style="display: flex; flex-direction: column; gap: 20px;">
      <?php foreach ($milestones as $m): ?>
        <div style="display: flex; gap: 24px; background: #ffffff; padding: 24px; border-radius: var(--radius-md); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); align-items: center;">
          <div style="font-size: 1.6rem; font-weight: 800; color: var(--primary); min-width: 80px; font-family: var(--font-heading);">
            <?= esc($m['year']) ?>
          </div>
          <div>
            <h4 style="font-size: 1.15rem; margin-bottom: 4px;"><?= esc($m['title']) ?></h4>
            <p style="color: var(--text-muted); font-size: 0.92rem; margin: 0;"><?= esc($m['desc']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Accreditations & Certifications -->
<section style="padding: 60px 0; background: #ffffff; border-top: 1px solid var(--border-light);">
  <div class="container" style="text-align: center;">
    <span class="section-tag" style="margin-bottom: 20px;"><i class="ph-bold ph-shield-check"></i> Certified Excellence</span>
    <div style="display: flex; justify-content: center; align-items: center; gap: 40px; flex-wrap: wrap;">
      <div style="display: flex; align-items: center; gap: 8px; font-weight: 700; color: var(--text-muted);">
        <i class="ph-bold ph-airplane" style="font-size: 1.8rem; color: var(--primary);"></i>
        <span>IATA Accredited Agency</span>
      </div>
      <div style="display: flex; align-items: center; gap: 8px; font-weight: 700; color: var(--text-muted);">
        <i class="ph-bold ph-shield-star" style="font-size: 1.8rem; color: var(--accent);"></i>
        <span>World Travel & Tourism SafeTravels</span>
      </div>
      <div style="display: flex; align-items: center; gap: 8px; font-weight: 700; color: var(--text-muted);">
        <i class="ph-bold ph-tree" style="font-size: 1.8rem; color: #10b981;"></i>
        <span>100% Carbon Neutral Travel</span>
      </div>
      <div style="display: flex; align-items: center; gap: 8px; font-weight: 700; color: var(--text-muted);">
        <i class="ph-bold ph-whatsapp-logo" style="font-size: 1.8rem; color: var(--whatsapp);"></i>
        <span>24/7 Verified Concierge</span>
      </div>
    </div>
  </div>
</section>

<!-- Direct WhatsApp Booking CTA -->
<section style="background: linear-gradient(135deg, #09202a 0%, #0f4c5c 100%); color: #ffffff; padding: 80px 0; text-align: center;">
  <div class="container container-narrow">
    <h2 style="font-size: 2.6rem; color: #ffffff; margin-bottom: 14px;">Speak Directly With Our Travel Designers</h2>
    <p style="font-size: 1.15rem; color: rgba(255, 255, 255, 0.85); margin-bottom: 30px;">
      Got questions about visas, best travel seasons, or luxury hotels? Our team is always one tap away on WhatsApp.
    </p>

    <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
      <a href="https://wa.me/15553828687?text=Hello%20WanderLuxe!%20I'd%20love%20to%20learn%20more%20about%20your%20custom%20tours." target="_blank" class="btn btn-whatsapp btn-lg">
        <i class="ph-bold ph-whatsapp-logo"></i> Chat with Us on WhatsApp
      </a>
      <a href="<?= base_url('contact') ?>" class="btn btn-outline-white btn-lg">
        <i class="ph-bold ph-envelope"></i> Send an Inquiry
      </a>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
