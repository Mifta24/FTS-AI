<?php

use Illuminate\Support\Facades\Route;

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

Route::view('works', 'works.index')->name('works.index');
Route::view('company', 'company.index')->name('company.index');
Route::view('news', 'news.index')->name('news.index');
Route::view('contact', 'contact.index')->name('contact.index');
