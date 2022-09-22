<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\VideoController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.media.videos'.

Route::group(['prefix' => 'media/videos'], function () {
		Route::get('/', [VideoController::class, 'index'])->name('media.videos')
		->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Videos'), route('admin.media.videos'));
    });

   	Route::get('create', [VideoController::class, 'create'])->name('media.videos.create')
		->breadcrumbs(function (Trail $trail) {
				$trail->parent('admin.media.videos');
				$trail->push(__('Create Video'), route('admin.media.videos.create'));
    });

   	Route::post('store', [VideoController::class, 'store'])->name('media.videos.store');

   	Route::group(['prefix' => '{video}'], function () {

			Route::get('edit', [VideoController::class, 'edit'])->name('media.videos.edit')
			->breadcrumbs(function (Trail $trail, $video) {
					$trail->parent('admin.media.videos');
					$trail->push(__('Edit Video'), route('admin.media.videos.edit', $video));
	    });

			Route::patch('update', [VideoController::class, 'update'])->name('media.videos.update');
			Route::delete('destroy', [VideoController::class, 'destroy'])->name('media.videos.destroy');
		});
});
