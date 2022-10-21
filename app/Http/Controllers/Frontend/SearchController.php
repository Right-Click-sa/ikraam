<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Search;

class SearchController extends Controller
{
  /**
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
   */
    public function search()
    {
        if (request('search') != null) {
          $results = Search::Where('titleAr', 'like', '%'.request('search').'%')
          ->orWhere('titleEn', 'like', '%'.request('search').'%')
          ->get();
        }
        else {
          $results = null;
        }

        $settings   = Setting::all()->pluck('value', 'key')->toArray();
        return view('frontend.search.results')
            ->withTitle(__('Search Results'))
            ->withSettings($settings)
            ->withResults($results);
    }
}
