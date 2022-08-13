<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\WhyUs;

/**
 * Class WhyUsRepository.
 */
class WhyUsRepository extends BaseRepository
{
    public function __construct(WhyUs $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return WhyUs
     */
    public function store()
    {
        if($icon = request('icon'))
        {
            $whyUs = WhyUs::create(request(['title:en', 'title:ar', 'content:en', 'content:ar']));
            $this->saveImage(request('icon'), $whyUs);

            $whyUs->save();
        }
    }

    /**
     * @param WhyUs  $whyUs
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return WhyUs
     */
    public function update($whyUs)
    {
        $whyUs->update(request(['title:en', 'title:ar', 'content:en', 'content:ar']));

        if (request('icon'))
        {
            if($whyUs->icon)
            {
                $this->deleteImage($whyUs);
                $this->saveImage(request('icon'), $whyUs);
            }
            else
            {
                $this->saveImage(request('icon'), $whyUs);
            }
        }

    }

    /**
     * @param WhyUs $whyUs
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return WhyUs
     */
    public function destroy($whyUs)
    {
        if($whyUs->icon)
        {
            $this->deleteImage($whyUs);
        }

        $whyUs->delete();
    }

    public function saveImage($icon, $whyUs)
    {
        $whyUs->icon  = time().'.'.$icon->getClientOriginalExtension();
        $icon->move(public_path('/img/backend/whyUs/'),$whyUs->icon );

        $whyUs->save();
    }

    public function deleteImage($whyUs)
    {
        $cover_path = public_path('/img/backend/whyUs/').$whyUs->icon;
        unlink($cover_path);
    }
}
