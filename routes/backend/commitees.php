<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\CommitteeController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.about.committees'.

Route::group(['prefix' => 'about-us/committees'], function () {
		Route::get('/', [CommitteeController::class, 'index'])->name('about.committees')
		->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Committees'), route('admin.about.committees'));
    });

   	Route::get('create', [CommitteeController::class, 'create'])->name('about.committees.create')
		->breadcrumbs(function (Trail $trail) {
				$trail->parent('admin.about.committees');
				$trail->push(__('Create Committee'), route('admin.about.committees.create'));
    });

   	Route::post('store', [CommitteeController::class, 'store'])->name('about.committees.store');

   	Route::group(['prefix' => '{committee}'], function () {

			Route::get('edit', [CommitteeController::class, 'edit'])->name('about.committees.edit')
			->breadcrumbs(function (Trail $trail, $committee) {
					$trail->parent('admin.about.committees');
					$trail->push(__('Edit Committee'), route('admin.about.committees.edit', $committee));
	    });

			Route::patch('update', [CommitteeController::class, 'update'])->name('about.committees.update');
			Route::delete('destroy', [CommitteeController::class, 'destroy'])->name('about.committees.destroy');
			Route::delete('/task/destroy', [CommitteeController::class, 'destroyTask'])->name('about.committees.task.destroy');
		});
});
