<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Initiative;

class InitiativeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function initiatives()
    {
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        $initiatives  = Initiative::all();
        return view('frontend.initiatives.initiatives')
            ->withTitle(__('Initiatives'))
            ->withSettings($settings)
            ->withInitiatives($initiatives);
    }
}
