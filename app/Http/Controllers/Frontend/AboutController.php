<?php

namespace App\Http\Controllers\Frontend;;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Policy;
use App\Models\Trustee;
use App\Models\Committee;

class AboutController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function about()
    {
        $about = About::first();
        return view('frontend.about.about')->withTitle(__('About the enterprise'))->withAbout($about);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function enterprise_missions()
    {
        $about = About::first();
        return view('frontend.about.missions')
            ->withTitle(__('Enterprise missions'))
            ->withMission($about->mission_image)
            ->withWork($about->work_image);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function regulations_and_policies()
    {
        $policies = Policy::all();
        return view('frontend.about.regulations_and_policies')->withTitle(__('Regulations and Policies'))->withPolicies($policies);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function board_of_trustees()
    {
        $trustees = Trustee::all();
        return view('frontend.about.board_of_trustees')->withTitle(__('Board of Trustees'))->withTrustees($trustees);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function committees()
    {
        $committees = Committee::all();
        return view('frontend.about.committees')->withTitle(__('Committees'))->withCommittees($committees);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function administrative_structure()
    {
        $about = About::first();
        return view('frontend.about.administrative_structure')->withTitle(__('The administrative structure'))->withStructure($about->structure_image);
    }
}
