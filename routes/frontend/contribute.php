<?php

use App\Http\Controllers\Frontend\ContributeController;
use App\Http\Controllers\Backend\VolunteerRequestController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

Route::get('/contribute', [ContributeController::class, 'contribute'])
   ->name('contribute')
   ->breadcrumbs(function (Trail $trail) {
       $trail->push(__('Contribute'), route('frontend.contribute'));
   });

Route::get('/contribute/donate', [ContributeController::class, 'donate'])
    ->name('contribute.donate')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Donate'), route('frontend.contribute.donate'));
    });

Route::get('/contribute/donate/in-kind', [ContributeController::class, 'donate_in_kind'])
    ->name('contribute.donate.in-kind')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('In-kind donation'), route('frontend.contribute.donate.in-kind'));
    });

Route::get('/contribute/volunteer', [ContributeController::class, 'volunteer'])
    ->name('contribute.volunteer')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Volunteer'), route('frontend.contribute.volunteer'));
    });

Route::get('/contribute/volunteer/join', [ContributeController::class, 'volunteer_join'])
    ->name('contribute.volunteer.join')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Volunteer'), route('frontend.contribute.volunteer.join'));
    });

// store volunteer request
Route::post('/volunteer/request/store', [VolunteerRequestController::class, 'store'])->name('volunteer.request.store');
