<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\AssociationRequestController;
use App\Http\Controllers\Backend\AssociationController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.associations'.

Route::group(['prefix' => 'associations'], function () {
		Route::get('/', [AssociationController::class, 'index'])->name('associations')
		->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Associations'), route('admin.associations'));
    });

   	Route::get('create', [AssociationController::class, 'create'])->name('associations.create')
		->breadcrumbs(function (Trail $trail) {
				$trail->parent('admin.associations');
				$trail->push(__('Create Association'), route('admin.associations.create'));
    });

   	Route::post('store', [AssociationController::class, 'store'])->name('associations.store');

   	Route::group(['prefix' => '{association}'], function () {

			Route::get('edit', [AssociationController::class, 'edit'])->name('associations.edit')
			->breadcrumbs(function (Trail $trail, $association) {
					$trail->parent('admin.associations');
					$trail->push(__('Edit Association'), route('admin.associations.edit', $association));
	    });

			Route::patch('update', [AssociationController::class, 'update'])->name('associations.update');
			Route::delete('destroy', [AssociationController::class, 'destroy'])->name('associations.destroy');
		});
});


// Associations Requests
Route::group(['prefix' => 'associations/requests'], function () {
	  Route::get('/', [AssociationRequestController::class, 'index'])->name('associations.requests');

   	Route::group(['prefix' => '{association}'], function () {
  		Route::delete('destroy', [AssociationRequestController::class, 'destroy'])->name('association.requests.destroy');
  	});
});
