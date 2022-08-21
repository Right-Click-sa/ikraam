<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\AssociationRequestController;

// All route names are prefixed with 'admin.volunteer.requests'.

Route::group(['prefix' => 'associations/requests'], function () {
	  Route::get('/', [AssociationRequestController::class, 'index'])->name('associations.requests');

   	Route::group(['prefix' => '{association}'], function () {
  		Route::delete('destroy', [AssociationRequestController::class, 'destroy'])->name('association.requests.destroy');
  	});
});
