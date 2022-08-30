<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\NewsController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.media.news'.

Route::group(['prefix' => 'media/news'], function () {
		Route::get('/', [NewsController::class, 'index'])->name('media.news')
		->breadcrumbs(function (Trail $trail) {
        $trail->push(__('News'), route('admin.media.news'));
    });

   	Route::get('create', [NewsController::class, 'create'])->name('media.news.create')
		->breadcrumbs(function (Trail $trail) {
				$trail->parent('admin.media.news');
				$trail->push(__('Create News'), route('admin.media.news.create'));
    });

   	Route::post('store', [NewsController::class, 'store'])->name('media.news.store');

   	Route::group(['prefix' => '{article}'], function () {

			Route::get('edit', [NewsController::class, 'edit'])->name('media.news.edit')
			->breadcrumbs(function (Trail $trail, $article) {
					$trail->parent('admin.media.news');
					$trail->push(__('Edit News'), route('admin.media.news.edit', $article));
	    });

			Route::patch('update', [NewsController::class, 'update'])->name('media.news.update');
			Route::delete('destroy', [NewsController::class, 'destroy'])->name('media.news.destroy');
		});
});
