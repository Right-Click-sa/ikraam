<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\InitiativeController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.initiatives'.

Route::group(['prefix' => 'initiatives'], function () {
		Route::get('/', [InitiativeController::class, 'index'])->name('initiatives')
		->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Initiatives'), route('admin.initiatives'));
    });

   	Route::get('create', [InitiativeController::class, 'create'])->name('initiatives.create')
		->breadcrumbs(function (Trail $trail) {
				$trail->parent('admin.initiatives');
				$trail->push(__('Create Initiative'), route('admin.initiatives.create'));
    });

   	Route::post('store', [InitiativeController::class, 'store'])->name('initiatives.store');

   	Route::group(['prefix' => '{initiative}'], function () {

			Route::get('edit', [InitiativeController::class, 'edit'])->name('initiatives.edit')
			->breadcrumbs(function (Trail $trail, $initiative) {
					$trail->parent('admin.initiatives');
					$trail->push(__('Edit Initiative'), route('admin.initiatives.edit', $initiative));
	    });

			Route::patch('update', [InitiativeController::class, 'update'])->name('initiatives.update');
			Route::delete('destroy', [InitiativeController::class, 'destroy'])->name('initiatives.destroy');
			Route::delete('/output/destroy', [InitiativeController::class, 'destroyOutput'])->name('initiatives.output.destroy');
		});
});
