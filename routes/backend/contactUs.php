<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\ContactUsController;

// All route names are prefixed with 'admin.contact_us'.

Route::group(['prefix' => 'contact_us'], function () {
	  Route::get('/', [ContactUsController::class, 'index'])->name('contact_us');

   	Route::group(['prefix' => '{message}'], function () {
  		Route::delete('destroy', [ContactUsController::class, 'destroy'])->name('contact_us.destroy');
  	});
});
