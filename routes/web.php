<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('language/{locale}', function (Request $request, string $locale) {
    if (in_array($locale, ['en', 'id'])) {
        session(['locale' => $locale]);
    }

    return back();
})->name('language.switch');

Route::view('/', 'home')->name('home');
Route::view('message', 'message')->name('message');

Route::prefix('service')->name('service.')->group(function () {
    Route::view('', 'service.index')->name('index');
    Route::view('system-development', 'service.system-development')->name('system-development');
    Route::view('web-app', 'service.web-app')->name('web-app');
    Route::view('it-consulting', 'service.it-consulting')->name('it-consulting');
    Route::view('ai-support', 'service.ai-support')->name('ai-support');
    Route::view('global-support', 'service.global-support')->name('global-support');
    Route::view('package', 'service.package')->name('package');
    Route::view('hr-operation', 'service.hr-operation')->name('hr-operation');
});

Route::view('solutions', 'solutions.index')->name('solutions.index');
Route::view('pricing', 'pricing.index')->name('pricing.index');
Route::view('blog', 'blog.index')->name('blog.index');
Route::view('works', 'works.index')->name('works.index');
Route::view('company', 'company.index')->name('company.index');
Route::view('news', 'news.index')->name('news.index');
Route::view('contact', 'contact.index')->name('contact.index');
