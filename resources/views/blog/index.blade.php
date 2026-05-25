@extends('layouts.app')

@section('title', 'Blog & Insights | FTS AI — Practical AI for business')
@section('description', 'FTS AI blog: practical guides, use cases, and insights on adopting AI in real business operations. Written by system developers who build AI integrations every day.')

@section('content')

  {{-- ============== PAGE HEADER ============== --}}
  <section class="page-header">
    <div class="container page-header__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="breadcrumb__sep">›</span>Blog</p>
      <p class="page-header__eyebrow">BLOG & INSIGHTS</p>
      <h1 class="page-header__title">Practical AI for business</h1>
      <p class="page-header__lead">
        Guides, use cases, and honest takes on AI adoption — written by people who build the systems, not just talk about them.
      </p>
    </div>
  </section>

  {{-- ============== FEATURED POST ============== --}}
  <section class="section" style="background:var(--c-bg-soft);padding-bottom:0;">
    <div class="container">
      <span class="section__eyebrow">FEATURED</span>
      <article class="blog-featured">
        <div class="blog-featured__meta">
          <time class="blog-meta__date" datetime="2026-05-20">2026.05.20</time>
          <span class="blog-tag blog-tag--guide">Guide</span>
        </div>
        <h2 class="blog-featured__title">
          How to start with AI when you don't have an IT team: a practical roadmap for SMBs
        </h2>
        <p class="blog-featured__excerpt">
          Most AI guides assume you have engineers in-house. This one doesn't.
          We walk through how a 20-person company identified one painful manual process, piloted an AI fix in three weeks, and saved 12 hours a week without hiring anyone new.
        </p>
        <div class="blog-featured__footer">
          <span class="blog-meta__author">FTS AI Editorial</span>
          <span class="blog-meta__read">8 min read</span>
          <a href="{{ route('contact.index') }}" class="btn btn--primary btn--sm blog-featured__cta">Discuss with us</a>
        </div>
      </article>
    </div>
  </section>

  {{-- ============== ARTICLE GRID ============== --}}
  <section class="section" style="background:var(--c-bg-soft);">
    <div class="container">
      <div class="section__head" style="text-align:left;">
        <span class="section__eyebrow">ALL ARTICLES</span>
      </div>

      <div class="blog-grid">

        <article class="blog-card">
          <div class="blog-card__meta">
            <time class="blog-meta__date" datetime="2026-05-18">2026.05.18</time>
            <span class="blog-tag blog-tag--guide">Guide</span>
          </div>
          <h3 class="blog-card__title">RAG vs. fine-tuning: which one does your business actually need?</h3>
          <p class="blog-card__excerpt">
            The two most common approaches to making AI "know your business" — explained without the jargon.
            Spoiler: for 90% of SMB use cases, RAG wins.
          </p>
          <div class="blog-card__footer">
            <span class="blog-meta__read">6 min read</span>
          </div>
        </article>

        <article class="blog-card">
          <div class="blog-card__meta">
            <time class="blog-meta__date" datetime="2026-05-15">2026.05.15</time>
            <span class="blog-tag blog-tag--case">Case Study</span>
          </div>
          <h3 class="blog-card__title">From 4 hours to 20 minutes: automating invoice processing with AI</h3>
          <p class="blog-card__excerpt">
            A logistics client was manually keying invoice data into their ERP every day.
            Here's how we built a document AI pipeline that changed that — and what it cost.
          </p>
          <div class="blog-card__footer">
            <span class="blog-meta__read">5 min read</span>
          </div>
        </article>

        <article class="blog-card">
          <div class="blog-card__meta">
            <time class="blog-meta__date" datetime="2026-05-12">2026.05.12</time>
            <span class="blog-tag blog-tag--opinion">Opinion</span>
          </div>
          <h3 class="blog-card__title">Why most AI chatbots fail (and what makes them actually work)</h3>
          <p class="blog-card__excerpt">
            We've reviewed dozens of failed chatbot deployments. The technical part is rarely the problem.
            Here's what is — and how to avoid it.
          </p>
          <div class="blog-card__footer">
            <span class="blog-meta__read">7 min read</span>
          </div>
        </article>

        <article class="blog-card">
          <div class="blog-card__meta">
            <time class="blog-meta__date" datetime="2026-05-08">2026.05.08</time>
            <span class="blog-tag blog-tag--guide">Guide</span>
          </div>
          <h3 class="blog-card__title">The AI tools stack we recommend to clients in 2026</h3>
          <p class="blog-card__excerpt">
            GPT-4o, Claude 3.5, n8n, Supabase pgvector — our current go-to stack explained,
            with honest trade-offs for each choice.
          </p>
          <div class="blog-card__footer">
            <span class="blog-meta__read">9 min read</span>
          </div>
        </article>

        <article class="blog-card">
          <div class="blog-card__meta">
            <time class="blog-meta__date" datetime="2026-05-05">2026.05.05</time>
            <span class="blog-tag blog-tag--case">Case Study</span>
          </div>
          <h3 class="blog-card__title">Internal copilot for a 50-person professional services firm</h3>
          <p class="blog-card__excerpt">
            Their institutional knowledge was locked in 400 Word documents nobody could find.
            We fixed that in six weeks. Here's the architecture.
          </p>
          <div class="blog-card__footer">
            <span class="blog-meta__read">5 min read</span>
          </div>
        </article>

        <article class="blog-card">
          <div class="blog-card__meta">
            <time class="blog-meta__date" datetime="2026-04-28">2026.04.28</time>
            <span class="blog-tag blog-tag--opinion">Opinion</span>
          </div>
          <h3 class="blog-card__title">AI agents: what they are, what they're not, and when you need one</h3>
          <p class="blog-card__excerpt">
            "AI agent" is one of the most over-used terms in tech right now.
            Here's a plain-language explanation of what they actually do and when they're worth building.
          </p>
          <div class="blog-card__footer">
            <span class="blog-meta__read">6 min read</span>
          </div>
        </article>

      </div>

      <p class="blog-coming-soon">
        More articles coming soon. In the meantime, <a href="{{ route('contact.index') }}">reach out</a> if you have a specific question — we reply to every inquiry personally.
      </p>
    </div>
  </section>

  {{-- ============== NEWSLETTER / CTA ============== --}}
  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">Want practical AI advice for your business?</h2>
      <p class="cta__lead">
        Book a free 30-minute conversation. We'll look at your specific operations and tell you where AI can actually help — no sales pitch.
      </p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">Book a free chat</a>
        <a href="{{ route('solutions.index') }}" class="btn btn--ghost btn--lg">Browse solutions</a>
      </div>
    </div>
  </section>

  <nav class="back-nav" aria-label="Page navigation">
    <div class="container">
      <a href="{{ route('home') }}" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>Back to home</a>
    </div>
  </nav>

