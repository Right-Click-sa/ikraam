<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\AboutValueController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.about-us'.

Route::group(['prefix' => 'about-us'], function () {

			Route::get('/', [AboutController::class, 'edit'])->name('about.edit');
			Route::get('/enterprise-missions', [AboutController::class, 'enterprise_missions'])->name('about.enterprise-missions');
			Route::get('/administrative-structure', [AboutController::class, 'administrative_structure'])->name('about.structure');

			Route::group(['prefix' => '{about}'], function () {
				Route::patch('update', [AboutController::class, 'update'])->name('about.update');
				Route::delete('/value/destroy', [AboutController::class, 'destroyValue'])->name('about.value.destroy');
				Route::patch('/enterprise-missions/update', [AboutController::class, 'update_enterprise_missions'])->name('about.enterprise-missions.update');
				Route::patch('/administrative-structure/update', [AboutController::class, 'update_administrative_structure'])->name('about.administrative-structure.update');
			});

});
