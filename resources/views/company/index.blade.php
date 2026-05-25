@extends('layouts.app')

@section('title', __('company.title'))
@section('description', __('company.description'))

@section('content')

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">{{ __('common.home') }}</a><span class="breadcrumb__sep">›</span>{{ __('company.breadcrumb') }}</p>
      <p class="page-header__eyebrow">{{ __('company.eyebrow') }}</p>
      <h1 class="page-header__title">{{ __('company.page_title') }}</h1>
      <p class="page-header__lead">{{ __('company.page_lead') }}</p>
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
              <dt>{{ __('company.address_label') }}</dt>
              <dd>
                Neo Soho Mall<br>
                West Jakarta, Indonesia
              </dd>
            </div>
          </dl>

          <a class="company-location__link"
             href="https://www.google.com/maps?q=Neo+Soho+Mall+West+Jakarta"
             target="_blank" rel="noopener noreferrer">
            {{ __('company.open_maps') }}
          </a>
        </article>

        <article class="company-card company-card--info">
          <dl class="company-info">
            <div class="company-info__row">
              <dt>{{ __('company.info_company_name') }}</dt>
              <dd>Fujiyama Technology Solutions</dd>
            </div>
            <div class="company-info__row">
              <dt>{{ __('company.info_english_name') }}</dt>
              <dd>Fujiyama Technology Solutions</dd>
            </div>
            <div class="company-info__row">
              <dt>{{ __('company.info_address') }}</dt>
              <dd>
                Neo Soho Mall<br>
                West Jakarta, Indonesia
              </dd>
            </div>
            <div class="company-info__row">
              <dt>{{ __('company.info_ceo') }}</dt>
              <dd>Yoshihiro Nakagawa</dd>
            </div>
            <div class="company-info__row">
              <dt>{{ __('company.info_founded') }}</dt>
              <dd>April 20, 2025</dd>
            </div>
            <div class="company-info__row">
              <dt>{{ __('company.info_capital') }}</dt>
              <dd>IDR 35.000.000.000</dd>
            </div>
            <div class="company-info__row">
              <dt>{{ __('company.info_bank') }}</dt>
              <dd>Mandiri</dd>
            </div>
            <div class="company-info__row">
              <dt>{{ __('company.info_business') }}</dt>
              <dd>
                <ul class="company-info__list">
                  <li>{{ __('company.info_b1') }}</li>
                  <li>{{ __('company.info_b2') }}</li>
                  <li>{{ __('company.info_b3') }}</li>
                  <li>{{ __('company.info_b4') }}</li>
                  <li>{{ __('company.info_b5') }}</li>
                  <li>{{ __('company.info_b6') }}</li>
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
      <h2 class="cta__title">{{ __('company.cta_title') }}</h2>
      <p class="cta__lead">
        {!! __('company.cta_lead') !!}
      </p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">{{ __('company.cta_primary') }}</a>
        <a href="{{ route('contact.index') }}" class="btn btn--ghost btn--lg">{{ __('company.cta_secondary') }}</a>
      </div>
    </div>
  </section>

  <nav class="back-nav" aria-label="Page navigation">
    <div class="container">
      <a href="{{ route('home') }}" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>{{ __('common.back_to_home') }}</a>
    </div>
  </nav>

@endsection
