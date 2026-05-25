@extends('layouts.app')

@section('title', 'Web & App Production | FTS AI')
@section('description', "FTS AI's web and app production. We build corporate sites, service sites, web systems, and mobile-friendly sites that drive customer acquisition and operational efficiency.")

@push('styles')
<style>
  /* Web & App hero: bright blue, light and airy feel */
  .webapp-hero {
    background:
      radial-gradient(700px 380px at 80% 0%, rgba(41,197,224,.22), transparent 60%),
      radial-gradient(600px 320px at 10% 100%, rgba(110,196,255,.14), transparent 65%),
      linear-gradient(135deg, #ECF7FC 0%, #F8FCFE 70%, #FFFFFF 100%);
    padding: 80px 0 64px;
    border-bottom: 1px solid var(--c-border);
    position: relative;
    overflow: hidden;
  }
  .webapp-hero__inner { position: relative; z-index: 1; }
  .webapp-hero .page-header__eyebrow { color: var(--c-cyan); }
  .webapp-hero h1 .accent {
    background: linear-gradient(90deg, var(--c-cyan) 0%, var(--c-blue) 100%);
    -webkit-background-clip: text; background-clip: text; color: transparent;
  }
</style>
@endpush

@section('content')

  <section class="webapp-hero">
    <div class="container webapp-hero__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="breadcrumb__sep">›</span><a href="{{ route('service.index') }}">Services</a><span class="breadcrumb__sep">›</span>Web & App Production</p>
      <p class="page-header__eyebrow">02 / WEB &amp; APP</p>
      <h1 class="page-header__title">
        <span class="accent">Web and apps</span> that connect operations and customer acquisition.
      </h1>
      <p class="page-header__lead">
        Corporate sites, service sites, web systems, mobile-friendly sites &mdash; we build the web touchpoints that drive customer acquisition and operational efficiency.
        Rather than sites that just look good, we propose web solutions tied to your operational and business goals.
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow prose">
      <h2>Main service areas</h2>
      <ul>
        <li>Corporate website production</li>
        <li>Service sites and landing page production</li>
        <li>Web systems and operational web applications</li>
        <li>Responsive, mobile-friendly web production</li>
        <li>CMS-based builds and operations (e.g., WordPress)</li>
        <li>Renewals and modernization of existing sites</li>
      </ul>

      <h2>The advantage of a system company building your web</h2>
      <p>Drawing on backend expertise from system development, we go beyond surface design to cover database integrations, inquiry management, and connectivity with internal systems. We bridge the gap that often appears between design agencies and system shops, delivering an end-to-end solution.</p>

      <h2>Common challenges we help with</h2>
      <ul>
        <li>You want to renew an outdated corporate site to boost credibility</li>
        <li>The site isn't mobile-friendly and is hard to read</li>
        <li>You want to connect the site with your business systems</li>
        <li>You want to rebuild on a CMS that's easier to update</li>
      </ul>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">Get in touch about web production</h2>
      <p class="cta__lead">Site renewals, new web services, operational web systems &mdash; we cover a wide range.</p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">Contact us</a>
        <a href="{{ route('service.index') }}" class="btn btn--ghost btn--lg">All services</a>
      </div>
    </div>
  </section>

  <nav class="back-nav" aria-label="Page navigation">
    <div class="container">
      <a href="{{ route('service.index') }}" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>Back to services</a>
    </div>
  </nav>

@endsection
