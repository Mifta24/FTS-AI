@extends('layouts.app')

@section('title', 'Company | FTS AI')
@section('description', "Fujiyama Technology Solutions company profile, address, access, and nearby parking. Leveraging decades of experience in system development, web production, and IT consulting, we support business growth through AI and global partnerships.")

@section('content')

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="breadcrumb__sep">›</span>Company</p>
      <p class="page-header__eyebrow">COMPANY</p>
      <h1 class="page-header__title">Company</h1>
      <p class="page-header__lead">
        Fujiyama Technology Solutions company profile and location.
      </p>
    </div>
  </section>

  <section class="section company-summary">
    <div class="container">

      <div class="company-grid">

        <article class="company-card company-card--location">
          <div class="company-map">
            <iframe
              src="https://maps.google.com/maps?q=Neo+Soho+Mall+West+Jakarta&t=&z=16&ie=UTF8&iwloc=&output=embed"
              title="Fujiyama Technology Solutions location map"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              allowfullscreen></iframe>
          </div>

          <dl class="company-location">
            <div class="company-location__row">
              <dt>Address</dt>
              <dd>
                Neo Soho Mall<br>
                West Jakarta, Indonesia
              </dd>
            </div>
          </dl>

          <a class="company-location__link"
             href="https://www.google.com/maps?q=Neo+Soho+Mall+West+Jakarta"
             target="_blank" rel="noopener noreferrer">
            Open in Google Maps
          </a>
        </article>

        <article class="company-card company-card--info">
          <dl class="company-info">
            <div class="company-info__row">
              <dt>Company name</dt>
              <dd>Fujiyama Technology Solutions</dd>
            </div>
            <div class="company-info__row">
              <dt>English name</dt>
              <dd>Fujiyama Technology Solutions</dd>
            </div>
            <div class="company-info__row">
              <dt>Address</dt>
              <dd>
                Neo Soho Mall<br>
                West Jakarta, Indonesia
              </dd>
            </div>
            <div class="company-info__row">
              <dt>CEO</dt>
              <dd>Takakazu Kaburagi</dd>
            </div>
            <div class="company-info__row">
              <dt>Founded</dt>
              <dd>April 20, 1989</dd>
            </div>
            <div class="company-info__row">
              <dt>Capital</dt>
              <dd>JPY 35,000,000</dd>
            </div>
            <div class="company-info__row">
              <dt>Bank</dt>
              <dd>Sumitomo Mitsui Banking Corporation, Hatanodai Branch</dd>
            </div>
            <div class="company-info__row">
              <dt>Business</dt>
              <dd>
                <ul class="company-info__list">
                  <li>Planning, research, design, and development of computer systems</li>
                  <li>Design, development, and sales of computer software</li>
                  <li>Planning, research, design, and development of web-based systems</li>
                  <li>Sales of computers and other office equipment</li>
                  <li>IT consulting</li>
                  <li>Planning, design, production, and development of websites</li>
                </ul>
              </dd>
            </div>
          </dl>
        </article>

      </div>

    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">Inquiries to the company</h2>
      <p class="cta__lead">
        Business, recruitment, partnerships &mdash; whatever the topic, feel free to reach out.
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
