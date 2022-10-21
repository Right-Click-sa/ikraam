<?php

use App\Http\Controllers\Frontend\SearchController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.search'.
 */

Route::get('/search', [SearchController::class, 'search'])
    ->name('search')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Search'), route('frontend.search'));
    });
