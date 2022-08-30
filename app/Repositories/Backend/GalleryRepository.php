<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Gallery;

/**
 * Class GalleryRepository.
 */
class GalleryRepository extends BaseRepository
{
    public function __construct(Gallery $model)
    {
        $this->model = $model;
    }

    /**
     * @param Gallery  $image
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Gallery
     */
    public function update($request)
    {
        if ($request->images)
        {
            foreach($request->images as $image)
            {
              $this->saveImage($image);
            }

        }

    }

    /**
     * @param Gallery $image
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Gallery
     */
    public function imageDestroy($image)
    {
        if($image->image)
        {
            $this->deleteImage($image);
        }

        $image->delete();
    }

    public function saveImage($image)
    {
        $gallery_images = new Gallery();
        $gallery_images->image = uniqid().'.'.$image->getClientOriginalExtension();

        $image->move(public_path('/img/backend/media/gallery/'), $gallery_images->image);

        $gallery_images->save();
    }

    public function deleteImage($image)
    {
      $image_path = public_path('/img/backend/media/gallery/').$image->image;
        if(\File::exists($image_path)){
          unlink($image_path);
        }
    }
}
