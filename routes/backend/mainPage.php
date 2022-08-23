<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\MainPageController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.main-page'.

Route::group(['prefix' => 'main-page'], function () {

			Route::get('/', [MainPageController::class, 'edit'])->name('mainPage.edit');

			Route::group(['prefix' => '{mainPage}'], function () {
				Route::patch('update', [MainPageController::class, 'update'])->name('mainPage.update');
			});

});
