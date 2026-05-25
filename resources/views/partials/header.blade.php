<header class="site-header">
  <div class="site-header__inner">
    <a href="{{ route('home') }}" class="site-header__logo" aria-label="FTS AI – Back to top">
      {{-- <img src="{{ asset('images/apricot-logo.png') }}" alt="FTS AI logo" class="site-header__logo-img"> --}}
      <span class="site-header__logo-text">
        FTS AI<small>Fujiyama Technology Solutions</small>
      </span>
    </a>

    <nav class="site-nav" aria-label="Global navigation">
      <ul class="site-nav__list">
        <li class="site-nav__item"><a href="{{ route('home') }}" class="site-nav__link">{{ __('nav.home') }}</a></li>
        <li class="site-nav__item site-nav__item--has-dropdown">
          <a href="{{ route('solutions.index') }}" class="site-nav__link has-dropdown">{{ __('nav.solutions') }}</a>
          <div class="site-nav__dropdown">
            <a href="{{ route('solutions.index') }}"><span>{{ __('nav.ai_chatbot') }}</span><small>{{ __('nav.ai_chatbot_desc') }}</small></a>
            <a href="{{ route('solutions.index') }}"><span>{{ __('nav.doc_automation') }}</span><small>{{ __('nav.doc_automation_desc') }}</small></a>
            <a href="{{ route('solutions.index') }}"><span>{{ __('nav.internal_copilot') }}</span><small>{{ __('nav.internal_copilot_desc') }}</small></a>
            <a href="{{ route('solutions.index') }}"><span>{{ __('nav.sales_ai') }}</span><small>{{ __('nav.sales_ai_desc') }}</small></a>
            <a href="{{ route('solutions.index') }}"><span>{{ __('nav.process_automation') }}</span><small>{{ __('nav.process_automation_desc') }}</small></a>
            <a href="{{ route('solutions.index') }}"><span>{{ __('nav.custom_agent') }}</span><small>{{ __('nav.custom_agent_desc') }}</small></a>
          </div>
        </li>
        <li class="site-nav__item"><a href="{{ route('pricing.index') }}" class="site-nav__link">{{ __('nav.pricing') }}</a></li>
        <li class="site-nav__item"><a href="{{ route('service.index') }}" class="site-nav__link">{{ __('nav.services') }}</a></li>
        <li class="site-nav__item"><a href="{{ route('blog.index') }}" class="site-nav__link">{{ __('nav.blog') }}</a></li>
        <li class="site-nav__item"><a href="{{ route('company.index') }}" class="site-nav__link">{{ __('nav.company') }}</a></li>
        <li class="site-nav__item"><a href="{{ route('contact.index') }}" class="site-nav__link">{{ __('nav.contact') }}</a></li>
      </ul>
      <a href="{{ route('contact.index') }}" class="btn btn--blue btn--sm site-nav__cta btn--no-arrow">{{ __('nav.free_assessment') }}</a>

      <div class="lang-switcher" aria-label="Language switcher">
        <form method="POST" action="{{ route('language.switch', 'en') }}">
          @csrf
          <button type="submit" class="lang-btn {{ app()->getLocale() === 'en' ? 'lang-btn--active' : '' }}" aria-label="Switch to English">EN</button>
        </form>
        <form method="POST" action="{{ route('language.switch', 'id') }}">
          @csrf
          <button type="submit" class="lang-btn {{ app()->getLocale() === 'id' ? 'lang-btn--active' : '' }}" aria-label="Switch to Indonesian">ID</button>
        </form>
      </div>
    </nav>

    <button class="hamburger" type="button" data-hamburger aria-label="Open menu" aria-expanded="false" aria-controls="mobile-nav">
      <span class="hamburger__lines" aria-hidden="true"><span></span><span></span><span></span></span>
    </button>
  </div>

  <nav class="mobile-nav" id="mobile-nav" data-mobile-nav aria-label="Mobile navigation">
    <ul class="mobile-nav__list">
      <li><a href="{{ route('home') }}" class="mobile-nav__link">{{ __('nav.home') }}</a></li>
      <li><a href="{{ route('solutions.index') }}" class="mobile-nav__link">{{ __('nav.solutions') }}</a></li>
      <li><a href="{{ route('pricing.index') }}" class="mobile-nav__link">{{ __('nav.pricing') }}</a></li>
      <li><a href="{{ route('service.index') }}" class="mobile-nav__link">{{ __('nav.services') }}</a></li>
      <li><a href="{{ route('blog.index') }}" class="mobile-nav__link">{{ __('nav.blog') }}</a></li>
      <li><a href="{{ route('company.index') }}" class="mobile-nav__link">{{ __('nav.company') }}</a></li>
      <li><a href="{{ route('news.index') }}" class="mobile-nav__link">{{ __('nav.news') }}</a></li>
      <li><a href="{{ route('contact.index') }}" class="mobile-nav__link">{{ __('nav.contact') }}</a></li>
    </ul>
    <div class="mobile-nav__cta">
      <a href="{{ route('contact.index') }}" class="btn btn--blue">{{ __('nav.free_ai_assessment') }}</a>
    </div>
    <div class="mobile-nav__lang">
      <form method="POST" action="{{ route('language.switch', 'en') }}">
        @csrf
        <button type="submit" class="lang-btn {{ app()->getLocale() === 'en' ? 'lang-btn--active' : '' }}">EN</button>
      </form>
      <form method="POST" action="{{ route('language.switch', 'id') }}">
        @csrf
        <button type="submit" class="lang-btn {{ app()->getLocale() === 'id' ? 'lang-btn--active' : '' }}">ID</button>
      </form>
    </div>
  </nav>
</header>

<style>
  .lang-switcher {
    display: flex;
    align-items: center;
    gap: 2px;
    margin-left: 8px;
  }
  .lang-switcher form { margin: 0; }
  .lang-btn {
    background: transparent;
    border: 1px solid var(--c-border-2);
    border-radius: var(--radius-pill);
    color: var(--c-text-mute);
    cursor: pointer;
    font-family: inherit;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .08em;
    padding: 3px 9px;
    transition: background .15s, color .15s, border-color .15s;
  }
  .lang-btn:hover { background: var(--c-bg-soft); color: var(--c-navy); border-color: var(--c-navy); }
  .lang-btn--active { background: var(--c-navy); color: #fff; border-color: var(--c-navy); }

  .mobile-nav__lang {
    display: flex;
    gap: 6px;
    padding: 12px 20px 4px;
    border-top: 1px solid var(--c-border);
    margin-top: 4px;
  }
  .mobile-nav__lang form { margin: 0; }
  .mobile-nav__lang .lang-btn { font-size: 12px; padding: 5px 14px; }
</style>
