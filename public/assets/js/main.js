/**
 * WanderLuxe Tourism - Interactive JavaScript
 */

document.addEventListener('DOMContentLoaded', function () {
  // Mobile Nav Drawer Toggle
  const mobileToggle = document.getElementById('mobileNavToggle');
  const mobileDrawer = document.getElementById('mobileDrawer');
  const mobileBackdrop = document.getElementById('mobileBackdrop');
  const mobileClose = document.getElementById('mobileDrawerClose');

  function openMobileNav() {
    if (mobileDrawer) mobileDrawer.classList.add('open');
    if (mobileBackdrop) mobileBackdrop.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeMobileNav() {
    if (mobileDrawer) mobileDrawer.classList.remove('open');
    if (mobileBackdrop) mobileBackdrop.classList.remove('open');
    document.body.style.overflow = '';
  }

  if (mobileToggle) mobileToggle.addEventListener('click', openMobileNav);
  if (mobileClose) mobileClose.addEventListener('click', closeMobileNav);
  if (mobileBackdrop) mobileBackdrop.addEventListener('click', closeMobileNav);

  // Floating WhatsApp Widget
  const waBtn = document.getElementById('waFloatingBtn');
  const waBox = document.getElementById('waChatBox');
  const waClose = document.getElementById('waCloseBtn');

  if (waBtn && waBox) {
    waBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      waBox.classList.toggle('show');
    });

    if (waClose) {
      waClose.addEventListener('click', function (e) {
        e.stopPropagation();
        waBox.classList.remove('show');
      });
    }

    // Close when clicking outside
    document.addEventListener('click', function (e) {
      if (waBox.classList.contains('show') && !waBox.contains(e.target) && e.target !== waBtn) {
        waBox.classList.remove('show');
      }
    });
  }

  // Quick WhatsApp preset options
  const waPresetBtns = document.querySelectorAll('.wa-option-btn');
  waPresetBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      const msg = this.getAttribute('data-msg') || 'Hi WanderLuxe, I would like to inquire about a tour package!';
      sendToWhatsApp(msg);
    });
  });

  // FAQ Accordion
  const faqQuestions = document.querySelectorAll('.faq-question');
  faqQuestions.forEach(btn => {
    btn.addEventListener('click', function () {
      const parent = this.closest('.faq-item');
      if (parent) {
        const isActive = parent.classList.contains('active');
        // Close other items
        document.querySelectorAll('.faq-item').forEach(item => item.classList.remove('active'));
        if (!isActive) {
          parent.classList.add('active');
        }
      }
    });
  });

  // Client-side Category Filter for Destinations
  const destTabs = document.querySelectorAll('[data-filter-category]');
  const destCards = document.querySelectorAll('.destination-card');

  destTabs.forEach(tab => {
    tab.addEventListener('click', function (e) {
      const category = this.getAttribute('data-filter-category');
      
      // Update active tab class
      destTabs.forEach(t => t.classList.remove('active'));
      this.classList.add('active');

      if (!destCards.length) return; // if not on destinations page

      destCards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');
        if (category === 'all' || cardCategory === category) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Animated counters on numbers
  const statNumbers = document.querySelectorAll('.stat-counter');
  if ('IntersectionObserver' in window && statNumbers.length > 0) {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const targetNum = parseInt(el.getAttribute('data-target') || el.innerText, 10);
          animateCount(el, targetNum);
          obs.unobserve(el);
        }
      });
    }, { threshold: 0.5 });

    statNumbers.forEach(num => observer.observe(num));
  }

  function animateCount(element, target) {
    let start = 0;
    const duration = 1500;
    const stepTime = 20;
    const steps = duration / stepTime;
    const increment = target / steps;

    const timer = setInterval(() => {
      start += increment;
      if (start >= target) {
        element.innerText = target.toLocaleString();
        clearInterval(timer);
      } else {
        element.innerText = Math.floor(start).toLocaleString();
      }
    }, stepTime);
  }

  // Copy booking reference code
  const copyBtn = document.getElementById('copyRefBtn');
  if (copyBtn) {
    copyBtn.addEventListener('click', function () {
      const refCode = this.getAttribute('data-ref');
      if (refCode) {
        navigator.clipboard.writeText(refCode).then(() => {
          const original = this.innerHTML;
          this.innerHTML = '✓ Copied!';
          setTimeout(() => {
            this.innerHTML = original;
          }, 2000);
        });
      }
    });
  }
});

/**
 * Direct WhatsApp Helper function
 * Opens official WhatsApp API with prefilled message
 */
function sendToWhatsApp(message, phone = '15553828687') {
  const encoded = encodeURIComponent(message);
  const waUrl = `https://wa.me/${phone}?text=${encoded}`;
  window.open(waUrl, '_blank');
}
