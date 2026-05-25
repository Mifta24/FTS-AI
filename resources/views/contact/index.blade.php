@extends('layouts.app')

@section('title', __('contact.title'))
@section('description', __('contact.description'))
@section('body_class', 'page-contact')

@push('styles')
<style>
  .contact-grid {
    display: grid;
    gap: 32px;
    grid-template-columns: 1fr;
    align-items: start;
  }
  @media (min-width: 900px) {
    .contact-grid {
      grid-template-columns: 1.6fr 1fr;
      gap: 48px;
    }
  }
  .contact-grid__form { min-width: 0; }
  .contact-grid__side {
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .contact-form {
    display: grid;
    gap: 18px;
    background: #fff;
    border: 1px solid var(--c-border);
    border-radius: 12px;
    padding: 28px;
  }
  @media (min-width: 600px) {
    .contact-form { padding: 32px; }
  }
  .contact-form__row { display: grid; gap: 8px; }

  .contact-form label {
    font-size: 13px;
    font-weight: 700;
    color: var(--c-navy);
    letter-spacing: .04em;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }
  .contact-form label .req {
    background: var(--c-blue);
    color: #fff;
    font-size: 10px;
    padding: 2px 8px;
    border-radius: var(--radius-pill);
    font-weight: 700;
    letter-spacing: .04em;
  }
  .contact-form label .opt {
    background: var(--c-bg-soft-2);
    color: var(--c-text-mute);
    font-size: 10px;
    padding: 2px 8px;
    border-radius: var(--radius-pill);
    font-weight: 700;
    letter-spacing: .04em;
  }

  .contact-form input,
  .contact-form select,
  .contact-form textarea {
    width: 100%;
    padding: 14px 16px;
    font-size: 15px;
    border: 1px solid var(--c-border-2);
    border-radius: var(--radius);
    background: #fff;
    color: var(--c-text);
    font-family: inherit;
    letter-spacing: .02em;
    transition: border-color .2s var(--ease), box-shadow .2s var(--ease);
  }
  .contact-form input:focus,
  .contact-form select:focus,
  .contact-form textarea:focus {
    outline: none;
    border-color: var(--c-blue);
    box-shadow: 0 0 0 4px rgba(26,111,224,.12);
  }
  .contact-form textarea { resize: vertical; min-height: 180px; line-height: 1.75; }
  .contact-form__hint { font-size: 12px; color: var(--c-text-mute); line-height: 1.7; }

  .contact-form__consent {
    background: var(--c-bg-soft);
    border: 1px solid var(--c-border);
    border-radius: var(--radius);
    padding: 14px 18px;
  }
  .contact-form__checkbox {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 14px;
    font-weight: 600;
    color: var(--c-text);
    cursor: pointer;
    letter-spacing: .02em;
  }
  .contact-form__checkbox input[type="checkbox"] {
    width: 18px;
    height: 18px;
    flex: 0 0 auto;
    accent-color: var(--c-blue);
    cursor: pointer;
    margin: 0;
  }
  .contact-form__checkbox .req { margin-left: 4px; }

  .contact-form__submit {
    text-align: center;
    margin-top: 8px;
  }
  .contact-form__submit .btn { min-width: 240px; }
  .contact-form__note {
    margin: 12px 0 0;
    font-size: 12px;
    color: var(--c-text-mute);
    letter-spacing: .02em;
  }

  .contact-side-card {
    background: var(--c-bg-soft);
    border: 1px solid var(--c-border);
    border-radius: 12px;
    padding: 22px 24px;
  }
  .contact-side-card__title {
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .18em;
    color: var(--c-text-mute);
    margin: 0 0 14px;
    padding-bottom: 12px;
    border-bottom: 1px solid var(--c-border);
    text-transform: uppercase;
  }

  .contact-topics {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  .contact-topics li {
    position: relative;
    padding: 7px 0 7px 18px;
    font-size: 13.5px;
    font-weight: 600;
    color: var(--c-navy);
    line-height: 1.55;
    letter-spacing: .02em;
    border-bottom: 1px dashed var(--c-border);
  }
  .contact-topics li:last-child { border-bottom: none; }
  .contact-topics li::before {
    content: "";
    position: absolute;
    left: 2px;
    top: 14px;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--c-blue);
  }

  .contact-side-card__company {
    margin: 0 0 8px;
    font-size: 14px;
    font-weight: 700;
    color: var(--c-navy);
    letter-spacing: .04em;
  }
  .contact-side-card__address {
    margin: 0 0 10px;
    font-style: normal;
    font-size: 13px;
    color: var(--c-text-sub);
    line-height: 1.85;
    letter-spacing: .02em;
  }
  .contact-side-card__tel {
    margin: 0;
    font-size: 13px;
    font-weight: 600;
    color: var(--c-navy);
    letter-spacing: .04em;
  }
</style>
@endpush

@section('content')

  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">{{ __('common.home') }}</a><span class="breadcrumb__sep">›</span>{{ __('contact.breadcrumb') }}</p>
      <p class="page-header__eyebrow">{{ __('contact.eyebrow') }}</p>
      <h1 class="page-header__title">{{ __('contact.page_title') }}</h1>
      <p class="page-header__lead">
        {!! __('contact.page_lead') !!}
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">

      <div class="contact-grid">

        <div class="contact-grid__form">
          {{-- TODO: configure form action when going live --}}
          <form class="contact-form" method="post" action="#" novalidate>
            @csrf

            <div class="contact-form__row">
              <label for="form-company">{{ __('contact.form_company') }} <span class="opt">{{ __('common.optional') }}</span></label>
              <input type="text" id="form-company" name="company" autocomplete="organization" placeholder="{{ __('contact.form_placeholder_company') }}">
            </div>

            <div class="contact-form__row">
              <label for="form-name">{{ __('contact.form_name') }} <span class="req">{{ __('common.required') }}</span></label>
              <input type="text" id="form-name" name="name" required autocomplete="name" placeholder="{{ __('contact.form_placeholder_name') }}">
            </div>

            <div class="contact-form__row">
              <label for="form-email">{{ __('contact.form_email') }} <span class="req">{{ __('common.required') }}</span></label>
              <input type="email" id="form-email" name="email" required autocomplete="email" placeholder="{{ __('contact.form_placeholder_email') }}">
            </div>

            <div class="contact-form__row">
              <label for="form-tel">{{ __('contact.form_tel') }} <span class="opt">{{ __('common.optional') }}</span></label>
              <input type="tel" id="form-tel" name="tel" autocomplete="tel" placeholder="{{ __('contact.form_placeholder_tel') }}">
            </div>

            <div class="contact-form__row">
              <label for="form-type">{{ __('contact.form_type') }} <span class="req">{{ __('common.required') }}</span></label>
              <select id="form-type" name="type" required>
                <option value="">{{ __('contact.select_placeholder') }}</option>
                <option>{{ __('contact.select_system') }}</option>
                <option>{{ __('contact.select_web') }}</option>
                <option>{{ __('contact.select_consulting') }}</option>
                <option>{{ __('contact.select_ai') }}</option>
                <option>{{ __('contact.select_global') }}</option>
                <option>{{ __('contact.select_other') }}</option>
              </select>
            </div>

            <div class="contact-form__row">
              <label for="form-message">{{ __('contact.form_message') }} <span class="req">{{ __('common.required') }}</span></label>
              <textarea id="form-message" name="message" required placeholder="{{ __('contact.form_placeholder_message') }}"></textarea>
              <span class="contact-form__hint">{{ __('contact.form_hint') }}</span>
            </div>

            <div class="contact-form__consent">
              <label class="contact-form__checkbox" for="form-consent">
                <input type="checkbox" id="form-consent" name="consent" required>
                <span>
                  {{ __('contact.form_consent') }}
                  <span class="req">{{ __('common.required') }}</span>
                </span>
              </label>
            </div>

            <div class="contact-form__submit">
              <button type="submit" class="btn btn--blue btn--lg btn--no-arrow">{{ __('contact.form_submit') }}</button>
              <p class="contact-form__note">{{ __('contact.form_note') }}</p>
            </div>
          </form>
        </div>

        <aside class="contact-grid__side">

          <div class="contact-side-card">
            <h2 class="contact-side-card__title">{{ __('contact.side_topics_title') }}</h2>
            <ul class="contact-topics">
              <li>{{ __('contact.side_topic1') }}</li>
              <li>{{ __('contact.side_topic2') }}</li>
              <li>{{ __('contact.side_topic3') }}</li>
              <li>{{ __('contact.side_topic4') }}</li>
              <li>{{ __('contact.side_topic5') }}</li>
              <li>{{ __('contact.side_topic6') }}</li>
            </ul>
          </div>

          <div class="contact-side-card">
            <h2 class="contact-side-card__title">{{ __('contact.side_company_title') }}</h2>
            <p class="contact-side-card__company">Fujiyama Technology Solutions</p>
            <address class="contact-side-card__address">
              Neo Soho Mall<br>
              West Jakarta, Indonesia
            </address>
          </div>

        </aside>

      </div>

    </div>
  </section>

  <nav class="back-nav" aria-label="Page navigation">
    <div class="container">
      <a href="{{ route('home') }}" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>{{ __('common.back_to_home') }}</a>
    </div>
  </nav>

@endsection
