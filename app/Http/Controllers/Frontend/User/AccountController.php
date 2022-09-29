<?php

namespace App\Http\Controllers\Frontend\User;
use App\Models\OrderType;

/**
 * Class AccountController.
 */
class AccountController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $types = OrderType::all();
        return view('frontend.user.account')
            ->withTypes($types);
    }
}
