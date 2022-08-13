<?php

namespace App\Http\Controllers\Frontend;;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function about()
    {
        return view('frontend.about.about')->withTitle(__('About the enterprise'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function enterprise_missions()
    {
        return view('frontend.about.missions')->withTitle(__('Enterprise missions'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function regulations_and_policies()
    {
        return view('frontend.about.regulations_and_policies')->withTitle(__('Regulations and Policies'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function board_of_trustees()
    {
        return view('frontend.about.board_of_trustees')->withTitle(__('Board of Trustees'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function committees()
    {
        return view('frontend.about.committees')->withTitle(__('Committees'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function administrative_structure()
    {
        return view('frontend.about.administrative_structure')->withTitle(__('The administrative structure'));
    }
}
