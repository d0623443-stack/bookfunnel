<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Page Banner -->
<section class="page-banner">
  <div class="container page-banner-content">
    <span class="section-tag whatsapp-tag" style="background: rgba(37, 211, 102, 0.2); color: #4ade80;">
      <i class="ph-bold ph-whatsapp-logo"></i> Instant Support Available
    </span>
    <h1>Contact Our Travel Concierge</h1>
    <p>Ready to plan your dream voyage? Submit your trip inquiry below or chat directly with our specialists on WhatsApp for immediate assistance.</p>
  </div>
</section>

<!-- Contact & Booking Section -->
<section class="contact-section">
  <div class="container">
    
    <!-- Validation Errors Summary (if any) -->
    <?php if (session()->getFlashdata('errors')): ?>
      <div class="alert alert-danger">
        <i class="ph-bold ph-warning-circle" style="font-size: 1.5rem;"></i>
        <div>
          <strong>Please correct the following:</strong>
          <ul style="margin-top: 6px; padding-left: 18px; list-style: disc;">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
              <li><?= esc($error) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    <?php endif; ?>

    <div class="contact-layout">

      <!-- Left Column: Contact Details & Direct WhatsApp Card -->
      <div class="contact-sidebar">
        
        <!-- Primary WhatsApp Feature Card -->
        <div class="contact-card-wa">
          <span class="section-tag" style="background: rgba(255, 255, 255, 0.2); color: #ffffff; margin-bottom: 12px; font-size: 0.75rem;">
            Fastest Response
          </span>
          <h3><i class="ph-bold ph-whatsapp-logo"></i> Chat on WhatsApp</h3>
          <p>Skip the waiting queue. Connect directly with a verified senior expedition curator. Average response time is under 3 minutes.</p>

          <div class="wa-number-badge">
            +1 (555) 382-8687
          </div>

          <div style="display: flex; flex-direction: column; gap: 10px;">
            <a href="https://wa.me/15553828687?text=Hello%20WanderLuxe%20Concierge!%20I'm%20ready%20to%20plan%20my%20next%20vacation." target="_blank" class="btn btn-outline-white" style="width: 100%; font-weight: 700;">
              <i class="ph-bold ph-whatsapp-logo"></i> Open WhatsApp Chat
            </a>
            <a href="https://wa.me/15553828687?text=Hi%2C%20I%20would%20like%20to%20inquire%20about%20a%20customized%20honeymoon%20trip." target="_blank" class="btn btn-outline-white" style="width: 100%; font-size: 0.85rem;">
              <i class="ph-bold ph-heart"></i> Ask About Honeymoon Packages
            </a>
          </div>
        </div>

        <!-- Agency Contact Information -->
        <div class="contact-card-white">
          <h3>Global Concierge Desks</h3>

          <div class="contact-details-list">
            <div class="contact-detail-item">
              <div class="contact-icon-circle">
                <i class="ph-bold ph-map-pin"></i>
              </div>
              <div class="contact-detail-text">
                <h4>Headquarters</h4>
                <p>450 Avenue of the Americas, Suite 1400<br>New York, NY 10011, USA</p>
              </div>
            </div>

            <div class="contact-detail-item">
              <div class="contact-icon-circle">
                <i class="ph-bold ph-phone"></i>
              </div>
              <div class="contact-detail-text">
                <h4>Direct Phone Hotline</h4>
                <p><a href="tel:+15553828687">+1 (555) 382-8687 (Toll-Free)</a></p>
                <p><a href="tel:+442079460192">+44 (20) 7946 0192 (London Desk)</a></p>
              </div>
            </div>

            <div class="contact-detail-item">
              <div class="contact-icon-circle">
                <i class="ph-bold ph-envelope-simple"></i>
              </div>
              <div class="contact-detail-text">
                <h4>Email Inquiries</h4>
                <p><a href="mailto:concierge@wanderluxe.travel">concierge@wanderluxe.travel</a></p>
                <p><a href="mailto:vip@wanderluxe.travel">vip@wanderluxe.travel</a></p>
              </div>
            </div>

            <div class="contact-detail-item">
              <div class="contact-icon-circle">
                <i class="ph-bold ph-clock"></i>
              </div>
              <div class="contact-detail-text">
                <h4>Operating Hours</h4>
                <p>Mon – Fri: 08:00 AM – 09:00 PM EST<br>Sat – Sun: 09:00 AM – 06:00 PM EST<br><strong style="color: #10b981;">WhatsApp: 24/7 Priority Support</strong></p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Right Column: Interactive Tour Booking & Inquiry Form -->
      <div>
        <div class="form-card">
          <div class="form-card-header">
            <span class="section-tag"><i class="ph-bold ph-paper-plane-tilt"></i> Form Submission</span>
            <h2>Plan Your Bespoke Vacation</h2>
            <p>Tell us your travel preferences. We craft custom itineraries and send formal proposals within 24 hours.</p>
          </div>

          <form action="<?= base_url('contact/submit') ?>" method="post" id="travelInquiryForm">
            <?= csrf_field() ?>

            <div class="form-grid">
              
              <!-- Full Name -->
              <div class="form-group">
                <label for="full_name">Full Name <span class="required">*</span></label>
                <input 
                  type="text" 
                  name="full_name" 
                  id="full_name" 
                  class="form-control <?= session('errors.full_name') ? 'is-invalid' : '' ?>" 
                  placeholder="e.g. John Doe" 
                  value="<?= old('full_name') ?>" 
                  required
                >
                <?php if (session('errors.full_name')): ?>
                  <span class="invalid-feedback"><?= session('errors.full_name') ?></span>
                <?php endif; ?>
              </div>

              <!-- Email -->
              <div class="form-group">
                <label for="email">Email Address <span class="required">*</span></label>
                <input 
                  type="email" 
                  name="email" 
                  id="email" 
                  class="form-control <?= session('errors.email') ? 'is-invalid' : '' ?>" 
                  placeholder="name@example.com" 
                  value="<?= old('email') ?>" 
                  required
                >
                <?php if (session('errors.email')): ?>
                  <span class="invalid-feedback"><?= session('errors.email') ?></span>
                <?php endif; ?>
              </div>

              <!-- Phone / WhatsApp -->
              <div class="form-group">
                <label for="phone">Phone / WhatsApp Number <span class="required">*</span></label>
                <input 
                  type="tel" 
                  name="phone" 
                  id="phone" 
                  class="form-control <?= session('errors.phone') ? 'is-invalid' : '' ?>" 
                  placeholder="+1 (555) 000-0000" 
                  value="<?= old('phone') ?>" 
                  required
                >
                <?php if (session('errors.phone')): ?>
                  <span class="invalid-feedback"><?= session('errors.phone') ?></span>
                <?php endif; ?>
              </div>

              <!-- Preferred Destination -->
              <div class="form-group">
                <label for="destination">Target Destination <span class="required">*</span></label>
                <select 
                  name="destination" 
                  id="destination" 
                  class="form-control <?= session('errors.destination') ? 'is-invalid' : '' ?>" 
                  required
                >
                  <option value="">Select a Destination...</option>
                  <?php foreach ($all_destinations as $d): ?>
                    <option value="<?= esc($d['title']) ?>" <?= (old('destination', $prefill_destination) === $d['title'] || str_contains(old('destination', $prefill_destination), $d['country'])) ? 'selected' : '' ?>>
                      <?= esc($d['title']) ?> (<?= esc($d['country']) ?>)
                    </option>
                  <?php endforeach; ?>
                  <option value="Other / Multi-Country Expedition" <?= old('destination') === 'Other / Multi-Country Expedition' ? 'selected' : '' ?>>
                    Other / Multi-Country Expedition
                  </option>
                </select>
                <?php if (session('errors.destination')): ?>
                  <span class="invalid-feedback"><?= session('errors.destination') ?></span>
                <?php endif; ?>
              </div>

              <!-- Package (Optional) -->
              <div class="form-group">
                <label for="package_name">Selected Tour Package</label>
                <select name="package_name" id="package_name" class="form-control">
                  <option value="Custom Itinerary Design">Custom Itinerary (Tailored from scratch)</option>
                  <?php foreach ($all_packages as $p): ?>
                    <option value="<?= esc($p['title']) ?>" <?= old('package_name', $prefill_package) === $p['title'] ? 'selected' : '' ?>>
                      <?= esc($p['title']) ?> ($<?= number_format($p['price']) ?>)
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>

              <!-- Target Travel Date -->
              <div class="form-group">
                <label for="travel_date">Estimated Travel Date <span class="required">*</span></label>
                <input 
                  type="date" 
                  name="travel_date" 
                  id="travel_date" 
                  class="form-control <?= session('errors.travel_date') ? 'is-invalid' : '' ?>" 
                  min="<?= date('Y-m-d') ?>" 
                  value="<?= old('travel_date', date('Y-m-d', strtotime('+30 days'))) ?>" 
                  required
                >
                <?php if (session('errors.travel_date')): ?>
                  <span class="invalid-feedback"><?= session('errors.travel_date') ?></span>
                <?php endif; ?>
              </div>

              <!-- Number of Guests -->
              <div class="form-group">
                <label for="guests">Number of Guests <span class="required">*</span></label>
                <input 
                  type="number" 
                  name="guests" 
                  id="guests" 
                  class="form-control <?= session('errors.guests') ? 'is-invalid' : '' ?>" 
                  min="1" 
                  max="50" 
                  value="<?= old('guests', 2) ?>" 
                  required
                >
                <?php if (session('errors.guests')): ?>
                  <span class="invalid-feedback"><?= session('errors.guests') ?></span>
                <?php endif; ?>
              </div>

              <!-- Travel Style -->
              <div class="form-group">
                <label for="travel_style">Travel Style / Priority</label>
                <select name="travel_style" id="travel_style" class="form-control">
                  <option value="Ultra-Luxury & 5-Star Villas" <?= old('travel_style') === 'Ultra-Luxury & 5-Star Villas' ? 'selected' : '' ?>>Ultra-Luxury & 5-Star Stays</option>
                  <option value="Romantic Honeymoon" <?= old('travel_style') === 'Romantic Honeymoon' ? 'selected' : '' ?>>Romantic Honeymoon</option>
                  <option value="Active Adventure & Hiking" <?= old('travel_style') === 'Active Adventure & Hiking' ? 'selected' : '' ?>>Active Adventure & Wildlife</option>
                  <option value="Cultural Heritage & Cuisine" <?= old('travel_style') === 'Cultural Heritage & Cuisine' ? 'selected' : '' ?>>Cultural Heritage & Food</option>
                  <option value="Family Friendly Leisure" <?= old('travel_style') === 'Family Friendly Leisure' ? 'selected' : '' ?>>Family Friendly Leisure</option>
                </select>
              </div>

              <!-- Special Requests / Notes -->
              <div class="form-group full-width">
                <label for="message">Trip Notes & Special Requests</label>
                <textarea 
                  name="message" 
                  id="message" 
                  rows="4" 
                  class="form-control" 
                  placeholder="Share any specific bucket-list activities, dietary restrictions, preferred airline class, or special anniversary/celebration details..."
                ><?= old('message') ?></textarea>
              </div>

              <!-- WhatsApp Opt-in Checkbox -->
              <div class="form-group full-width">
                <label class="form-checkbox">
                  <input type="checkbox" name="whatsapp_opt_in" value="1" checked>
                  <span>Yes, send instant booking status updates & itinerary proposal to my WhatsApp.</span>
                </label>
              </div>

              <!-- Submit Buttons -->
              <div class="form-group full-width" style="margin-top: 10px; display: flex; gap: 14px; flex-wrap: wrap;">
                <button type="submit" class="btn btn-primary btn-lg" style="flex-grow: 1;">
                  <i class="ph-bold ph-paper-plane-tilt"></i> Submit Booking Inquiry
                </button>
                <button type="button" class="btn btn-whatsapp btn-lg" id="directWaSubmitBtn" title="Send details directly to WhatsApp">
                  <i class="ph-bold ph-whatsapp-logo"></i> Send via WhatsApp
                </button>
              </div>

            </div>
          </form>

          <div style="margin-top: 24px; font-size: 0.84rem; color: var(--text-muted); display: flex; align-items: center; gap: 8px;">
            <i class="ph-bold ph-lock-key" style="color: var(--primary);"></i>
            <span>Your information is encrypted with 256-bit SSL and is never shared with third parties.</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Frequently Asked Questions Accordion -->
