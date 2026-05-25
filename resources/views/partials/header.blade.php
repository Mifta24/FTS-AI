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
        <li class="site-nav__item"><a href="{{ route('home') }}" class="site-nav__link">Home</a></li>
        <li class="site-nav__item"><a href="{{ route('message') }}" class="site-nav__link">Message</a></li>
        <li class="site-nav__item"><a href="{{ route('service.index') }}" class="site-nav__link">Services</a></li>
        <li class="site-nav__item"><a href="{{ route('works.index') }}" class="site-nav__link">Works</a></li>
        <li class="site-nav__item"><a href="{{ route('company.index') }}" class="site-nav__link">Company</a></li>
        <li class="site-nav__item"><a href="{{ route('news.index') }}" class="site-nav__link">News</a></li>
        <li class="site-nav__item"><a href="{{ route('contact.index') }}" class="site-nav__link">Contact</a></li>
      </ul>
      <a href="{{ route('contact.index') }}" class="btn btn--blue btn--sm site-nav__cta btn--no-arrow">Free consultation</a>
    </nav>

    <button class="hamburger" type="button" data-hamburger aria-label="Open menu" aria-expanded="false" aria-controls="mobile-nav">
      <span class="hamburger__lines" aria-hidden="true"><span></span><span></span><span></span></span>
    </button>
  </div>

  <nav class="mobile-nav" id="mobile-nav" data-mobile-nav aria-label="Mobile navigation">
    <ul class="mobile-nav__list">
      <li><a href="{{ route('home') }}" class="mobile-nav__link">Home</a></li>
      <li><a href="{{ route('message') }}" class="mobile-nav__link">Message</a></li>
      <li><a href="{{ route('service.index') }}" class="mobile-nav__link">Services</a></li>
      <li><a href="{{ route('works.index') }}" class="mobile-nav__link">Works</a></li>
      <li><a href="{{ route('company.index') }}" class="mobile-nav__link">Company</a></li>
      <li><a href="{{ route('news.index') }}" class="mobile-nav__link">News</a></li>
      <li><a href="{{ route('contact.index') }}" class="mobile-nav__link">Contact</a></li>
    </ul>
    <div class="mobile-nav__cta">
      <a href="{{ route('contact.index') }}" class="btn btn--blue">Free consultation</a>
    </div>
  </nav>
</header>
