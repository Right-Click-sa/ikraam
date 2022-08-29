<?php

use App\Http\Controllers\Frontend\AssociationController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
// Route::get('associations/{association}', [AssociationController::class, 'association'])
//     ->name('associations.index')
//     ->breadcrumbs(function (Trail $trail) {
//         $trail->push(__('Association'), route('frontend.associations.index'));
//     });

    // Route::get('dashboard', [AssociationController::class, 'index'])
    //     ->name('ass.dashboard')
    //     ->breadcrumbs(function (Trail $trail) {
    //         $trail->push(__('Home'), route('frontend.ass.dashboard'));
    //     });

//
// Route::get('/association/dashboard', [AssociationController::class, 'dashboard'])
//     ->name('associations.dashboard')
//     ->breadcrumbs(function (Trail $trail) {
//         $trail->push(__('Enterprise missions'), route('frontend.associations.dashboard'));
//     });
//
// Route::get('/about/regulations_and_policies', [AboutController::class, 'regulations_and_policies'])
//     ->name('about.regulations_and_policies')
//     ->breadcrumbs(function (Trail $trail) {
//         $trail->push(__('Regulations and Policies'), route('frontend.about.regulations_and_policies'));
//     });
//
// Route::get('/about/board_of_trustees', [AboutController::class, 'board_of_trustees'])
//     ->name('about.board_of_trustees')
//     ->breadcrumbs(function (Trail $trail) {
//         $trail->push(__('Board of Trustees'), route('frontend.about.board_of_trustees'));
//     });
//
// Route::get('/about/committees', [AboutController::class, 'committees'])
//     ->name('about.committees')
//     ->breadcrumbs(function (Trail $trail) {
//         $trail->push(__('Committees'), route('frontend.about.committees'));
//     });
//
// Route::get('/about/administrative_structure', [AboutController::class, 'administrative_structure'])
//     ->name('about.administrative_structure')
//     ->breadcrumbs(function (Trail $trail) {
//         $trail->push(__('The administrative structure'), route('frontend.about.administrative_structure'));
//     });
