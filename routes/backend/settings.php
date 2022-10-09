<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\SettingController;

// All route names are prefixed with 'admin.settings'.

/*==== Setting Routes ====*/
	Route::get('settings', [SettingController::class, 'settings'])->name('settings');
	Route::patch('settings/update', [SettingController::class, 'update'])->name('settings.update');
