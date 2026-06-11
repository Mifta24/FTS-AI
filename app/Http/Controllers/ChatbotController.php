<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function chat(Request $request): JsonResponse
    {
        $request->validate([
            'message' => ['required', 'string', 'max:500'],
            'history' => ['sometimes', 'array', 'max:8'],
            'history.*.role' => ['required', 'in:user,assistant'],
            'history.*.content' => ['required', 'string', 'max:1000'],
        ]);

        $messages = [['role' => 'system', 'content' => $this->buildSystemPrompt()]];

        foreach ($request->input('history', []) as $msg) {
            $messages[] = ['role' => $msg['role'], 'content' => $msg['content']];
        }

        $messages[] = ['role' => 'user', 'content' => $request->string('message')];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.config('services.ai.key'),
            'HTTP-Referer' => config('app.url'),
            'X-Title' => config('app.name'),
        ])->post(config('services.ai.base_url').'/chat/completions', [
            'model' => config('services.ai.model'),
            'messages' => $messages,
            'max_tokens' => 500,
            'temperature' => 0.7,
        ]);

        if ($response->failed()) {
            return response()->json(['reply' => __('chatbot.ai_error')]);
        }

        $reply = $response->json('choices.0.message.content') ?? __('chatbot.ai_error');

        return response()->json(['reply' => $reply]);
    }

    private function buildSystemPrompt(): string
    {
        return <<<'PROMPT'
You are a friendly customer support assistant for FTS AI (Fujiyama Technology Solutions).
Answer questions concisely and professionally. Reply in the same language the user writes in (Indonesian or English).

## About FTS AI
- Full name: Fujiyama Technology Solutions
- Brand: FTS AI
- Founded: February 20, 2025
- CEO: Yoshihiro Nakagawa
- Location: Neo Soho Mall, West Jakarta, Indonesia

## Services
1. Custom System Development – Sales & inventory, CRM, internal systems, legacy improvements
2. Web & App Production – Corporate sites, booking/contact forms, web systems with admin dashboards
3. IT Consulting – Technology strategy, system assessment, digital transformation
4. AI Adoption Support – FAQ chatbots, document automation, internal copilot, multi-step AI agents
5. Global Support – Multilingual support, cross-border operations
6. Packaged Software & Services – Ready-to-use software solutions
7. HR & Operations Support – HR management and operational support

## Pricing
- Starter: Rp 300,000 (one-time) — 3 pages + non-AI chatbot + responsive design + contact form + 1 month support
- AI Chatbot: Rp 800,000 (one-time) — All Starter features + AI chatbot + ChatGPT/Claude integration + WhatsApp/LINE embed + admin dashboard + 3 months support
- Enterprise: Custom pricing — Full AI integration into existing systems

Initial consultation is FREE with no commitment.

## Guidelines
- Keep responses concise (2-4 sentences unless more detail is truly needed)
- If asked something outside your knowledge, suggest contacting FTS AI directly via the contact form
- Never make up prices, features, or contact details not listed above
PROMPT;
    }
}
