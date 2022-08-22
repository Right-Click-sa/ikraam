<?php

use App\Http\Controllers\Frontend\MediaController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

Route::get('/media/news', [MediaController::class, 'news'])
    ->name('media.news')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('News'), route('frontend.media.news'));
    });

Route::get('/media/gallery', [MediaController::class, 'gallery'])
    ->name('media.gallery')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Gallery'), route('frontend.media.gallery'));
    });

Route::get('/media/videos', [MediaController::class, 'videos'])
    ->name('media.videos')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Vidoes'), route('frontend.media.videos'));
    });
