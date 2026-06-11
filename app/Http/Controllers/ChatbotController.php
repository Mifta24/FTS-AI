<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
            'max_tokens' => 900,
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
        $promptPath = resource_path('ai/chatbot-response.md');

        if (File::exists($promptPath)) {
            return File::get($promptPath);
        }

        return 'You are a friendly customer support assistant for FTS AI. Reply in the same language as the visitor and suggest using the contact form for details outside your knowledge.';
    }
}
