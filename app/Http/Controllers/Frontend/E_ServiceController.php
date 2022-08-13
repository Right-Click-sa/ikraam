<?php

namespace App\Http\Controllers\Frontend;;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('frontend.e-services.memberships')->withTitle(__('Memberships'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function recruitment()
    {
        return view('frontend.e-services.recruitment')->withTitle(__('Recruitment'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function apply()
    {
        return view('frontend.e-services.apply')->withTitle(__('Recruitment'));
    }
}
