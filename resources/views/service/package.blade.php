@extends('layouts.app')

@section('title', 'Packaged Software & Services | FTS AI')
@section('description', "FTS AI's packaged software and services. Through the adoption and operation of existing packaged software and business-support services, we help improve operational efficiency and build stable run-state organizations.")

@push('styles')
<style>
  /* Package Service hero: white + light blue, trustworthy tone */
  .pkg-hero {
    background:
      radial-gradient(700px 380px at 80% 0%, rgba(26,111,224,.16), transparent 60%),
      radial-gradient(600px 320px at 10% 100%, rgba(41,197,224,.12), transparent 65%),
      linear-gradient(135deg, #EAF0FB 0%, #F4F8FD 70%, #FFFFFF 100%);
    padding: 80px 0 64px;
    border-bottom: 1px solid var(--c-border);
    position: relative;
    overflow: hidden;
  }
  .pkg-hero__inner { position: relative; z-index: 1; }
  .pkg-hero .page-header__eyebrow { color: var(--c-blue); }
  .pkg-hero h1 .accent {
    background: linear-gradient(90deg, var(--c-blue) 0%, var(--c-cyan) 100%);
    -webkit-background-clip: text; background-clip: text; color: transparent;
  }

  .pkg-section--soft { background: var(--c-bg-soft); }

  .pkg-list {
    list-style: none;
    margin: 0;
    padding: 0;
    display: grid;
    gap: 10px;
    grid-template-columns: 1fr;
  }
  @media (min-width: 768px) {
    .pkg-list { grid-template-columns: repeat(2, 1fr); column-gap: 24px; }
  }
  .pkg-list li {
    position: relative;
    padding: 12px 14px 12px 32px;
    background: #fff;
    border: 1px solid var(--c-border);
    border-radius: var(--radius);
    font-size: 14.5px;
    color: var(--c-text);
    line-height: 1.7;
    letter-spacing: .02em;
  }
  .pkg-list li::before {
    content: "";
    position: absolute;
    left: 14px;
    top: 19px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--c-blue) 0%, var(--c-cyan) 100%);
  }
  .pkg-section--soft .pkg-list li { background: #fff; }

  .pkg-flow {
    background: #fff;
  }
  .pkg-flow__list {
    counter-reset: pkgstep;
    list-style: none;
    margin: 0;
    padding: 0;
    display: grid;
    gap: 16px;
    grid-template-columns: 1fr;
  }
  @media (min-width: 640px) { .pkg-flow__list { grid-template-columns: repeat(2, 1fr); } }
  @media (min-width: 1000px) { .pkg-flow__list { grid-template-columns: repeat(5, 1fr); } }
  .pkg-flow__item {
    background: var(--c-bg-soft);
    border: 1px solid var(--c-border);
    border-radius: var(--radius);
    padding: 22px 20px;
    counter-increment: pkgstep;
    position: relative;
  }
  .pkg-flow__item::before {
    content: counter(pkgstep, decimal-leading-zero);
    display: block;
    font-size: 22px;
    font-weight: 800;
    color: var(--c-blue);
    letter-spacing: .04em;
    margin-bottom: 8px;
    line-height: 1;
  }
  .pkg-flow__item h3 {
    font-size: 15px;
    font-weight: 700;
    color: var(--c-navy);
    margin: 0;
    line-height: 1.5;
  }
</style>
@endpush

@section('content')

  <section class="pkg-hero">
    <div class="container pkg-hero__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="breadcrumb__sep">›</span><a href="{{ route('service.index') }}">Services</a><span class="breadcrumb__sep">›</span>Packaged Software & Services</p>
      <p class="page-header__eyebrow">06 / PACKAGE SERVICE</p>
      <h1 class="page-header__title">
        Fit-for-purpose<br>
        <span class="accent">packaged software and service adoption</span>.
      </h1>
      <p class="page-header__lead">
        Through the adoption and operation of existing packaged software and business-support services, we help improve operational efficiency and build stable run-state organizations.
      </p>
      <div class="hero__ctas" style="margin-top:28px;">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">Discuss adoption</a>
        <a href="{{ route('service.index') }}" class="btn btn--ghost btn--lg">Back to services</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow">
      <div class="section__head">
        <span class="section__eyebrow">SERVICE AREA</span>
        <h2 class="section__title">Main service areas</h2>
      </div>
      <ul class="pkg-list">
        <li>Adoption of business-support packages</li>
        <li>Business support such as sales, inventory, and CRM</li>
        <li>Selection, configuration, and operations support for existing services</li>
        <li>Internal usage policies and operational workflow definition</li>
        <li>Post-adoption improvements, maintenance, and support</li>
      </ul>
    </div>
  </section>

  <section class="section pkg-section--soft">
    <div class="container container--narrow">
      <div class="section__head">
        <span class="section__eyebrow">USE CASES</span>
        <h2 class="section__title">Challenges we typically address</h2>
      </div>
      <ul class="pkg-list">
        <li>Building a brand-new system from scratch would be overkill</li>
        <li>You want to leverage existing packages and services</li>
        <li>You're unsure which service to choose</li>
        <li>You're worried about post-adoption usage in-house</li>
        <li>You want to organize operations to fit your current business</li>
      </ul>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow">
      <div class="section__head">
        <span class="section__eyebrow">OUR SUPPORT</span>
        <h2 class="section__title">How FTS AI can help</h2>
      </div>
      <ul class="pkg-list">
        <li>Discovery of current operations</li>
        <li>Mapping required features</li>
        <li>Package and service selection support</li>
        <li>Initial configuration and adoption support</li>
        <li>Internal operations policy authoring</li>
        <li>Post-adoption improvement proposals</li>
      </ul>
    </div>
  </section>

  <section class="section pkg-flow" id="flow">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">FLOW</span>
        <h2 class="section__title">Adoption flow</h2>
        <p class="section__lead">By moving in stages while validating operations, we keep risk low.</p>
      </div>
      <ol class="pkg-flow__list">
        <li class="pkg-flow__item"><h3>Review current operations</h3></li>
        <li class="pkg-flow__item"><h3>Map required features</h3></li>
        <li class="pkg-flow__item"><h3>Service selection & adoption design</h3></li>
        <li class="pkg-flow__item"><h3>Initial setup & go-live</h3></li>
        <li class="pkg-flow__item"><h3>Post-adoption improvements & support</h3></li>
      </ol>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">Start with a conversation about your current operations.</h2>
      <p class="cta__lead">
        Even if you're unsure whether new development is needed or existing services would suffice, you're welcome to reach out.<br class="hide-sp">
        We will help organize your operations and propose the best path forward.
      </p>
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
