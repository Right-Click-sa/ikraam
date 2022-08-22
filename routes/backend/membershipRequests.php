<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\MembershipRequestController;

// All route names are prefixed with 'admin.memberships.requests'.

Route::group(['prefix' => 'memberships/requests'], function () {
	  Route::get('/', [MembershipRequestController::class, 'index'])->name('memberships.requests');

   	Route::group(['prefix' => '{membership}'], function () {
  		Route::delete('destroy', [MembershipRequestController::class, 'destroy'])->name('membership.requests.destroy');
  	});
});
