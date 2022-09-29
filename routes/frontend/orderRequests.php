<?php

use App\Http\Controllers\Backend\OrderRequestController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

// store association order
Route::post('store', [OrderRequestController::class, 'store'])->name('order.requests.store');
