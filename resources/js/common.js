/* FTS AI 共通スクリプト
   - ハンバーガーメニュー
   - ヘッダープルダウン（PC: hover / SP: クリック）
   - スムーススクロール (簡易)
   - Chatbot widget (FAQ pilihan)
*/
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    // --- Hamburger ---
    var hamburger = document.querySelector('[data-hamburger]');
    var mobileNav = document.querySelector('[data-mobile-nav]');
    if (hamburger && mobileNav) {
      hamburger.addEventListener('click', function () {
        var isOpen = mobileNav.classList.toggle('is-open');
        hamburger.classList.toggle('is-open', isOpen);
        hamburger.setAttribute('aria-expanded', String(isOpen));
        document.body.style.overflow = isOpen ? 'hidden' : '';
      });
      // タブクリックでメニュー閉じる
      mobileNav.querySelectorAll('a').forEach(function (a) {
        a.addEventListener('click', function () {
          mobileNav.classList.remove('is-open');
          hamburger.classList.remove('is-open');
          hamburger.setAttribute('aria-expanded', 'false');
          document.body.style.overflow = '';
        });
      });
    }

    // --- Mobile nav sub-toggle ---
    document.querySelectorAll('[data-mobile-toggle]').forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        var li = btn.closest('li');
        if (!li) return;
        var sub = li.querySelector('.mobile-nav__sub');
        if (!sub) return;
        var isOpen = sub.style.display === 'block';
        sub.style.display = isOpen ? 'none' : 'block';
        btn.setAttribute('aria-expanded', String(!isOpen));
      });
    });

    // --- PC Dropdown (キーボード対応) ---
    document.querySelectorAll('.site-nav__item').forEach(function (item) {
      var trigger = item.querySelector('.has-dropdown');
      if (!trigger) return;
      trigger.addEventListener('focus', function () { item.classList.add('is-open'); });
      trigger.addEventListener('blur', function () {
        setTimeout(function () {
          if (!item.contains(document.activeElement)) item.classList.remove('is-open');
        }, 100);
      });
    });

    // --- Scroll header shadow ---
    var header = document.querySelector('.site-header');
    if (header) {
      var update = function () {
        if (window.scrollY > 4) header.classList.add('is-scrolled');
        else header.classList.remove('is-scrolled');
      };
      window.addEventListener('scroll', update, { passive: true });
      update();
    }
  });

  // =====================================================================
  // Chatbot Widget
  // =====================================================================
  (function initChatbot() {
    var wrap    = document.getElementById('chatbot');
    var toggle  = document.getElementById('chatbotToggle');
    var box     = document.getElementById('chatbotBox');
    var closeBtn= document.getElementById('chatbotClose');
    var messages= document.getElementById('chatbotMessages');
    var badge   = document.getElementById('chatbotBadge');
    var data    = window.CHATBOT_DATA || {};

    if (!wrap || !toggle || !box) return;

    function scrollToBottom() {
      messages.scrollTop = messages.scrollHeight;
    }

    function hideBadge() {
      if (badge) badge.classList.add('is-hidden');
    }

    function openChat() {
      wrap.classList.add('is-open');
      box.hidden = false;
      toggle.setAttribute('aria-expanded', 'true');
      hideBadge();
      scrollToBottom();
    }

    function closeChat() {
      wrap.classList.remove('is-open');
      box.hidden = true;
      toggle.setAttribute('aria-expanded', 'false');
    }

    toggle.addEventListener('click', function () {
      box.hidden ? openChat() : closeChat();
    });

    if (closeBtn) {
      closeBtn.addEventListener('click', closeChat);
    }

    function appendUserMsg(text) {
      var el = document.createElement('div');
      el.className = 'chatbot__msg chatbot__msg--user';
      el.textContent = text;
      messages.appendChild(el);
    }

    function appendBotMsg(text) {
      var el = document.createElement('div');
      el.className = 'chatbot__msg chatbot__msg--bot';
      el.textContent = text;
      messages.appendChild(el);
    }

    function renderOptions(options, ctaLink) {
      var old = messages.querySelector('.chatbot__options');
      if (old) old.remove();

      var optWrap = document.createElement('div');
      optWrap.className = 'chatbot__options';

      options.forEach(function (opt) {
        var btn = document.createElement('button');
        btn.className = 'chatbot__opt';
        btn.setAttribute('data-key', opt.key);
        btn.textContent = opt.label;
        optWrap.appendChild(btn);
      });

      messages.appendChild(optWrap);

      if (ctaLink) {
        var footer = box.querySelector('.chatbot__footer');
        if (footer) {
          footer.style.display = 'block';
        }
      }

      bindOptions();
      scrollToBottom();
    }

    function goHome() {
      var old = messages.querySelector('.chatbot__options');
      if (old) old.remove();

      var optWrap = document.createElement('div');
      optWrap.className = 'chatbot__options';
      var homeKeys = [
        { key: 'services',   label: '🛠 Layanan apa saja?' },
        { key: 'pricing',    label: '💰 Berapa harganya?' },
        { key: 'about',      label: '🏢 Tentang FTS AI' },
        { key: 'ai_chatbot', label: '🤖 Apa itu AI Chatbot?' },
        { key: 'contact',    label: '📩 Hubungi kami' }
      ];
      homeKeys.forEach(function (opt) {
        var btn = document.createElement('button');
        btn.className = 'chatbot__opt';
        btn.setAttribute('data-key', opt.key);
        btn.textContent = opt.label;
        optWrap.appendChild(btn);
      });
      messages.appendChild(optWrap);
      bindOptions();
      scrollToBottom();
    }

    function handleKey(key) {
      if (key === 'back_home') {
        appendBotMsg('Oke, kembali ke menu utama. Ada yang bisa saya bantu lagi?');
        goHome();
        return;
      }

      var item = data[key];
      if (!item) return;

      if (item.question) appendUserMsg(item.question);

      setTimeout(function () {
        if (item.answer) appendBotMsg(item.answer);

        if (item.options && item.options.length) {
          renderOptions(item.options, item.cta);
        }
        if (item.cta) {
          var footer = box.querySelector('.chatbot__footer');
          if (footer) footer.style.display = 'block';
        }
        scrollToBottom();
      }, 260);
    }

    function bindOptions() {
      var optWrap = messages.querySelector('.chatbot__options');
      if (!optWrap) return;
      optWrap.querySelectorAll('.chatbot__opt').forEach(function (btn) {
        btn.addEventListener('click', function () {
          var key = btn.getAttribute('data-key');
          optWrap.remove();
          handleKey(key);
        });
      });
    }

    bindOptions();
  })();

})();
