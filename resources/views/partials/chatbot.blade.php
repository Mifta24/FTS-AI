{{-- ============================================================
     Chatbot Widget — FAQ pilihan pertanyaan (tanpa AI)
     ============================================================ --}}
<div class="chatbot" id="chatbot" aria-live="polite" aria-label="Chat asisten FTS AI">

  {{-- Tombol buka/tutup --}}
  <button class="chatbot__toggle" id="chatbotToggle" aria-expanded="false" aria-controls="chatbotBox" type="button">
    <span class="chatbot__toggle-icon chatbot__toggle-icon--open" aria-hidden="true">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
      </svg>
    </span>
    <span class="chatbot__toggle-icon chatbot__toggle-icon--close" aria-hidden="true">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
      </svg>
    </span>
    <span class="chatbot__toggle-label">Chat</span>
    <span class="chatbot__badge" id="chatbotBadge" aria-label="1 pesan baru">1</span>
  </button>

  {{-- Jendela chat --}}
  <div class="chatbot__box" id="chatbotBox" role="dialog" aria-modal="false" aria-label="Asisten FTS AI" hidden>

    <div class="chatbot__header">
      <div class="chatbot__header-info">
        <span class="chatbot__avatar" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="3"/>
            <path d="M19.07 4.93a10 10 0 0 1 0 14.14"/><path d="M4.93 4.93a10 10 0 0 0 0 14.14"/>
          </svg>
        </span>
        <div>
          <p class="chatbot__header-name">FTS AI Assistant</p>
          <p class="chatbot__header-status">
            <span class="chatbot__online-dot" aria-hidden="true"></span>Online
          </p>
        </div>
      </div>
      <button class="chatbot__close" id="chatbotClose" type="button" aria-label="Tutup chat">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
      </button>
    </div>

    {{-- Area pesan --}}
    <div class="chatbot__messages" id="chatbotMessages" role="log" aria-label="Riwayat percakapan">
      {{-- Pesan awal bot --}}
      <div class="chatbot__msg chatbot__msg--bot">
        <p>Halo! Saya asisten FTS AI 👋</p>
        <p>Ada yang bisa saya bantu? Pilih pertanyaan di bawah ini.</p>
      </div>

      {{-- Pilihan pertanyaan awal --}}
      <div class="chatbot__options" id="chatbotOptions" data-step="home">
        <button class="chatbot__opt" data-key="services">🛠 Layanan apa saja?</button>
        <button class="chatbot__opt" data-key="pricing">💰 Berapa harganya?</button>
        <button class="chatbot__opt" data-key="about">🏢 Tentang FTS AI</button>
        <button class="chatbot__opt" data-key="ai_chatbot">🤖 Apa itu AI Chatbot?</button>
        <button class="chatbot__opt" data-key="contact">📩 Hubungi kami</button>
      </div>
    </div>

    {{-- Input area --}}
    <div class="chatbot__footer">
      <a href="{{ route('contact.index') }}" class="chatbot__contact-btn">
        Kirim pesan langsung →
      </a>
    </div>

  </div>
</div>

