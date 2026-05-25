@extends('layouts.app')

@section('title', 'Pricing | FTS AI — AI integration packages for every stage')
@section('description', 'FTS AI pricing: from a starter AI chatbot to full enterprise AI agent development. Transparent packages with clear deliverables — or custom scoping for complex needs.')

@section('content')

  {{-- ============== PAGE HEADER ============== --}}
  <section class="ai-hero-bg">
    <div class="container ai-hero-bg__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="breadcrumb__sep">›</span>Pricing</p>
      <p class="page-header__eyebrow">PRICING</p>
      <h1 class="page-header__title">
        Transparent pricing,<br><span class="accent">no surprise invoices</span>.
      </h1>
      <p class="page-header__lead">
        Three starting packages that cover the most common AI integration needs.
        Every engagement starts with a free assessment — we'll recommend the right fit before you commit.
      </p>
    </div>
  </section>

  {{-- ============== PRICING CARDS ============== --}}
  <section class="section" style="background:#fff;">
    <div class="container">
      <div class="pricing-grid">

        {{-- Starter --}}
        <article class="pricing-card">
          <div class="pricing-card__top">
            <span class="pricing-card__badge">Starter</span>
            <h3 class="pricing-card__name">Website + Chatbot</h3>
            <p class="pricing-card__tagline">3 halaman website profesional + chatbot kontak. Tanpa AI.</p>
            <div class="pricing-card__price">
              <span class="pricing-card__currency">mulai</span>
              <span class="pricing-card__amount">Rp 300.000</span>
              <span class="pricing-card__period">sekali bayar</span>
            </div>
          </div>
          <ul class="pricing-card__features">
            <li>3 halaman (Home, About, Contact)</li>
            <li>Chatbot widget kontak (non-AI)</li>
            <li>Desain responsif mobile-friendly</li>
            <li>Form kontak + notifikasi email</li>
            <li>1 bulan dukungan pasca-launch</li>
          </ul>
          <div class="pricing-card__footer">
            <a href="{{ route('contact.index') }}" class="btn btn--ghost pricing-card__btn">Hubungi kami</a>
          </div>
        </article>

        {{-- Growth --}}
        <article class="pricing-card pricing-card--featured">
          <div class="pricing-card__top">
            <span class="pricing-card__badge pricing-card__badge--featured">Paling Populer</span>
            <h3 class="pricing-card__name">Website + AI Chatbot</h3>
            <p class="pricing-card__tagline">Website lengkap dengan AI chatbot yang menjawab berdasarkan konten bisnis Anda.</p>
            <div class="pricing-card__price">
              <span class="pricing-card__currency">mulai</span>
              <span class="pricing-card__amount">Rp 800.000</span>
              <span class="pricing-card__period">sekali bayar</span>
            </div>
          </div>
          <ul class="pricing-card__features">
            <li>Semua fitur Starter</li>
            <li>AI chatbot berbasis dokumen / FAQ bisnis Anda</li>
            <li>Integrasi ChatGPT / Claude</li>
            <li>Embed di website atau WhatsApp / LINE</li>
            <li>Dashboard admin untuk update konten</li>
            <li>3 bulan dukungan pasca-launch</li>
          </ul>
          <div class="pricing-card__footer">
            <a href="{{ route('contact.index') }}" class="btn btn--blue pricing-card__btn">Hubungi kami</a>
          </div>
        </article>

        {{-- Enterprise --}}
        <article class="pricing-card">
          <div class="pricing-card__top">
            <span class="pricing-card__badge">Enterprise</span>
            <h3 class="pricing-card__name">AI Integration Penuh</h3>
            <p class="pricing-card__tagline">Integrasi AI ke sistem bisnis yang sudah ada — otomasi dokumen, agen, dan lebih.</p>
            <div class="pricing-card__price">
              <span class="pricing-card__currency">harga</span>
              <span class="pricing-card__amount">custom</span>
            </div>
          </div>
          <ul class="pricing-card__features">
            <li>Semua fitur Website + AI Chatbot</li>
            <li>Integrasi ke CRM / ERP / database existing</li>
            <li>Otomasi dokumen (invoice, kontrak, laporan)</li>
            <li>AI workflow otomatis (n8n / Make)</li>
            <li>Custom AI agent multi-step</li>
            <li>Dukungan tim offshore tersedia</li>
          </ul>
          <div class="pricing-card__footer">
            <a href="{{ route('contact.index') }}" class="btn btn--primary pricing-card__btn">Diskusi kebutuhan</a>
          </div>
        </article>

      </div>

      <p class="pricing-note">
        Semua harga merupakan estimasi awal dalam Rupiah. Harga final dikonfirmasi setelah konsultasi gratis.
        Opsi pengembangan offshore dapat mengurangi biaya hingga 40–60%.
      </p>
    </div>
  </section>

  {{-- ============== ADD-ONS ============== --}}
  <section class="section" style="background:var(--c-bg-soft);">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">ADD-ONS</span>
        <h2 class="section__title">Layanan tambahan</h2>
        <p class="section__lead">Dapat ditambahkan ke paket mana saja sesuai kebutuhan.</p>
      </div>
      <div class="addon-grid">
        <div class="addon-item">
          <span class="addon-item__label">Pelatihan Penggunaan AI</span>
          <span class="addon-item__desc">Panduan penggunaan AI internal + workshop staff (online/offline)</span>
          <span class="addon-item__price">mulai Rp 500.000</span>
        </div>
        <div class="addon-item">
          <span class="addon-item__label">Dukungan Multibahasa</span>
          <span class="addon-item__desc">Chatbot merespons dalam Bahasa Indonesia, Inggris, dan Jepang</span>
          <span class="addon-item__price">mulai Rp 300.000</span>
        </div>
        <div class="addon-item">
          <span class="addon-item__label">Maintenance Bulanan</span>
          <span class="addon-item__desc">Update konten, pemeliharaan sistem, dan penyesuaian prompt AI</span>
          <span class="addon-item__price">mulai Rp 200.000/bln</span>
        </div>
        <div class="addon-item">
          <span class="addon-item__label">Konsultasi AI Diagnosis</span>
          <span class="addon-item__desc">Audit operasional + peta jalan adopsi AI yang diprioritaskan</span>
          <span class="addon-item__price">mulai Rp 500.000</span>
        </div>
      </div>
    </div>
  </section>

  {{-- ============== FAQ ============== --}}
  <section class="section" style="background:#fff;">
    <div class="container container--narrow">
      <div class="section__head">
        <span class="section__eyebrow">FAQ</span>
        <h2 class="section__title">Common questions</h2>
      </div>
      <div class="faq-list">
        <details class="faq-item">
          <summary class="faq-item__q">How long does a typical project take?</summary>
          <p class="faq-item__a">
            A Starter chatbot typically takes 3–4 weeks from kickoff to launch.
            AI Integration packages run 6–10 weeks. Custom agent projects are scoped individually but usually 3–6 months.
          </p>
        </details>
        <details class="faq-item">
          <summary class="faq-item__q">Do I need to provide my own OpenAI / Anthropic API keys?</summary>
          <p class="faq-item__a">
            Yes — we recommend clients hold their own API keys so you're never locked into us.
            We'll help you set up billing and explain cost implications before we start.
          </p>
        </details>
        <details class="faq-item">
          <summary class="faq-item__q">Is my company's data kept private?</summary>
          <p class="faq-item__a">
            Absolutely. We architect solutions so your proprietary data stays in your infrastructure.
            We never send your documents to third-party models without your explicit consent and review.
          </p>
        </details>
        <details class="faq-item">
          <summary class="faq-item__q">Can you work with our existing systems (SAP, Salesforce, etc.)?</summary>
          <p class="faq-item__a">
            Yes — integration with existing business systems is our core strength.
            We've connected AI to a wide range of ERPs, CRMs, and custom-built systems over the years.
          </p>
        </details>
        <details class="faq-item">
          <summary class="faq-item__q">What if we want to start smaller than the Starter package?</summary>
          <p class="faq-item__a">
            We offer a paid AI Adoption Diagnostic ($1,200) that maps your operations to AI opportunities
            without committing to a build. Many clients start there and then move into a package.
          </p>
        </details>
      </div>
    </div>
  </section>

  {{-- ============== CTA ============== --}}
  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">Start with a free assessment.</h2>
      <p class="cta__lead">
        We'll review your operations, identify realistic AI opportunities, and give you an honest scope estimate — at no cost and no commitment.
      </p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">Book free assessment</a>
        <a href="{{ route('solutions.index') }}" class="btn btn--ghost btn--lg">Browse solutions</a>
      </div>
      <p class="cta__meta">Response within 1 business day</p>
    </div>
  </section>

  <nav class="back-nav" aria-label="Page navigation">
    <div class="container">
      <a href="{{ route('home') }}" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>Back to home</a>
    </div>
  </nav>

