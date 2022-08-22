<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\JobController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.jobs'.

Route::group(['prefix' => 'jobs'], function () {
		Route::get('/', [JobController::class, 'index'])->name('jobs')
		->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Jobs'), route('admin.jobs'));
    });

   	Route::get('create', [JobController::class, 'create'])->name('job.create')
		->breadcrumbs(function (Trail $trail) {
				$trail->parent('admin.jobs');
				$trail->push(__('Create Job'), route('admin.job.create'));
    });

   	Route::post('store', [JobController::class, 'store'])->name('job.store');

   	Route::group(['prefix' => '{job}'], function () {

			Route::get('edit', [JobController::class, 'edit'])->name('job.edit')
			->breadcrumbs(function (Trail $trail, $field) {
					$trail->parent('admin.jobs');
					$trail->push(__('Edit Job'), route('admin.job.edit', $field));
	    });

			Route::patch('update', [JobController::class, 'update'])->name('job.update');
			Route::delete('destroy', [JobController::class, 'destroy'])->name('job.destroy');
		});
});
