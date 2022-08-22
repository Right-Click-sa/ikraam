<?php

use App\Http\Controllers\Frontend\AboutController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/about', [AboutController::class, 'about'])
    ->name('about')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('About us'), route('frontend.about'));
    });

Route::get('/about/enterprise_missions', [AboutController::class, 'enterprise_missions'])
    ->name('about.enterprise_missions')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Enterprise missions'), route('frontend.about.enterprise_missions'));
    });

Route::get('/about/regulations_and_policies', [AboutController::class, 'regulations_and_policies'])
    ->name('about.regulations_and_policies')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Regulations and Policies'), route('frontend.about.regulations_and_policies'));
    });

Route::get('/about/board_of_trustees', [AboutController::class, 'board_of_trustees'])
    ->name('about.board_of_trustees')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Board of Trustees'), route('frontend.about.board_of_trustees'));
    });

Route::get('/about/committees', [AboutController::class, 'committees'])
    ->name('about.committees')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Committees'), route('frontend.about.committees'));
    });

Route::get('/about/administrative_structure', [AboutController::class, 'administrative_structure'])
    ->name('about.administrative_structure')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('The administrative structure'), route('frontend.about.administrative_structure'));
    });
