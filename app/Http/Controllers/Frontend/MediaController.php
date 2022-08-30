<?php

namespace App\Http\Controllers\Frontend;;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\News;
use App\Models\Gallery;

class MediaController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function news()
    {
        $news = News::all();
        $settings   = Setting::all()->pluck('value', 'key')->toArray();

        return view('frontend.media.news')
            ->withTitle(__('News'))
            ->withNews($news)
            ->withSettings($settings);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function gallery()
    {
        $images = Gallery::all();
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        
        return view('frontend.media.gallery')
            ->withTitle(__('Gallery'))
            ->withImages($images)
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
