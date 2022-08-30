<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\GalleryRepository;
use App\Http\Requests\Backend\Gallery\UpdateImagesRequest;
use App\Models\Gallery;

class GalleryController extends Controller
{
  /**
   * @var GalleryRepository
   */
   protected $galleryRepository;

  /**
   * GalleryController constructor.
   *
   * @param GalleryRepository $galleryRepository
   */

    public function __construct(GalleryRepository $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }

    public function edit()
    {
        return view('backend.gallery.edit')->withImages(Gallery::all());
    }

    public function update(UpdateImagesRequest $request)
    {
        $this->galleryRepository->update($request);
        return back()->withFlashSuccess(__('Gallery Updated Successfully'));
    }

    /**
    * @param Gallery $image
    *
    * @throws \Exception
    * @return mixed
    */
   public function imageDestroy(Gallery $image)
   {
        $this->galleryRepository->imageDestroy($image);

        return response()->json([
          'success'   =>  __('Image Deleted Successfully'),
          'app_name'  =>  __('Ikraam')
        ]);
   }
}
