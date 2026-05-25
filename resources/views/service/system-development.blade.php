@extends('layouts.app')

@section('title', 'Custom System Development | FTS AI')
@section('description', "FTS AI's custom system development. We design and build business systems, sales management, inventory management, and internal management systems tailored to each company's operations.")

@push('styles')
<style>
  /* System Development hero: trustworthy blue tones */
  .system-hero {
    background:
      radial-gradient(700px 380px at 80% 0%, rgba(26,111,224,.18), transparent 60%),
      radial-gradient(600px 320px at 0% 100%, rgba(41,197,224,.10), transparent 65%),
      linear-gradient(135deg, #E8EFF8 0%, #F4F8FD 70%, #FFFFFF 100%);
    padding: 80px 0 64px;
    border-bottom: 1px solid var(--c-border);
    position: relative;
    overflow: hidden;
  }
  .system-hero__inner { position: relative; z-index: 1; }
  .system-hero .page-header__eyebrow { color: var(--c-blue); }
  .system-hero h1 .accent {
    background: linear-gradient(90deg, var(--c-blue) 0%, var(--c-cyan) 100%);
    -webkit-background-clip: text; background-clip: text; color: transparent;
  }
</style>
@endpush

@section('content')

  <section class="system-hero">
    <div class="container system-hero__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="breadcrumb__sep">›</span><a href="{{ route('service.index') }}">Services</a><span class="breadcrumb__sep">›</span>Custom System Development</p>
      <p class="page-header__eyebrow">01 / SYSTEM DEVELOPMENT</p>
      <h1 class="page-header__title">
        Operations-fit <span class="accent">systems</span>, built to work in the field.
      </h1>
      <p class="page-header__lead">
        We design and build business systems, sales management, inventory management, and internal management systems tailored to each company's operations.
        With deep, accumulated operational understanding and system know-how, we build solutions that truly work on the ground.
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow prose">
      <h2>Main service areas</h2>
      <ul>
        <li>New business systems (order, sales, inventory, production management, etc.)</li>
        <li>Replacement and modernization of legacy systems</li>
        <li>Internal management and core enterprise system design and development</li>
        <li>Web systems for operational efficiency</li>
        <li>Integrations with external systems and SaaS, API development</li>
        <li>End-to-end support from requirements through design, development, and operations</li>
      </ul>

      <h2>What sets FTS AI's development apart</h2>
      <p>We have years of experience building systems that support enterprise core operations. We place a high priority on truly understanding workflow and shaping it into something teams can run on, so our strength is delivering systems that don't just ship features &mdash; they get used long term.</p>

      <h2>Common challenges we help with</h2>
      <ul>
        <li>You want to replace a legacy core system without halting operations</li>
        <li>Your Excel-based workflow has hit its limits and needs to become a system</li>
        <li>Disconnected systems are slowing down operations</li>
        <li>The requirements aren't fully fixed yet, but you want to start consulting together</li>
      </ul>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">Get in touch about system development</h2>
      <p class="cta__lead">Feel free to start from current operational or system challenges.</p>
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