<section style="padding: 80px 0; background-color: #f1f5f9;">
  <div class="container container-narrow">
    <div class="section-header">
      <span class="section-tag"><i class="ph-bold ph-question"></i> Traveler Assistance</span>
      <h2>Frequently Asked Questions</h2>
      <p>Clear answers to common questions about our booking procedure, payment terms, and bespoke itineraries.</p>
    </div>

    <div class="faq-accordion">
      <div class="faq-item active">
        <button class="faq-question">
          <span>How does the booking and itinerary planning process work?</span>
          <i class="ph-bold ph-caret-down faq-icon"></i>
        </button>
        <div class="faq-answer">
          Once you submit an inquiry or message us on WhatsApp, your dedicated destination curator will arrange a complimentary 15-minute consultation. We formulate a customized day-by-day itinerary proposal with transparent pricing within 24 hours. Once approved, you reserve with a deposit.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          <span>Can I book directly via WhatsApp?</span>
          <i class="ph-bold ph-caret-down faq-icon"></i>
        </button>
        <div class="faq-answer">
          Yes! A significant portion of our travelers prefer real-time communication. You can tap the "WhatsApp Us" button, send your desired dates and destination, and our specialists will send brochures, room options, and booking links directly in your chat.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          <span>What is your cancellation and date change policy?</span>
          <i class="ph-bold ph-caret-down faq-icon"></i>
        </button>
        <div class="faq-answer">
          We understand that plans can change. All WanderLuxe packages include flexible date shifting up to 30 days prior to departure, alongside comprehensive travel insurance recommendations that protect you against unexpected interruptions.
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          <span>Are international flights included in your packages?</span>
          <i class="ph-bold ph-caret-down faq-icon"></i>
        </button>
        <div class="faq-answer">
          Our package prices include all in-country domestic flights, private chauffeur transport, scenic rail journeys (such as the Glacier Express), and VIP ferry passes. International long-haul flights can be added upon request by our air ticketing department.
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  // Dynamic WhatsApp Submission Helper for the form
  document.getElementById('directWaSubmitBtn')?.addEventListener('click', function() {
    const name = document.getElementById('full_name')?.value || 'Traveler';
    const destination = document.getElementById('destination')?.value || 'Custom Destination';
    const pkg = document.getElementById('package_name')?.value || 'Custom Package';
    const date = document.getElementById('travel_date')?.value || 'Upcoming';
    const guests = document.getElementById('guests')?.value || '2';
    const notes = document.getElementById('message')?.value || '';

    const text = `Hello WanderLuxe Concierge!\nMy Name: ${name}\nDestination: ${destination}\nPackage: ${pkg}\nTravel Date: ${date}\nGuests: ${guests}\nNotes: ${notes}\n\nI would like to receive pricing and availability.`;
    
    sendToWhatsApp(text);
  });
</script>

<?= $this->endSection() ?>
