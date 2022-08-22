<?php

use App\Http\Controllers\Frontend\InitiativeController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

Route::get('/initiatives', [InitiativeController::class, 'initiatives'])
    ->name('initiatives')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Initiatives'), route('frontend.initiatives'));
    });
