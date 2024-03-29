<?php

namespace App\Domains\Auth\Http\Controllers\Frontend\Auth;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Models\Setting;

/**
 * Class ForgotPasswordController.
 */
class ForgotPasswordController
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        return view('frontend.auth.passwords.email')
            ->withTitle(__('Reset Password'))
            ->withSettings($settings);
    }
}
