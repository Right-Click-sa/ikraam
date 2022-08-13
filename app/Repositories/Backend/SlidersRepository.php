<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Slider;

/**
 * Class SlidersRepository.
 */
class SlidersRepository extends BaseRepository
{
    public function __construct(Slider $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Slider
     */
    public function store()
    {
        if($cover = request('cover'))
        {
            $slider = Slider::create(request(['title:en', 'title:ar', 'content:en', 'content:ar']));
            $this->saveImage(request('cover'), $slider);

            $slider->save();
        }
    }

    /**
     * @param Slider  $slider
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Slider
     */
    public function update($slider)
    {
        $slider->update(request(['title:en', 'title:ar', 'content:en', 'content:ar']));

        if (request('cover'))
        {
            if($slider->cover)
            {
                $this->deleteImage($slider);
                $this->saveImage(request('cover'), $slider);
            }
            else
            {
                $this->saveImage(request('cover'), $slider);
            }
        }

    }

    /**
     * @param slider $slider
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return slider
     */
    public function destroy($slider)
    {
        if($slider->cover)
        {
            $this->deleteImage($slider);
        }

        $slider->delete();
    }

    public function saveImage($cover, $slider)
    {
        $slider->cover  = time().'.'.$cover->getClientOriginalExtension();
        $cover->move(public_path('/img/backend/sliders/'),$slider->cover );

        $slider->save();
    }

    public function deleteImage($slider)
    {
        $cover_path = public_path('/img/backend/sliders/').$slider->cover;
        unlink($cover_path);
    }
}
