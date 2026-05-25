@extends('layouts.app')

@section('title', 'Services | FTS AI')
@section('description', 'FTS AI (Fujiyama Technology Solutions) services: custom system development, web and app production, IT consulting, AI adoption support, global support, and packaged-service delivery — IT services that drive business growth.')

@section('content')

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="breadcrumb__sep">›</span>Services</p>
      <p class="page-header__eyebrow">SERVICE</p>
      <h1 class="page-header__title">Services</h1>
      <p class="page-header__lead">
        From system development, web production, and IT consulting to AI adoption support and global partnerships,<br class="hide-sp">
        FTS AI delivers IT services that support business improvement and growth.
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="services__list">

        <a href="{{ route('service.system-development') }}" class="service-item">
          <span class="service-item__num">01</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">SYSTEM</p>
            <h3 class="service-item__title">Custom System Development</h3>
            <p class="service-item__text">
              We design and build business systems, sales management, inventory management, customer management, and internal management systems tailored to each company's workflow.
            </p>
            <p class="service-item__examples-label">Examples</p>
            <ul class="service-item__examples">
              <li>Sales and inventory management systems</li>
              <li>Internal management and CRM systems</li>
              <li>Improvements and refactoring of existing systems</li>
            </ul>
            <span class="service-item__link">Learn more</span>
          </div>
        </a>

        <a href="{{ route('service.web-app') }}" class="service-item">
          <span class="service-item__num">02</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">WEB &amp; APP</p>
            <h3 class="service-item__title">Web & App Production</h3>
            <p class="service-item__text">
              We deliver corporate sites, service sites, web systems, and mobile-friendly websites that drive customer acquisition and operational efficiency.
            </p>
            <p class="service-item__examples-label">Examples</p>
            <ul class="service-item__examples">
              <li>Corporate and service sites</li>
              <li>Websites with booking and contact forms</li>
              <li>Web systems with admin dashboards</li>
            </ul>
            <span class="service-item__link">Learn more</span>
          </div>
        </a>

        <a href="{{ route('service.it-consulting') }}" class="service-item">
          <span class="service-item__num">03</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">CONSULTING</p>
            <h3 class="service-item__title">IT Consulting</h3>
            <p class="service-item__text">
              We help organize challenges in existing operations and systems, and support optimal IT usage and DX initiatives.
              We go beyond theoretical strategy to make practical, operations-focused recommendations.
            </p>
            <p class="service-item__examples-label">What you can consult on</p>
            <ul class="service-item__examples">
              <li>Mapping operational issues and IT strategy</li>
              <li>Replacing legacy systems</li>
              <li>DX initiatives and adoption of new technology</li>
            </ul>
            <span class="service-item__link">Learn more</span>
          </div>
        </a>

        <a href="{{ route('service.ai-support') }}" class="service-item">
          <span class="service-item__num">04</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">AI SUPPORT</p>
            <h3 class="service-item__title">AI Adoption Support</h3>
            <p class="service-item__text">
              We help adopt generative AI and AI tools for inquiry handling, document creation, sales enablement, and internal operations
              in forms that truly work in practice.
            </p>
            <p class="service-item__examples-label">Examples</p>
            <ul class="service-item__examples">
              <li>Operational use of ChatGPT and Claude</li>
              <li>AI chatbot deployment and inquiry automation</li>
              <li>Internal knowledge utilization and process automation</li>
            </ul>
            <span class="service-item__link">Learn more</span>
          </div>
        </a>

        <a href="{{ route('service.global-support') }}" class="service-item">
          <span class="service-item__num">05</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">GLOBAL</p>
            <h3 class="service-item__title">Global Support</h3>
            <p class="service-item__text">
              Through collaboration with overseas talent and offices, we help build development, production, and operations teams.
              We specialize in keeping costs down while maintaining quality.
            </p>
            <p class="service-item__examples-label">Examples</p>
            <ul class="service-item__examples">
              <li>Building offshore development teams</li>
              <li>Multilingual website production</li>
              <li>IT support for businesses expanding overseas</li>
            </ul>
            <span class="service-item__link">Learn more</span>
          </div>
        </a>

        <a href="{{ route('service.package') }}" class="service-item">
          <span class="service-item__num">06</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">PACKAGE</p>
            <h3 class="service-item__title">Packaged Software & Services</h3>
            <p class="service-item__text">
              We help organizations improve operations through the adoption and operation of existing packaged software and business-support services.
              Instead of building from scratch, we can also propose approaches that leverage existing assets.
            </p>
            <p class="service-item__examples-label">Examples</p>
            <ul class="service-item__examples">
              <li>Adoption of business-support packages</li>
              <li>Customization of existing packages</li>
              <li>Post-adoption operations and maintenance support</li>
            </ul>
            <span class="service-item__link">Learn more</span>
          </div>
        </a>

        <a href="{{ route('service.hr-operation') }}" class="service-item">
          <span class="service-item__num">07</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">HR OPERATION</p>
            <h3 class="service-item__title">HR & Operations Support</h3>
            <p class="service-item__text">
              Through partnerships with overseas talent and vendors, building of operations teams, and ongoing business support, we help fuel sustainable growth.
            </p>
            <p class="service-item__examples-label">Examples</p>
            <ul class="service-item__examples">
              <li>Overseas talent and partner collaboration</li>
              <li>Building operations teams and business support</li>
              <li>Continuous improvement and operations support</li>
            </ul>
            <span class="service-item__link">Learn more</span>
          </div>
        </a>

      </div>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">
        Whatever the topic,<br class="hide-sp">
        feel free to reach out.
      </h2>
      <p class="cta__lead">
        System development, web production, IT usage, AI adoption support &mdash; you're welcome to consult us even at an early, exploratory stage.<br class="hide-sp">
        We will help organize your current operations and propose the best path forward.
      </p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">Contact us</a>
      </div>
    </div>
  </section>

  <nav class="back-nav" aria-label="Page navigation">
    <div class="container">
      <a href="{{ route('home') }}" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>Back to home</a>
    </div>
  </nav>

@endsection
