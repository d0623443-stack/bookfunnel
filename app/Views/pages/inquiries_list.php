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
  <title><?= esc($title ?? 'IT Inquiries Dashboard - Nexora') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #070B14; }
    h1, h2, h3 { font-family: 'Outfit', sans-serif; }
  </style>
</head>
<body class="text-slate-100 min-h-screen p-6 sm:p-10">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K26WH38H"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="max-w-6xl mx-auto space-y-8">
    
    <!-- Top Header -->
    <div class="flex flex-wrap items-center justify-between gap-4 pb-6 border-b border-white/10">
      <div class="flex items-center gap-3">
        <a href="<?= base_url('/') ?>" class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-500 to-indigo-600 flex items-center justify-center text-white text-2xl shadow-lg">
          <i class="ph-bold ph-cpu"></i>
        </a>
        <div>
          <h1 class="text-2xl font-bold text-white">Nexora IT &bull; Inquiries Management</h1>
          <p class="text-xs text-slate-400">Received project quotes & architecture consultation requests.</p>
        </div>
      </div>

      <div class="flex items-center gap-3">
        <a href="<?= base_url('/') ?>" class="px-4 py-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-xs font-bold text-white transition flex items-center gap-2">
          <i class="ph-bold ph-arrow-left"></i> Back to Landing Page
        </a>
      </div>
    </div>

    <!-- Table Container -->
    <div class="rounded-3xl bg-slate-900/80 border border-white/10 p-6 shadow-2xl">
      <div class="flex items-center justify-between mb-6">
        <h2 class="text-lg font-bold text-white flex items-center gap-2">
          <span>Active Inquiries Log</span>
          <span class="px-2.5 py-0.5 rounded-full text-xs bg-cyan-500/20 text-cyan-400 font-mono"><?= count($inquiries) ?> total</span>
        </h2>
      </div>

      <?php if (!empty($inquiries)): ?>
        <div class="overflow-x-auto">
          <table class="w-full text-left text-sm text-slate-300">
            <thead>
              <tr class="border-b border-white/10 text-xs uppercase tracking-wider text-slate-400">
                <th class="py-3 px-4">Ticket ID</th>
                <th class="py-3 px-4">Client / Company</th>
                <th class="py-3 px-4">Service Required</th>
                <th class="py-3 px-4">Budget / Timeline</th>
                <th class="py-3 px-4">Date</th>
                <th class="py-3 px-4 text-center">Direct Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-white/5">
              <?php foreach ($inquiries as $inq): ?>
                <tr class="hover:bg-white/[0.02] transition">
                  <td class="py-4 px-4 font-mono font-bold text-cyan-400">
                    <?= esc($inq['ticket_id'] ?? $inq['reference_id'] ?? 'NEX-N/A') ?>
                  </td>
                  <td class="py-4 px-4">
                    <div class="font-bold text-white"><?= esc($inq['full_name']) ?></div>
                    <div class="text-xs text-slate-400"><?= esc($inq['company_name'] ?? 'N/A') ?> &bull; <?= esc($inq['email']) ?></div>
                  </td>
                  <td class="py-4 px-4 font-medium text-slate-200">
                    <?= esc($inq['service_needed'] ?? $inq['destination'] ?? 'General Consultation') ?>
                  </td>
                  <td class="py-4 px-4 text-xs">
                    <div class="text-emerald-400 font-semibold"><?= esc($inq['budget_range'] ?? 'Standard') ?></div>
                    <div class="text-slate-400"><?= esc($inq['timeline'] ?? '1-3 Mos') ?></div>
                  </td>
                  <td class="py-4 px-4 text-xs text-slate-500">
                    <?= esc(date('M d, H:i', strtotime($inq['created_at'] ?? 'now'))) ?>
                  </td>
                  <td class="py-4 px-4 text-center">
                    <?php
                      $cleanPhone = preg_replace('/[^0-9]/', '', $inq['phone'] ?? '');
                      $leadWaMsg = "Hello " . $inq['full_name'] . "! This is Nexora IT Solutions regarding your project consultation (" . ($inq['ticket_id'] ?? $inq['reference_id'] ?? '') . "). Are you available for a brief technical call?";
                    ?>
                    <a href="https://wa.me/<?= $cleanPhone ?: '15553828687' ?>?text=<?= urlencode($leadWaMsg) ?>" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-[#25D366] hover:bg-[#1ebe57] text-white text-xs font-bold transition">
                      <i class="ph-bold ph-whatsapp-logo text-base"></i> Reply on WhatsApp
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php else: ?>
        <div class="py-16 text-center text-slate-500">
          <i class="ph-bold ph-tray text-5xl mb-3 block text-slate-600"></i>
          <p class="text-base font-medium">No inquiries received yet.</p>
          <a href="<?= base_url('/#contact-form') ?>" class="text-cyan-400 hover:underline text-xs mt-2 inline-block">Test submitting a consultation request &rarr;</a>
        </div>
      <?php endif; ?>
    </div>

  </div>

</body>
</html>
