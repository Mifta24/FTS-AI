@extends('layouts.app')

@section('title', 'IT Consulting | FTS AI')
@section('description', "FTS AI's IT consulting. We help organize challenges in existing operations and systems and support optimal IT usage and DX initiatives.")

@push('styles')
<style>
  /* IT Consulting hero: intellectual blue-grey */
  .consult-hero {
    background:
      radial-gradient(700px 380px at 80% 0%, rgba(90,123,168,.20), transparent 60%),
      radial-gradient(600px 320px at 0% 100%, rgba(26,111,224,.10), transparent 65%),
      linear-gradient(135deg, #ECEFF4 0%, #F4F6FA 70%, #FFFFFF 100%);
    padding: 80px 0 64px;
    border-bottom: 1px solid var(--c-border);
    position: relative;
    overflow: hidden;
  }
  .consult-hero__inner { position: relative; z-index: 1; }
  .consult-hero .page-header__eyebrow { color: #5A7BA8; }
  .consult-hero h1 .accent {
    background: linear-gradient(90deg, #5A7BA8 0%, var(--c-blue) 100%);
    -webkit-background-clip: text; background-clip: text; color: transparent;
  }
</style>
@endpush

@section('content')

  <section class="consult-hero">
    <div class="container consult-hero__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="breadcrumb__sep">›</span><a href="{{ route('service.index') }}">Services</a><span class="breadcrumb__sep">›</span>IT Consulting</p>
      <p class="page-header__eyebrow">03 / IT CONSULTING</p>
      <h1 class="page-header__title">
        Consulting that maps the problem and <span class="accent">owns the implementation</span>.
      </h1>
      <p class="page-header__lead">
        We help organize challenges in existing operations and systems and support optimal IT usage and DX initiatives.
        As a development company, our strength is going beyond paper strategy to take responsibility for delivering systems that actually run.
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow prose">
      <h2>Main service areas</h2>
      <ul>
        <li>Inventory of current operations and existing systems</li>
        <li>Mapping operational challenges and defining IT strategy</li>
        <li>Systemization and replacement planning</li>
        <li>DX initiatives and operational efficiency programs</li>
        <li>IT vendor selection and development requirements scoping</li>
        <li>Studies for adopting AI and other new technologies</li>
      </ul>

      <h2>What sets FTS AI's consulting apart</h2>
      <p>Rather than "consulting only" or "development only," we support you end-to-end &mdash; strategy, implementation, and operations. We're comfortable starting conversations before requirements are fixed and creating realistic improvement plans grounded in field interviews.</p>

      <h2>Common challenges we help with</h2>
      <ul>
        <li>You don't know where to start</li>
        <li>Systems have proliferated and you want to consolidate</li>
        <li>You want to pursue DX but no one in-house has the expertise</li>
        <li>You want IT strategy that also considers AI and global resourcing</li>
      </ul>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">Get in touch about IT consulting</h2>
      <p class="cta__lead">From operations inventory through systemization strategy &mdash; feel free to reach out.</p>
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
