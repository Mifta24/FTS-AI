@extends('layouts.app')

@section('title', __('solutions.title'))
@section('description', __('solutions.description'))

@section('content')

  {{-- ============== PAGE HEADER ============== --}}
  <section class="ai-hero-bg">
    <div class="container ai-hero-bg__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">{{ __('common.home') }}</a><span class="breadcrumb__sep">›</span>{{ __('solutions.breadcrumb') }}</p>
      <p class="page-header__eyebrow">{{ __('solutions.eyebrow') }}</p>
      <h1 class="page-header__title">
        {!! __('solutions.hero_title') !!}
      </h1>
      <p class="page-header__lead">{{ __('solutions.hero_lead') }}</p>
      <div class="hero__ctas" style="margin-top:28px;">
        <a href="{{ route('contact.index') }}" class="btn btn--blue btn--lg">{{ __('solutions.hero_cta_primary') }}</a>
        <a href="{{ route('pricing.index') }}" class="btn btn--ghost btn--lg" style="background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.3);color:#fff;">{{ __('solutions.hero_cta_secondary') }}</a>
      </div>
    </div>
  </section>

  {{-- ============== USE CASE GRID ============== --}}
  <section class="section" style="background:#fff;">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">{{ __('solutions.uc_eyebrow') }}</span>
        <h2 class="section__title">{!! __('solutions.uc_title') !!}</h2>
        <p class="section__lead">{{ __('solutions.uc_lead') }}</p>
      </div>

      <div class="sol-grid">

        <article class="sol-card">
          <div class="sol-card__head">
            <div class="sol-card__icon sol-card__icon--chat">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
              </svg>
            </div>
            <span class="sol-card__num">01</span>
          </div>
          <h3 class="sol-card__title">{{ __('solutions.uc1_title') }}</h3>
          <p class="sol-card__problem">{!! __('solutions.uc1_problem') !!}</p>
          <p class="sol-card__text">{{ __('solutions.uc1_text') }}</p>
          <ul class="sol-card__tags">
            <li>ChatGPT / Claude</li>
            <li>RAG (Retrieval-Augmented)</li>
            <li>Web embed</li>
            <li>Slack / LINE integration</li>
          </ul>
        </article>

        <article class="sol-card">
          <div class="sol-card__head">
            <div class="sol-card__icon sol-card__icon--doc">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                <polyline points="14 2 14 8 20 8"/>
                <line x1="16" y1="13" x2="8" y2="13"/>
                <line x1="16" y1="17" x2="8" y2="17"/>
              </svg>
            </div>
            <span class="sol-card__num">02</span>
          </div>
          <h3 class="sol-card__title">{{ __('solutions.uc2_title') }}</h3>
          <p class="sol-card__problem">{!! __('solutions.uc2_problem') !!}</p>
          <p class="sol-card__text">{{ __('solutions.uc2_text') }}</p>
          <ul class="sol-card__tags">
            <li>PDF / image parsing</li>
            <li>Structured extraction</li>
            <li>System integration</li>
            <li>Approval workflow</li>
          </ul>
        </article>

        <article class="sol-card">
          <div class="sol-card__head">
            <div class="sol-card__icon sol-card__icon--copilot">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="3"/>
                <path d="M19.07 4.93a10 10 0 0 1 0 14.14"/>
                <path d="M4.93 4.93a10 10 0 0 0 0 14.14"/>
              </svg>
            </div>
            <span class="sol-card__num">03</span>
          </div>
          <h3 class="sol-card__title">{{ __('solutions.uc3_title') }}</h3>
          <p class="sol-card__problem">{!! __('solutions.uc3_problem') !!}</p>
          <p class="sol-card__text">{{ __('solutions.uc3_text') }}</p>
          <ul class="sol-card__tags">
            <li>Natural language search</li>
            <li>Internal knowledge base</li>
            <li>Access control</li>
            <li>Audit logging</li>
          </ul>
        </article>

        <article class="sol-card">
          <div class="sol-card__head">
            <div class="sol-card__icon sol-card__icon--sales">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
              </svg>
            </div>
            <span class="sol-card__num">04</span>
          </div>
          <h3 class="sol-card__title">{{ __('solutions.uc4_title') }}</h3>
          <p class="sol-card__problem">{!! __('solutions.uc4_problem') !!}</p>
          <p class="sol-card__text">{{ __('solutions.uc4_text') }}</p>
          <ul class="sol-card__tags">
            <li>Proposal generation</li>
            <li>Email drafting</li>
            <li>Meeting transcription</li>
            <li>CRM integration</li>
          </ul>
        </article>

        <article class="sol-card">
          <div class="sol-card__head">
            <div class="sol-card__icon sol-card__icon--auto">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
              </svg>
            </div>
            <span class="sol-card__num">05</span>
          </div>
          <h3 class="sol-card__title">{{ __('solutions.uc5_title') }}</h3>
          <p class="sol-card__problem">{!! __('solutions.uc5_problem') !!}</p>
          <p class="sol-card__text">{{ __('solutions.uc5_text') }}</p>
          <ul class="sol-card__tags">
            <li>n8n / Make workflows</li>
            <li>Email automation</li>
            <li>Report generation</li>
            <li>Multi-system sync</li>
          </ul>
        </article>

        <article class="sol-card">
          <div class="sol-card__head">
            <div class="sol-card__icon sol-card__icon--agent">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
              </svg>
            </div>
            <span class="sol-card__num">06</span>
          </div>
          <h3 class="sol-card__title">{{ __('solutions.uc6_title') }}</h3>
          <p class="sol-card__problem">{!! __('solutions.uc6_problem') !!}</p>
          <p class="sol-card__text">{{ __('solutions.uc6_text') }}</p>
          <ul class="sol-card__tags">
            <li>LangChain / LlamaIndex</li>
            <li>Multi-tool orchestration</li>
            <li>API / DB integration</li>
            <li>Human-in-the-loop</li>
          </ul>
        </article>

      </div>
    </div>
  </section>

  {{-- ============== TECH STACK ============== --}}
  <section class="section" style="background:var(--c-bg-soft);">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">{{ __('solutions.stack_eyebrow') }}</span>
        <h2 class="section__title">{{ __('solutions.stack_title') }}</h2>
        <p class="section__lead">{{ __('solutions.stack_lead') }}</p>
      </div>

      <div class="stack-grid">
        <div class="stack-group">
          <h4 class="stack-group__label">{{ __('solutions.stack_llm') }}</h4>
          <ul class="stack-list">
            <li class="stack-item">GPT-4o / GPT-4 Turbo</li>
            <li class="stack-item">Claude 3.5 Sonnet</li>
            <li class="stack-item">Gemini Pro</li>
            <li class="stack-item">Open-source (Llama 3)</li>
          </ul>
        </div>
        <div class="stack-group">
          <h4 class="stack-group__label">{{ __('solutions.stack_frameworks') }}</h4>
          <ul class="stack-list">
            <li class="stack-item">LangChain</li>
            <li class="stack-item">LlamaIndex</li>
            <li class="stack-item">OpenAI Assistants API</li>
            <li class="stack-item">n8n / Make</li>
          </ul>
        </div>
        <div class="stack-group">
          <h4 class="stack-group__label">{{ __('solutions.stack_vector') }}</h4>
          <ul class="stack-list">
            <li class="stack-item">Pinecone</li>
            <li class="stack-item">Supabase pgvector</li>
            <li class="stack-item">Weaviate</li>
            <li class="stack-item">ChromaDB</li>
          </ul>
        </div>
        <div class="stack-group">
          <h4 class="stack-group__label">{{ __('solutions.stack_infra') }}</h4>
          <ul class="stack-list">
            <li class="stack-item">AWS / GCP / Azure</li>
            <li class="stack-item">Vercel / Railway</li>
            <li class="stack-item">Docker / GitHub Actions</li>
            <li class="stack-item">Laravel / Next.js</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  {{-- ============== HOW WE WORK ============== --}}
  <section class="section" style="background:#fff;">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">{{ __('solutions.approach_eyebrow') }}</span>
        <h2 class="section__title">{{ __('solutions.approach_title') }}</h2>
      </div>
      <div class="diff-grid">
        <div class="diff-card">
          <span class="diff-card__icon">🏗</span>
          <h3 class="diff-card__title">{{ __('solutions.diff1_title') }}</h3>
          <p class="diff-card__text">{{ __('solutions.diff1_text') }}</p>
        </div>
        <div class="diff-card">
          <span class="diff-card__icon">🔬</span>
          <h3 class="diff-card__title">{{ __('solutions.diff2_title') }}</h3>
          <p class="diff-card__text">{{ __('solutions.diff2_text') }}</p>
        </div>
        <div class="diff-card">
          <span class="diff-card__icon">🌏</span>
          <h3 class="diff-card__title">{{ __('solutions.diff3_title') }}</h3>
          <p class="diff-card__text">{{ __('solutions.diff3_text') }}</p>
        </div>
      </div>
    </div>
  </section>

  {{-- ============== CTA ============== --}}
  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">{{ __('solutions.cta_title') }}</h2>
      <p class="cta__lead">{{ __('solutions.cta_lead') }}</p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">{{ __('solutions.cta_primary') }}</a>
        <a href="{{ route('pricing.index') }}" class="btn btn--ghost btn--lg">{{ __('solutions.cta_secondary') }}</a>
      </div>
      <p class="cta__meta">{{ __('solutions.cta_meta') }}</p>
    </div>
  </section>

  <nav class="back-nav" aria-label="Page navigation">
    <div class="container">
      <a href="{{ route('home') }}" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>{{ __('common.back_to_home') }}</a>
    </div>
  </nav>

