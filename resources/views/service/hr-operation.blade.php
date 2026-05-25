@extends('layouts.app')

@section('title', 'HR & Operations Support | FTS AI')
@section('description', "FTS AI's HR and operations support. We support IT staffing, web operations, system maintenance, and operational improvement.")

@section('content')

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="breadcrumb__sep">›</span><a href="{{ route('service.index') }}">Services</a><span class="breadcrumb__sep">›</span>HR & Operations Support</p>
      <p class="page-header__eyebrow">06 / HR &amp; OPERATION</p>
      <h1 class="page-header__title">HR & Operations Support</h1>
      <p class="page-header__lead">
        We support IT staffing, web operations, system maintenance, and operational improvement.
        Not just "build and walk away" &mdash; we partner long-term through the "keep it running" phase.
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow prose">
      <h2>Main service areas</h2>
      <ul>
        <li>IT staffing (per-project assignment, technical support)</li>
        <li>Web operations and update services</li>
        <li>System maintenance and operations support</li>
        <li>Operational workflow improvement support</li>
        <li>Internal IT help and inquiry handling support</li>
        <li>Operations load reduction including AI and automation</li>
      </ul>

      <h2>A long-term IT partner</h2>
      <p>Systems and websites don't end at delivery &mdash; running them well is the real work. Because the same team that builds your system can stay on for operations, troubleshooting and improvements happen quickly at FTS AI.</p>

      <h2>Common challenges we help with</h2>
      <ul>
        <li>No dedicated IT staff in-house, so site or system operations stall</li>
        <li>Your maintenance vendor is slow to respond or knowledge is siloed</li>
        <li>You want to organize operational workflows and automate where possible</li>
        <li>You want to gradually adopt AI and new technology into operations</li>
      </ul>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">Get in touch about operations and maintenance</h2>
      <p class="cta__lead">From taking over existing system maintenance to web operations and operational improvement &mdash; feel free to reach out.</p>
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
