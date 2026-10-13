<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
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
  <title><?= esc($title ?? 'Nexora IT - Enterprise Cloud, Custom Software, AI & Cyber Solutions') ?></title>
  <meta name="description" content="<?= esc($meta_description ?? 'Enterprise IT engineering, custom software development, AWS/Azure cloud migration, and 24/7 managed cybersecurity.') ?>">
  <link rel="icon" href="<?= base_url('favicon.ico') ?>" type="image/x-icon">

  <!-- Google Fonts: Inter & Outfit -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

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
              50: '#ecfeff',
              100: '#cffafe',
              400: '#22d3ee',
              500: '#06b6d4',
              600: '#0891b2',
              700: '#0e7490',
            },
            whatsapp: {
              DEFAULT: '#25D366',
              dark: '#128C7E',
              hover: '#1ebe57',
              light: '#dcfce7',
            },
            dark: {
              bg: '#070b14',
              surface: '#0d1527',
              card: '#111c35',
              border: 'rgba(255, 255, 255, 0.08)',
            }
          },
          backgroundImage: {
            'glossy-radial': 'radial-gradient(ellipse 80% 50% at 50% -20%, rgba(34, 211, 238, 0.25), rgba(99, 102, 241, 0.15), rgba(7, 11, 20, 0))',
            'glossy-mesh': 'radial-gradient(at 0% 0%, rgba(6, 182, 212, 0.18) 0px, transparent 50%), radial-gradient(at 100% 0%, rgba(139, 92, 246, 0.18) 0px, transparent 50%), radial-gradient(at 50% 100%, rgba(59, 130, 246, 0.15) 0px, transparent 50%)',
          }
        }
      }
    }
  </script>

  <!-- Phosphor Icons -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>

  <style>
    /* Custom glossy glow utilities */
    .glass-card {
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.01) 100%);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    .glass-card:hover {
      border-color: rgba(34, 211, 238, 0.35);
      box-shadow: 0 10px 40px -10px rgba(6, 182, 212, 0.2);
    }
    .glow-cyan {
      box-shadow: 0 0 30px rgba(6, 182, 212, 0.35);
    }
    .glow-whatsapp {
      box-shadow: 0 0 25px rgba(37, 211, 102, 0.45);
    }
    @keyframes pulse-ring {
      0% { transform: scale(1); opacity: 0.8; }
      100% { transform: scale(1.5); opacity: 0; }
    }
    .pulse-ring-effect::after {
      content: '';
      position: absolute;
      inset: -4px;
      border-radius: 9999px;
      border: 2px solid #25D366;
      animation: pulse-ring 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
  </style>
</head>
<body class="bg-dark-bg text-slate-100 font-sans antialiased overflow-x-hidden selection:bg-cyan-500 selection:text-white">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K26WH38H"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- =========================================================================
       1. Top Info Bar & Emergency Support
       ========================================================================= -->
  <div class="bg-slate-950/90 border-b border-white/5 py-2 px-4 text-xs text-slate-400">
    <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center gap-3">
      <div class="flex items-center gap-4">
        <span class="inline-flex items-center gap-1.5 text-emerald-400 font-medium">
          <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
          All Systems Operational (99.99% SLA)
        </span>
        <span class="hidden md:inline-block text-slate-600">|</span>
        <span class="hidden md:inline-flex items-center gap-1">
          <i class="ph-bold ph-shield-check text-cyan-400"></i> ISO 27001 & SOC 2 Type II Certified
        </span>
      </div>

      <div class="flex items-center gap-4 font-medium">
        <a href="tel:+15553828687" class="hover:text-white transition flex items-center gap-1.5 text-slate-300">
          <i class="ph-bold ph-phone-call text-cyan-400"></i>
          <span>Direct Hotline: +1 (555) 382-8687</span>
        </a>
        <a href="https://wa.me/15553828687?text=Hello%20Nexora%20IT%20Team!%20I'm%20inquiring%20about%20enterprise%20IT%20services." target="_blank" class="text-whatsapp hover:text-emerald-300 transition flex items-center gap-1 bg-whatsapp/10 px-2.5 py-0.5 rounded-full border border-whatsapp/20">
          <i class="ph-bold ph-whatsapp-logo"></i> 24/7 WhatsApp Desk
        </a>
      </div>
    </div>
  </div>

  <!-- =========================================================================
       2. Sticky Navigation Header
       ========================================================================= -->
  <header class="sticky top-0 z-50 backdrop-blur-xl bg-dark-bg/80 border-b border-white/10 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
      
      <!-- Logo -->
      <a href="<?= base_url('/') ?>" class="flex items-center gap-3 group">
        <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-cyan-500 via-indigo-600 to-purple-600 flex items-center justify-center text-white shadow-lg shadow-cyan-500/20 group-hover:scale-105 transition-transform duration-300">
          <i class="ph-bold ph-cpu text-2xl"></i>
        </div>
        <div>
          <span class="font-heading font-extrabold text-2xl tracking-tight text-white flex items-center gap-1">
            Nexora<span class="text-cyan-400">.IT</span>
          </span>
          <span class="block text-[10px] tracking-widest text-slate-400 uppercase -mt-1 font-semibold">Enterprise Solutions</span>
        </div>
      </a>

      <!-- Desktop Nav Links -->
      <nav class="hidden lg:flex items-center gap-8 text-sm font-semibold text-slate-300">
        <a href="#services" class="hover:text-cyan-400 transition-colors">IT Services</a>
        <a href="#solutions" class="hover:text-cyan-400 transition-colors">Solutions</a>
        <a href="#tech-stack" class="hover:text-cyan-400 transition-colors">Tech Stack</a>
        <a href="#case-studies" class="hover:text-cyan-400 transition-colors">Metrics</a>
        <a href="#why-us" class="hover:text-cyan-400 transition-colors">Why Nexora</a>
        <a href="#contact-form" class="hover:text-cyan-400 transition-colors">Consultation</a>
      </nav>

      <!-- Action Buttons: Call & WhatsApp -->
      <div class="flex items-center gap-3">
        <!-- Direct Call -->
        <a href="tel:+15553828687" class="hidden sm:inline-flex items-center gap-2 px-4 py-2.5 rounded-full border border-white/15 text-slate-200 hover:text-white hover:border-cyan-400/50 hover:bg-white/5 transition text-sm font-semibold">
          <i class="ph-bold ph-phone-call text-cyan-400"></i>
          <span>Call Us</span>
        </a>

        <!-- WhatsApp Button -->
        <a href="https://wa.me/15553828687?text=Hi%20Nexora%20IT%20Team!%20I%20would%20like%20to%20consult%20with%20an%20IT%20specialist." target="_blank" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-full bg-whatsapp hover:bg-whatsapp-hover text-white font-bold text-sm shadow-lg shadow-whatsapp/25 transition-all hover:scale-105">
          <i class="ph-bold ph-whatsapp-logo text-lg"></i>
          <span class="hidden sm:inline">WhatsApp</span>
        </a>

        <!-- Quote Form Anchor -->
        <a href="#contact-form" class="hidden md:inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gradient-to-r from-cyan-500 to-indigo-600 hover:from-cyan-400 hover:to-indigo-500 text-white font-bold text-sm shadow-lg shadow-cyan-500/20 transition-all hover:scale-105">
          <span>Get Quote</span>
          <i class="ph-bold ph-arrow-right"></i>
        </a>
      </div>
    </div>
  </header>

  <!-- =========================================================================
       3. Hero Section with Glossy Gradient Blending
       ========================================================================= -->
  <section class="relative pt-16 pb-28 md:pt-24 md:pb-36 overflow-hidden">
    <!-- Glossy Gradient Blending Orbs & Backdrop -->
    <div class="absolute inset-0 pointer-events-none">
      <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[800px] h-[550px] bg-gradient-to-b from-cyan-500/25 via-indigo-600/20 to-transparent blur-3xl rounded-full opacity-80"></div>
      <div class="absolute top-1/4 -left-40 w-[550px] h-[550px] bg-gradient-to-tr from-purple-600/20 via-pink-600/15 to-transparent blur-[120px] rounded-full"></div>
      <div class="absolute top-1/3 -right-40 w-[600px] h-[600px] bg-gradient-to-tl from-cyan-400/20 via-blue-600/20 to-transparent blur-[120px] rounded-full"></div>
      <div class="absolute inset-0 bg-glossy-mesh opacity-90"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
        
        <!-- Hero Left Column: Headlines & CTAs -->
        <div class="lg:col-span-7 space-y-8">
          
          <!-- Badge -->
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-card border border-cyan-500/30 text-cyan-300 text-xs sm:text-sm font-semibold tracking-wide">
            <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
            <span>Next-Gen Enterprise Cloud, AI & Software Engineering</span>
          </div>

          <!-- Main Glossy Title -->
          <h1 class="font-heading text-4xl sm:text-6xl lg:text-6xl font-black tracking-tight leading-[1.1] text-white">
            Engineering High-Impact <br class="hidden sm:block">
            <span class="bg-gradient-to-r from-cyan-400 via-indigo-300 to-purple-400 bg-clip-text text-transparent">
              Enterprise IT Infrastructure
            </span>
            & Software.
          </h1>

          <!-- Subtitle -->
          <p class="text-slate-300 text-lg sm:text-xl leading-relaxed max-w-2xl font-normal">
            Nexora accelerates modern businesses through bulletproof cloud architectures, custom SaaS applications, proactive AI automation, and zero-trust cybersecurity defense.
          </p>

          <!-- Action CTAs: Form, Call, WhatsApp -->
          <div class="flex flex-wrap items-center gap-4 pt-2">
            <!-- Submit Quote CTA -->
            <a href="#contact-form" class="px-7 py-4 rounded-xl bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 hover:from-cyan-400 hover:to-indigo-500 text-white font-extrabold text-base shadow-xl shadow-cyan-500/25 transition-all hover:scale-105 flex items-center gap-2">
              <i class="ph-bold ph-paper-plane-tilt text-xl"></i>
              <span>Request Free IT Quote</span>
            </a>

            <!-- Direct WhatsApp CTA -->
            <a href="https://wa.me/15553828687?text=Hello%20Nexora%20IT!%20I'm%20looking%20for%20an%20immediate%20IT%20consultation." target="_blank" class="px-6 py-4 rounded-xl bg-whatsapp hover:bg-whatsapp-hover text-white font-bold text-base shadow-lg shadow-whatsapp/30 transition-all hover:scale-105 flex items-center gap-2.5">
              <i class="ph-bold ph-whatsapp-logo text-2xl"></i>
              <span>WhatsApp Chat</span>
            </a>

            <!-- Direct Call CTA -->
            <a href="tel:+15553828687" class="px-6 py-4 rounded-xl glass-card border border-white/20 text-white hover:border-cyan-400/60 hover:bg-white/10 font-bold text-base transition-all flex items-center gap-2">
              <i class="ph-bold ph-phone-call text-cyan-400 text-xl"></i>
              <span>Direct Call</span>
            </a>
          </div>

          <!-- Trust KPIs & SLA badges -->
          <div class="pt-6 grid grid-cols-3 gap-6 border-t border-white/10 max-w-xl">
            <div>
              <div class="font-heading font-black text-2xl sm:text-3xl text-white">99.99%</div>
              <p class="text-xs text-slate-400 font-medium mt-1">Uptime SLA Guaranteed</p>
            </div>
            <div>
              <div class="font-heading font-black text-2xl sm:text-3xl text-cyan-400">15 Min</div>
              <p class="text-xs text-slate-400 font-medium mt-1">Incident Response Time</p>
            </div>
            <div>
              <div class="font-heading font-black text-2xl sm:text-3xl text-purple-400">250+</div>
              <p class="text-xs text-slate-400 font-medium mt-1">Enterprise Deployments</p>
            </div>
          </div>

        </div>

        <!-- Hero Right Column: Glossy Interactive Tech Terminal Card -->
        <div class="lg:col-span-5 relative">
          
          <!-- Glossy Outer Ring Frame -->
          <div class="relative rounded-3xl p-1 bg-gradient-to-br from-cyan-400/40 via-indigo-500/20 to-purple-500/40 shadow-2xl shadow-cyan-500/20">
            <div class="rounded-[22px] bg-dark-surface/95 backdrop-blur-2xl p-6 sm:p-8 space-y-6 border border-white/10">
              
              <!-- Card Header -->
              <div class="flex items-center justify-between pb-4 border-b border-white/10">
                <div class="flex items-center gap-2.5">
                  <span class="w-3.5 h-3.5 rounded-full bg-rose-500/80"></span>
                  <span class="w-3.5 h-3.5 rounded-full bg-amber-500/80"></span>
                  <span class="w-3.5 h-3.5 rounded-full bg-emerald-500/80"></span>
                  <span class="text-xs font-mono text-slate-400 ml-2">nexora-cloud-core.sh</span>
                </div>
                <span class="px-2.5 py-1 rounded-md text-[11px] font-mono font-bold bg-cyan-500/10 text-cyan-400 border border-cyan-500/30">
                  LIVE STATUS
                </span>
              </div>

              <!-- Terminal Diagnostic Stream -->
              <div class="font-mono text-xs sm:text-sm space-y-2 text-slate-300">
                <p class="text-slate-500">// Real-Time Infrastructure Monitoring</p>
                <p class="text-emerald-400 font-semibold"><span class="text-slate-500">&gt;</span> Cloud Architecture: ACTIVE [Kubernetes / AWS]</p>
                <p class="text-cyan-400"><span class="text-slate-500">&gt;</span> Zero-Trust Firewalls: 0 Threats Detected</p>
                <p class="text-purple-300"><span class="text-slate-500">&gt;</span> AI Inference Latency: 22ms (Global Edge)</p>
                <p class="text-amber-300"><span class="text-slate-500">&gt;</span> Enterprise Backup: 100% Synced / Immutable</p>
              </div>

              <!-- Live Engineer Availability Card -->
              <div class="glass-card rounded-2xl p-4 border border-emerald-500/30 flex items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                  <div class="relative">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80" alt="Lead Architect" class="w-12 h-12 rounded-full object-cover border-2 border-emerald-400">
                    <span class="absolute bottom-0 right-0 w-3.5 h-3.5 rounded-full bg-emerald-400 border-2 border-dark-surface"></span>
                  </div>
                  <div>
                    <h4 class="text-sm font-bold text-white">Lead Cloud Architect</h4>
                    <p class="text-xs text-emerald-400 font-medium">Available on WhatsApp & Call</p>
                  </div>
                </div>

                <a href="https://wa.me/15553828687?text=Hi!%20I%20saw%20your%20Lead%20Architect%20online%20and%20would%20like%20to%20discuss%20a%20project." target="_blank" class="w-10 h-10 rounded-xl bg-whatsapp flex items-center justify-center text-white text-xl hover:scale-110 transition shadow-md shadow-whatsapp/30">
                  <i class="ph-bold ph-whatsapp-logo"></i>
                </a>
              </div>

              <!-- Quick Action Row -->
              <div class="grid grid-cols-2 gap-3 pt-2">
                <a href="tel:+15553828687" class="py-3 px-4 rounded-xl glass-card text-center text-xs font-bold text-slate-200 hover:text-white hover:border-cyan-400/50 transition flex items-center justify-center gap-2">
                  <i class="ph-bold ph-phone text-cyan-400"></i> +1 555-382-8687
                </a>
                <a href="#contact-form" class="py-3 px-4 rounded-xl bg-cyan-500/20 text-cyan-300 border border-cyan-500/40 hover:bg-cyan-500/30 text-center text-xs font-bold transition flex items-center justify-center gap-2">
                  <i class="ph-bold ph-calculator"></i> Calculate Cost
                </a>
              </div>

            </div>
          </div>

          <!-- Glossy floating badge -->
          <div class="absolute -bottom-6 -left-6 hidden sm:flex items-center gap-3 p-3.5 glass-card rounded-2xl shadow-xl border border-white/20">
            <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-xl">
              <i class="ph-bold ph-lock-key"></i>
            </div>
            <div>
              <div class="text-xs font-bold text-white">Enterprise SLA Guarantee</div>
              <div class="text-[10px] text-slate-400">Financial compensation for downtime</div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       4. Partner Logos / Enterprise Trust Strip
       ========================================================================= -->
  <section class="border-y border-white/10 bg-slate-950/40 py-8">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <p class="text-xs font-bold tracking-widest text-slate-400 uppercase mb-6">
        Trusted by Modern High-Growth Companies & Global Enterprises
      </p>
      <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-70">
        <span class="flex items-center gap-2 text-slate-300 font-heading font-extrabold text-lg"><i class="ph-bold ph-cloud text-cyan-400 text-2xl"></i> AWS Partner</span>
        <span class="flex items-center gap-2 text-slate-300 font-heading font-extrabold text-lg"><i class="ph-bold ph-windows-logo text-blue-400 text-2xl"></i> Microsoft Azure</span>
        <span class="flex items-center gap-2 text-slate-300 font-heading font-extrabold text-lg"><i class="ph-bold ph-google-chrome-logo text-emerald-400 text-2xl"></i> Google Cloud</span>
        <span class="flex items-center gap-2 text-slate-300 font-heading font-extrabold text-lg"><i class="ph-bold ph-shield-check text-purple-400 text-2xl"></i> Cloudflare Enterprise</span>
        <span class="flex items-center gap-2 text-slate-300 font-heading font-extrabold text-lg"><i class="ph-bold ph-git-branch text-amber-400 text-2xl"></i> GitLab Certified</span>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       5. Core IT Services (6 Pillar Offerings)
       ========================================================================= -->
  <section id="services" class="py-24 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-500/10 text-cyan-400 text-xs font-bold tracking-wide border border-cyan-500/20">
          <i class="ph-bold ph-sparkle"></i> Full-Lifecycle Capabilities
        </div>
        <h2 class="font-heading text-3xl sm:text-5xl font-extrabold text-white">
          Comprehensive IT Services Built For High Scale
        </h2>
        <p class="text-slate-400 text-base sm:text-lg">
          From full-stack custom engineering to 24/7 proactive security monitoring, we build and maintain technology foundations that never break.
        </p>
      </div>

      <!-- Services Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Service 1: Custom Software Engineering -->
        <div class="glass-card rounded-3xl p-8 space-y-6 flex flex-col justify-between group">
          <div class="space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center text-3xl group-hover:scale-110 group-hover:bg-cyan-500 group-hover:text-dark-bg transition-all duration-300">
              <i class="ph-bold ph-code"></i>
            </div>
            <h3 class="font-heading font-extrabold text-2xl text-white group-hover:text-cyan-400 transition-colors">
              Custom Software & Web Engineering
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed">
              Bespoke SaaS platforms, enterprise web applications, and mission-critical microservices developed with modern frameworks, clean code, and zero technical debt.
            </p>
            <ul class="space-y-2 text-xs text-slate-300 pt-2 font-medium">
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-cyan-400"></i> Full-Stack Web & Mobile Apps</li>
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-cyan-400"></i> High-Throughput REST & GraphQL APIs</li>
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-cyan-400"></i> Legacy System Modernization</li>
            </ul>
          </div>

          <div class="pt-6 border-t border-white/10 flex items-center justify-between">
            <a href="https://wa.me/15553828687?text=Hi%20Nexora!%20I'm%20interested%20in%20Custom%20Software%20Engineering%20services." target="_blank" class="text-whatsapp hover:text-emerald-300 font-bold text-xs flex items-center gap-1.5 transition">
              <i class="ph-bold ph-whatsapp-logo text-base"></i> Inquire on WhatsApp
            </a>
            <a href="#contact-form" class="text-xs font-bold text-cyan-400 hover:text-cyan-300 flex items-center gap-1">
              Request Quote &rarr;
            </a>
          </div>
        </div>

        <!-- Service 2: Cloud Migration & DevOps -->
        <div class="glass-card rounded-3xl p-8 space-y-6 flex flex-col justify-between group">
          <div class="space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 text-indigo-400 flex items-center justify-center text-3xl group-hover:scale-110 group-hover:bg-indigo-500 group-hover:text-dark-bg transition-all duration-300">
              <i class="ph-bold ph-cloud-arrow-up"></i>
            </div>
            <h3 class="font-heading font-extrabold text-2xl text-white group-hover:text-indigo-400 transition-colors">
              Cloud Migration & DevOps Automation
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed">
              Architect scalable cloud environments across AWS, Azure, and Google Cloud with automated CI/CD pipelines, containerization, and cost optimization.
            </p>
            <ul class="space-y-2 text-xs text-slate-300 pt-2 font-medium">
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-indigo-400"></i> Kubernetes & Docker Orchestration</li>
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-indigo-400"></i> Infrastructure as Code (Terraform)</li>
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-indigo-400"></i> 40%+ Cloud Cost Reduction Audits</li>
            </ul>
          </div>

          <div class="pt-6 border-t border-white/10 flex items-center justify-between">
            <a href="https://wa.me/15553828687?text=Hi%20Nexora!%20I'm%20interested%20in%20Cloud%20Migration%20and%20DevOps." target="_blank" class="text-whatsapp hover:text-emerald-300 font-bold text-xs flex items-center gap-1.5 transition">
              <i class="ph-bold ph-whatsapp-logo text-base"></i> Inquire on WhatsApp
            </a>
            <a href="#contact-form" class="text-xs font-bold text-indigo-400 hover:text-indigo-300 flex items-center gap-1">
              Request Quote &rarr;
            </a>
          </div>
        </div>

        <!-- Service 3: Cybersecurity & Threat Defense -->
        <div class="glass-card rounded-3xl p-8 space-y-6 flex flex-col justify-between group">
          <div class="space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-rose-500/10 text-rose-400 flex items-center justify-center text-3xl group-hover:scale-110 group-hover:bg-rose-500 group-hover:text-dark-bg transition-all duration-300">
              <i class="ph-bold ph-shield-check"></i>
            </div>
            <h3 class="font-heading font-extrabold text-2xl text-white group-hover:text-rose-400 transition-colors">
              Cybersecurity & Compliance (SOC/ISO)
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed">
              Defend your proprietary data and critical operations with 24/7 Security Operations Center (SOC) monitoring, pen-testing, and compliance alignment.
            </p>
            <ul class="space-y-2 text-xs text-slate-300 pt-2 font-medium">
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-rose-400"></i> Zero-Trust Network & IAM Architecture</li>
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-rose-400"></i> Penetration Testing & Vulnerability Audits</li>
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-rose-400"></i> HIPAA, SOC2, GDPR Compliance Readiness</li>
            </ul>
          </div>

          <div class="pt-6 border-t border-white/10 flex items-center justify-between">
            <a href="https://wa.me/15553828687?text=Hi%20Nexora!%20We%20need%20Cybersecurity%20and%20compliance%20services." target="_blank" class="text-whatsapp hover:text-emerald-300 font-bold text-xs flex items-center gap-1.5 transition">
              <i class="ph-bold ph-whatsapp-logo text-base"></i> Inquire on WhatsApp
            </a>
            <a href="#contact-form" class="text-xs font-bold text-rose-400 hover:text-rose-300 flex items-center gap-1">
              Request Quote &rarr;
            </a>
          </div>
        </div>

        <!-- Service 4: AI & Machine Learning Systems -->
        <div class="glass-card rounded-3xl p-8 space-y-6 flex flex-col justify-between group">
          <div class="space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-purple-500/10 text-purple-400 flex items-center justify-center text-3xl group-hover:scale-110 group-hover:bg-purple-500 group-hover:text-dark-bg transition-all duration-300">
              <i class="ph-bold ph-brain"></i>
            </div>
            <h3 class="font-heading font-extrabold text-2xl text-white group-hover:text-purple-400 transition-colors">
              Enterprise AI & Data Pipelines
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed">
              Integrate private enterprise LLMs, RAG knowledge bases, and predictive data engineering to automate operations and unlock actionable business intelligence.
            </p>
            <ul class="space-y-2 text-xs text-slate-300 pt-2 font-medium">
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-purple-400"></i> Custom LLM Fine-Tuning & Private RAG</li>
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-purple-400"></i> Automated Document & Workflow Intelligence</li>
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-purple-400"></i> Snowflake & BigQuery Data Warehousing</li>
            </ul>
          </div>

          <div class="pt-6 border-t border-white/10 flex items-center justify-between">
            <a href="https://wa.me/15553828687?text=Hi%20Nexora!%20I'm%20inquiring%20about%20AI%20and%20Data%20Engineering%20solutions." target="_blank" class="text-whatsapp hover:text-emerald-300 font-bold text-xs flex items-center gap-1.5 transition">
              <i class="ph-bold ph-whatsapp-logo text-base"></i> Inquire on WhatsApp
            </a>
            <a href="#contact-form" class="text-xs font-bold text-purple-400 hover:text-purple-300 flex items-center gap-1">
              Request Quote &rarr;
            </a>
          </div>
        </div>

        <!-- Service 5: 24/7 Managed IT Infrastructure -->
        <div class="glass-card rounded-3xl p-8 space-y-6 flex flex-col justify-between group">
          <div class="space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center text-3xl group-hover:scale-110 group-hover:bg-emerald-500 group-hover:text-dark-bg transition-all duration-300">
              <i class="ph-bold ph-headset"></i>
            </div>
            <h3 class="font-heading font-extrabold text-2xl text-white group-hover:text-emerald-400 transition-colors">
              24/7 Managed IT & Helpdesk Concierge
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed">
              Eliminate technical downtime with dedicated Tier 1-3 helpdesk, automated server patch management, offsite backups, and disaster recovery.
            </p>
            <ul class="space-y-2 text-xs text-slate-300 pt-2 font-medium">
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-emerald-400"></i> Under 15-Minute SLA Incident Guarantee</li>
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-emerald-400"></i> Automated Cloud Backups & Ransomware Recovery</li>
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-emerald-400"></i> Employee IT Onboarding & Device Management</li>
            </ul>
          </div>

          <div class="pt-6 border-t border-white/10 flex items-center justify-between">
            <a href="https://wa.me/15553828687?text=Hi%20Nexora!%20We%20need%2024/7%20Managed%20IT%20Support%20and%20Helpdesk." target="_blank" class="text-whatsapp hover:text-emerald-300 font-bold text-xs flex items-center gap-1.5 transition">
              <i class="ph-bold ph-whatsapp-logo text-base"></i> Inquire on WhatsApp
            </a>
            <a href="#contact-form" class="text-xs font-bold text-emerald-400 hover:text-emerald-300 flex items-center gap-1">
              Request Quote &rarr;
            </a>
          </div>
        </div>

        <!-- Service 6: vCTO & Strategic Consulting -->
        <div class="glass-card rounded-3xl p-8 space-y-6 flex flex-col justify-between group">
          <div class="space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-amber-500/10 text-amber-400 flex items-center justify-center text-3xl group-hover:scale-110 group-hover:bg-amber-500 group-hover:text-dark-bg transition-all duration-300">
              <i class="ph-bold ph-compass"></i>
            </div>
            <h3 class="font-heading font-extrabold text-2xl text-white group-hover:text-amber-400 transition-colors">
              Virtual CTO & Digital Transformation
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed">
              Executive-level technical leadership without full-time executive overhead. Technology roadmapping, vendor evaluation, and M&A technical due diligence.
            </p>
            <ul class="space-y-2 text-xs text-slate-300 pt-2 font-medium">
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-amber-400"></i> Technical Architecture Roadmapping</li>
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-amber-400"></i> Vendor & Software Contract Negotiation</li>
              <li class="flex items-center gap-2"><i class="ph-bold ph-check text-amber-400"></i> Boardroom IT Strategy & Budget Planning</li>
            </ul>
          </div>

          <div class="pt-6 border-t border-white/10 flex items-center justify-between">
            <a href="https://wa.me/15553828687?text=Hi%20Nexora!%20I'm%20interested%20in%20vCTO%20and%20strategic%20consulting." target="_blank" class="text-whatsapp hover:text-emerald-300 font-bold text-xs flex items-center gap-1.5 transition">
              <i class="ph-bold ph-whatsapp-logo text-base"></i> Inquire on WhatsApp
            </a>
            <a href="#contact-form" class="text-xs font-bold text-amber-400 hover:text-amber-300 flex items-center gap-1">
              Request Quote &rarr;
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       6. High-Impact Call & WhatsApp Action Banner
       ========================================================================= -->
  <section class="py-16 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="relative rounded-3xl p-8 sm:p-12 bg-gradient-to-r from-cyan-950/80 via-slate-900 to-indigo-950/80 border border-cyan-500/30 shadow-2xl overflow-hidden">
        
        <!-- Glowing mesh behind -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-whatsapp/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
          <div class="lg:col-span-8 space-y-4">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-400 text-xs font-bold border border-emerald-500/20">
              <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span> Available Right Now
            </span>
            <h3 class="font-heading text-3xl sm:text-4xl font-black text-white">
              Have an Urgent Project or Need Immediate IT Support?
            </h3>
            <p class="text-slate-300 text-base max-w-2xl">
              Don’t wait days for an email reply. Speak directly with our Principal Solutions Architect on WhatsApp or via our priority telephone hotline.
            </p>
          </div>

          <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-4">
            <!-- Direct Call Button -->
            <a href="tel:+15553828687" class="px-6 py-4 rounded-2xl bg-white text-dark-bg hover:bg-slate-100 font-extrabold text-base shadow-xl flex items-center justify-center gap-3 transition-transform hover:scale-105">
              <i class="ph-bold ph-phone-call text-cyan-600 text-2xl"></i>
              <div class="text-left">
                <span class="block text-[10px] text-slate-500 font-bold uppercase tracking-wider">Direct Telephone</span>
                <span>+1 (555) 382-8687</span>
              </div>
            </a>

            <!-- Direct WhatsApp Button -->
            <a href="https://wa.me/15553828687?text=Hello%20Nexora%20Architect!%20I'm%20seeking%20urgent%20consultation%20regarding%20IT%20services." target="_blank" class="px-6 py-4 rounded-2xl bg-whatsapp hover:bg-whatsapp-hover text-white font-extrabold text-base shadow-xl shadow-whatsapp/30 flex items-center justify-center gap-3 transition-transform hover:scale-105">
              <i class="ph-bold ph-whatsapp-logo text-3xl"></i>
              <div class="text-left">
                <span class="block text-[10px] text-emerald-200 font-bold uppercase tracking-wider">Instant Chat</span>
                <span>Chat On WhatsApp</span>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       7. Interactive IT Consultation Form (Form Submission)
       ========================================================================= -->
  <section id="contact-form" class="py-24 relative">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Section Header -->
      <div class="text-center space-y-4 mb-14">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-500/10 text-cyan-400 text-xs font-bold tracking-wide border border-cyan-500/20">
          <i class="ph-bold ph-envelope"></i> Confidential Project Assessment
        </div>
        <h2 class="font-heading text-3xl sm:text-5xl font-black text-white">
          Request An Enterprise IT Proposal
        </h2>
        <p class="text-slate-400 text-base sm:text-lg max-w-2xl mx-auto">
          Share your technical requirements below. We provide an initial architecture outline, estimated timeline, and quote within 2 business hours.
        </p>
      </div>

      <!-- Success Notification Box -->
      <?php if (session()->getFlashdata('success')): ?>
        <?php $ticket = session()->getFlashdata('ticket') ?? []; ?>
        <div class="mb-10 rounded-3xl p-8 bg-gradient-to-r from-emerald-950/80 to-slate-900 border-2 border-emerald-500/50 shadow-2xl space-y-6">
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-2xl bg-emerald-500 text-white flex items-center justify-center text-3xl shadow-lg shadow-emerald-500/30">
              <i class="ph-bold ph-check"></i>
            </div>
            <div>
              <h3 class="font-heading text-2xl font-black text-white">Proposal Request Received!</h3>
              <p class="text-sm text-emerald-300 font-medium"><?= session()->getFlashdata('success') ?></p>
            </div>
          </div>

          <div class="p-6 rounded-2xl bg-slate-900/90 border border-white/10 grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm">
            <div>
              <span class="text-xs uppercase text-slate-400 font-bold block">Consultation Ticket ID</span>
              <span class="font-mono font-bold text-cyan-400 text-lg"><?= esc($ticket['ticket_id'] ?? 'NEX-PENDING') ?></span>
            </div>
            <div>
              <span class="text-xs uppercase text-slate-400 font-bold block">Service Requested</span>
              <span class="font-bold text-white"><?= esc($ticket['service_needed'] ?? 'IT Consultation') ?></span>
            </div>
            <div>
              <span class="text-xs uppercase text-slate-400 font-bold block">Assigned Engineer</span>
              <span class="font-bold text-emerald-400">Senior Cloud Solutions Architect</span>
            </div>
          </div>

          <!-- Instant WhatsApp Continuation -->
          <?php
            $waMsg = "Hello Nexora IT Solutions!\n"
                   . "I just submitted a project inquiry on your website.\n"
                   . "Ticket ID: " . ($ticket['ticket_id'] ?? '') . "\n"
                   . "Contact Name: " . ($ticket['full_name'] ?? '') . "\n"
                   . "Company: " . ($ticket['company_name'] ?? '') . "\n"
                   . "Service: " . ($ticket['service_needed'] ?? '') . "\n"
                   . "Please review my requirements.";
          ?>
          <div class="flex flex-wrap items-center gap-4 pt-2">
            <a href="https://wa.me/15553828687?text=<?= urlencode($waMsg) ?>" target="_blank" class="px-6 py-3.5 rounded-xl bg-whatsapp hover:bg-whatsapp-hover text-white font-extrabold text-sm shadow-lg shadow-whatsapp/30 flex items-center gap-2">
              <i class="ph-bold ph-whatsapp-logo text-xl"></i>
              <span>Send Ticket Details to WhatsApp For Instant Review</span>
            </a>
            <a href="<?= base_url('inquiries') ?>" class="px-5 py-3.5 rounded-xl glass-card text-xs font-bold text-slate-300 hover:text-white transition">
              View Inquiries Log
            </a>
          </div>
        </div>
      <?php endif; ?>

      <!-- Error Notification Box -->
      <?php if (session()->getFlashdata('errors')): ?>
        <div class="mb-10 rounded-2xl p-6 bg-rose-950/70 border border-rose-500/40 text-rose-200 space-y-2">
          <div class="flex items-center gap-3 font-bold text-base text-rose-300">
            <i class="ph-bold ph-warning-circle text-2xl"></i>
            <span>Please resolve the following required fields:</span>
          </div>
          <ul class="list-disc pl-8 text-sm space-y-1">
            <?php foreach (session()->getFlashdata('errors') as $err): ?>
              <li><?= esc($err) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <!-- The Form Container -->
      <div class="rounded-3xl p-8 sm:p-12 glass-card border border-white/10 shadow-2xl relative">
        
        <form action="<?= base_url('submit') ?>" method="post" id="itConsultationForm" class="space-y-6">
          <?= csrf_field() ?>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            
            <!-- Full Name -->
            <div class="space-y-2">
              <label for="full_name" class="block text-xs font-bold uppercase tracking-wider text-slate-300">
                Your Full Name <span class="text-cyan-400">*</span>
              </label>
              <input 
                type="text" 
                name="full_name" 
                id="full_name" 
                value="<?= old('full_name') ?>"
                required
                placeholder="e.g. David Henderson"
                class="w-full px-4 py-3.5 rounded-xl bg-slate-900/90 border <?= session('errors.full_name') ? 'border-rose-500' : 'border-white/10' ?> focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 text-white placeholder-slate-500 text-sm outline-none transition"
              >
            </div>

            <!-- Company Name -->
            <div class="space-y-2">
              <label for="company_name" class="block text-xs font-bold uppercase tracking-wider text-slate-300">
                Company / Organization Name
              </label>
              <input 
                type="text" 
                name="company_name" 
                id="company_name" 
                value="<?= old('company_name') ?>"
                placeholder="e.g. Acme FinTech Corp"
                class="w-full px-4 py-3.5 rounded-xl bg-slate-900/90 border border-white/10 focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 text-white placeholder-slate-500 text-sm outline-none transition"
              >
            </div>

            <!-- Email Address -->
            <div class="space-y-2">
              <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-300">
                Business Email <span class="text-cyan-400">*</span>
              </label>
              <input 
                type="email" 
                name="email" 
                id="email" 
                value="<?= old('email') ?>"
                required
                placeholder="david@company.com"
                class="w-full px-4 py-3.5 rounded-xl bg-slate-900/90 border <?= session('errors.email') ? 'border-rose-500' : 'border-white/10' ?> focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 text-white placeholder-slate-500 text-sm outline-none transition"
              >
            </div>

            <!-- Phone / WhatsApp -->
            <div class="space-y-2">
              <label for="phone" class="block text-xs font-bold uppercase tracking-wider text-slate-300">
                Phone / WhatsApp Number <span class="text-cyan-400">*</span>
              </label>
              <input 
                type="tel" 
                name="phone" 
                id="phone" 
                value="<?= old('phone') ?>"
                required
                placeholder="+1 (555) 000-0000"
                class="w-full px-4 py-3.5 rounded-xl bg-slate-900/90 border <?= session('errors.phone') ? 'border-rose-500' : 'border-white/10' ?> focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 text-white placeholder-slate-500 text-sm outline-none transition"
              >
            </div>

            <!-- Service Needed -->
            <div class="space-y-2">
              <label for="service_needed" class="block text-xs font-bold uppercase tracking-wider text-slate-300">
                Primary IT Service <span class="text-cyan-400">*</span>
              </label>
              <select 
                name="service_needed" 
                id="service_needed"
                required
                class="w-full px-4 py-3.5 rounded-xl bg-slate-900/90 border border-white/10 focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 text-white text-sm outline-none transition"
              >
                <option value="Custom Software & Web Engineering" <?= old('service_needed') === 'Custom Software & Web Engineering' ? 'selected' : '' ?>>Custom Software & Web Engineering</option>
                <option value="Cloud Migration & DevOps Automation" <?= old('service_needed') === 'Cloud Migration & DevOps Automation' ? 'selected' : '' ?>>Cloud Migration & DevOps Automation (AWS/Azure)</option>
                <option value="Cybersecurity, Pen-Testing & SOC" <?= old('service_needed') === 'Cybersecurity, Pen-Testing & SOC' ? 'selected' : '' ?>>Cybersecurity, Pen-Testing & SOC</option>
                <option value="Enterprise AI & LLM Systems" <?= old('service_needed') === 'Enterprise AI & LLM Systems' ? 'selected' : '' ?>>Enterprise AI & LLM Systems</option>
                <option value="24/7 Managed IT Infrastructure" <?= old('service_needed') === '24/7 Managed IT Infrastructure' ? 'selected' : '' ?>>24/7 Managed IT Infrastructure & Helpdesk</option>
                <option value="Virtual CTO & Architecture Audit" <?= old('service_needed') === 'Virtual CTO & Architecture Audit' ? 'selected' : '' ?>>Virtual CTO & Architecture Audit</option>
              </select>
            </div>

            <!-- Budget Range -->
            <div class="space-y-2">
              <label for="budget_range" class="block text-xs font-bold uppercase tracking-wider text-slate-300">
                Estimated Project Budget
              </label>
              <select 
                name="budget_range" 
                id="budget_range"
                class="w-full px-4 py-3.5 rounded-xl bg-slate-900/90 border border-white/10 focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 text-white text-sm outline-none transition"
              >
                <option value="Under $10,000" <?= old('budget_range') === 'Under $10,000' ? 'selected' : '' ?>>Under $10,000</option>
                <option value="$10,000 - $25,000" <?= old('budget_range') === '$10,000 - $25,000' ? 'selected' : '' ?>>$10,000 - $25,000</option>
                <option value="$25,000 - $50,000" <?= old('budget_range') === '$25,000 - $50,000' ? 'selected' : '' ?>>$25,000 - $50,000</option>
                <option value="$50,000 - $100,000+" <?= old('budget_range') === '$50,000 - $100,000+' ? 'selected' : '' ?>>$50,000 - $100,000+ (Enterprise)</option>
                <option value="Monthly Retainer / SLA" <?= old('budget_range') === 'Monthly Retainer / SLA' ? 'selected' : '' ?>>Monthly Retainer / Managed SLA</option>
              </select>
            </div>

            <!-- Timeline -->
            <div class="space-y-2 sm:col-span-2">
              <label for="timeline" class="block text-xs font-bold uppercase tracking-wider text-slate-300">
                Target Timeline / Urgency
              </label>
              <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                <label class="p-3 rounded-xl bg-slate-900/90 border border-white/10 cursor-pointer text-center text-xs font-semibold hover:border-cyan-400 transition flex items-center justify-center gap-2">
                  <input type="radio" name="timeline" value="Immediate (1-2 Weeks)" class="accent-cyan-400" checked>
                  <span>Immediate (1-2 wks)</span>
                </label>
                <label class="p-3 rounded-xl bg-slate-900/90 border border-white/10 cursor-pointer text-center text-xs font-semibold hover:border-cyan-400 transition flex items-center justify-center gap-2">
                  <input type="radio" name="timeline" value="1 - 3 Months" class="accent-cyan-400">
                  <span>1 - 3 Months</span>
                </label>
                <label class="p-3 rounded-xl bg-slate-900/90 border border-white/10 cursor-pointer text-center text-xs font-semibold hover:border-cyan-400 transition flex items-center justify-center gap-2">
                  <input type="radio" name="timeline" value="3 - 6 Months" class="accent-cyan-400">
                  <span>3 - 6 Months</span>
                </label>
                <label class="p-3 rounded-xl bg-slate-900/90 border border-white/10 cursor-pointer text-center text-xs font-semibold hover:border-cyan-400 transition flex items-center justify-center gap-2">
                  <input type="radio" name="timeline" value="Exploratory / Advisory" class="accent-cyan-400">
                  <span>Exploratory</span>
                </label>
              </div>
            </div>

            <!-- Project Details / Scope -->
            <div class="space-y-2 sm:col-span-2">
              <label for="project_details" class="block text-xs font-bold uppercase tracking-wider text-slate-300">
                Project Scope, Challenges or Architecture Goals
              </label>
              <textarea 
                name="project_details" 
                id="project_details" 
                rows="4"
                placeholder="Describe your current tech stack, target deliverables, user scale, or specific pain points you need resolved..."
                class="w-full px-4 py-3.5 rounded-xl bg-slate-900/90 border border-white/10 focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 text-white placeholder-slate-500 text-sm outline-none transition"
              ><?= old('project_details') ?></textarea>
            </div>

            <!-- WhatsApp Update Consent -->
            <div class="sm:col-span-2">
              <label class="inline-flex items-center gap-3 cursor-pointer text-xs sm:text-sm text-slate-300">
                <input type="checkbox" name="whatsapp_opt_in" value="1" checked class="w-4 h-4 rounded bg-slate-900 border-white/20 accent-whatsapp">
                <span>Send technical proposal & project updates directly to my WhatsApp number for expedited response.</span>
              </label>
            </div>

          </div>

          <!-- Form Submit Actions -->
          <div class="pt-4 flex flex-wrap items-center gap-4">
            <button type="submit" class="flex-1 min-w-[240px] px-8 py-4 rounded-xl bg-gradient-to-r from-cyan-500 via-indigo-600 to-purple-600 hover:from-cyan-400 hover:to-indigo-500 text-white font-extrabold text-base shadow-xl shadow-cyan-500/25 transition-all hover:scale-[1.02] flex items-center justify-center gap-2">
              <i class="ph-bold ph-paper-plane-tilt text-xl"></i>
              <span>Submit IT Consultation Request</span>
            </button>

            <!-- Direct WhatsApp Alternate Form Trigger -->
            <button type="button" id="directWaFormBtn" class="px-6 py-4 rounded-xl bg-whatsapp hover:bg-whatsapp-hover text-white font-bold text-sm shadow-lg shadow-whatsapp/30 transition-all hover:scale-105 flex items-center gap-2">
              <i class="ph-bold ph-whatsapp-logo text-xl"></i>
              <span>Instant Chat on WhatsApp</span>
            </button>
          </div>

          <p class="text-[11px] text-slate-500 text-center flex items-center justify-center gap-2 pt-2">
            <i class="ph-bold ph-shield-check text-cyan-400 text-sm"></i>
            <span>All inquiries are protected by standard mutual Non-Disclosure Agreement (NDA).</span>
          </p>

        </form>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       8. Case Studies / Performance Metrics
       ========================================================================= -->
  <section id="case-studies" class="py-20 border-t border-white/10 bg-slate-950/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-2xl mx-auto mb-14 space-y-3">
        <span class="text-xs font-bold uppercase tracking-widest text-cyan-400">Proven Results</span>
        <h2 class="font-heading text-3xl sm:text-4xl font-extrabold text-white">Engineered For Measurable ROI</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="glass-card rounded-2xl p-8 space-y-4">
          <div class="text-4xl font-heading font-black text-cyan-400">42% Cost Cut</div>
          <h4 class="text-lg font-bold text-white">FinTech Cloud Optimization</h4>
          <p class="text-slate-400 text-sm">
            Migrated legacy VMware workloads to automated Kubernetes on AWS, cutting monthly infrastructure spend from $85K to $49K.
          </p>
        </div>

        <div class="glass-card rounded-2xl p-8 space-y-4">
          <div class="text-4xl font-heading font-black text-indigo-400">Zero Incidents</div>
          <h4 class="text-lg font-bold text-white">HealthTech SOC 2 & HIPAA</h4>
          <p class="text-slate-400 text-sm">
            Implemented zero-trust IAM, end-to-end data encryption, and full audit logs, passing SOC 2 Type II audit in record 4 months.
          </p>
        </div>

        <div class="glass-card rounded-2xl p-8 space-y-4">
          <div class="text-4xl font-heading font-black text-purple-400">3.8x Speedup</div>
          <h4 class="text-lg font-bold text-white">E-Commerce Microservices</h4>
          <p class="text-slate-400 text-sm">
            Re-architected monolithic backend into Go and Node.js microservices, dropping p99 latency from 1.4s to 240ms under 250K concurrent users.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       9. Footer
       ========================================================================= -->
  <footer class="border-t border-white/10 bg-dark-bg py-16 text-slate-400 text-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-12 gap-10 pb-12 border-b border-white/10">
        
        <div class="md:col-span-5 space-y-4">
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-lg bg-gradient-to-tr from-cyan-500 to-indigo-600 flex items-center justify-center text-white">
              <i class="ph-bold ph-cpu text-xl"></i>
            </div>
            <span class="font-heading font-extrabold text-xl text-white">Nexora<span class="text-cyan-400">.IT</span></span>
          </div>
          <p class="text-slate-400 text-xs sm:text-sm max-w-sm leading-relaxed">
            Enterprise software development, cloud infrastructure, AI automation, and managed cyber defense designed for exponential scalability.
          </p>
          <div class="flex items-center gap-4 text-white text-lg">
            <a href="https://wa.me/15553828687" target="_blank" class="w-9 h-9 rounded-lg glass-card flex items-center justify-center text-whatsapp hover:scale-110 transition"><i class="ph-bold ph-whatsapp-logo"></i></a>
            <a href="tel:+15553828687" class="w-9 h-9 rounded-lg glass-card flex items-center justify-center text-cyan-400 hover:scale-110 transition"><i class="ph-bold ph-phone"></i></a>
            <a href="mailto:solutions@nexora.it" class="w-9 h-9 rounded-lg glass-card flex items-center justify-center text-slate-300 hover:scale-110 transition"><i class="ph-bold ph-envelope"></i></a>
          </div>
        </div>

        <div class="md:col-span-3 space-y-3">
          <h4 class="font-heading text-sm font-bold text-white uppercase tracking-wider">Core Capabilities</h4>
          <ul class="space-y-2 text-xs text-slate-400">
            <li><a href="#services" class="hover:text-white transition">Custom Software & Web</a></li>
            <li><a href="#services" class="hover:text-white transition">AWS & Azure Cloud Migration</a></li>
            <li><a href="#services" class="hover:text-white transition">Enterprise Cybersecurity</a></li>
            <li><a href="#services" class="hover:text-white transition">AI & LLM Workflows</a></li>
            <li><a href="#services" class="hover:text-white transition">24/7 Managed IT Support</a></li>
          </ul>
        </div>

        <div class="md:col-span-4 space-y-3">
          <h4 class="font-heading text-sm font-bold text-white uppercase tracking-wider">Direct Contact</h4>
          <ul class="space-y-2.5 text-xs text-slate-400">
            <li class="flex items-center gap-2">
              <i class="ph-bold ph-phone text-cyan-400 text-base"></i>
              <a href="tel:+15553828687" class="text-white hover:text-cyan-400 transition">+1 (555) 382-8687 (Direct Line)</a>
            </li>
            <li class="flex items-center gap-2">
              <i class="ph-bold ph-whatsapp-logo text-whatsapp text-base"></i>
              <a href="https://wa.me/15553828687" target="_blank" class="text-emerald-400 hover:text-emerald-300 transition">24/7 WhatsApp Hotline</a>
            </li>
            <li class="flex items-center gap-2">
              <i class="ph-bold ph-envelope text-indigo-400 text-base"></i>
              <span>solutions@nexora.it</span>
            </li>
            <li class="flex items-center gap-2">
              <i class="ph-bold ph-map-pin text-purple-400 text-base"></i>
              <span>550 Tech Innovation Way, Silicon Valley, CA 94025</span>
            </li>
          </ul>
        </div>

      </div>

      <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
        <p>&copy; <?= date('Y') ?> Nexora IT Solutions Inc. All rights reserved. Powered by CodeIgniter 4.</p>
        <div class="flex items-center gap-4">
          <a href="<?= base_url('inquiries') ?>" class="text-cyan-400 hover:underline">Admin Inquiries Log</a>
          <span>&bull;</span>
          <span>Security & Compliance</span>
          <span>&bull;</span>
          <span>Privacy Policy</span>
        </div>
      </div>
    </div>
  </footer>

  <!-- =========================================================================
       10. Floating WhatsApp & Quick Call Fixed Actions
       ========================================================================= -->
  <!-- Floating WhatsApp Action -->
  <div class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-3">
    <a href="https://wa.me/15553828687?text=Hello%20Nexora%20IT!%20I'd%20like%20to%20connect%20with%20an%20engineer%20now." target="_blank" class="relative group w-16 h-16 rounded-full bg-whatsapp hover:bg-whatsapp-hover text-white flex items-center justify-center text-3xl shadow-2xl glow-whatsapp transition-transform duration-300 hover:scale-110 pulse-ring-effect" title="Chat instantly on WhatsApp">
      <i class="ph-bold ph-whatsapp-logo"></i>
      <span class="absolute -top-1 -right-1 w-4 h-4 rounded-full bg-emerald-400 border-2 border-dark-bg"></span>
    </a>
  </div>

  <!-- Floating Call Action (Bottom Left) -->
  <div class="fixed bottom-6 left-6 z-50">
    <a href="tel:+15553828687" class="w-13 h-13 p-3.5 rounded-full glass-card border border-cyan-400/50 hover:bg-cyan-500 hover:text-dark-bg text-cyan-400 flex items-center justify-center text-2xl shadow-xl transition-all hover:scale-110 group" title="Call Us Directly">
      <i class="ph-bold ph-phone-call"></i>
    </a>
  </div>

  <!-- JavaScript Helper for Direct WhatsApp Form Send -->
  <script>
    document.getElementById('directWaFormBtn')?.addEventListener('click', function() {
      const name = document.getElementById('full_name')?.value || 'Prospective Client';
      const company = document.getElementById('company_name')?.value || 'Company';
      const email = document.getElementById('email')?.value || 'Not provided';
      const phone = document.getElementById('phone')?.value || 'Not provided';
      const service = document.getElementById('service_needed')?.value || 'IT Services';
      const budget = document.getElementById('budget_range')?.value || 'Flexible';
      const notes = document.getElementById('project_details')?.value || '';

      const text = `Hello Nexora IT Solutions!\n`
                 + `*Name:* ${name}\n`
                 + `*Company:* ${company}\n`
                 + `*Email:* ${email}\n`
                 + `*Phone:* ${phone}\n`
                 + `*Service:* ${service}\n`
                 + `*Budget:* ${budget}\n`
                 + `*Scope Notes:* ${notes}\n\n`
                 + `I'd like to schedule an IT consultation.`;

      const encoded = encodeURIComponent(text);
      window.open(`https://wa.me/15553828687?text=${encoded}`, '_blank');
    });
  </script>

</body>
</html>
