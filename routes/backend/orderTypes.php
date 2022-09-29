<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\OrderTypeController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.order.types'.

Route::group(['prefix' => 'order/types'], function () {
		Route::get('/', [OrderTypeController::class, 'index'])->name('order.types')
		->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Orders'), route('admin.order.types'));
    });

   	Route::get('create', [OrderTypeController::class, 'create'])->name('order.types.create')
		->breadcrumbs(function (Trail $trail) {
				$trail->parent('admin.order.types');
				$trail->push(__('Create Type'), route('admin.order.types.create'));
    });

   	Route::post('store', [OrderTypeController::class, 'store'])->name('order.types.store');

   	Route::group(['prefix' => '{type}'], function () {

			Route::get('edit', [OrderTypeController::class, 'edit'])->name('order.types.edit')
			->breadcrumbs(function (Trail $trail, $type) {
					$trail->parent('admin.order.types');
					$trail->push(__('Edit Type'), route('admin.order.types.edit', $type));
	    });

			Route::patch('update', [OrderTypeController::class, 'update'])->name('order.types.update');
			Route::delete('destroy', [OrderTypeController::class, 'destroy'])->name('order.types.destroy');
		});
});
