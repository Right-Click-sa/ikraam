<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AboutValueController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.about-us'.

Route::group(['prefix' => 'about-us'], function () {

			Route::get('/', [AboutController::class, 'edit'])->name('about.edit');

			Route::group(['prefix' => '{about}'], function () {
				Route::patch('update', [AboutController::class, 'update'])->name('about.update');
				Route::delete('/value/destroy', [AboutController::class, 'destroyValue'])->name('about.value.destroy');
			});

});
