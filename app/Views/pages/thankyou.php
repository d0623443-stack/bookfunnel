<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-K26WH38H');</script>
  <!-- End Google Tag Manager -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title ?? 'Thank You - Nexora IT Consultation') ?></title>
  <link rel="icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            heading: ['Outfit', 'sans-serif'],
          },
          colors: {
            brand: {
              400: '#22d3ee',
              500: '#06b6d4',
            },
            whatsapp: {
              DEFAULT: '#25D366',
              hover: '#1ebe57',
            },
            dark: {
              bg: '#070b14',
              surface: '#0d1527',
              card: '#111c35',
            }
          }
        }
      }
    }
  </script>

  <!-- Phosphor Icons -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>

  <style>
    .glass-card {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.01) 100%);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    .glow-cyan {
      box-shadow: 0 0 35px rgba(6, 182, 212, 0.3);
    }
    .glow-whatsapp {
      box-shadow: 0 0 25px rgba(37, 211, 102, 0.4);
    }
  </style>
</head>
<body class="bg-dark-bg text-slate-100 font-sans antialiased min-h-screen selection:bg-cyan-500 selection:text-white flex flex-col justify-between">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K26WH38H"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Minimal Header -->
  <header class="border-b border-white/10 backdrop-blur-xl bg-dark-bg/80 py-4 px-6">
    <div class="max-w-5xl mx-auto flex items-center justify-between">
      <a href="<?= base_url('/') ?>" class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-500 via-indigo-600 to-purple-600 flex items-center justify-center text-white shadow-lg">
          <i class="ph-bold ph-cpu text-2xl"></i>
        </div>
        <span class="font-heading font-extrabold text-xl tracking-tight text-white">
          Nexora<span class="text-cyan-400">.IT</span>
        </span>
      </a>

      <div class="flex items-center gap-3">
        <a href="tel:+15553828687" class="text-xs font-bold text-slate-300 hover:text-white flex items-center gap-1.5 transition">
          <i class="ph-bold ph-phone text-cyan-400"></i> +1 (555) 382-8687
        </a>
        <a href="<?= base_url('/') ?>" class="px-4 py-2 rounded-xl bg-white/10 hover:bg-white/15 text-xs font-bold text-white transition">
          Return Home
        </a>
      </div>
    </div>
  </header>

  <!-- Thank You Hero & Receipt Section -->
  <main class="py-12 px-4 sm:px-6 flex-grow flex items-center justify-center relative overflow-hidden">
    
    <!-- Glossy Gradient Blending background -->
    <div class="absolute inset-0 pointer-events-none">
      <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[650px] h-[500px] bg-gradient-to-tr from-emerald-500/20 via-cyan-500/20 to-indigo-600/25 blur-[120px] rounded-full"></div>
    </div>

    <div class="relative max-w-3xl w-full">
      
      <!-- Main Card -->
      <div class="glass-card rounded-3xl p-8 sm:p-12 border border-white/10 shadow-2xl space-y-8 text-center sm:text-left">
        
        <!-- Header & Checkmark Badge -->
        <div class="flex flex-col sm:flex-row items-center gap-6">
          <div class="w-20 h-20 rounded-3xl bg-gradient-to-tr from-emerald-500 to-teal-400 text-dark-bg flex items-center justify-center text-4xl shadow-xl shadow-emerald-500/30 shrink-0 animate-bounce">
            <i class="ph-bold ph-check"></i>
          </div>
          <div>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 text-xs font-bold border border-emerald-500/30 mb-2">
              <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
              Consultation Successfully Registered
            </span>
            <h1 class="font-heading text-3xl sm:text-4xl font-black text-white">
              Thank You, <?= esc($ticket['full_name'] ?? 'Partner') ?>!
            </h1>
            <p class="text-slate-400 text-sm sm:text-base mt-1">
              Your technical consultation request has been queued in our Solutions Engineering pipeline.
            </p>
          </div>
        </div>

        <!-- Ticket Reference Code Banner -->
        <?php $tid = $ticket['ticket_id'] ?? $ticket_id ?? 'NEX-2610-CONFIRMED'; ?>
        <div class="p-6 rounded-2xl bg-slate-900/90 border border-cyan-500/30 flex flex-col sm:flex-row items-center justify-between gap-4">
          <div>
            <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">
              Consultation Ticket Reference ID
            </span>
            <span class="font-mono text-2xl sm:text-3xl font-black text-cyan-400 tracking-wider">
              <?= esc($tid) ?>
            </span>
          </div>

          <button type="button" id="copyTicketBtn" data-ticket="<?= esc($tid) ?>" class="px-5 py-2.5 rounded-xl bg-cyan-500/15 hover:bg-cyan-500/25 border border-cyan-500/40 text-cyan-300 font-bold text-xs transition flex items-center gap-2">
            <i class="ph-bold ph-copy text-base"></i>
            <span id="copyBtnText">Copy Ticket ID</span>
          </button>
        </div>

        <!-- Summary Details Grid -->
        <div class="p-6 rounded-2xl bg-white/[0.02] border border-white/10 grid grid-cols-1 sm:grid-cols-2 gap-5 text-sm">
          <div>
            <span class="text-xs uppercase text-slate-500 font-bold block">Client Name</span>
            <span class="font-bold text-white"><?= esc($ticket['full_name'] ?? 'N/A') ?></span>
          </div>

          <div>
            <span class="text-xs uppercase text-slate-500 font-bold block">Company</span>
            <span class="font-bold text-white"><?= esc($ticket['company_name'] ?? 'Not specified') ?></span>
          </div>

          <div>
            <span class="text-xs uppercase text-slate-500 font-bold block">Primary Email</span>
            <span class="font-bold text-white"><?= esc($ticket['email'] ?? 'N/A') ?></span>
          </div>

          <div>
            <span class="text-xs uppercase text-slate-500 font-bold block">Phone / WhatsApp</span>
            <span class="font-bold text-white"><?= esc($ticket['phone'] ?? 'N/A') ?></span>
          </div>

          <div>
            <span class="text-xs uppercase text-slate-500 font-bold block">Service Requested</span>
            <span class="font-bold text-cyan-400"><?= esc($ticket['service_needed'] ?? 'IT Consultation') ?></span>
          </div>

          <div>
            <span class="text-xs uppercase text-slate-500 font-bold block">Budget & Timeline</span>
            <span class="font-bold text-emerald-400"><?= esc($ticket['budget_range'] ?? '$10k-$25k') ?> &bull; <?= esc($ticket['timeline'] ?? '1-3 Mos') ?></span>
          </div>

          <?php if (!empty($ticket['project_details'])): ?>
            <div class="sm:col-span-2 pt-2 border-t border-white/5">
              <span class="text-xs uppercase text-slate-500 font-bold block">Project Scope Notes</span>
              <p class="text-slate-300 text-xs mt-1 leading-relaxed"><?= esc($ticket['project_details']) ?></p>
            </div>
          <?php endif; ?>
        </div>

        <!-- WhatsApp Expedited Sync Box -->
        <div class="rounded-2xl p-6 bg-gradient-to-r from-emerald-950/70 via-slate-900 to-teal-950/70 border border-whatsapp/40 space-y-4">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-xl bg-whatsapp text-white flex items-center justify-center text-2xl shrink-0 shadow-lg shadow-whatsapp/30">
              <i class="ph-bold ph-whatsapp-logo"></i>
            </div>
            <div>
              <h4 class="font-heading font-bold text-lg text-white">Need An Immediate 5-Minute Technical Review?</h4>
              <p class="text-xs sm:text-sm text-slate-300">
                Forward your Ticket ID straight to our Lead Solutions Architect on WhatsApp for instant confirmation and immediate NDA signing.
              </p>
            </div>
          </div>

          <?php
            $waMsg = "Hello Nexora IT Solutions!\n"
                   . "I have just submitted an enterprise consultation request.\n"
                   . "Ticket ID: " . $tid . "\n"
                   . "Name: " . ($ticket['full_name'] ?? '') . "\n"
                   . "Company: " . ($ticket['company_name'] ?? '') . "\n"
                   . "Service: " . ($ticket['service_needed'] ?? '') . "\n"
                   . "Please review my requirements and advise next steps.";
          ?>
          <a href="https://wa.me/15553828687?text=<?= urlencode($waMsg) ?>" target="_blank" class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-whatsapp hover:bg-whatsapp-hover text-white font-extrabold text-sm shadow-xl shadow-whatsapp/30 flex items-center justify-center gap-2 transition-transform hover:scale-105">
            <i class="ph-bold ph-whatsapp-logo text-xl"></i>
            <span>Send Ticket Details via WhatsApp Now</span>
          </a>
        </div>

        <!-- Next Steps & Direct Call -->
        <div class="pt-4 flex flex-wrap items-center justify-between gap-4 border-t border-white/10 text-xs">
          <div class="flex items-center gap-2 text-slate-400">
            <i class="ph-bold ph-clock text-cyan-400 text-base"></i>
            <span>Expected response SLA: <strong>Under 2 Business Hours</strong></span>
          </div>

          <div class="flex items-center gap-3">
            <a href="tel:+15553828687" class="px-4 py-2.5 rounded-xl border border-white/15 text-slate-200 hover:text-white hover:border-cyan-400 transition font-bold flex items-center gap-2">
              <i class="ph-bold ph-phone-call text-cyan-400"></i> Call Architect
            </a>
            <a href="<?= base_url('/') ?>" class="px-5 py-2.5 rounded-xl bg-gradient-to-r from-cyan-500 to-indigo-600 hover:from-cyan-400 hover:to-indigo-500 text-white font-bold transition">
              Back to Nexora Home
            </a>
          </div>
        </div>

      </div>

    </div>

  </main>

  <!-- Footer -->
  <footer class="border-t border-white/10 py-6 text-center text-xs text-slate-500">
    <div class="max-w-5xl mx-auto px-4 flex flex-col sm:flex-row items-center justify-between gap-2">
      <p>&copy; <?= date('Y') ?> Nexora IT Solutions. All rights reserved.</p>
      <a href="<?= base_url('inquiries') ?>" class="text-cyan-400 hover:underline">Internal Inquiries Manager</a>
    </div>
  </footer>

  <!-- Script for Copy Ticket ID -->
  <script>
    document.getElementById('copyTicketBtn')?.addEventListener('click', function() {
      const code = this.getAttribute('data-ticket');
      if (code) {
        navigator.clipboard.writeText(code).then(() => {
          const btnText = document.getElementById('copyBtnText');
          if (btnText) {
            btnText.innerText = 'Copied to Clipboard!';
            setTimeout(() => {
              btnText.innerText = 'Copy Ticket ID';
            }, 2000);
          }
        });
      }
    });
  </script>

</body>
</html>
