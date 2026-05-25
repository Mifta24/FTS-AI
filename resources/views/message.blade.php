@extends('layouts.app')

@section('title', 'Message from the CEO | FTS AI')
@section('description', 'A message from the CEO of Fujiyama Technology Solutions (FTS AI). Leveraging decades of experience in system development, web production, and IT consulting, we support business growth through AI adoption and global partnerships.')
@section('body_class', 'page-message')

@section('content')

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="breadcrumb__sep">›</span>Message</p>
      <p class="page-header__eyebrow">MESSAGE</p>
      <h1 class="page-header__title">Message from the CEO</h1>
      <p class="page-header__lead">
        A greeting from the CEO of Fujiyama Technology Solutions.
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="message-grid">

        <div class="message-grid__photo">
          <img src="{{ asset('images/representative-kaburagi.png') }}"
               alt="CEO of Fujiyama Technology Solutions"
               class="message-photo-img"
               loading="lazy"
               decoding="async">
        </div>

        <div class="message-grid__body">
          <p class="message-body__title">Chief Executive Officer</p>
          <p class="message-body__name">Fujiyama Technology Solutions</p>

          <div class="message-body__text">
            <p>
              As the internet has matured, the web and information systems have become essential infrastructure for business management, and their role has continued to evolve year after year.
            </p>
            <p>
              Since our founding, Fujiyama Technology Solutions has contributed to operational improvement and enterprise value creation through web production and system development from our customers' perspective. We draw on the experience and technical skills we have accumulated to build solutions that truly work in the field.
            </p>
            <p>
              In recent years, the IT environment surrounding businesses has shifted dramatically &mdash; from the rise of generative AI and digital tooling to closer collaboration with global development teams. We see these changes as opportunities to create new value, and we are committed to facing them alongside our customers.
            </p>
            <p>
              FTS AI will continue to build on its experience in system development, web production, and IT consulting, while expanding into AI adoption and global partnerships, to support our customers' growth and contribute to the international community.
            </p>
          </div>

          <p class="message-body__sign">
            Fujiyama Technology Solutions<br>
            Chief Executive Officer
          </p>
        </div>

      </div>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">Get in touch</h2>
      <p class="cta__lead">
        We welcome inquiries about system development, web production, IT consulting, AI adoption support, and overseas expansion support.
      </p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">Go to contact form</a>
        <a href="{{ route('service.index') }}" class="btn btn--ghost btn--lg">Explore our services</a>
      </div>
    </div>
  </section>

  <nav class="back-nav" aria-label="Page navigation">
    <div class="container">
      <a href="{{ route('home') }}" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>Back to home</a>
    </div>
  </nav>

@endsection
