<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Trustee;

/**
 * Class TrusteesRepository.
 */
class TrusteesRepository extends BaseRepository
{
    public function __construct(Trustee $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Trustee
     */
    public function store()
    {
        if($image = request('image'))
        {
            $trustee = Trustee::create(request(['title:en', 'title:ar', 'name:en', 'name:ar']));
            $this->saveImage(request('image'), $trustee);

            $trustee->save();
        }
    }

    /**
     * @param Trustee  $trustee
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Trustee
     */
    public function update($trustee)
    {
        $trustee->update(request(['title:en', 'title:ar', 'name:en', 'name:ar']));

        if (request('image'))
        {
            if($trustee->image)
            {
                $this->deleteImage($trustee);
                $this->saveImage(request('image'), $trustee);
            }
            else
            {
                $this->saveImage(request('image'), $trustee);
            }
        }

    }

    /**
     * @param Trustee $trustee
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Trustee
     */
    public function destroy($trustee)
    {
        if($trustee->image)
        {
            $this->deleteImage($trustee);
        }

        $trustee->delete();
    }

    public function saveImage($image, $trustee)
    {
        $trustee->image  = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('/img/backend/about/trustees/'),$trustee->image );

        $trustee->save();
    }

    public function deleteImage($trustee)
    {
        $cover_path = public_path('/img/backend/about/trustees/').$trustee->image;
        unlink($cover_path);
    }
}
