<?php

namespace App\Http\Controllers\Frontend;;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
      public function questions()
      {
          return view('frontend.questions.questions')->withTitle(__('Support'));
      }

      /**
       * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
       */
        public function one()
        {
            return view('frontend.questions.one')->withTitle(__('Support'));
        }

        public function two()
        {
            return view('frontend.questions.two')->withTitle(__('Support'));
        }

        public function three()
        {
            return view('frontend.questions.three')->withTitle(__('Support'));
        }

        public function four()
        {
            return view('frontend.questions.four')->withTitle(__('Support'));
        }

        public function five()
        {
            return view('frontend.questions.five')->withTitle(__('Support'));
        }

        public function six()
        {
            return view('frontend.questions.six')->withTitle(__('Support'));
        }

        public function seven()
        {
            return view('frontend.questions.seven')->withTitle(__('Support'));
        }

        public function eight()
        {
            return view('frontend.questions.eight')->withTitle(__('Support'));
        }

        public function nine()
        {
            return view('frontend.questions.nine')->withTitle(__('Support'));
        }

        public function ten()
        {
            return view('frontend.questions.ten')->withTitle(__('Support'));
        }
}
