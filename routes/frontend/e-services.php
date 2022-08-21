<?php

use App\Http\Controllers\Frontend\E_ServiceController;
use App\Http\Controllers\Backend\AssociationRequestController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

Route::get('/e-services/partnerships', [E_ServiceController::class, 'partnerships'])
    ->name('e-services.partnerships')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Partnerships'), route('frontend.e-services.partnerships'));
    });

Route::get('/e-services/associations', [E_ServiceController::class, 'associations'])
    ->name('e-services.associations')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Associations'), route('frontend.e-services.associations'));
    });

Route::get('/e-services/memberships', [E_ServiceController::class, 'memberships'])
    ->name('e-services.memberships')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Memberships'), route('frontend.e-services.memberships'));
    });

Route::get('/e-services/recruitment', [E_ServiceController::class, 'recruitment'])
    ->name('e-services.recruitment')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Recruitment'), route('frontend.e-services.recruitment'));
    });

Route::get('/e-services/recruitment/apply', [E_ServiceController::class, 'apply'])
    ->name('e-services.recruitment.apply')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Apply'), route('frontend.e-services.recruitment.apply'));
    });

// store association create account request
Route::post('/association/request/store', [AssociationRequestController::class, 'store'])->name('association.request.store');
