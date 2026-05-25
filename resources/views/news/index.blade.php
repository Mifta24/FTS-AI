@extends('layouts.app')

@section('title', __('news.title'))
@section('description', __('news.description'))

@section('content')

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">{{ __('common.home') }}</a><span class="breadcrumb__sep">›</span>{{ __('news.breadcrumb') }}</p>
      <p class="page-header__eyebrow">{{ __('news.eyebrow') }}</p>
      <h1 class="page-header__title">{{ __('news.page_title') }}</h1>
      <p class="page-header__lead">{{ __('news.page_lead') }}</p>
    </div>
  </section>

  <section class="section news-summary">
    <div class="container">

      <ul class="news-list">

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--info">{{ __('news.cat_news') }}</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">{{ __('news.n1_title') }}</h3>
            <p class="news-list__desc">{{ __('news.n1_desc') }}</p>
          </div>
        </li>

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--service">{{ __('news.cat_service') }}</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">{{ __('news.n2_title') }}</h3>
            <p class="news-list__desc">{{ __('news.n2_desc') }}</p>
          </div>
        </li>

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--update">{{ __('news.cat_update') }}</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">
              <a href="{{ route('message') }}">{{ __('news.n3_title') }}</a>
            </h3>
            <p class="news-list__desc">{{ __('news.n3_desc') }}</p>
          </div>
        </li>

      </ul>

    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">{{ __('news.cta_title') }}</h2>
      <p class="cta__lead">
        {!! __('news.cta_lead') !!}
      </p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">{{ __('news.cta_primary') }}</a>
        <a href="{{ route('contact.index') }}" class="btn btn--ghost btn--lg">{{ __('news.cta_secondary') }}</a>
      </div>
    </div>
  </section>

  <nav class="back-nav" aria-label="Page navigation">
    <div class="container">
      <a href="{{ route('home') }}" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>{{ __('common.back_to_home') }}</a>
    </div>
  </nav>

@endsection
