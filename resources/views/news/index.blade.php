@extends('layouts.app')

@section('title', 'News | FTS AI')
@section('description', 'News from FTS AI (Fujiyama Technology Solutions). Service announcements, site updates, and release information.')

@section('content')

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="breadcrumb__sep">›</span>News</p>
      <p class="page-header__eyebrow">NEWS</p>
      <h1 class="page-header__title">News</h1>
      <p class="page-header__lead">
        Announcements, service updates, and product information from FTS AI.
      </p>
    </div>
  </section>

  <section class="section news-summary">
    <div class="container">

      <ul class="news-list">

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--info">News</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">FTS AI corporate site has been renewed</h3>
            <p class="news-list__desc">
              We have reorganized our service, works, and company information for clarity and refreshed the site.
            </p>
          </div>
        </li>

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--service">Service</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">AI adoption support service page is now live</h3>
            <p class="news-list__desc">
              Drawing on years of experience in system development, web production, and IT consulting, we have launched information for our enterprise AI adoption support service.
            </p>
          </div>
        </li>

        <li class="news-list__item">
          <div class="news-list__meta">
            <time class="news-list__date" datetime="2026-05-16">2026.05.16</time>
            <span class="news-list__cat news-list__cat--update">Update</span>
          </div>
          <div class="news-list__body">
            <h3 class="news-list__title">
              <a href="{{ route('message') }}">Message from the CEO page has been updated</a>
            </h3>
            <p class="news-list__desc">
              The CEO message page has been refreshed to match the new design.
            </p>
          </div>
        </li>

      </ul>

    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">Consultations about our services and initiatives</h2>
      <p class="cta__lead">
        AI adoption, global support, system development &mdash; reach out for individual consultations on our latest work.
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