@push('styles')
<style>
  /* ===== Pricing Grid ===== */
  .pricing-grid {
    display: grid;
    gap: 20px;
    grid-template-columns: 1fr;
    align-items: stretch;
  }
  @media (min-width: 768px) { .pricing-grid { grid-template-columns: repeat(3, 1fr); } }

  .pricing-card {
    display: flex;
    flex-direction: column;
    border: 1px solid var(--c-border);
    border-radius: var(--radius-lg);
    overflow: hidden;
    background: #fff;
    transition: box-shadow .2s var(--ease), transform .2s var(--ease);
  }
  .pricing-card:hover { box-shadow: var(--shadow); transform: translateY(-3px); }
  .pricing-card--featured {
    border-color: var(--c-blue);
    box-shadow: 0 0 0 2px rgba(26,111,224,.15), var(--shadow);
  }
  .pricing-card--featured:hover { box-shadow: 0 0 0 2px rgba(26,111,224,.25), var(--shadow-lg); }

  .pricing-card__top {
    padding: 28px 26px 24px;
    border-bottom: 1px solid var(--c-border);
    background: var(--c-bg-soft);
  }
  .pricing-card--featured .pricing-card__top {
    background: linear-gradient(135deg, #EAF1FE 0%, #E0F5FD 100%);
    border-bottom-color: #C6DCFA;
  }

  .pricing-card__badge {
    display: inline-block;
    font-size: 10.5px;
    font-weight: 700;
    letter-spacing: .18em;
    color: var(--c-text-mute);
    text-transform: uppercase;
    margin-bottom: 8px;
  }
  .pricing-card__badge--featured {
    color: var(--c-blue);
    background: rgba(26,111,224,.1);
    padding: 3px 10px;
    border-radius: var(--radius-pill);
  }

  .pricing-card__name {
    font-size: 22px;
    font-weight: 800;
    color: var(--c-navy);
    margin-bottom: 6px;
  }
  .pricing-card__tagline {
    font-size: 13.5px;
    color: var(--c-text-sub);
    line-height: 1.7;
    margin-bottom: 18px;
  }

  .pricing-card__price {
    display: flex;
    align-items: baseline;
    gap: 6px;
  }
  .pricing-card__currency {
    font-size: 13px;
    font-weight: 600;
    color: var(--c-text-mute);
  }
  .pricing-card__amount {
    font-size: 32px;
    font-weight: 800;
    color: var(--c-navy);
    line-height: 1;
    font-feature-settings: "tnum";
  }
  .pricing-card__period {
    font-size: 13px;
    color: var(--c-text-mute);
    font-weight: 500;
  }

  .pricing-card__features {
    padding: 22px 26px;
    flex: 1;
    display: grid;
    gap: 10px;
    align-content: start;
  }
  .pricing-card__features li {
    font-size: 14px;
    color: var(--c-text);
    line-height: 1.6;
    padding-left: 22px;
    position: relative;
    font-weight: 500;
  }
  .pricing-card__features li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: var(--c-blue);
    font-weight: 800;
    font-size: 13px;
  }

  .pricing-card__footer {
    padding: 18px 26px 24px;
  }
  .pricing-card__btn {
    width: 100%;
    justify-content: center;
  }

  .pricing-note {
    margin-top: 32px;
    text-align: center;
    font-size: 13px;
    color: var(--c-text-mute);
    line-height: 1.85;
  }

  /* ===== Add-ons ===== */
  .addon-grid {
    display: grid;
    gap: 14px;
    grid-template-columns: 1fr;
  }
  @media (min-width: 640px) { .addon-grid { grid-template-columns: repeat(2, 1fr); } }

  .addon-item {
    display: grid;
    grid-template-columns: 1fr auto;
    grid-template-rows: auto auto;
    gap: 2px 16px;
    padding: 16px 20px;
    background: #fff;
    border: 1px solid var(--c-border);
    border-radius: var(--radius);
    align-items: start;
  }
  .addon-item__label {
    font-size: 15px;
    font-weight: 700;
    color: var(--c-navy);
    grid-column: 1;
    grid-row: 1;
  }
  .addon-item__desc {
    font-size: 13px;
    color: var(--c-text-sub);
    grid-column: 1;
    grid-row: 2;
    line-height: 1.6;
  }
  .addon-item__price {
    font-size: 14px;
    font-weight: 800;
    color: var(--c-blue);
    grid-column: 2;
    grid-row: 1 / 3;
    align-self: center;
    white-space: nowrap;
  }

  /* ===== FAQ ===== */
  .faq-list { display: grid; gap: 4px; }
  .faq-item {
    border: 1px solid var(--c-border);
    border-radius: var(--radius);
    overflow: hidden;
    background: var(--c-bg-soft);
  }
  .faq-item[open] { background: #fff; border-color: var(--c-blue); }
  .faq-item__q {
    padding: 18px 20px;
    font-size: 15px;
    font-weight: 700;
    color: var(--c-navy);
    cursor: pointer;
    list-style: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    user-select: none;
  }
  .faq-item__q::-webkit-details-marker { display: none; }
  .faq-item__q::after {
    content: "+";
    font-size: 20px;
    font-weight: 400;
    color: var(--c-blue);
    flex: 0 0 auto;
    transition: transform .2s var(--ease);
  }
  .faq-item[open] .faq-item__q::after { transform: rotate(45deg); }
  .faq-item__a {
    padding: 0 20px 18px;
    font-size: 14px;
    color: var(--c-text-sub);
    line-height: 1.9;
  }
</style>
@endpush

@endsection
