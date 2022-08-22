<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Job;

/**
 * Class JobsRepository.
 */
class JobsRepository extends BaseRepository
{
    public function __construct(Job $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Job
     */
    public function store()
    {
        $job = Job::create(request(['job:en', 'job:ar', 'description:en', 'description:ar']));
    }

    /**
     * @param Job  $job
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Job
     */
    public function update($job)
    {
        $job->update(request(['job:en', 'job:ar', 'description:en', 'description:ar']));
    }

    /**
     * @param Job $job
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Job
     */
    public function destroy($job)
    {
        $job->delete();
    }

}
