<footer class="site-footer">
  <div class="container">
    <div class="site-footer__top">

      <div class="site-footer__brand">
        <a href="{{ route('home') }}" class="site-footer__logo-link">
          <img src="{{ asset('images/footer-mark.png') }}" alt="FTS AI logo mark" class="site-footer__logo-mark">
          <span class="site-footer__logo-text">
            FTS AI
            <small>Fujiyama Technology Solutions</small>
          </span>
        </a>
        <address class="site-footer__address">
          Neo Soho Mall<br>
          West Jakarta, Indonesia
        </address>
      </div>

      <div class="site-footer__col">
        <h4>{{ __('common.footer_solutions') }}</h4>
        <ul>
          <li><a href="{{ route('solutions.index') }}">{{ __('nav.ai_chatbot') }}</a></li>
          <li><a href="{{ route('solutions.index') }}">{{ __('nav.doc_automation') }}</a></li>
          <li><a href="{{ route('solutions.index') }}">{{ __('nav.internal_copilot') }}</a></li>
          <li><a href="{{ route('solutions.index') }}">{{ __('nav.process_automation') }}</a></li>
          <li><a href="{{ route('solutions.index') }}">{{ __('nav.custom_agent') }}</a></li>
          <li><a href="{{ route('pricing.index') }}">{{ __('nav.pricing') }}</a></li>
        </ul>
      </div>

      <div class="site-footer__col">
        <h4>{{ __('common.footer_sitemap') }}</h4>
        <ul>
          <li><a href="{{ route('home') }}">{{ __('nav.home') }}</a></li>
          <li><a href="{{ route('service.index') }}">{{ __('nav.services') }}</a></li>
          <li><a href="{{ route('blog.index') }}">{{ __('nav.blog') }}</a></li>
          <li><a href="{{ route('works.index') }}">Works</a></li>
          <li><a href="{{ route('company.index') }}">{{ __('nav.company') }}</a></li>
          <li><a href="{{ route('news.index') }}">{{ __('nav.news') }}</a></li>
          <li><a href="{{ route('contact.index') }}">{{ __('nav.contact') }}</a></li>
        </ul>
      </div>

    </div>

    <div class="site-footer__bottom">
      <span>{{ __('common.footer_copyright', ['year' => date('Y')]) }}</span>
    </div>
  </div>
</footer>
