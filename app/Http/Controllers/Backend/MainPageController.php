<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\MainPageRepository;
use App\Http\Requests\Backend\MainPage\UpdateMainPageRequest;
use App\Models\MainPage;

class MainPageController extends Controller
{
   /**
    * @var MainPageRepository
    */
    protected $mainPageRepository;

   /**
    * MainPageController constructor.
    *
    * @param MainPageRepository $mainPageRepository
    */
    public function __construct(MainPageRepository $mainPageRepository)
    {
       $this->mainPageRepository = $mainPageRepository;
    }

     /**
    * @param MainPage $mainPage
    *
    * @return mixed
    */
    public function edit()
    {
        $mainPage = MainPage::first();
        return view('backend.mainPage.edit')->withMainPage($mainPage);
    }

    /**
    * @param UpdateMainPageRequest $request
    * @param MainPage              $mainPage
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(UpdateMainPageRequest $request, MainPage $mainPage)
    {
        $this->mainPageRepository->update($mainPage, $request);
        return back()->withFlashSuccess(__('MainPage Updated Successfully'));
    }

}
