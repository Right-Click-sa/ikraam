<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class QuestionController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
      public function questions()
      {
          $settings   = Setting::all()->pluck('value', 'key')->toArray();
          return view('frontend.questions.questions')
              ->withTitle(__('Support'))
              ->withSettings($settings);
      }

      /**
       * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
       */
        public function one()
        {
            $settings   = Setting::all()->pluck('value', 'key')->toArray();
            return view('frontend.questions.one')
                ->withTitle(__('Support'))
                ->withSettings($settings);
        }

        public function two()
        {
            $settings   = Setting::all()->pluck('value', 'key')->toArray();
            return view('frontend.questions.two')
                ->withTitle(__('Support'))
                ->withSettings($settings);
        }

        public function three()
        {
            $settings   = Setting::all()->pluck('value', 'key')->toArray();
            return view('frontend.questions.three')
                ->withTitle(__('Support'))
                ->withSettings($settings);
        }

        public function four()
        {
            $settings   = Setting::all()->pluck('value', 'key')->toArray();
            return view('frontend.questions.four')
                ->withTitle(__('Support'))
                ->withSettings($settings);
        }

        public function five()
        {
            $settings   = Setting::all()->pluck('value', 'key')->toArray();
            return view('frontend.questions.five')
                ->withTitle(__('Support'))
                ->withSettings($settings);
        }

        public function six()
        {
            $settings   = Setting::all()->pluck('value', 'key')->toArray();
            return view('frontend.questions.six')
                ->withTitle(__('Support'))
                ->withSettings($settings);
        }

        public function seven()
        {
            $settings   = Setting::all()->pluck('value', 'key')->toArray();
            return view('frontend.questions.seven')
                ->withTitle(__('Support'))
                ->withSettings($settings);
        }

        public function eight()
        {
            $settings   = Setting::all()->pluck('value', 'key')->toArray();
            return view('frontend.questions.eight')
                ->withTitle(__('Support'))
                ->withSettings($settings);
        }

        public function nine()
        {
            $settings   = Setting::all()->pluck('value', 'key')->toArray();
            return view('frontend.questions.nine')
                ->withTitle(__('Support'))
                ->withSettings($settings);
        }

        public function ten()
        {
            $settings   = Setting::all()->pluck('value', 'key')->toArray();
            return view('frontend.questions.ten')
                ->withTitle(__('Support'))
                ->withSettings($settings);
        }
}
