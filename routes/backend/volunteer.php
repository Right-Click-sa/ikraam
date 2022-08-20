<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\VolunteerRequestController;

// All route names are prefixed with 'admin.volunteer.requests'.

Route::group(['prefix' => 'volunteer/requests'], function () {
	  Route::get('/', [VolunteerRequestController::class, 'index'])->name('volunteer.requests');

   	Route::group(['prefix' => '{request}'], function () {
  		Route::delete('destroy', [VolunteerRequestController::class, 'destroy'])->name('volunteer.requests.destroy');
  	});
});
