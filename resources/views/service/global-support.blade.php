@extends('layouts.app')

@section('title', 'Overseas Expansion & Offshore Development Support | FTS AI')
@section('description', "FTS AI's overseas expansion and offshore development support. Leveraging overseas partners and development bases, we help build cost-effective development teams, support overseas expansion (e.g., Indonesia), and deliver multilingual websites.")

@push('styles')
<style>
  .global-hero {
    background:
      radial-gradient(700px 380px at 80% 0%, rgba(31,181,165,.18), transparent 60%),
      linear-gradient(135deg, #E8F5F2 0%, #F5FAFA 70%, #FFFFFF 100%);
    padding: 80px 0 64px;
    border-bottom: 1px solid var(--c-border);
    position: relative;
    overflow: hidden;
  }
  .global-hero .page-header__eyebrow { color: var(--c-teal); }
  .global-hero h1 .accent { color: var(--c-teal); }
  .global-hero__inner { position: relative; z-index: 1; }
</style>
@endpush

@section('content')

  <section class="global-hero">
    <div class="container global-hero__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="breadcrumb__sep">›</span><a href="{{ route('service.index') }}">Services</a><span class="breadcrumb__sep">›</span>Overseas & Offshore Support</p>
      <p class="page-header__eyebrow">05 / GLOBAL SUPPORT</p>
      <h1 class="page-header__title">
        Build <span class="accent">cost-effective development teams</span><br>
        with overseas partners.
      </h1>
      <p class="page-header__lead">
        From leveraging offshore development and producing overseas-facing websites to supporting Japanese companies expanding overseas,
        we help you build global project teams.
      </p>
      <div class="hero__ctas" style="margin-top:28px;">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">Discuss an overseas project</a>
        <a href="#menu" class="btn btn--ghost btn--lg">See what we offer</a>
      </div>
    </div>
  </section>

  <section class="section" id="menu">
    <div class="container container--narrow prose">
      <h2>Main service areas</h2>
      <ul>
        <li>Building development teams with overseas partners</li>
        <li>Offshore development support (requirements, project management, QA)</li>
        <li>Web and IT support for overseas expansion, including Indonesia</li>
        <li>Multilingual website production (including Japanese-English builds)</li>
        <li>Support for overseas service rollouts</li>
        <li>IT support for Japanese companies expanding overseas</li>
      </ul>

      <h2>Not just handing it off &mdash; offshore done collaboratively</h2>
      <p>Offshore work has clear cost advantages, but it often runs into requirements drift and quality variance. FTS AI takes care of requirements, design, project management, and QA on the Japan side, and works alongside overseas partners to mitigate those risks. We bring the know-how cultivated through Japanese business system development to make the setup genuinely functional.</p>

      <h2>Common challenges we help with</h2>
      <ul>
        <li>You want to lower development costs without sacrificing quality</li>
        <li>You're considering expansion into Southeast Asia (e.g., Indonesia)</li>
        <li>You want to launch a multilingual or overseas-facing website</li>
        <li>You already use offshore but face quality or delivery issues</li>
      </ul>
    </div>
  </section>

  <section class="section bridge">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">GLOBAL NETWORK</span>
        <h2 class="section__title">Countries and regions we cover</h2>
      </div>
      <div class="global-promo__inner" style="display:grid; gap:14px;">
        <div class="global-promo__country" style="background:#fff;">
          <span class="global-promo__flag">🇯🇵</span>
          <div>
            <div class="global-promo__country-name">Japan (Headquarters)</div>
            <div class="global-promo__country-note">Project management, requirements, design, QA</div>
          </div>
        </div>
        <div class="global-promo__country" style="background:#fff;">
          <span class="global-promo__flag">🇮🇩</span>
          <div>
            <div class="global-promo__country-name">Indonesia</div>
            <div class="global-promo__country-note">Offshore development, local entity IT support, expansion support</div>
          </div>
        </div>
        <div class="global-promo__country" style="background:#fff;">
          <span class="global-promo__flag">🌏</span>
          <div>
            <div class="global-promo__country-name">Asia (broader)</div>
            <div class="global-promo__country-note">Multilingual web, overseas-facing service rollouts</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">Get in touch about overseas and offshore work</h2>
      <p class="cta__lead">From early-stage team design through operational rollout &mdash; we're happy to consult.</p>
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
