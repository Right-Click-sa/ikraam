<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\AboutRepository;
use App\Http\Requests\Backend\About\UpdateAboutRequest;
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

    // /**
    // *
    // * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    // */
    // public function index()
    // {
    //   return view('backend.about.about')->withAbouts($this->aboutRepository
    //         ->orderBy('id')
    //         ->paginate(10));
    // }

    // /**
    // *
    // * @return mixed
    // */
    // public function create()
    // {
    //   return view('backend.about.create');
    // }

   // /**
   //  * @param UpdateAboutRequest $request
   //  * @param About              $about
   //  *
   //  * @throws \Throwable
   //  * @return mixed
   //  */
   //  public function store(UpdateAboutRequest $request, About $about)
   //  {
   //     $this->aboutRepository->store();
   //     return redirect()->route('admin.about')->withFlashSuccess(__('About Created'));
   //  }

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

}
