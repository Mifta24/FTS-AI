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
        <li class="site-nav__item site-nav__item--has-dropdown">
          <a href="{{ route('solutions.index') }}" class="site-nav__link has-dropdown">Solutions</a>
          <div class="site-nav__dropdown">
            <a href="{{ route('solutions.index') }}"><span>AI Chatbot</span><small>Knowledge base &amp; FAQ automation</small></a>
            <a href="{{ route('solutions.index') }}"><span>Document Automation</span><small>Invoice, contract, report extraction</small></a>
            <a href="{{ route('solutions.index') }}"><span>Internal Copilot</span><small>Staff Q&amp;A from internal docs</small></a>
            <a href="{{ route('solutions.index') }}"><span>Sales &amp; Content AI</span><small>Proposals, emails, meeting notes</small></a>
            <a href="{{ route('solutions.index') }}"><span>Process Automation</span><small>n8n / Make + AI workflows</small></a>
            <a href="{{ route('solutions.index') }}"><span>Custom AI Agent</span><small>Multi-step autonomous AI</small></a>
          </div>
        </li>
        <li class="site-nav__item"><a href="{{ route('pricing.index') }}" class="site-nav__link">Pricing</a></li>
        <li class="site-nav__item"><a href="{{ route('service.index') }}" class="site-nav__link">Services</a></li>
        <li class="site-nav__item"><a href="{{ route('blog.index') }}" class="site-nav__link">Blog</a></li>
        <li class="site-nav__item"><a href="{{ route('company.index') }}" class="site-nav__link">Company</a></li>
        <li class="site-nav__item"><a href="{{ route('contact.index') }}" class="site-nav__link">Contact</a></li>
      </ul>
      <a href="{{ route('contact.index') }}" class="btn btn--blue btn--sm site-nav__cta btn--no-arrow">Free assessment</a>
    </nav>

    <button class="hamburger" type="button" data-hamburger aria-label="Open menu" aria-expanded="false" aria-controls="mobile-nav">
      <span class="hamburger__lines" aria-hidden="true"><span></span><span></span><span></span></span>
    </button>
  </div>

  <nav class="mobile-nav" id="mobile-nav" data-mobile-nav aria-label="Mobile navigation">
    <ul class="mobile-nav__list">
      <li><a href="{{ route('home') }}" class="mobile-nav__link">Home</a></li>
      <li><a href="{{ route('solutions.index') }}" class="mobile-nav__link">Solutions</a></li>
      <li><a href="{{ route('pricing.index') }}" class="mobile-nav__link">Pricing</a></li>
      <li><a href="{{ route('service.index') }}" class="mobile-nav__link">Services</a></li>
      <li><a href="{{ route('blog.index') }}" class="mobile-nav__link">Blog</a></li>
      <li><a href="{{ route('company.index') }}" class="mobile-nav__link">Company</a></li>
      <li><a href="{{ route('news.index') }}" class="mobile-nav__link">News</a></li>
      <li><a href="{{ route('contact.index') }}" class="mobile-nav__link">Contact</a></li>
    </ul>
    <div class="mobile-nav__cta">
      <a href="{{ route('contact.index') }}" class="btn btn--blue">Free AI assessment</a>
    </div>
  </nav>
</header>
