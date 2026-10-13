<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="page-banner" style="padding: 50px 0;">
  <div class="container page-banner-content">
    <span class="section-tag" style="background: rgba(255,255,255,0.15); color: #ffffff;">
      <i class="ph-bold ph-database"></i> Internal Submissions Log
    </span>
    <h1 style="font-size: 2.5rem;">Received Inquiries & Bookings</h1>
    <p>Review and manage all tourism requests submitted through the WanderLuxe website form.</p>
  </div>
</section>

<section style="padding: 60px 0 100px;">
  <div class="container">
    
    <div style="background: #ffffff; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-md); padding: 30px;">
      
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 14px;">
        <div>
          <h2 style="font-size: 1.5rem; margin: 0;">Total Submissions: <?= count($inquiries) ?></h2>
          <p style="color: var(--text-muted); font-size: 0.88rem; margin: 4px 0 0;">Stored in SQLite database & JSON storage (writable/inquiries.json).</p>
        </div>

        <a href="<?= base_url('contact') ?>" class="btn btn-primary btn-sm">
          <i class="ph-bold ph-plus"></i> Submit New Test Booking
        </a>
      </div>

      <?php if (!empty($inquiries)): ?>
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; font-size: 0.92rem; text-align: left;">
            <thead>
              <tr style="background: #f8fafc; border-bottom: 2px solid var(--border-light); color: var(--text-muted);">
                <th style="padding: 12px 14px;">Ref ID</th>
                <th style="padding: 12px 14px;">Traveler Name</th>
                <th style="padding: 12px 14px;">Destination & Package</th>
                <th style="padding: 12px 14px;">Date</th>
                <th style="padding: 12px 14px;">Guests</th>
                <th style="padding: 12px 14px;">Contact</th>
                <th style="padding: 12px 14px;">Submitted</th>
                <th style="padding: 12px 14px; text-align: center;">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($inquiries as $inq): ?>
                <tr style="border-bottom: 1px solid var(--border-light); transition: background 0.2s ease;">
                  <td style="padding: 14px; font-weight: 700; font-family: monospace; color: var(--primary);">
                    <?= esc($inq['reference_id'] ?? 'N/A') ?>
                  </td>
                  <td style="padding: 14px;">
                    <strong><?= esc($inq['full_name']) ?></strong>
                    <div style="font-size: 0.8rem; color: var(--text-muted);"><?= esc($inq['email']) ?></div>
                  </td>
                  <td style="padding: 14px;">
                    <div style="font-weight: 600;"><?= esc($inq['destination']) ?></div>
                    <div style="font-size: 0.8rem; color: var(--text-muted);"><?= esc($inq['package_name'] ?? 'Custom') ?></div>
                  </td>
                  <td style="padding: 14px; font-size: 0.88rem;">
                    <?= esc($inq['travel_date']) ?>
                  </td>
                  <td style="padding: 14px; font-weight: 700;">
                    <?= esc($inq['guests']) ?>
                  </td>
                  <td style="padding: 14px; font-size: 0.85rem;">
                    <div><a href="tel:<?= esc($inq['phone']) ?>"><?= esc($inq['phone']) ?></a></div>
                  </td>
                  <td style="padding: 14px; font-size: 0.82rem; color: var(--text-muted);">
                    <?= esc(date('M d, Y H:i', strtotime($inq['created_at'] ?? 'now'))) ?>
                  </td>
                  <td style="padding: 14px; text-align: center;">
                    <?php
                      $cleanPhone = preg_replace('/[^0-9]/', '', $inq['phone'] ?? '');
                      $clientWaMsg = "Hello " . $inq['full_name'] . "! This is the WanderLuxe Concierge team regarding your booking inquiry (" . ($inq['reference_id'] ?? '') . ") for " . $inq['destination'] . ".";
                    ?>
                    <a href="https://wa.me/<?= $cleanPhone ?: '15553828687' ?>?text=<?= urlencode($clientWaMsg) ?>" target="_blank" class="btn btn-whatsapp btn-sm" style="padding: 6px 12px; font-size: 0.8rem;" title="Chat directly with traveler">
                      <i class="ph-bold ph-whatsapp-logo"></i> Reply on WhatsApp
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php else: ?>
        <div style="text-align: center; padding: 60px 20px;">
          <div style="font-size: 3rem; color: var(--text-muted); margin-bottom: 12px;">
            <i class="ph-bold ph-tray"></i>
          </div>
          <h3>No inquiries recorded yet</h3>
          <p style="color: var(--text-muted); margin: 8px 0 20px;">Be the first to submit a travel booking request!</p>
          <a href="<?= base_url('contact') ?>" class="btn btn-primary">Go to Contact & Booking Form</a>
        </div>
      <?php endif; ?>

    </div>

  </div>
</section>

<?= $this->endSection() ?>
