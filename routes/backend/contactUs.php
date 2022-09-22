<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\ContactUsController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.contact_us'.

Route::group(['prefix' => 'contact_us'], function () {
		Route::get('/', [ContactUsController::class, 'index'])->name('contact_us')
		->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Contact Us Messages'), route('admin.contact_us'));
    });

   	Route::group(['prefix' => '{message}'], function () {
			Route::get('edit', [ContactUsController::class, 'edit'])->name('contact_us.edit')
			->breadcrumbs(function (Trail $trail, $message) {
					$trail->parent('admin.contact_us');
					$trail->push(__('Edit Contact Us Message'), route('admin.contact_us.edit', $message));
	    });

			Route::patch('update', [ContactUsController::class, 'update'])->name('contact_us.update');
  		Route::delete('destroy', [ContactUsController::class, 'destroy'])->name('contact_us.destroy');
  	});
});
