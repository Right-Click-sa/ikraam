<?php

namespace App\Http\Controllers\Frontend;;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContributeController extends Controller
{
  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
    public function contribute()
    {
        return view('frontend.contribute.contribute')->withTitle(__('Contribute with us'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function donate()
    {
        return view('frontend.contribute.donate')->withTitle(__('Donate'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function donate_in_kind()
    {
        return view('frontend.contribute.donate_in-kind')->withTitle(__('In-kind donation'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function volunteer()
    {
        return view('frontend.contribute.volunteer')->withTitle(__('Volunteer'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function volunteer_join()
    {
        return view('frontend.contribute.volunteer_join')->withTitle(__('Volunteer'));
    }
}
