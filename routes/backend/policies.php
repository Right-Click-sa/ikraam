<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\PolicyController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.about.policies'.

Route::group(['prefix' => 'about/policies'], function () {
		Route::get('/', [PolicyController::class, 'index'])->name('about.policies')
		->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Regulations and Policies'), route('admin.about.policies'));
    });

   	Route::get('create', [PolicyController::class, 'create'])->name('about.policies.create')
		->breadcrumbs(function (Trail $trail) {
				$trail->parent('admin.about.policies');
				$trail->push(__('Create Policy'), route('admin.about.policies.create'));
    });

   	Route::post('store', [PolicyController::class, 'store'])->name('about.policies.store');

   	Route::group(['prefix' => '{policy}'], function () {

			Route::get('edit', [PolicyController::class, 'edit'])->name('about.policies.edit')
			->breadcrumbs(function (Trail $trail, $policy) {
					$trail->parent('admin.about.policies');
					$trail->push(__('Edit Regulations and Policies'), route('admin.about.policies.edit', $policy));
	    });

			Route::patch('update', [PolicyController::class, 'update'])->name('about.policies.update');
			Route::delete('destroy', [PolicyController::class, 'destroy'])->name('about.policies.destroy');
		});
});
