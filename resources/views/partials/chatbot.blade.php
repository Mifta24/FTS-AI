{{-- ============================================================
     Chatbot Widget — FAQ pilihan pertanyaan (tanpa AI)
     ============================================================ --}}
<div class="chatbot" id="chatbot" aria-live="polite" aria-label="{{ __('chatbot.aria_label') }}">

  {{-- Tombol buka/tutup --}}
  <button class="chatbot__toggle" id="chatbotToggle" aria-expanded="false" aria-controls="chatbotBox" type="button">
    <span class="chatbot__toggle-icon chatbot__toggle-icon--open" aria-hidden="true">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
      </svg>
    </span>
    <span class="chatbot__toggle-icon chatbot__toggle-icon--close" aria-hidden="true">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
      </svg>
    </span>
    <span class="chatbot__toggle-label">{{ __('chatbot.toggle_label') }}</span>
    <span class="chatbot__badge" id="chatbotBadge" aria-label="{{ __('chatbot.badge_label') }}">1</span>
  </button>

  {{-- Jendela chat --}}
  <div class="chatbot__box" id="chatbotBox" role="dialog" aria-modal="false" aria-label="{{ __('chatbot.header_name') }}" hidden>

    <div class="chatbot__header">
      <div class="chatbot__header-info">
        <span class="chatbot__avatar" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="3"/>
            <path d="M19.07 4.93a10 10 0 0 1 0 14.14"/><path d="M4.93 4.93a10 10 0 0 0 0 14.14"/>
          </svg>
        </span>
        <div>
          <p class="chatbot__header-name">{{ __('chatbot.header_name') }}</p>
          <p class="chatbot__header-status">
            <span class="chatbot__online-dot" aria-hidden="true"></span>{{ __('chatbot.header_status') }}
          </p>
        </div>
      </div>
      <button class="chatbot__close" id="chatbotClose" type="button" aria-label="{{ __('chatbot.close_label') }}">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
      </button>
    </div>

    {{-- Area pesan --}}
    <div class="chatbot__messages" id="chatbotMessages" role="log" aria-label="{{ __('chatbot.messages_label') }}">
      {{-- Pesan awal bot --}}
      <div class="chatbot__msg chatbot__msg--bot">
        <p>{{ __('chatbot.greeting_1') }}</p>
        <p>{{ __('chatbot.greeting_2') }}</p>
      </div>

      {{-- Pilihan pertanyaan awal --}}
      <div class="chatbot__options" id="chatbotOptions" data-step="home">
        <button class="chatbot__opt" data-key="services">{{ __('chatbot.opt_services') }}</button>
        <button class="chatbot__opt" data-key="pricing">{{ __('chatbot.opt_pricing') }}</button>
        <button class="chatbot__opt" data-key="about">{{ __('chatbot.opt_about') }}</button>
        <button class="chatbot__opt" data-key="ai_chatbot">{{ __('chatbot.opt_ai_chatbot') }}</button>
        <button class="chatbot__opt" data-key="contact">{{ __('chatbot.opt_contact') }}</button>
      </div>
    </div>

    {{-- Input area --}}
    <div class="chatbot__footer">
      <a href="{{ route('contact.index') }}" class="chatbot__contact-btn">
        {{ __('chatbot.contact_btn') }}
      </a>
    </div>

  </div>
</div>

{{-- Data percakapan --}}
<script>
window.CHATBOT_DATA = {
  services: {
    question: @json(__('chatbot.services_question')),
    answer: @json(__('chatbot.services_answer')),
    options: [
      { key: "service_web",    label: @json(__('chatbot.opt_service_web')) },
      { key: "service_ai",     label: @json(__('chatbot.opt_service_ai')) },
      { key: "service_system", label: @json(__('chatbot.opt_service_system')) },
      { key: "back_home",      label: @json(__('chatbot.back')) }
    ]
  },
  service_web: {
    question: @json(__('chatbot.service_web_question')),
    answer: @json(__('chatbot.service_web_answer')),
    options: [
      { key: "pricing",   label: @json(__('chatbot.opt_view_pricing')) },
      { key: "contact",   label: @json(__('chatbot.opt_contact_us')) },
      { key: "back_home", label: @json(__('chatbot.back')) }
    ]
  },
  service_ai: {
    question: @json(__('chatbot.service_ai_question')),
    answer: @json(__('chatbot.service_ai_answer')),
    options: [
      { key: "ai_chatbot", label: @json(__('chatbot.opt_ai_chatbot_detail')) },
      { key: "pricing",    label: @json(__('chatbot.opt_view_pricing')) },
      { key: "back_home",  label: @json(__('chatbot.back')) }
    ]
  },
  service_system: {
    question: @json(__('chatbot.service_system_question')),
    answer: @json(__('chatbot.service_system_answer')),
    options: [
      { key: "pricing",   label: @json(__('chatbot.opt_view_pricing')) },
      { key: "contact",   label: @json(__('chatbot.opt_free_consult')) },
      { key: "back_home", label: @json(__('chatbot.back')) }
    ]
  },
  pricing: {
    question: @json(__('chatbot.pricing_question')),
    answer: @json(__('chatbot.pricing_answer')),
    options: [
      { key: "pricing_starter", label: @json(__('chatbot.opt_starter_detail')) },
      { key: "pricing_ai",      label: @json(__('chatbot.opt_ai_detail')) },
      { key: "contact",         label: @json(__('chatbot.opt_get_quote')) },
      { key: "back_home",       label: @json(__('chatbot.back')) }
    ]
  },
  pricing_starter: {
    question: @json(__('chatbot.pricing_starter_question')),
    answer: @json(__('chatbot.pricing_starter_answer')),
    options: [
      { key: "contact",   label: @json(__('chatbot.opt_order_now')) },
      { key: "pricing",   label: @json(__('chatbot.opt_all_packages')) },
      { key: "back_home", label: @json(__('chatbot.back_home')) }
    ]
  },
  pricing_ai: {
    question: @json(__('chatbot.pricing_ai_question')),
    answer: @json(__('chatbot.pricing_ai_answer')),
    options: [
      { key: "contact",   label: @json(__('chatbot.opt_order_now')) },
      { key: "pricing",   label: @json(__('chatbot.opt_all_packages')) },
      { key: "back_home", label: @json(__('chatbot.back_home')) }
    ]
  },
  about: {
    question: @json(__('chatbot.about_question')),
    answer: @json(__('chatbot.about_answer')),
    options: [
      { key: "services",  label: @json(__('chatbot.opt_see_services')) },
      { key: "contact",   label: @json(__('chatbot.opt_contact_us')) },
      { key: "back_home", label: @json(__('chatbot.back')) }
    ]
  },
  ai_chatbot: {
    question: @json(__('chatbot.ai_chatbot_question')),
    answer: @json(__('chatbot.ai_chatbot_answer')),
    options: [
      { key: "pricing_ai", label: @json(__('chatbot.opt_ai_pricing')) },
      { key: "contact",    label: @json(__('chatbot.opt_free_consult')) },
      { key: "back_home",  label: @json(__('chatbot.back')) }
    ]
  },
  contact: {
    question: @json(__('chatbot.contact_question')),
    answer: @json(__('chatbot.contact_answer')),
    options: [
      { key: "back_home", label: @json(__('chatbot.opt_back_to_menu')) }
    ],
    cta: true
  },
  back_home: {
    question: null,
    answer: null,
    options: null,
    isBack: true
  }
};
</script>
