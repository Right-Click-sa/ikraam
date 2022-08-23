<?php

namespace App\Http\Controllers\Frontend;;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class MediaController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function news()
    {
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        return view('frontend.media.news')
            ->withTitle(__('News'))
            ->withSettings($settings);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function gallery()
    {
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        return view('frontend.media.gallery')
            ->withTitle(__('Gallery'))
            ->withSettings($settings);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function videos()
    {
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        return view('frontend.media.videos')
            ->withTitle(__('Videos'))
            ->withSettings($settings);
    }
}
