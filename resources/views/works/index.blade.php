@extends('layouts.app')

@section('title', __('works.title'))
@section('description', __('works.description'))

@section('content')

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">{{ __('common.home') }}</a><span class="breadcrumb__sep">›</span>{{ __('works.breadcrumb') }}</p>
      <p class="page-header__eyebrow">{{ __('works.eyebrow') }}</p>
      <h1 class="page-header__title">{{ __('works.page_title') }}</h1>
      <p class="page-header__lead">
        {!! __('works.page_lead') !!}
      </p>
    </div>
  </section>

  <section class="section works-summary">
    <div class="container">

      <div class="works-grid">

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">01</span>
            <h3 class="works-card__title">{{ __('works.w1_title') }}</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">{{ __('works.w1_text') }}</p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">02</span>
            <h3 class="works-card__title">{{ __('works.w2_title') }}</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">{{ __('works.w2_text') }}</p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">03</span>
            <h3 class="works-card__title">{{ __('works.w3_title') }}</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">{{ __('works.w3_text') }}</p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">04</span>
            <h3 class="works-card__title">{{ __('works.w4_title') }}</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">{{ __('works.w4_text') }}</p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">05</span>
            <h3 class="works-card__title">{{ __('works.w5_title') }}</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">{{ __('works.w5_text') }}</p>
        </article>

        <article class="works-card">
          <header class="works-card__head">
            <span class="works-card__num-chip" aria-hidden="true">06</span>
            <h3 class="works-card__title">{{ __('works.w6_title') }}</h3>
          </header>
          <span class="works-card__rule" aria-hidden="true"></span>
          <p class="works-card__text">{{ __('works.w6_text') }}</p>
        </article>

      </div>

    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">{{ __('works.cta_title') }}</h2>
      <p class="cta__lead">
        {!! __('works.cta_lead') !!}
      </p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">{{ __('works.cta_primary') }}</a>
        <a href="{{ route('contact.index') }}" class="btn btn--ghost btn--lg">{{ __('works.cta_secondary') }}</a>
      </div>
    </div>
  </section>

  <nav class="back-nav" aria-label="Page navigation">
    <div class="container">
      <a href="{{ route('home') }}" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>{{ __('common.back_to_home') }}</a>
    </div>
  </nav>

@endsection