@push('styles')
<style>
  /* ===== Solutions Grid ===== */
  .sol-grid {
    display: grid;
    gap: 20px;
    grid-template-columns: 1fr;
  }
  @media (min-width: 640px) { .sol-grid { grid-template-columns: repeat(2, 1fr); } }
  @media (min-width: 1000px) { .sol-grid { grid-template-columns: repeat(3, 1fr); } }

  .sol-card {
    background: var(--c-bg-soft);
    border: 1px solid var(--c-border);
    border-radius: var(--radius-lg);
    padding: 26px 24px 22px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    transition: border-color .2s var(--ease), box-shadow .2s var(--ease), transform .2s var(--ease);
  }
  .sol-card:hover {
    border-color: #C0E4FF;
    box-shadow: var(--shadow);
    transform: translateY(-3px);
  }

  .sol-card__head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 4px;
  }
  .sol-card__icon {
    width: 44px; height: 44px;
    border-radius: 12px;
    display: grid; place-items: center;
    background: linear-gradient(135deg, var(--c-blue) 0%, var(--c-cyan) 100%);
    color: #fff;
  }
  .sol-card__icon svg { width: 20px; height: 20px; }
  .sol-card__icon--doc  { background: linear-gradient(135deg, #1A6FE0 0%, #8B5CF6 100%); }
  .sol-card__icon--copilot { background: linear-gradient(135deg, #0F2A55 0%, #1A6FE0 100%); }
  .sol-card__icon--sales { background: linear-gradient(135deg, #D97A3C 0%, #E0A030 100%); }
  .sol-card__icon--auto { background: linear-gradient(135deg, #1FB5A5 0%, #29C5E0 100%); }
  .sol-card__icon--agent { background: linear-gradient(135deg, #7C3AED 0%, #1A6FE0 100%); }

  .sol-card__num {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .16em;
    color: var(--c-text-mute);
  }
  .sol-card__title {
    font-size: 17px;
    font-weight: 800;
    color: var(--c-navy);
    letter-spacing: .03em;
    line-height: 1.4;
  }
  .sol-card__problem {
    font-size: 13px;
    color: var(--c-text-sub);
    line-height: 1.75;
    background: var(--c-blue-l);
    border-left: 3px solid var(--c-blue);
    padding: 8px 12px;
    border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
  }
  .sol-card__text {
    font-size: 14px;
    color: var(--c-text-sub);
    line-height: 1.85;
    flex: 1;
  }
  .sol-card__tags {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    margin-top: 6px;
  }
  .sol-card__tags li {
    font-size: 11px;
    font-weight: 600;
    color: var(--c-navy);
    background: var(--c-bg-soft-2);
    border: 1px solid var(--c-border);
    padding: 3px 10px;
    border-radius: var(--radius-pill);
    letter-spacing: .04em;
  }

  /* ===== Tech Stack ===== */
  .stack-grid {
    display: grid;
    gap: 20px;
    grid-template-columns: repeat(2, 1fr);
  }
  @media (min-width: 768px) { .stack-grid { grid-template-columns: repeat(4, 1fr); } }

  .stack-group {
    background: #fff;
    border: 1px solid var(--c-border);
    border-radius: var(--radius);
    padding: 20px;
  }
  .stack-group__label {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .2em;
    color: var(--c-blue);
    margin: 0 0 14px;
    text-transform: uppercase;
  }
  .stack-list { display: grid; gap: 8px; }
  .stack-item {
    font-size: 13.5px;
    font-weight: 600;
    color: var(--c-navy);
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .stack-item::before {
    content: "";
    width: 6px; height: 6px;
    border-radius: 50%;
    background: var(--c-cyan);
    flex: 0 0 auto;
  }

  /* ===== Differentiators ===== */
  .diff-grid {
    display: grid;
    gap: 20px;
    grid-template-columns: 1fr;
  }
  @media (min-width: 768px) { .diff-grid { grid-template-columns: repeat(3, 1fr); } }

  .diff-card {
    border: 1px solid var(--c-border);
    border-radius: var(--radius-lg);
    padding: 28px 24px;
    background: var(--c-bg-soft);
  }
  .diff-card__icon { font-size: 28px; display: block; margin-bottom: 12px; }
  .diff-card__title { font-size: 17px; font-weight: 800; color: var(--c-navy); margin-bottom: 10px; line-height: 1.45; }
  .diff-card__text { font-size: 14px; color: var(--c-text-sub); line-height: 1.85; }
</style>
@endpush

@endsection
