<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VolunteerField;
use App\Models\Gender;
use App\Models\Location;
use App\Models\Setting;

class ContributeController extends Controller
{
  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
    public function contribute()
    {
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        return view('frontend.contribute.contribute')
            ->withTitle(__('Contribute with us'))
            ->withSettings($settings);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function donate()
    {
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        return view('frontend.contribute.donate')
            ->withTitle(__('Donate'))
            ->withSettings($settings);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function donate_in_kind()
    {
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        return view('frontend.contribute.donate_in-kind')
            ->withTitle(__('In-kind donation'))
            ->withSettings($settings);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function volunteer()
    {
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        return view('frontend.contribute.volunteer')
            ->withTitle(__('Volunteer'))
            ->withSettings($settings);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function volunteer_join()
    {
        $genders = Gender::all();
        $locations = Location::all();
        $fields = VolunteerField::all();
        $settings   = Setting::all()->pluck('value', 'key')->toArray();

        return view('frontend.contribute.volunteer_join')
            ->withTitle(__('Volunteer'))
            ->withGenders($genders)
            ->withLocations($locations)
            ->withFields($fields)
            ->withSettings($settings);
    }
}
