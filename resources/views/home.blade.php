@extends('layouts.app')

@section('title', 'FTS AI | We integrate AI into your business systems')
@section('description', 'FTS AI (Fujiyama Technology Solutions) builds practical AI integrations — chatbots, document automation, internal copilots, and AI agents — backed by 30+ years of business system development expertise.')

@section('content')

  {{-- ============== HERO ============== --}}
  <section class="hero">
    <div class="container hero__inner">

      <div class="hero__copy">
        <span class="hero__eyebrow">AI INTEGRATION × SYSTEM DEVELOPMENT × GLOBAL</span>
        <h1 class="hero__title">
          We integrate <span class="accent">AI into your business</span><br>
          so it actually works in the field.
        </h1>
        <p class="hero__lead">
          FTS AI builds practical AI integrations — chatbots, document automation, internal copilots, and AI agents —<br class="hide-sp">
          backed by 30+ years of business system development. No buzzwords. Just working systems.
        </p>
        <div class="hero__ctas">
          <a href="{{ route('solutions.index') }}" class="btn btn--primary btn--lg">See AI solutions</a>
          <a href="{{ route('contact.index') }}" class="btn btn--ghost btn--lg">Free AI assessment</a>
        </div>
        <div class="hero__meta">
          <div class="hero__meta-item">
            <span class="hero__meta-num">30+<small>years</small></span>
            <span class="hero__meta-label">SYSTEM DEVELOPMENT</span>
          </div>
          <div class="hero__meta-item">
            <span class="hero__meta-num">6<small>AI use cases</small></span>
            <span class="hero__meta-label">PROVEN SOLUTIONS</span>
          </div>
          <div class="hero__meta-item">
            <span class="hero__meta-num">Free</span>
            <span class="hero__meta-label">AI ASSESSMENT</span>
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
        <span class="section__eyebrow">WHAT WE BUILD</span>
        <h2 class="section__title">AI solutions that <span class="accent">connect to real operations</span></h2>
      </div>
      <div class="sol-teaser-grid">
        <a href="{{ route('solutions.index') }}#chatbot" class="sol-teaser-item">
          <span class="sol-teaser-item__icon">💬</span>
          <span class="sol-teaser-item__label">AI Chatbot</span>
          <span class="sol-teaser-item__sub">Grounded in your knowledge base</span>
        </a>
        <a href="{{ route('solutions.index') }}#document" class="sol-teaser-item">
          <span class="sol-teaser-item__icon">📄</span>
          <span class="sol-teaser-item__label">Document Automation</span>
          <span class="sol-teaser-item__sub">Invoice, contract, report extraction</span>
        </a>
        <a href="{{ route('solutions.index') }}#copilot" class="sol-teaser-item">
          <span class="sol-teaser-item__icon">🧠</span>
          <span class="sol-teaser-item__label">Internal Copilot</span>
          <span class="sol-teaser-item__sub">Staff Q&amp;A from internal docs</span>
        </a>
        <a href="{{ route('solutions.index') }}#sales" class="sol-teaser-item">
          <span class="sol-teaser-item__icon">📈</span>
          <span class="sol-teaser-item__label">Sales &amp; Content AI</span>
          <span class="sol-teaser-item__sub">Proposals, emails, meeting notes</span>
        </a>
        <a href="{{ route('solutions.index') }}#automation" class="sol-teaser-item">
          <span class="sol-teaser-item__icon">⚙️</span>
          <span class="sol-teaser-item__label">Process Automation</span>
          <span class="sol-teaser-item__sub">n8n / Make + AI workflows</span>
        </a>
        <a href="{{ route('solutions.index') }}#agent" class="sol-teaser-item">
          <span class="sol-teaser-item__icon">🤖</span>
          <span class="sol-teaser-item__label">Custom AI Agent</span>
          <span class="sol-teaser-item__sub">Multi-step autonomous AI</span>
        </a>
      </div>
      <div class="section-cta">
        <a href="{{ route('solutions.index') }}" class="btn btn--primary">Explore all solutions</a>
        <a href="{{ route('pricing.index') }}" class="btn btn--ghost">View pricing</a>
      </div>
    </div>
  </section>

  {{-- ============== STRENGTHS ============== --}}
  <section class="section strengths" id="strengths">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">OUR STRENGTHS</span>
        <h2 class="section__title">FTS AI's <span class="accent">three strengths</span></h2>
        <p class="section__lead">
          We bring together decades of experience in system development, web production, and IT consulting<br class="hide-sp">
          to support our clients across operational improvement, AI adoption, and overseas expansion.
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
          <p class="strength-card__eyebrow">System</p>
          <h3 class="strength-card__title">Long-standing system development track record</h3>
          <p class="strength-card__text">
            A proven history of building and improving business systems, web systems,
            and IT consulting work tailored to each client's operations.
          </p>
        </article>

        <article class="strength-card strength-card--ai">
          <span class="strength-card__num">02</span>
          <div class="strength-card__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
              <path d="M11 3 12.9 8.6 18.5 10.5 12.9 12.4 11 18 9.1 12.4 3.5 10.5 9.1 8.6 11 3z"/>
              <path d="M18.5 16.5 19.3 18.2 21 19 19.3 19.8 18.5 21.5 17.7 19.8 16 19 17.7 18.2 18.5 16.5z"/>
            </svg>
          </div>
          <p class="strength-card__eyebrow">AI Support</p>
          <h3 class="strength-card__title">AI adoption and operational improvement</h3>
          <p class="strength-card__text">
            Building on years of IT support experience, we help businesses adopt
            generative AI and digital tools to streamline day-to-day operations.
          </p>
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
          <p class="strength-card__eyebrow">Global</p>
          <h3 class="strength-card__title">Overseas talent and global partnerships</h3>
          <p class="strength-card__text">
            Through partnerships with overseas talent and global vendors,
            we deliver flexible development, production, and operations support.
          </p>
        </article>

      </div>
    </div>
  </section>

  {{-- ============== SERVICE SUMMARY ============== --}}
  <section class="section svc-summary">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">SERVICE</span>
        <h2 class="section__title">Services</h2>
        <p class="section__lead">
          From system development, web production, and IT consulting through AI adoption and global partnerships,<br class="hide-sp">
          we provide IT services that support business growth.
        </p>
      </div>

      <div class="svc-summary__grid">
        <article class="svc-summary__item">
          <span class="svc-summary__num">01</span>
          <h3 class="svc-summary__title">System Development & IT Support</h3>
          <p class="svc-summary__text">
            We help businesses improve operations through business systems, web systems, and IT consulting.
          </p>
        </article>
        <article class="svc-summary__item">
          <span class="svc-summary__num">02</span>
          <h3 class="svc-summary__title">Web & App Production</h3>
          <p class="svc-summary__text">
            We build corporate sites, service sites, and web systems that drive customer acquisition and operational efficiency.
          </p>
        </article>
        <article class="svc-summary__item">
          <span class="svc-summary__num">03</span>
          <h3 class="svc-summary__title">AI & Global Support</h3>
          <p class="svc-summary__text">
            Through generative AI adoption support and partnerships with overseas talent and vendors, we help build new operational structures.
          </p>
        </article>
      </div>

      <div class="section-cta">
        <a href="{{ route('service.index') }}" class="btn btn--primary">See all services</a>
      </div>
    </div>
  </section>

  {{-- ============== WORKS SUMMARY ============== --}}
  <section class="section wks-summary">
    <div class="container">

      <div class="wks-summary__inner">
        <div class="wks-summary__intro">
          <span class="section__eyebrow">WORKS</span>
          <h2 class="section__title section__title--left">Works</h2>
          <p class="wks-summary__desc">
            We have delivered development and adoption support across business systems, web systems, and packaged software,
            tailored to each client's operations. Rather than naming specific companies or projects, we present our work by domain.
          </p>
          <a href="{{ route('works.index') }}" class="btn btn--primary wks-summary__cta-btn">View our works</a>
        </div>

        <ul class="wks-summary__list">
          <li>
            <span class="wks-summary__num">01</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">Business System Development</span>
              <span class="wks-summary__sub">Sales, inventory, internal management, and more</span>
            </div>
          </li>
          <li>
            <span class="wks-summary__num">02</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">Web System Production</span>
              <span class="wks-summary__sub">Corporate sites, web systems, admin dashboards, and more</span>
            </div>
          </li>
          <li>
            <span class="wks-summary__num">03</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">Packaged Software Adoption Support</span>
              <span class="wks-summary__sub">Adoption and operations support for business-support services</span>
            </div>
          </li>
          <li>
            <span class="wks-summary__num">04</span>
            <div class="wks-summary__body">
              <span class="wks-summary__name">IT Consulting</span>
              <span class="wks-summary__sub">Identifying operational issues and proposing improvements</span>
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
        <span class="section__eyebrow">NEWS</span>
        <h2 class="section__title">News</h2>
        <p class="section__lead">
          Announcements, service updates, and product information from FTS AI.
        </p>
      </div>

      <ul class="news-list">

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--info">News</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">FTS AI corporate site has been renewed</h3>
            <p class="news-list__desc">
              We have reorganized our service, works, and company information for clarity and refreshed the site.
            </p>
          </div>
        </li>

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--service">Service</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">AI adoption support service page is now live</h3>
            <p class="news-list__desc">
              Drawing on years of experience in system development, web production, and IT consulting, we have launched information for our enterprise AI adoption support service.
            </p>
          </div>
        </li>

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--update">Update</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">
              <a href="{{ route('message') }}">Message from the CEO page has been updated</a>
            </h3>
            <p class="news-list__desc">
              The CEO message page has been refreshed to match the new design.
            </p>
          </div>
        </li>

      </ul>

      <div class="news-summary__cta">
        <a href="{{ route('news.index') }}" class="btn btn--ghost">View all news</a>
      </div>
    </div>
  </section>

  {{-- ============== CONTACT CTA ============== --}}
  <section class="section cta" id="contact">
    <div class="container container--narrow">
      <h2 class="cta__title">
        Ready to integrate AI into your operations?<br>
        Start with a free 30-minute assessment.
      </h2>
      <p class="cta__lead">
        We'll map your operations to realistic AI use cases, tell you what's worth building first,
        and give you an honest scope estimate &mdash; at no cost and no commitment.
      </p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">Book free AI assessment</a>
        <a href="{{ route('solutions.index') }}" class="btn btn--ghost btn--lg">Browse solutions</a>
      </div>
      <p class="cta__meta">No prior AI knowledge required &bull; Response within 1 business day</p>
    </div>
  </section>

@endsection
