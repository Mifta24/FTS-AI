@extends('layouts.app')

@section('title', __('home.title'))
@section('description', __('home.description'))

@section('content')

  {{-- ============== HERO ============== --}}
  <section class="hero">
    <div class="container hero__inner">

      <div class="hero__copy">
        <span class="hero__eyebrow">{{ __('home.hero_eyebrow') }}</span>
        <h1 class="hero__title">
          {!! __('home.hero_title') !!}
        </h1>
        <p class="hero__lead">
          {!! __('home.hero_lead') !!}
        </p>
        <div class="hero__ctas">
          <a href="{{ route('solutions.index') }}" class="btn btn--primary btn--lg">{{ __('home.hero_cta_primary') }}</a>
          <a href="{{ route('contact.index') }}" class="btn btn--ghost btn--lg">{{ __('home.hero_cta_secondary') }}</a>
        </div>
        <div class="hero__meta">
          <div class="hero__meta-item">
            <span class="hero__meta-num">30+<small>{{ __('home.hero_stat_years') }}</small></span>
            <span class="hero__meta-label">{{ __('home.hero_stat_system') }}</span>
          </div>
          <div class="hero__meta-item">
            <span class="hero__meta-num">6<small>{{ __('home.hero_stat_use_cases') }}</small></span>
            <span class="hero__meta-label">{{ __('home.hero_stat_solutions') }}</span>
          </div>
          <div class="hero__meta-item">
            <span class="hero__meta-num">Free</span>
            <span class="hero__meta-label">{{ __('home.hero_stat_assessment') }}</span>
          </div>
        </div>
      </div>

      <div class="hero__visual" aria-hidden="true">
        <img src="{{ asset('images/hero-ai-visual.png') }}" alt="" class="hero__visual-img">
      </div>

    </div>
  </section>

  {{-- ============== SOLUTIONS TEASER ============== --}}
  <section class="section" style="background:var(--c-bg-soft);padding:48px 0;">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">{{ __('home.sol_eyebrow') }}</span>
        <h2 class="section__title">{!! __('home.sol_title') !!}</h2>
      </div>
      <div class="sol-teaser-grid">
        <a href="{{ route('solutions.index') }}#chatbot" class="sol-teaser-item">
          <span class="sol-teaser-item__icon">💬</span>
          <span class="sol-teaser-item__label">{{ __('home.sol_chatbot_label') }}</span>
          <span class="sol-teaser-item__sub">{{ __('home.sol_chatbot_sub') }}</span>
        </a>
        <a href="{{ route('solutions.index') }}#document" class="sol-teaser-item">
          <span class="sol-teaser-item__icon">📄</span>
          <span class="sol-teaser-item__label">{{ __('home.sol_doc_label') }}</span>
          <span class="sol-teaser-item__sub">{{ __('home.sol_doc_sub') }}</span>
        </a>
        <a href="{{ route('solutions.index') }}#copilot" class="sol-teaser-item">
          <span class="sol-teaser-item__icon">🧠</span>
          <span class="sol-teaser-item__label">{{ __('home.sol_copilot_label') }}</span>
          <span class="sol-teaser-item__sub">{{ __('home.sol_copilot_sub') }}</span>
        </a>
        <a href="{{ route('solutions.index') }}#sales" class="sol-teaser-item">
          <span class="sol-teaser-item__icon">📈</span>
          <span class="sol-teaser-item__label">{{ __('home.sol_sales_label') }}</span>
          <span class="sol-teaser-item__sub">{{ __('home.sol_sales_sub') }}</span>
        </a>
        <a href="{{ route('solutions.index') }}#automation" class="sol-teaser-item">
          <span class="sol-teaser-item__icon">⚙️</span>
          <span class="sol-teaser-item__label">{{ __('home.sol_auto_label') }}</span>
          <span class="sol-teaser-item__sub">{{ __('home.sol_auto_sub') }}</span>
        </a>
        <a href="{{ route('solutions.index') }}#agent" class="sol-teaser-item">
          <span class="sol-teaser-item__icon">🤖</span>
          <span class="sol-teaser-item__label">{{ __('home.sol_agent_label') }}</span>
          <span class="sol-teaser-item__sub">{{ __('home.sol_agent_sub') }}</span>
        </a>
      </div>
      <div class="section-cta">
        <a href="{{ route('solutions.index') }}" class="btn btn--primary">{{ __('common.explore_all_solutions') }}</a>
        <a href="{{ route('pricing.index') }}" class="btn btn--ghost">{{ __('common.view_pricing') }}</a>
      </div>
    </div>
  </section>

  {{-- ============== STRENGTHS ============== --}}
  <section class="section strengths" id="strengths">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">{{ __('home.str_eyebrow') }}</span>
        <h2 class="section__title">{!! __('home.str_title') !!}</h2>
        <p class="section__lead">
          {!! __('home.str_lead') !!}
        </p>
      </div>

      <div class="strengths__grid">

        <article class="strength-card strength-card--system">
          <span class="strength-card__num">01</span>
          <div class="strength-card__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="3" width="7.5" height="7.5" rx="1.5"/>
              <rect x="13.5" y="3" width="7.5" height="7.5" rx="1.5"/>
              <rect x="3" y="13.5" width="7.5" height="7.5" rx="1.5"/>
              <rect x="13.5" y="13.5" width="7.5" height="7.5" rx="1.5"/>
            </svg>
          </div>
          <p class="strength-card__eyebrow">{{ __('home.str1_eyebrow') }}</p>
          <h3 class="strength-card__title">{{ __('home.str1_title') }}</h3>
          <p class="strength-card__text">{{ __('home.str1_text') }}</p>
        </article>

        <article class="strength-card strength-card--ai">
          <span class="strength-card__num">02</span>
          <div class="strength-card__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
              <path d="M11 3 12.9 8.6 18.5 10.5 12.9 12.4 11 18 9.1 12.4 3.5 10.5 9.1 8.6 11 3z"/>
              <path d="M18.5 16.5 19.3 18.2 21 19 19.3 19.8 18.5 21.5 17.7 19.8 16 19 17.7 18.2 18.5 16.5z"/>
            </svg>
          </div>
          <p class="strength-card__eyebrow">{{ __('home.str2_eyebrow') }}</p>
          <h3 class="strength-card__title">{{ __('home.str2_title') }}</h3>
          <p class="strength-card__text">{{ __('home.str2_text') }}</p>
        </article>

        <article class="strength-card strength-card--global">
          <span class="strength-card__num">03</span>
          <div class="strength-card__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="9"/>
              <path d="M3 12h18"/>
              <path d="M12 3a13.5 13.5 0 0 1 0 18"/>
              <path d="M12 3a13.5 13.5 0 0 0 0 18"/>
            </svg>
          </div>
          <p class="strength-card__eyebrow">{{ __('home.str3_eyebrow') }}</p>
          <h3 class="strength-card__title">{{ __('home.str3_title') }}</h3>
          <p class="strength-card__text">{{ __('home.str3_text') }}</p>
        </article>

      </div>
    </div>
  </section>

  {{-- ============== SERVICE SUMMARY ============== --}}
  <section class="section svc-summary">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">{{ __('home.svc_eyebrow') }}</span>
        <h2 class="section__title">{{ __('home.svc_title') }}</h2>
        <p class="section__lead">
          {!! __('home.svc_lead') !!}
        </p>
      </div>

      <div class="svc-summary__grid">
        <article class="svc-summary__item">
          <span class="svc-summary__num">01</span>
          <h3 class="svc-summary__title">{{ __('home.svc1_title') }}</h3>
          <p class="svc-summary__text">{{ __('home.svc1_text') }}</p>
        </article>
        <article class="svc-summary__item">
          <span class="svc-summary__num">02</span>
          <h3 class="svc-summary__title">{{ __('home.svc2_title') }}</h3>
          <p class="svc-summary__text">{{ __('home.svc2_text') }}</p>
        </article>
        <article class="svc-summary__item">
          <span class="svc-summary__num">03</span>
          <h3 class="svc-summary__title">{{ __('home.svc3_title') }}</h3>
          <p class="svc-summary__text">{{ __('home.svc3_text') }}</p>
        </article>
      </div>

      <div class="section-cta">
        <a href="{{ route('service.index') }}" class="btn btn--primary">{{ __('common.see_all_services') }}</a>
      </div>
    </div>
  </section>

  {{-- ============== WORKS SUMMARY ============== --}}
  <section class="section wks-summary">
    <div class="container">

      <div class="wks-summary__inner">
        <div class="wks-summary__intro">
          <span class="section__eyebrow">{{ __('home.wks_eyebrow') }}</span>
          <h2 class="section__title section__title--left">{{ __('home.wks_title') }}</h2>
          <p class="wks-summary__desc">{{ __('home.wks_desc') }}</p>
          <a href="{{ route('works.index') }}" class="btn btn--primary wks-summary__cta-btn">{{ __('common.view_our_works') }}</a>
        </div>

        <ul class="wks-summary__list">
          <li>
            <span class="wks-summary__num">01</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">{{ __('home.wks1_name') }}</span>
              <span class="wks-summary__sub">{{ __('home.wks1_sub') }}</span>
            </div>
          </li>
          <li>
            <span class="wks-summary__num">02</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">{{ __('home.wks2_name') }}</span>
              <span class="wks-summary__sub">{{ __('home.wks2_sub') }}</span>
            </div>
          </li>
          <li>
            <span class="wks-summary__num">03</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">{{ __('home.wks3_name') }}</span>
              <span class="wks-summary__sub">{{ __('home.wks3_sub') }}</span>
            </div>
          </li>
          <li>
            <span class="wks-summary__num">04</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">{{ __('home.wks4_name') }}</span>
              <span class="wks-summary__sub">{{ __('home.wks4_sub') }}</span>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </section>

  {{-- ============== NEWS ============== --}}
  <section class="section news-summary" id="news">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">{{ __('home.news_eyebrow') }}</span>
        <h2 class="section__title">{{ __('home.news_title') }}</h2>
        <p class="section__lead">{{ __('home.news_lead') }}</p>
      </div>

      <ul class="news-list">

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--info">{{ __('home.news_cat_news') }}</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">{{ __('home.news1_title') }}</h3>
            <p class="news-list__desc">{{ __('home.news1_desc') }}</p>
          </div>
        </li>

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--service">{{ __('home.news_cat_service') }}</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">{{ __('home.news2_title') }}</h3>
            <p class="news-list__desc">{{ __('home.news2_desc') }}</p>
          </div>
        </li>

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--update">{{ __('home.news_cat_update') }}</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">
              <a href="{{ route('message') }}">{{ __('home.news3_title') }}</a>
            </h3>
            <p class="news-list__desc">{{ __('home.news3_desc') }}</p>
          </div>
        </li>

      </ul>

      <div class="news-summary__cta">
        <a href="{{ route('news.index') }}" class="btn btn--ghost">{{ __('common.view_all_news') }}</a>
      </div>
    </div>
  </section>

  {{-- ============== CONTACT CTA ============== --}}
  <section class="section cta" id="contact">
    <div class="container container--narrow">
      <h2 class="cta__title">
        {!! __('home.cta_title') !!}
      </h2>
      <p class="cta__lead">{{ __('home.cta_lead') }}</p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">{{ __('home.cta_primary') }}</a>
        <a href="{{ route('solutions.index') }}" class="btn btn--ghost btn--lg">{{ __('home.cta_secondary') }}</a>
      </div>
      <p class="cta__meta">{!! __('home.cta_meta') !!}</p>
    </div>
  </section>

@endsection
