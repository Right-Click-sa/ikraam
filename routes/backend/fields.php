<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\VolunteerFieldController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.volunteer.fields'.

Route::group(['prefix' => 'volunteer/fields'], function () {
		Route::get('/', [VolunteerFieldController::class, 'index'])->name('volunteer.fields')
		->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Volunteer Fields'), route('admin.volunteer.fields'));
    });

   	Route::get('create', [VolunteerFieldController::class, 'create'])->name('volunteer.fields.create')
		->breadcrumbs(function (Trail $trail) {
				$trail->parent('admin.volunteer.fields');
				$trail->push(__('Create Volunteer Field'), route('admin.volunteer.fields.create'));
    });

   	Route::post('store', [VolunteerFieldController::class, 'store'])->name('volunteer.fields.store');

   	Route::group(['prefix' => '{field}'], function () {

			Route::get('edit', [VolunteerFieldController::class, 'edit'])->name('volunteer.fields.edit')
			->breadcrumbs(function (Trail $trail, $field) {
					$trail->parent('admin.volunteer.fields');
					$trail->push(__('Edit Volunteer Field'), route('admin.volunteer.fields.edit', $field));
	    });

			Route::patch('update', [VolunteerFieldController::class, 'update'])->name('volunteer.fields.update');
			Route::delete('destroy', [VolunteerFieldController::class, 'destroy'])->name('volunteer.fields.destroy');
		});
});