@push('styles')
<style>
  /* ===== Featured Post ===== */
  .blog-featured {
    background: #fff;
    border: 1px solid var(--c-border);
    border-radius: var(--radius-lg);
    padding: 36px 40px;
    margin-top: 24px;
  }
  @media (max-width: 600px) { .blog-featured { padding: 24px 20px; } }

  .blog-featured__meta { display: flex; align-items: center; gap: 12px; margin-bottom: 16px; }
  .blog-featured__title {
    font-size: clamp(20px, 2.6vw, 26px);
    font-weight: 800;
    color: var(--c-navy);
    line-height: 1.45;
    margin-bottom: 14px;
    letter-spacing: .03em;
  }
  .blog-featured__excerpt {
    font-size: 15px;
    color: var(--c-text-sub);
    line-height: 1.9;
    margin-bottom: 24px;
    max-width: 720px;
  }
  .blog-featured__footer {
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
  }
  .blog-featured__cta { margin-left: auto; }

  /* ===== Blog Grid ===== */
  .blog-grid {
    display: grid;
    gap: 20px;
    grid-template-columns: 1fr;
  }
  @media (min-width: 640px) { .blog-grid { grid-template-columns: repeat(2, 1fr); } }
  @media (min-width: 1000px) { .blog-grid { grid-template-columns: repeat(3, 1fr); } }

  .blog-card {
    background: #fff;
    border: 1px solid var(--c-border);
    border-radius: var(--radius-lg);
    padding: 24px 22px 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    transition: border-color .2s var(--ease), box-shadow .2s var(--ease), transform .2s var(--ease);
    cursor: pointer;
  }
  .blog-card:hover {
    border-color: #C0E4FF;
    box-shadow: var(--shadow);
    transform: translateY(-2px);
  }
  .blog-card__meta { display: flex; align-items: center; gap: 10px; }
  .blog-card__title {
    font-size: 16px;
    font-weight: 800;
    color: var(--c-navy);
    line-height: 1.5;
    letter-spacing: .03em;
    flex: 1;
  }
  .blog-card__excerpt {
    font-size: 13.5px;
    color: var(--c-text-sub);
    line-height: 1.85;
    flex: 1;
  }
  .blog-card__footer {
    margin-top: auto;
    padding-top: 12px;
    border-top: 1px solid var(--c-border);
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  /* ===== Meta elements ===== */
  .blog-meta__date {
    font-size: 12px;
    font-weight: 700;
    color: var(--c-text-mute);
    letter-spacing: .06em;
    font-family: ui-monospace, "SF Mono", Menlo, Consolas, sans-serif;
    font-feature-settings: "tnum";
  }
  .blog-meta__author {
    font-size: 13px;
    font-weight: 600;
    color: var(--c-text-sub);
  }
  .blog-meta__read {
    font-size: 12px;
    color: var(--c-text-mute);
    font-weight: 500;
  }

  /* ===== Tags ===== */
  .blog-tag {
    font-size: 10.5px;
    font-weight: 700;
    letter-spacing: .14em;
    padding: 3px 10px;
    border-radius: 4px;
    text-transform: uppercase;
  }
  .blog-tag--guide  { background: var(--c-blue-l);    color: var(--c-blue);      border: 1px solid #D0E1FA; }
  .blog-tag--case   { background: #F0FBF9;             color: var(--c-teal);      border: 1px solid #C0EDE8; }
  .blog-tag--opinion { background: var(--c-bg-soft-2); color: var(--c-text-sub);  border: 1px solid var(--c-border); }

  .blog-coming-soon {
    margin-top: 40px;
    text-align: center;
    font-size: 14px;
    color: var(--c-text-mute);
    line-height: 1.85;
  }
  .blog-coming-soon a { color: var(--c-blue); font-weight: 600; }
</style>
@endpush

@endsection
