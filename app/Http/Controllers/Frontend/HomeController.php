<?php

namespace App\Http\Controllers\Frontend;

use App\Models\MainPage;
use App\Models\Setting;

/**
 * Class HomeController.
 */
class HomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $mainPage = MainPage::first();
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        return view('frontend.index')
            ->withTitle(__('Main page'))
            ->withSettings($settings)
            ->withMainPage($mainPage);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create_account()
    {
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        return view('frontend.create_account.create_account')
            ->withTitle(__('Join request form'))
            ->withSettings($settings);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function contact_us()
    {
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        return view('frontend.contact-us.contact-us')
            ->withTitle(__('Contact Us'))
            ->withSettings($settings);
    }
}
