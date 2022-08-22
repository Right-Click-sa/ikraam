<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\MembershipTypeController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.memberships'.

Route::group(['prefix' => 'memberships'], function () {
		Route::get('/', [MembershipTypeController::class, 'index'])->name('memberships')
		->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Memberships'), route('admin.memberships'));
    });

   	Route::get('create', [MembershipTypeController::class, 'create'])->name('membership.create')
		->breadcrumbs(function (Trail $trail) {
				$trail->parent('admin.memberships');
				$trail->push(__('Create Membership'), route('admin.membership.create'));
    });

   	Route::post('store', [MembershipTypeController::class, 'store'])->name('membership.store');

   	Route::group(['prefix' => '{membership}'], function () {

			Route::get('edit', [MembershipTypeController::class, 'edit'])->name('membership.edit')
			->breadcrumbs(function (Trail $trail, $membership) {
					$trail->parent('admin.memberships');
					$trail->push(__('Edit Membership'), route('admin.membership.edit', $membership));
	    });

			Route::patch('update', [MembershipTypeController::class, 'update'])->name('membership.update');
			Route::delete('destroy', [MembershipTypeController::class, 'destroy'])->name('membership.destroy');
		});
});
