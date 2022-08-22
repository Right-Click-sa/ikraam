<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TermsController;
use App\Http\Controllers\Backend\ContactUsController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])
    ->name('index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('frontend.index'));
    });

Route::get('terms', [TermsController::class, 'index'])
    ->name('pages.terms')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('Terms & Conditions'), route('frontend.pages.terms'));
    });

Route::get('/create_account', [HomeController::class, 'create_account'])
    ->name('create_account')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Register'), route('frontend.create_account'));
    });

Route::get('/contact-us', [HomeController::class, 'contact_us'])
    ->name('contact-us')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Contact Us'), route('frontend.contact-us'));
    });

// store contact us messages
Route::post('contact-us/store', [ContactUsController::class, 'store'])->name('contact-us.store');
