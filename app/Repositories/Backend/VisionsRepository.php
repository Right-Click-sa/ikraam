<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Vision;

/**
 * Class VisionsRepository.
 */
class VisionsRepository extends BaseRepository
{
    public function __construct(Vision $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Vision
     */
    public function store()
    {
        $vision = Vision::create(request(['content:en', 'content:ar']));
    }

    /**
     * @param Vision  $vision
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Vision
     */
    public function update($vision)
    {
        $vision->update(request(['content:en', 'content:ar']));
    }

    /**
     * @param Vision $vision
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Vision
     */
    public function destroy($vision)
    {
        $vision->delete();
    }

}
