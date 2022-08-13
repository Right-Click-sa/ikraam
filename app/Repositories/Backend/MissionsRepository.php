<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Mission;

/**
 * Class MissionsRepository.
 */
class MissionsRepository extends BaseRepository
{
    public function __construct(Mission $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Mission
     */
    public function store()
    {
        $mission = Mission::create(request(['content:en', 'content:ar']));
    }

    /**
     * @param Mission  $mission
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Mission
     */
    public function update($mission)
    {
        $mission->update(request(['content:en', 'content:ar']));
    }

    /**
     * @param Mission $mission
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Mission
     */
    public function destroy($mission)
    {
        $mission->delete();
    }

}
