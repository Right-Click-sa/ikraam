<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\GalleryController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.media.gallery'.

Route::group(['prefix' => 'media/gallery'], function () {
		Route::get('edit', [GalleryController::class, 'edit'])->name('media.gallery.edit')
		->breadcrumbs(function (Trail $trail) {
				$trail->push(__('Gallery'), route('admin.media.gallery.edit'));
		});

		Route::patch('update', [GalleryController::class, 'update'])->name('media.gallery.update');

		Route::group(['prefix' => '{image}'], function () {
			Route::delete('image/destroy', [GalleryController::class, 'imageDestroy'])->name('media.gallery.image.destroy');
		});
});
