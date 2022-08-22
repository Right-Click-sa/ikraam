<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\JobRequestController;

// All route names are prefixed with 'admin.job.requests'.

Route::group(['prefix' => 'jobs/requests'], function () {
	  Route::get('/', [JobRequestController::class, 'index'])->name('job.requests');

   	Route::group(['prefix' => '{job}'], function () {
  		Route::delete('destroy', [JobRequestController::class, 'destroy'])->name('job.requests.destroy');
  	});
});
