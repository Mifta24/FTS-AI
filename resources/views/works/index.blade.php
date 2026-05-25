@extends('layouts.app')

@section('title', 'Works | FTS AI')
@section('description', "FTS AI's works. We present our development and adoption support across business systems, web systems, and packaged software, organized by domain.")

@section('content')

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="breadcrumb__sep">›</span>Works</p>
      <p class="page-header__eyebrow">WORKS</p>
      <h1 class="page-header__title">Works</h1>
      <p class="page-header__lead">
        We have delivered development and adoption support for business systems, web systems, and packaged software,<br class="hide-sp">
        tailored to each client's operations.
      </p>
    </div>
  </section>

  <section class="section works-summary">
    <div class="container">

      <div class="works-grid">

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">01</span>
            <h3 class="works-card__title">Business System Development</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">
            Sales, inventory, customer, and internal management systems &mdash;
            built for the specific workflow of each business.
          </p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">02</span>
            <h3 class="works-card__title">Web Systems & Website Production</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">
            Corporate sites, service sites, booking and contact forms, and web systems with admin dashboards &mdash;
            web work that supports operations and customer acquisition.
          </p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">03</span>
            <h3 class="works-card__title">Packaged Software & Business Support</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">
            Through the adoption and operation of existing packages and business-support services,
            we improve day-to-day operational efficiency.
          </p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">04</span>
            <h3 class="works-card__title">IT Consulting & Improvement Proposals</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">
            We organize existing systems and operational issues and propose improvements
            connected to IT usage, DX, and AI.
          </p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">05</span>
            <h3 class="works-card__title">AI Adoption Support</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">
            We deliver operational efficiency, automated inquiry handling, and internal business support
            using generative AI and AI tools.
          </p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">06</span>
            <h3 class="works-card__title">Global Development Support</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">
            We cover system development and operations support, plus multilingual web production,
            through partnerships with overseas talent and vendors.
          </p>
        </article>

      </div>

    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">Consultations about our works</h2>
      <p class="cta__lead">
        Based on the domains and capabilities we've covered, we can propose solutions fitted to your situation.<br class="hide-sp">
        Feel free to reach out.
      </p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">Contact us</a>
        <a href="{{ route('contact.index') }}" class="btn btn--ghost btn--lg">Free consultation</a>
      </div>
    </div>
  </section>

  <nav class="back-nav" aria-label="Page navigation">
    <div class="container">
      <a href="{{ route('home') }}" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>Back to home</a>
    </div>
  </nav>

@endsection
