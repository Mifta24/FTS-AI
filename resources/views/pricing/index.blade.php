@extends('layouts.app')

@section('title', __('pricing.title'))
@section('description', __('pricing.description'))

@section('content')

  {{-- ============== PAGE HEADER ============== --}}
  <section class="ai-hero-bg">
    <div class="container ai-hero-bg__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">{{ __('common.home') }}</a><span class="breadcrumb__sep">›</span>{{ __('pricing.breadcrumb') }}</p>
      <p class="page-header__eyebrow">{{ __('pricing.eyebrow') }}</p>
      <h1 class="page-header__title">
        {!! __('pricing.hero_title') !!}
      </h1>
      <p class="page-header__lead">{{ __('pricing.hero_lead') }}</p>
    </div>
  </section>

  {{-- ============== PRICING CARDS ============== --}}
  <section class="section" style="background:#fff;">
    <div class="container">
      <div class="pricing-grid">

        {{-- Starter --}}
        <article class="pricing-card">
          <div class="pricing-card__top">
            <span class="pricing-card__badge">{{ __('pricing.starter_badge') }}</span>
            <h3 class="pricing-card__name">{{ __('pricing.starter_name') }}</h3>
            <p class="pricing-card__tagline">{{ __('pricing.starter_tagline') }}</p>
            <div class="pricing-card__price">
              <span class="pricing-card__currency">{{ __('pricing.starter_currency') }}</span>
              <span class="pricing-card__amount">{{ __('pricing.starter_amount') }}</span>
              <span class="pricing-card__period">{{ __('pricing.starter_period') }}</span>
            </div>
          </div>
          <ul class="pricing-card__features">
            <li>{{ __('pricing.starter_f1') }}</li>
            <li>{{ __('pricing.starter_f2') }}</li>
            <li>{{ __('pricing.starter_f3') }}</li>
            <li>{{ __('pricing.starter_f4') }}</li>
            <li>{{ __('pricing.starter_f5') }}</li>
            <li>{{ __('pricing.starter_f6') }}</li>
          </ul>
          <div class="pricing-card__footer">
            <a href="{{ route('contact.index') }}" class="btn btn--ghost pricing-card__btn">{{ __('pricing.starter_cta') }}</a>
          </div>
        </article>

        {{-- Growth --}}
        <article class="pricing-card pricing-card--featured">
          <div class="pricing-card__top">
            <span class="pricing-card__badge pricing-card__badge--featured">{{ __('pricing.growth_badge') }}</span>
            <h3 class="pricing-card__name">{{ __('pricing.growth_name') }}</h3>
            <p class="pricing-card__tagline">{{ __('pricing.growth_tagline') }}</p>
            <div class="pricing-card__price">
              <span class="pricing-card__currency">{{ __('pricing.growth_currency') }}</span>
              <span class="pricing-card__amount">{{ __('pricing.growth_amount') }}</span>
              <span class="pricing-card__period">{{ __('pricing.growth_period') }}</span>
            </div>
          </div>
          <ul class="pricing-card__features">
            <li>{{ __('pricing.growth_f1') }}</li>
            <li>{{ __('pricing.growth_f2') }}</li>
            <li>{{ __('pricing.growth_f3') }}</li>
            <li>{{ __('pricing.growth_f4') }}</li>
            <li>{{ __('pricing.growth_f5') }}</li>
            <li>{{ __('pricing.growth_f6') }}</li>
          </ul>
          <div class="pricing-card__footer">
            <a href="{{ route('contact.index') }}" class="btn btn--blue pricing-card__btn">{{ __('pricing.growth_cta') }}</a>
          </div>
        </article>

        {{-- Enterprise --}}
        <article class="pricing-card">
          <div class="pricing-card__top">
            <span class="pricing-card__badge">{{ __('pricing.enterprise_badge') }}</span>
            <h3 class="pricing-card__name">{{ __('pricing.enterprise_name') }}</h3>
            <p class="pricing-card__tagline">{{ __('pricing.enterprise_tagline') }}</p>
            <div class="pricing-card__price">
              <span class="pricing-card__currency">{{ __('pricing.enterprise_currency') }}</span>
              <span class="pricing-card__amount">{{ __('pricing.enterprise_amount') }}</span>
            </div>
          </div>
          <ul class="pricing-card__features">
            <li>{{ __('pricing.enterprise_f1') }}</li>
            <li>{{ __('pricing.enterprise_f2') }}</li>
            <li>{{ __('pricing.enterprise_f3') }}</li>
            <li>{{ __('pricing.enterprise_f4') }}</li>
            <li>{{ __('pricing.enterprise_f5') }}</li>
            <li>{{ __('pricing.enterprise_f6') }}</li>
          </ul>
          <div class="pricing-card__footer">
            <a href="{{ route('contact.index') }}" class="btn btn--primary pricing-card__btn">{{ __('pricing.enterprise_cta') }}</a>
          </div>
        </article>

      </div>

      <p class="pricing-note">{{ __('pricing.pricing_note') }}</p>
    </div>
  </section>

  {{-- ============== ADD-ONS ============== --}}
  <section class="section" style="background:var(--c-bg-soft);">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">{{ __('pricing.addons_eyebrow') }}</span>
        <h2 class="section__title">{{ __('pricing.addons_title') }}</h2>
        <p class="section__lead">{{ __('pricing.addons_lead') }}</p>
      </div>
      <div class="addon-grid">
        <div class="addon-item">
          <span class="addon-item__label">{{ __('pricing.addon1_label') }}</span>
          <span class="addon-item__desc">{{ __('pricing.addon1_desc') }}</span>
          <span class="addon-item__price">{{ __('pricing.addon1_price') }}</span>
        </div>
        <div class="addon-item">
          <span class="addon-item__label">{{ __('pricing.addon2_label') }}</span>
          <span class="addon-item__desc">{{ __('pricing.addon2_desc') }}</span>
          <span class="addon-item__price">{{ __('pricing.addon2_price') }}</span>
        </div>
        <div class="addon-item">
          <span class="addon-item__label">{{ __('pricing.addon3_label') }}</span>
          <span class="addon-item__desc">{{ __('pricing.addon3_desc') }}</span>
          <span class="addon-item__price">{{ __('pricing.addon3_price') }}</span>
        </div>
        <div class="addon-item">
          <span class="addon-item__label">{{ __('pricing.addon4_label') }}</span>
          <span class="addon-item__desc">{{ __('pricing.addon4_desc') }}</span>
          <span class="addon-item__price">{{ __('pricing.addon4_price') }}</span>
        </div>
      </div>
    </div>
  </section>

  {{-- ============== FAQ ============== --}}
  <section class="section" style="background:#fff;">
    <div class="container container--narrow">
      <div class="section__head">
        <span class="section__eyebrow">{{ __('pricing.faq_eyebrow') }}</span>
        <h2 class="section__title">{{ __('pricing.faq_title') }}</h2>
      </div>
      <div class="faq-list">
        <details class="faq-item">
          <summary class="faq-item__q">{{ __('pricing.faq1_q') }}</summary>
          <p class="faq-item__a">{{ __('pricing.faq1_a') }}</p>
        </details>
        <details class="faq-item">
          <summary class="faq-item__q">{{ __('pricing.faq2_q') }}</summary>
          <p class="faq-item__a">{{ __('pricing.faq2_a') }}</p>
        </details>
        <details class="faq-item">
          <summary class="faq-item__q">{{ __('pricing.faq3_q') }}</summary>
          <p class="faq-item__a">{{ __('pricing.faq3_a') }}</p>
        </details>
        <details class="faq-item">
          <summary class="faq-item__q">{{ __('pricing.faq4_q') }}</summary>
          <p class="faq-item__a">{{ __('pricing.faq4_a') }}</p>
        </details>
        <details class="faq-item">
          <summary class="faq-item__q">{{ __('pricing.faq5_q') }}</summary>
          <p class="faq-item__a">{{ __('pricing.faq5_a') }}</p>
        </details>
      </div>
    </div>
  </section>

  {{-- ============== CTA ============== --}}
  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">{{ __('pricing.cta_title') }}</h2>
      <p class="cta__lead">{{ __('pricing.cta_lead') }}</p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">{{ __('pricing.cta_primary') }}</a>
        <a href="{{ route('solutions.index') }}" class="btn btn--ghost btn--lg">{{ __('pricing.cta_secondary') }}</a>
      </div>
      <p class="cta__meta">{{ __('pricing.cta_meta') }}</p>
    </div>
  </section>

  <nav class="back-nav" aria-label="Page navigation">
    <div class="container">
      <a href="{{ route('home') }}" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>{{ __('common.back_to_home') }}</a>
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