{{-- Data percakapan --}}
<script>
window.CHATBOT_DATA = {
  services: {
    question: "Layanan apa saja?",
    answer: "FTS AI menyediakan 7 layanan utama:\n\n01 Custom System Development\n02 Web & App Production\n03 IT Consulting\n04 AI Adoption Support\n05 Global Support\n06 Packaged Software & Services\n07 HR & Operations Support",
    options: [
      { key: "service_web",    label: "🌐 Web & App Production" },
      { key: "service_ai",     label: "🤖 AI Adoption Support" },
      { key: "service_system", label: "⚙️ System Development" },
      { key: "back_home",      label: "← Kembali" }
    ]
  },
  service_web: {
    question: "Web & App Production",
    answer: "Kami membangun corporate site, service site, web system, dan mobile-friendly website.\n\nContoh:\n• Corporate & service sites\n• Website dengan booking/contact form\n• Web system dengan admin dashboard\n\nMulai dari Rp 300.000 (paket Starter 3 halaman).",
    options: [
      { key: "pricing", label: "💰 Lihat harga" },
      { key: "contact", label: "📩 Hubungi kami" },
      { key: "back_home", label: "← Kembali" }
    ]
  },
  service_ai: {
    question: "AI Adoption Support",
    answer: "Kami membantu bisnis mengadopsi generative AI (ChatGPT, Claude) untuk:\n\n• AI chatbot otomatis FAQ\n• Otomasi dokumen (invoice, kontrak)\n• Internal copilot untuk staf\n• Agen AI multi-langkah",
    options: [
      { key: "ai_chatbot", label: "🤖 Apa itu AI Chatbot?" },
      { key: "pricing",    label: "💰 Lihat harga" },
      { key: "back_home",  label: "← Kembali" }
    ]
  },
  service_system: {
    question: "Custom System Development",
    answer: "Kami mendesain dan membangun sistem bisnis sesuai alur kerja perusahaan Anda:\n\n• Sistem manajemen penjualan & inventory\n• CRM dan sistem internal\n• Perbaikan & refactoring sistem lama",
    options: [
      { key: "pricing",   label: "💰 Lihat harga" },
      { key: "contact",   label: "📩 Konsultasi gratis" },
      { key: "back_home", label: "← Kembali" }
    ]
  },
  pricing: {
    question: "Berapa harganya?",
    answer: "Paket layanan FTS AI:\n\n🟢 Starter — Rp 300.000\nWebsite 3 halaman + chatbot (tanpa AI)\n\n🔵 AI Chatbot — Rp 800.000\nWebsite + AI chatbot berbasis konten bisnis Anda\n\n🟣 Enterprise — Custom\nIntegrasi AI penuh ke sistem existing\n\nKonsultasi awal GRATIS!",
    options: [
      { key: "pricing_starter", label: "🟢 Detail paket Starter" },
      { key: "pricing_ai",      label: "🔵 Detail AI Chatbot" },
      { key: "contact",         label: "📩 Minta penawaran" },
      { key: "back_home",       label: "← Kembali" }
    ]
  },
  pricing_starter: {
    question: "Detail paket Starter",
    answer: "Paket Starter — Rp 300.000 (sekali bayar)\n\n✓ 3 halaman (Home, About, Contact)\n✓ Chatbot widget kontak (non-AI)\n✓ Desain responsif mobile-friendly\n✓ Form kontak + notifikasi email\n✓ 1 bulan dukungan pasca-launch",
    options: [
      { key: "contact",   label: "📩 Pesan sekarang" },
      { key: "pricing",   label: "← Lihat semua paket" },
      { key: "back_home", label: "⬅ Menu utama" }
    ]
  },
  pricing_ai: {
    question: "Detail paket AI Chatbot",
    answer: "Website + AI Chatbot — Rp 800.000 (sekali bayar)\n\n✓ Semua fitur Starter\n✓ AI chatbot berbasis dokumen bisnis Anda\n✓ Integrasi ChatGPT / Claude\n✓ Embed di website atau WhatsApp / LINE\n✓ Dashboard admin update konten\n✓ 3 bulan dukungan pasca-launch",
    options: [
      { key: "contact",   label: "📩 Pesan sekarang" },
      { key: "pricing",   label: "← Lihat semua paket" },
      { key: "back_home", label: "⬅ Menu utama" }
    ]
  },
  about: {
    question: "Tentang FTS AI",
    answer: "FTS AI adalah brand dari Fujiyama Technology Solutions.\n\nBerdiri: 20 April 1989\nCEO: Takakazu Kaburagi\nLokasi: Neo Soho Mall, West Jakarta, Indonesia\n\nKami menggabungkan pengalaman puluhan tahun di system development dengan kemampuan AI dan global support.",
    options: [
      { key: "services",  label: "🛠 Lihat layanan" },
      { key: "contact",   label: "📩 Hubungi kami" },
      { key: "back_home", label: "← Kembali" }
    ]
  },
  ai_chatbot: {
    question: "Apa itu AI Chatbot?",
    answer: "AI Chatbot adalah asisten virtual yang menjawab pertanyaan pengunjung secara otomatis 24/7.\n\nBedanya dengan chatbot biasa:\n• Memahami pertanyaan dalam bahasa alami\n• Menjawab berdasarkan dokumen/konten bisnis Anda\n• Semakin pintar seiring waktu\n\nCocok untuk: FAQ otomatis, lead capture, customer support.",
    options: [
      { key: "pricing_ai", label: "💰 Lihat harga AI Chatbot" },
      { key: "contact",    label: "📩 Konsultasi gratis" },
      { key: "back_home",  label: "← Kembali" }
    ]
  },
  contact: {
    question: "Hubungi kami",
    answer: "Tim kami siap membantu! 😊\n\nKlik tombol di bawah untuk mengisi form kontak, atau hubungi kami langsung.\n\nKonsultasi awal dan estimasi harga GRATIS — tanpa komitmen.",
    options: [
      { key: "back_home", label: "← Kembali ke menu" }
    ],
    cta: true
  },
  back_home: {
    question: null,
    answer: null,
    options: null,
    isBack: true
  }
};
</script>
