<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Service;

/**
 * Class ServiceRepository.
 */
class ServiceRepository extends BaseRepository
{
    public function __construct(Service $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Service
     */
    public function store()
    {
        if($icon = request('icon'))
        {
            $service = Service::create(request(['title:en', 'title:ar']));
            $this->saveImage(request('icon'), $service);

            $service->save();
        }
    }

    /**
     * @param Service  $service
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Service
     */
    public function update($service)
    {
        $service->update(request(['title:en', 'title:ar']));

        if (request('icon'))
        {
            if($service->icon)
            {
                $this->deleteImage($service);
                $this->saveImage(request('icon'), $service);
            }
            else
            {
                $this->saveImage(request('icon'), $service);
            }
        }

    }

    /**
     * @param Service $service
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Service
     */
    public function destroy($service)
    {
        if($service->icon)
        {
            $this->deleteImage($service);
        }

        $service->delete();
    }

    public function saveImage($icon, $service)
    {
        $service->icon  = time().'.'.$icon->getClientOriginalExtension();
        $icon->move(public_path('/img/backend/services/'),$service->icon );

        $service->save();
    }

    public function deleteImage($service)
    {
        $icon_path = public_path('/img/backend/services/').$service->icon;
        unlink($icon_path);
    }
}
