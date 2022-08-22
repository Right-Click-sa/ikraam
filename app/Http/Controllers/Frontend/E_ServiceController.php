<?php

namespace App\Http\Controllers\Frontend;;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MembershipType;
use App\Models\Gender;
use App\Models\Job;

class E_ServiceController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function partnerships()
    {
        return view('frontend.e-services.partnerships')->withTitle(__('Partnerships'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function associations()
    {
        return view('frontend.e-services.associations')->withTitle(__('Associations'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function memberships()
    {
        $genders = Gender::all();
        $types = MembershipType::all();
        return view('frontend.e-services.memberships')
            ->withTitle(__('Memberships'))
            ->withGenders($genders)
            ->withTypes($types);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function recruitment()
    {
        $jobs = Job::all();
        return view('frontend.e-services.recruitment')
            ->withTitle(__('Recruitment'))
            ->withJobs($jobs);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function apply(Job $job)
    {
        $genders = Gender::all();
        return view('frontend.e-services.apply')
            ->withTitle(__('Recruitment'))
            ->withGenders($genders)
            ->withJob($job);
    }
}
