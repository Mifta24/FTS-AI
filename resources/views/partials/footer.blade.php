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
        <h4>SITE MAP</h4>
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('message') }}">Message</a></li>
          <li><a href="{{ route('service.index') }}">Services</a></li>
          <li><a href="{{ route('works.index') }}">Works</a></li>
          <li><a href="{{ route('company.index') }}">Company</a></li>
          <li><a href="{{ route('news.index') }}">News</a></li>
          <li><a href="{{ route('contact.index') }}">Contact</a></li>
        </ul>
      </div>

    </div>

    <div class="site-footer__bottom">
      <span>© {{ date('Y') }} Fujiyama Technology Solutions. All Rights Reserved.</span>
    </div>
  </div>
</footer>
