<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section style="padding: 60px 0 100px;">
  <div class="container container-narrow">

    <div class="confirmation-box">
      <div class="confirm-icon-badge">
        <i class="ph-bold ph-check"></i>
      </div>

      <span class="section-tag whatsapp-tag" style="background: rgba(37, 211, 102, 0.15); color: #128C7E;">
        <i class="ph-bold ph-shield-check"></i> Inquiry Successfully Registered
      </span>

      <h1 style="font-size: 2.4rem; margin: 14px 0 10px;">Thank You, <?= esc($inquiry['full_name'] ?? 'Traveler') ?>!</h1>
      <p style="color: var(--text-muted); font-size: 1.05rem; max-width: 580px; margin: 0 auto 20px;">
        Your travel inquiry has been transmitted to our destination curators. We are preparing a customized proposal and formal quote for you.
      </p>

      <!-- Reference Code Box -->
      <?php $refCode = $inquiry['reference_id'] ?? $ref ?? 'WLX-2026-PENDING'; ?>
      <div>
        <span style="font-size: 0.85rem; text-transform: uppercase; color: var(--text-muted); font-weight: 700; display: block;">
          Your Booking Reference ID
        </span>
        <div class="reference-display" id="refDisplay">
          <?= esc($refCode) ?>
        </div>
        <div>
          <button type="button" class="btn btn-outline-primary btn-sm" id="copyRefBtn" data-ref="<?= esc($refCode) ?>">
            <i class="ph-bold ph-copy"></i> Copy Reference ID
          </button>
        </div>
      </div>

      <!-- Summary Details Table -->
      <div class="confirmation-details-card">
        <div class="confirm-item">
          <span class="label">Destination</span>
          <span class="val"><?= esc($inquiry['destination'] ?? 'Custom Expedition') ?></span>
        </div>

        <div class="confirm-item">
          <span class="label">Tour Package</span>
          <span class="val"><?= esc($inquiry['package_name'] ?? 'Custom Itinerary') ?></span>
        </div>

        <div class="confirm-item">
          <span class="label">Estimated Travel Date</span>
          <span class="val"><?= esc($inquiry['travel_date'] ?? 'Upcoming') ?></span>
        </div>

        <div class="confirm-item">
          <span class="label">Party Size</span>
          <span class="val"><?= esc($inquiry['guests'] ?? 2) ?> Guest(s)</span>
        </div>

        <div class="confirm-item">
          <span class="label">Primary Email</span>
          <span class="val"><?= esc($inquiry['email'] ?? 'Not provided') ?></span>
        </div>

        <div class="confirm-item">
          <span class="label">Contact Phone</span>
          <span class="val"><?= esc($inquiry['phone'] ?? 'Not provided') ?></span>
        </div>

        <?php if (!empty($inquiry['travel_style'])): ?>
          <div class="confirm-item" style="grid-column: 1 / -1;">
            <span class="label">Travel Priority</span>
            <span class="val"><?= esc($inquiry['travel_style']) ?></span>
          </div>
        <?php endif; ?>

        <?php if (!empty($inquiry['message'])): ?>
          <div class="confirm-item" style="grid-column: 1 / -1;">
            <span class="label">Notes / Requests</span>
            <span class="val" style="font-weight: 400; font-size: 0.92rem; color: var(--text-muted);"><?= esc($inquiry['message']) ?></span>
          </div>
        <?php endif; ?>
      </div>

      <!-- WhatsApp Instant Expedited Sync CTA -->
      <div style="background: #f0fdf4; border: 1.5px solid #bbf7d0; border-radius: var(--radius-md); padding: 24px; margin-bottom: 30px; text-align: left; display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
        <div style="width: 52px; height: 52px; border-radius: 50%; background: var(--whatsapp); color: #ffffff; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; flex-shrink: 0;">
          <i class="ph-bold ph-whatsapp-logo"></i>
        </div>
        <div style="flex-grow: 1;">
          <h4 style="margin: 0 0 4px; font-size: 1.1rem; color: var(--whatsapp-dark);">Want Priority Confirmation in 5 Minutes?</h4>
          <p style="margin: 0; font-size: 0.9rem; color: #166534;">
            Send your booking reference to our WhatsApp concierge for immediate priority processing.
          </p>
        </div>
        <?php
          $waMsg = "Hello WanderLuxe Concierge! I have just submitted a travel booking request.\n"
                 . "Booking Reference: " . ($refCode) . "\n"
                 . "Name: " . ($inquiry['full_name'] ?? '') . "\n"
                 . "Destination: " . ($inquiry['destination'] ?? '') . "\n"
                 . "Date: " . ($inquiry['travel_date'] ?? '') . "\n"
                 . "Guests: " . ($inquiry['guests'] ?? 2) . "\n"
                 . "Please review my reservation.";
        ?>
        <a href="https://wa.me/15553828687?text=<?= urlencode($waMsg) ?>" target="_blank" class="btn btn-whatsapp">
          <i class="ph-bold ph-whatsapp-logo"></i> Send Ref to WhatsApp
        </a>
      </div>

      <!-- Action Navigation Links -->
      <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
        <a href="<?= base_url('/') ?>" class="btn btn-primary">
          <i class="ph-bold ph-house"></i> Return Home
        </a>
        <a href="<?= base_url('packages') ?>" class="btn btn-outline-primary">
          <i class="ph-bold ph-suitcase"></i> Explore More Packages
        </a>
        <a href="<?= base_url('inquiries') ?>" class="btn btn-outline-primary" style="font-size: 0.85rem;">
          <i class="ph-bold ph-list-dashes"></i> View Submissions Log
        </a>
      </div>

    </div>

  </div>
</section>

<?= $this->endSection() ?>
