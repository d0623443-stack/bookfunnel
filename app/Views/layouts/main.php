<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title ?? 'WanderLuxe - Luxury World Expeditions') ?></title>
  <meta name="description" content="<?= esc($meta_description ?? 'Bespoke tours, luxury adventures, and custom vacations worldwide.') ?>">
  
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

  <!-- Phosphor Icons (Lightweight Modern SVG Icons) -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>

  <!-- Custom Design System CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

  <!-- Top Notification & Quick Contact Bar -->
  <header class="topbar">
    <div class="container topbar-wrapper">
      <div class="topbar-info">
        <span><i class="ph ph-shield-check"></i> Certified IATA Partner & SafeTravels Stamp</span>
        <a href="tel:+15553828687"><i class="ph ph-phone"></i> +1 (555) 382-8687</a>
        <a href="mailto:concierge@wanderluxe.travel"><i class="ph ph-envelope-simple"></i> concierge@wanderluxe.travel</a>
      </div>
      <div class="topbar-info">
        <a href="https://wa.me/15553828687?text=Hi%20WanderLuxe%20Concierge%2C%20I%20would%20like%20to%20plan%20a%20journey" target="_blank" class="topbar-whatsapp-link">
          <i class="ph-bold ph-whatsapp-logo"></i> 24/7 WhatsApp Concierge
        </a>
      </div>
    </div>
  </header>

  <!-- Main Navigation Bar -->
  <nav class="navbar">
    <div class="container navbar-wrapper">
      <!-- Brand Logo -->
      <a href="<?= base_url('/') ?>" class="brand-logo" title="WanderLuxe Expeditions">
        <div class="brand-icon">
          <i class="ph-bold ph-compass"></i>
        </div>
        <span>WanderLuxe<span class="dot">.</span></span>
      </a>

      <!-- Desktop Nav Links -->
      <ul class="nav-links">
        <li>
          <a href="<?= base_url('/') ?>" class="nav-link <?= ($active_nav ?? '') === 'home' ? 'active' : '' ?>">Home</a>
        </li>
        <li>
          <a href="<?= base_url('destinations') ?>" class="nav-link <?= ($active_nav ?? '') === 'destinations' ? 'active' : '' ?>">Destinations</a>
        </li>
        <li>
          <a href="<?= base_url('packages') ?>" class="nav-link <?= ($active_nav ?? '') === 'packages' ? 'active' : '' ?>">Tour Packages</a>
        </li>
        <li>
          <a href="<?= base_url('about') ?>" class="nav-link <?= ($active_nav ?? '') === 'about' ? 'active' : '' ?>">About Us</a>
        </li>
        <li>
          <a href="<?= base_url('contact') ?>" class="nav-link <?= ($active_nav ?? '') === 'contact' ? 'active' : '' ?>">Contact & Booking</a>
        </li>
        <li>
          <a href="<?= base_url('inquiries') ?>" class="nav-link <?= ($active_nav ?? '') === 'inquiries' ? 'active' : '' ?>" title="View Submissions" style="color: var(--text-muted); font-size: 0.85rem;">Submissions</a>
        </li>
      </ul>

      <!-- Nav CTA Actions -->
      <div class="nav-actions">
        <a href="https://wa.me/15553828687?text=Hello%20WanderLuxe!%20I'm%20inquiring%20about%20a%20tour%20package." target="_blank" class="btn btn-whatsapp btn-sm" title="Chat on WhatsApp">
          <i class="ph-bold ph-whatsapp-logo"></i> WhatsApp Us
        </a>
        <a href="<?= base_url('contact') ?>" class="btn btn-primary btn-sm">
          Plan My Trip
        </a>
        <button class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Toggle Navigation">
          <i class="ph ph-list"></i>
        </button>
      </div>
    </div>
  </nav>

  <!-- Mobile Drawer Menu -->
  <div class="mobile-backdrop" id="mobileBackdrop"></div>
  <aside class="mobile-drawer" id="mobileDrawer">
    <div class="mobile-drawer-header">
      <a href="<?= base_url('/') ?>" class="brand-logo">
        <div class="brand-icon">
          <i class="ph-bold ph-compass"></i>
        </div>
        <span>WanderLuxe<span class="dot">.</span></span>
      </a>
      <button class="mobile-drawer-close" id="mobileDrawerClose" aria-label="Close Menu">
        <i class="ph ph-x"></i>
      </button>
    </div>
    <div class="mobile-nav-links">
      <a href="<?= base_url('/') ?>" class="<?= ($active_nav ?? '') === 'home' ? 'active' : '' ?>">Home</a>
      <a href="<?= base_url('destinations') ?>" class="<?= ($active_nav ?? '') === 'destinations' ? 'active' : '' ?>">Destinations</a>
      <a href="<?= base_url('packages') ?>" class="<?= ($active_nav ?? '') === 'packages' ? 'active' : '' ?>">Tour Packages</a>
      <a href="<?= base_url('about') ?>" class="<?= ($active_nav ?? '') === 'about' ? 'active' : '' ?>">About Us</a>
      <a href="<?= base_url('contact') ?>" class="<?= ($active_nav ?? '') === 'contact' ? 'active' : '' ?>">Contact & Booking</a>
      <a href="<?= base_url('inquiries') ?>">Inquiries Manager</a>
    </div>
    <div style="margin-top: auto; display: flex; flex-direction: column; gap: 12px; padding-top: 20px;">
      <a href="https://wa.me/15553828687?text=Hello%20WanderLuxe!%20I'm%20inquiring%20about%20travel." target="_blank" class="btn btn-whatsapp">
        <i class="ph-bold ph-whatsapp-logo"></i> Chat on WhatsApp
      </a>
      <a href="<?= base_url('contact') ?>" class="btn btn-primary">
        Plan a Trip
      </a>
    </div>
  </aside>

  <!-- Global Flash Notifications -->
  <?php if (session()->getFlashdata('success')): ?>
    <div class="container" style="margin-top: 20px;">
      <div class="alert alert-success">
        <i class="ph-bold ph-check-circle" style="font-size: 1.4rem;"></i>
        <span><?= session()->getFlashdata('success') ?></span>
      </div>
    </div>
  <?php endif; ?>

  <?php if (session()->getFlashdata('status_error')): ?>
    <div class="container" style="margin-top: 20px;">
      <div class="alert alert-danger">
        <i class="ph-bold ph-warning-circle" style="font-size: 1.4rem;"></i>
        <span><?= session()->getFlashdata('status_error') ?></span>
      </div>
    </div>
  <?php endif; ?>

  <!-- Main Content Page Body -->
  <main>
    <?= $this->renderSection('content') ?>
  </main>

  <!-- Floating WhatsApp Quick Connect Widget -->
  <div class="floating-whatsapp">
    <!-- Popover Chat Box -->
    <div class="whatsapp-chat-box" id="waChatBox">
      <div class="wa-box-header">
        <div class="wa-box-header-title">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=120&q=80" alt="Concierge Elena" class="wa-agent-avatar">
          <div class="wa-agent-info">
            <h4>Elena & Travel Team</h4>
            <span><i class="ph-fill ph-circle" style="color: #4ade80; font-size: 8px;"></i> Online | Replies in ~3m</span>
          </div>
        </div>
        <button class="wa-close-btn" id="waCloseBtn" aria-label="Close Chat">&times;</button>
      </div>

      <div class="wa-box-body">
        <div class="wa-message-bubble">
          <p>Hello! Welcome to <strong>WanderLuxe</strong>. How may our concierge team assist your journey today?</p>
        </div>

        <div class="wa-quick-options">
          <button type="button" class="wa-option-btn" data-msg="Hi! I want to inquire about booking a tour package.">
            <i class="ph-bold ph-airplane-takeoff"></i> Inquire About Tour Package
          </button>
          <button type="button" class="wa-option-btn" data-msg="Hello! Can you design a custom honeymoon / private vacation for us?">
            <i class="ph-bold ph-heart"></i> Custom Private Vacation
          </button>
          <button type="button" class="wa-option-btn" data-msg="Hi WanderLuxe! Can you share pricing and seasonal availability for Bali and Switzerland?">
            <i class="ph-bold ph-tag"></i> Pricing & Best Travel Season
          </button>
        </div>
      </div>

      <div class="wa-box-footer">
        <a href="https://wa.me/15553828687?text=Hello%20WanderLuxe%20Concierge!%20I'd%20like%20to%20chat%20about%20travel%20planning." target="_blank" class="btn btn-whatsapp" style="width: 100%;">
          <i class="ph-bold ph-whatsapp-logo"></i> Start WhatsApp Chat
        </a>
      </div>
    </div>

    <!-- Trigger Button -->
    <button class="whatsapp-trigger-btn" id="waFloatingBtn" aria-label="Open WhatsApp Support">
      <i class="ph-bold ph-whatsapp-logo"></i>
      <span class="whatsapp-badge-online"></span>
    </button>
  </div>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Brand Info -->
        <div class="footer-brand">
          <a href="<?= base_url('/') ?>" class="brand-logo" style="color: #ffffff; margin-bottom: 16px;">
            <div class="brand-icon">
              <i class="ph-bold ph-compass"></i>
            </div>
            <span>WanderLuxe<span class="dot">.</span></span>
          </a>
          <p>Curating extraordinary journeys across seven continents. Handcrafted itineraries, boutique stays, certified private guides, and 24/7 dedicated concierge care.</p>
          <div class="footer-social-links">
            <a href="https://wa.me/15553828687" target="_blank" class="footer-social-icon" title="WhatsApp"><i class="ph-bold ph-whatsapp-logo"></i></a>
            <a href="#" class="footer-social-icon" title="Instagram"><i class="ph ph-instagram-logo"></i></a>
            <a href="#" class="footer-social-icon" title="Facebook"><i class="ph ph-facebook-logo"></i></a>
            <a href="#" class="footer-social-icon" title="YouTube"><i class="ph ph-youtube-logo"></i></a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul class="footer-links-list">
            <li><a href="<?= base_url('/') ?>">Home Overview</a></li>
            <li><a href="<?= base_url('destinations') ?>">Iconic Destinations</a></li>
            <li><a href="<?= base_url('packages') ?>">Curated Packages</a></li>
            <li><a href="<?= base_url('about') ?>">About WanderLuxe</a></li>
            <li><a href="<?= base_url('contact') ?>">Contact & Inquiries</a></li>
            <li><a href="<?= base_url('inquiries') ?>">Submission Log</a></li>
          </ul>
        </div>

        <!-- Featured Destinations -->
        <div class="footer-col">
          <h4>Top Destinations</h4>
          <ul class="footer-links-list">
            <li><a href="<?= base_url('destinations/bali-indonesia') ?>">Bali & Nusa Islands</a></li>
            <li><a href="<?= base_url('destinations/swiss-alps') ?>">Swiss Alps & Zermatt</a></li>
            <li><a href="<?= base_url('destinations/kyoto-japan') ?>">Kyoto & Historic Japan</a></li>
            <li><a href="<?= base_url('destinations/santorini-greece') ?>">Santorini & Cyclades</a></li>
            <li><a href="<?= base_url('destinations/serengeti-tanzania') ?>">Serengeti & Ngorongoro</a></li>
            <li><a href="<?= base_url('destinations/amalfi-coast-italy') ?>">Amalfi Coast & Capri</a></li>
          </ul>
        </div>

        <!-- Direct Contact Column -->
        <div class="footer-col">
          <h4>Direct Contact</h4>
          <ul class="footer-links-list">
            <li style="display: flex; gap: 8px; color: rgba(255,255,255,0.75);">
              <i class="ph ph-map-pin" style="color: var(--accent); font-size: 1.2rem;"></i>
              <span>450 Avenue of the Americas, Suite 1400, New York, NY 10011</span>
            </li>
            <li style="display: flex; gap: 8px;">
              <i class="ph ph-phone" style="color: var(--accent); font-size: 1.2rem;"></i>
              <a href="tel:+15553828687">+1 (555) 382-8687</a>
            </li>
            <li style="display: flex; gap: 8px;">
              <i class="ph-bold ph-whatsapp-logo" style="color: var(--whatsapp); font-size: 1.2rem;"></i>
              <a href="https://wa.me/15553828687" target="_blank" style="color: #4ade80;">+1 (555) 382-8687 (WhatsApp)</a>
            </li>
            <li style="display: flex; gap: 8px;">
              <i class="ph ph-envelope" style="color: var(--accent); font-size: 1.2rem;"></i>
              <a href="mailto:concierge@wanderluxe.travel">concierge@wanderluxe.travel</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Copyright Bar -->
      <div class="footer-bottom">
        <p>&copy; <?= date('Y') ?> WanderLuxe Expeditions Ltd. All rights reserved. Powered by CodeIgniter 4.</p>
        <div>
          <span>Privacy Policy</span> &bull; <span>Terms of Service</span> &bull; <span>Traveler Protection Guarantee</span>
        </div>
      </div>
    </div>
  </footer>

  <!-- Custom JavaScript -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>
