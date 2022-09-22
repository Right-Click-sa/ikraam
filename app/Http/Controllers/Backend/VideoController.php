<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\VideosRepository;
use App\Http\Requests\Backend\Videos\StoreVideoRequest;
use App\Models\Video;

class VideoController extends Controller
{
   /**
    * @var VideosRepository
    */
    protected $videosRepository;

   /**
    * Videos Controller constructor.
    *
    * @param VideosRepository $videosRepository
    */
    public function __construct(VideosRepository $videosRepository)
    {
       $this->videosRepository = $videosRepository;
    }

    /**
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {
      return view('backend.videos.videos')->withVideos($this->videosRepository
            ->orderBy('id')
            ->paginate(10));
    }

    /**
    *
    * @return mixed
    */
    public function create()
    {
      return view('backend.videos.create');
    }

   /**
    * @param StoreVideoRequest $request
    * @param Video             $video
    *
    * @throws \Throwable
    * @return mixed
    */
    public function store(StoreVideoRequest $request, Video $video)
    {
       $this->videosRepository->store();
       return redirect()->route('admin.media.videos')->withFlashSuccess(__('Video Created Successfully'));
    }

     /**
    * @param Video $video
    *
    * @return mixed
    */
    public function edit(Video $video)
    {
        return view('backend.videos.edit')->withVideo($video);
    }

    /**
    * @param StoreVideoRequest $request
    * @param Video              $video
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(StoreVideoRequest $request, Video $video)
    {
        $this->videosRepository->update($video);
        return redirect()->route('admin.media.videos')->withFlashSuccess(__('Video Updated Successfully'));
    }

    /**
    * @param Video $video
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroy(Video $video)
    {
        $this->videosRepository->destroy($video);
        return back()->withFlashSuccess(__('Video Deleted Successfully'));
    }

}
