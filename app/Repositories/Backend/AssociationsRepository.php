<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Association;

/**
 * Class AssociationsRepository.
 */
class AssociationsRepository extends BaseRepository
{
    public function __construct(Association $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Association
     */
    public function store()
    {
        if($image = request('image'))
        {
            $association = Association::create(request(['user_id', 'name:en', 'name:ar', 'website', 'city:en', 'city:ar', 'activity:en', 'activity:ar', 'executive_director:en', 'executive_director:ar', 'administrative_officer:en', 'administrative_officer:ar', 'chairman:en', 'chairman:ar', 'email', 'executive_director_number', 'founding', 'license', 'administrative_officer_number']));

            // save image
            $this->saveImage(request('image'), $association);

            if(request('file'))
            {
              // save file
              $association->file  = time().request('file')->getClientOriginalName();
              request('file')->move(public_path('/img/backend/associations/files/'),$association->file );
              $association->save();
            }

            $association->save();
        }
    }

    /**
     * @param Association  $association
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Association
     */
    public function update($association)
    {
        $association->update(request(['user_id', 'name:en', 'name:ar', 'website', 'city:en', 'city:ar', 'activity:en', 'activity:ar', 'executive_director:en', 'executive_director:ar', 'administrative_officer:en', 'administrative_officer:ar', 'chairman:en', 'chairman:ar', 'email', 'executive_director_number', 'founding', 'license', 'administrative_officer_number']));

        if (request('file')) {
            // remove old file
            $file_path = public_path('/img/backend/associations/files/').$association->file;
            if (\File::exists($file_path)) {
              unlink($file_path);
            }

            // add new file
            $association->file  = time().request('file')->getClientOriginalName();
            request('file')->move(public_path('/img/backend/associations/files/'),$association->file );

            $association->save();
        }

        if (request('image'))
        {
            if($association->image)
            {
                $this->deleteImage($association);
                $this->saveImage(request('image'), $association);
            }
            else
            {
                $this->saveImage(request('image'), $association);
            }
        }

    }

    /**
     * @param Association $association
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Association
     */
    public function destroy($association)
    {
        if ($association->file) {
            $file_path = public_path('/img/backend/associations/files/').$association->file;

            if (\File::exists($file_path)) {
              unlink($file_path);
            }
        }

        if($association->image)
        {
            $this->deleteImage($association);
        }

        $association->delete();
    }

    public function saveImage($image, $association)
    {
        $association->image  = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('/img/backend/associations/img/'),$association->image );

        $association->save();
    }

    public function deleteImage($association)
    {
        $image_path = public_path('/img/backend/associations/img/').$association->image;
        if (\File::exists($image_path)) {
          unlink($image_path);
        }
    }
}
