<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\OrderRequestController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.order.requests'.

Route::group(['prefix' => 'order/requests'], function () {
		Route::get('/', [OrderRequestController::class, 'index'])->name('order.requests')
		->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Orders'), route('admin.order.requests'));
    });

   	Route::group(['prefix' => '{order}'], function () {

			Route::get('edit', [OrderRequestController::class, 'edit'])->name('order.requests.edit')
			->breadcrumbs(function (Trail $trail, $order) {
					$trail->parent('admin.order.requests');
					$trail->push(__('Edit Order'), route('admin.order.requests.edit', $order));
	    });

			Route::patch('update', [OrderRequestController::class, 'update'])->name('order.requests.update');
			Route::delete('destroy', [OrderRequestController::class, 'destroy'])->name('order.requests.destroy');
		});
});
