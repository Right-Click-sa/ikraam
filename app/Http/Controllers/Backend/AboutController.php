<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\AboutRepository;
use App\Http\Requests\Backend\About\UpdateAboutRequest;
use App\Http\Requests\Backend\About\UpdateAboutEnterpriseMissionsRequest;
use App\Models\About;
use App\Models\AboutValue;

class AboutController extends Controller
{
   /**
    * @var AboutRepository
    */
    protected $aboutRepository;

   /**
    * AboutController constructor.
    *
    * @param AboutRepository $aboutRepository
    */
    public function __construct(AboutRepository $aboutRepository)
    {
       $this->aboutRepository = $aboutRepository;
    }

     /**
    * @param About $about
    *
    * @return mixed
    */
    public function edit()
    {
        $about = About::first();
        return view('backend.about.edit')->withAbout($about);
    }

    /**
    * @param UpdateAboutRequest $request
    * @param About              $about
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(UpdateAboutRequest $request, About $about)
    {
        $this->aboutRepository->update($about, $request);
        return back()->withFlashSuccess(__('About Updated Successfully'));
    }

    /**
    * @param AboutValue $about
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroyValue(AboutValue $about)
    {
        $this->aboutRepository->destroy($about);

        return response()->json([
          'success'   =>  __('Value Deleted Successfully'),
          'app_name'  =>  __('Ikraam')
        ]);
    }

    /**
   * @param About $about
   *
   * @return mixed
   */
   public function enterprise_missions()
   {
       $about = About::first();
       return view('backend.about.enterprise_missions')->withAbout($about);
   }

   /**
   * @param UpdateAboutRequest $request
   * @param About              $about
   *
   * @throws \App\Exceptions\GeneralException
   * @throws \Throwable
   * @return mixed
   */
   public function update_enterprise_missions(UpdateAboutEnterpriseMissionsRequest $request, About $about)
   {
       $this->aboutRepository->update_enterprise_missions($about, $request);
       return back()->withFlashSuccess(__('Enterprise Missions And Work Updated Successfully'));
   }

   /**
    * @param About $about
    *
    * @return mixed
    */
    public function administrative_structure()
    {
        $about = About::first();
        return view('backend.about.administrative_structure')->withAbout($about);
    }

   /**
   * @param UpdateAboutRequest $request
   * @param About              $about
   *
   * @throws \App\Exceptions\GeneralException
   * @throws \Throwable
   * @return mixed
   */
   public function update_administrative_structure(UpdateAboutEnterpriseMissionsRequest $request, About $about)
   {
       $this->aboutRepository->update_enterprise_missions($about, $request);
       return back()->withFlashSuccess(__('The Administrative Structure Updated Successfully'));
   }

}
