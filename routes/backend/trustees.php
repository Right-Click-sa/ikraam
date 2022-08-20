<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\TrusteeController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.about.trustees'.

Route::group(['prefix' => 'about/trustees'], function () {
		Route::get('/', [TrusteeController::class, 'index'])->name('about.trustees')
		->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Board of Trustees'), route('admin.about.trustees'));
    });

   	Route::get('create', [TrusteeController::class, 'create'])->name('about.trustees.create')
		->breadcrumbs(function (Trail $trail) {
				$trail->parent('admin.about.trustees');
				$trail->push(__('Create Trustee'), route('admin.about.trustees.create'));
    });

   	Route::post('store', [TrusteeController::class, 'store'])->name('about.trustees.store');

   	Route::group(['prefix' => '{trustee}'], function () {

			Route::get('edit', [TrusteeController::class, 'edit'])->name('about.trustees.edit')
			->breadcrumbs(function (Trail $trail, $trustee) {
					$trail->parent('admin.about.trustees');
					$trail->push(__('Board of Trustees'), route('admin.about.trustees.edit', $trustee));
	    });

			Route::patch('update', [TrusteeController::class, 'update'])->name('about.trustees.update');
			Route::delete('destroy', [TrusteeController::class, 'destroy'])->name('about.trustees.destroy');
		});
});
