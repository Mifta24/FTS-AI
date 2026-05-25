@extends('layouts.app')

@section('title', __('service.title'))
@section('description', __('service.description'))

@section('content')

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">{{ __('common.home') }}</a><span class="breadcrumb__sep">›</span>{{ __('service.breadcrumb') }}</p>
      <p class="page-header__eyebrow">{{ __('service.eyebrow') }}</p>
      <h1 class="page-header__title">{{ __('service.page_title') }}</h1>
      <p class="page-header__lead">
        {!! __('service.page_lead') !!}
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="services__list">

        <a href="{{ route('service.system-development') }}" class="service-item">
          <span class="service-item__num">01</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">{{ __('service.s1_eyebrow') }}</p>
            <h3 class="service-item__title">{{ __('service.s1_title') }}</h3>
            <p class="service-item__text">{{ __('service.s1_text') }}</p>
            <p class="service-item__examples-label">{{ __('service.s1_examples_label') }}</p>
            <ul class="service-item__examples">
              <li>{{ __('service.s1_e1') }}</li>
              <li>{{ __('service.s1_e2') }}</li>
              <li>{{ __('service.s1_e3') }}</li>
            </ul>
            <span class="service-item__link">{{ __('service.learn_more') }}</span>
          </div>
        </a>

        <a href="{{ route('service.web-app') }}" class="service-item">
          <span class="service-item__num">02</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">{{ __('service.s2_eyebrow') }}</p>
            <h3 class="service-item__title">{{ __('service.s2_title') }}</h3>
            <p class="service-item__text">{{ __('service.s2_text') }}</p>
            <p class="service-item__examples-label">{{ __('service.s2_examples_label') }}</p>
            <ul class="service-item__examples">
              <li>{{ __('service.s2_e1') }}</li>
              <li>{{ __('service.s2_e2') }}</li>
              <li>{{ __('service.s2_e3') }}</li>
            </ul>
            <span class="service-item__link">{{ __('service.learn_more') }}</span>
          </div>
        </a>

        <a href="{{ route('service.it-consulting') }}" class="service-item">
          <span class="service-item__num">03</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">{{ __('service.s3_eyebrow') }}</p>
            <h3 class="service-item__title">{{ __('service.s3_title') }}</h3>
            <p class="service-item__text">{{ __('service.s3_text') }}</p>
            <p class="service-item__examples-label">{{ __('service.s3_examples_label') }}</p>
            <ul class="service-item__examples">
              <li>{{ __('service.s3_e1') }}</li>
              <li>{{ __('service.s3_e2') }}</li>
              <li>{{ __('service.s3_e3') }}</li>
            </ul>
            <span class="service-item__link">{{ __('service.learn_more') }}</span>
          </div>
        </a>

        <a href="{{ route('service.ai-support') }}" class="service-item">
          <span class="service-item__num">04</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">{{ __('service.s4_eyebrow') }}</p>
            <h3 class="service-item__title">{{ __('service.s4_title') }}</h3>
            <p class="service-item__text">{{ __('service.s4_text') }}</p>
            <p class="service-item__examples-label">{{ __('service.s4_examples_label') }}</p>
            <ul class="service-item__examples">
              <li>{{ __('service.s4_e1') }}</li>
              <li>{{ __('service.s4_e2') }}</li>
              <li>{{ __('service.s4_e3') }}</li>
            </ul>
            <span class="service-item__link">{{ __('service.learn_more') }}</span>
          </div>
        </a>

        <a href="{{ route('service.global-support') }}" class="service-item">
          <span class="service-item__num">05</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">{{ __('service.s5_eyebrow') }}</p>
            <h3 class="service-item__title">{{ __('service.s5_title') }}</h3>
            <p class="service-item__text">{{ __('service.s5_text') }}</p>
            <p class="service-item__examples-label">{{ __('service.s5_examples_label') }}</p>
            <ul class="service-item__examples">
              <li>{{ __('service.s5_e1') }}</li>
              <li>{{ __('service.s5_e2') }}</li>
              <li>{{ __('service.s5_e3') }}</li>
            </ul>
            <span class="service-item__link">{{ __('service.learn_more') }}</span>
          </div>
        </a>

        <a href="{{ route('service.package') }}" class="service-item">
          <span class="service-item__num">06</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">{{ __('service.s6_eyebrow') }}</p>
            <h3 class="service-item__title">{{ __('service.s6_title') }}</h3>
            <p class="service-item__text">{{ __('service.s6_text') }}</p>
            <p class="service-item__examples-label">{{ __('service.s6_examples_label') }}</p>
            <ul class="service-item__examples">
              <li>{{ __('service.s6_e1') }}</li>
              <li>{{ __('service.s6_e2') }}</li>
              <li>{{ __('service.s6_e3') }}</li>
            </ul>
            <span class="service-item__link">{{ __('service.learn_more') }}</span>
          </div>
        </a>

        <a href="{{ route('service.hr-operation') }}" class="service-item">
          <span class="service-item__num">07</span>
          <div class="service-item__body">
            <p class="service-item__eyebrow">{{ __('service.s7_eyebrow') }}</p>
            <h3 class="service-item__title">{{ __('service.s7_title') }}</h3>
            <p class="service-item__text">{{ __('service.s7_text') }}</p>
            <p class="service-item__examples-label">{{ __('service.s7_examples_label') }}</p>
            <ul class="service-item__examples">
              <li>{{ __('service.s7_e1') }}</li>
              <li>{{ __('service.s7_e2') }}</li>
              <li>{{ __('service.s7_e3') }}</li>
            </ul>
            <span class="service-item__link">{{ __('service.learn_more') }}</span>
          </div>
        </a>

      </div>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">
        {!! __('service.cta_title') !!}
      </h2>
      <p class="cta__lead">
        {!! __('service.cta_lead') !!}
      </p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">{{ __('service.cta_primary') }}</a>
      </div>
    </div>
  </section>

  <nav class="back-nav" aria-label="Page navigation">
    <div class="container">
      <a href="{{ route('home') }}" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>{{ __('common.back_to_home') }}</a>
    </div>
  </nav>

@endsection
