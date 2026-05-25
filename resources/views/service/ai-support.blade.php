@extends('layouts.app')

@section('title', 'AI Adoption Support | FTS AI')
@section('description', "FTS AI's AI adoption support. We help turn generative AI such as ChatGPT and Claude into systems that genuinely work in your business — from AI chatbots to process automation and AI agent development.")

@push('styles')
<style>
  .ai-services {
    background: var(--c-bg-soft);
  }
  .ai-services__grid {
    display: grid;
    gap: 18px;
    grid-template-columns: 1fr;
  }
  @media (min-width: 640px) { .ai-services__grid { grid-template-columns: repeat(2, 1fr); } }
  @media (min-width: 1000px) { .ai-services__grid { grid-template-columns: repeat(3, 1fr); } }
  .ai-service-card {
    background: #fff;
    border: 1px solid var(--c-border);
    border-radius: var(--radius-lg);
    padding: 24px 22px;
    transition: transform .2s var(--ease), box-shadow .2s var(--ease), border-color .2s var(--ease);
  }
  .ai-service-card:hover { transform: translateY(-3px); box-shadow: var(--shadow); border-color: #C0E4FF; }
  .ai-service-card__icon {
    width: 40px; height: 40px;
    border-radius: 10px;
    background: linear-gradient(135deg, var(--c-blue) 0%, var(--c-cyan) 100%);
    color: #fff;
    display: grid; place-items: center;
    font-weight: 800;
    font-size: 14px;
    margin-bottom: 14px;
  }
  .ai-service-card__title { font-size: 16px; font-weight: 800; margin-bottom: 8px; }
  .ai-service-card__text { font-size: 13px; color: var(--c-text-sub); line-height: 1.85; }

  .ai-flow {
    background: #fff;
  }
  .ai-flow__list {
    counter-reset: step;
    display: grid; gap: 16px;
    grid-template-columns: 1fr;
  }
  @media (min-width: 768px) { .ai-flow__list { grid-template-columns: repeat(4, 1fr); } }
  .ai-flow__item {
    background: var(--c-bg-soft);
    border: 1px solid var(--c-border);
    border-radius: var(--radius);
    padding: 22px 20px;
    counter-increment: step;
    position: relative;
  }
  .ai-flow__item::before {
    content: "STEP " counter(step);
    display: block;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .18em;
    color: var(--c-blue);
    margin-bottom: 8px;
  }
  .ai-flow__item h3 { font-size: 15px; margin-bottom: 6px; }
  .ai-flow__item p { font-size: 13px; color: var(--c-text-sub); line-height: 1.8; }
</style>
@endpush

@section('content')

  <section class="ai-hero-bg">
    <div class="container ai-hero-bg__inner">
      <p class="breadcrumb"><a href="{{ route('home') }}">Home</a><span class="breadcrumb__sep">›</span><a href="{{ route('service.index') }}">Services</a><span class="breadcrumb__sep">›</span>AI Adoption Support</p>
      <p class="page-header__eyebrow">04 / AI SUPPORT</p>
      <h1 class="page-header__title">
        Turn AI into <span class="accent">systems that work in the field</span>.
      </h1>
      <p class="page-header__lead">
        Put generative AI like ChatGPT and Claude to work in sales, back-office, inquiry handling, and web acquisition.
        With our deep understanding of real-world business operations cultivated through years of system development,
        we help SMBs adopt AI in pragmatic, fit-for-purpose ways.
      </p>
      <div class="hero__ctas" style="margin-top:28px;">
        <a href="{{ route('contact.index') }}" class="btn btn--blue btn--lg">Book a free AI assessment</a>
        <a href="#flow" class="btn btn--ghost btn--lg" style="background:rgba(255,255,255,.06); border-color:rgba(255,255,255,.3); color:#fff;">See our adoption flow</a>
      </div>
    </div>
  </section>

  <section class="section ai-services" id="menu">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">SERVICE MENU</span>
        <h2 class="section__title">AI adoption menu</h2>
        <p class="section__lead">Start small from wherever fits your business best.</p>
      </div>

      <div class="ai-services__grid">
        <div class="ai-service-card">
          <div class="ai-service-card__icon">01</div>
          <h3 class="ai-service-card__title">ChatGPT / Claude operational adoption</h3>
          <p class="ai-service-card__text">We map where and how to use generative AI across the business and shape it into safe, in-house workflows. Includes policy authoring and internal training.</p>
        </div>
        <div class="ai-service-card">
          <div class="ai-service-card__icon">02</div>
          <h3 class="ai-service-card__title">AI chatbot deployment</h3>
          <p class="ai-service-card__text">Deploy an AI chat that answers grounded in your own information, on your website or internal portal. Automates FAQs and first-line response.</p>
        </div>
        <div class="ai-service-card">
          <div class="ai-service-card__icon">03</div>
          <h3 class="ai-service-card__title">Inquiry handling automation</h3>
          <p class="ai-service-card__text">Use AI to streamline first-line response across forms, email, and phone. Frees up staff time and reduces dropped inquiries.</p>
        </div>
        <div class="ai-service-card">
          <div class="ai-service-card__icon">04</div>
          <h3 class="ai-service-card__title">AI-assisted sales copy and document creation</h3>
          <p class="ai-service-card__text">Use AI to speed up proposals, sales emails, meeting minutes, and blog articles while keeping quality high.</p>
        </div>
        <div class="ai-service-card">
          <div class="ai-service-card__icon">05</div>
          <h3 class="ai-service-card__title">Internal operations efficiency</h3>
          <p class="ai-service-card__text">Reduce day-to-day routine work using AI plus automation tools. We specialize in pragmatic setups combined with Excel and existing systems.</p>
        </div>
        <div class="ai-service-card">
          <div class="ai-service-card__icon">06</div>
          <h3 class="ai-service-card__title">AI agent development support</h3>
          <p class="ai-service-card__text">Design and build setups where AI takes on tasks across multiple tools and data sources. Also supports advanced use cases leveraging in-house knowledge.</p>
        </div>
        <div class="ai-service-card">
          <div class="ai-service-card__icon">07</div>
          <h3 class="ai-service-card__title">AI adoption diagnostic for SMBs</h3>
          <p class="ai-service-card__text">Tailored to your operations and scale, we identify realistic AI use cases and propose a prioritized adoption roadmap.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section ai-flow" id="flow">
    <div class="container">
      <div class="section__head">
        <span class="section__eyebrow">FLOW</span>
        <h2 class="section__title">AI adoption flow</h2>
        <p class="section__lead">Rather than starting big, we test small first and then scale into lasting adoption.</p>
      </div>
      <ol class="ai-flow__list">
        <li class="ai-flow__item">
          <h3>Free consultation and discovery</h3>
          <p>Tell us about your operations, pain points, and expected outcomes. No need for jargon or pricing details upfront.</p>
        </li>
        <li class="ai-flow__item">
          <h3>Identify AI opportunities</h3>
          <p>We surface where AI is likely to drive value and present a prioritized view.</p>
        </li>
        <li class="ai-flow__item">
          <h3>Run a small pilot (PoC)</h3>
          <p>We start narrow, validating with real users whether it actually works in the field.</p>
        </li>
        <li class="ai-flow__item">
          <h3>Full rollout and operations support</h3>
          <p>Internal rollout, policy creation, and ongoing support until adoption sticks.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section">
    <div class="container container--narrow prose">
      <h2>Why a system development company can deliver AI support</h2>
      <p>FTS AI is, at heart, a company that has spent decades building business systems. Rather than treating AI as a fashionable trend, we approach it as a natural extension of our system development, web production, and IT consulting work &mdash; with a focus on shaping it into something that truly works in the field.</p>
      <p>Because we have hands-on experience designing and implementing systems, we can ensure AI isn't just "a chat box" but a practical setup that connects with existing operations and systems.</p>
    </div>
  </section>

  <section class="section cta">
    <div class="container container--narrow">
      <h2 class="cta__title">Start with a conversation.</h2>
      <p class="cta__lead">Initial consultations and AI assessments are free. No prior expertise required.</p>
      <div class="cta__buttons">
        <a href="{{ route('contact.index') }}" class="btn btn--primary btn--lg">Free AI consultation</a>
        <a href="{{ route('service.index') }}" class="btn btn--ghost btn--lg">See other services</a>
      </div>
    </div>
  </section>

  <nav class="back-nav" aria-label="Page navigation">
    <div class="container">
      <a href="{{ route('service.index') }}" class="btn btn--ghost back-nav__btn"><span class="back-nav__arrow" aria-hidden="true">←</span>Back to services</a>
    </div>
  </nav>

@endsection
