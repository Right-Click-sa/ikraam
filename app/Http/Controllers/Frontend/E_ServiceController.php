<?php

namespace App\Http\Controllers\Frontend;;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MembershipType;
use App\Models\Gender;
use App\Models\Job;
use App\Models\Setting;
use App\Models\Association;

class E_ServiceController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function partnerships()
    {
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        return view('frontend.e-services.partnerships')
            ->withTitle(__('Partnerships'))
            ->withSettings($settings);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function associations()
    {
        $associations = Association::select('image','website')->get();
        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        return view('frontend.e-services.associations')
            ->withTitle(__('Associations'))
            ->withSettings($settings)
            ->withAssociations($associations);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function memberships()
    {
        $genders = Gender::all();
        $types = MembershipType::all();
        $settings   = Setting::all()->pluck('value', 'key')->toArray();

        return view('frontend.e-services.memberships')
            ->withTitle(__('Memberships'))
            ->withGenders($genders)
            ->withTypes($types)
            ->withSettings($settings);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function recruitment()
    {
        $jobs = Job::all();
        $settings   = Setting::all()->pluck('value', 'key')->toArray();

        return view('frontend.e-services.recruitment')
            ->withTitle(__('Recruitment'))
            ->withJobs($jobs)
            ->withSettings($settings);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function apply(Job $job)
    {
        $genders = Gender::all();
        $settings   = Setting::all()->pluck('value', 'key')->toArray();

        return view('frontend.e-services.apply')
            ->withTitle(__('Recruitment'))
            ->withGenders($genders)
            ->withJob($job)
            ->withSettings($settings);
    }
}
