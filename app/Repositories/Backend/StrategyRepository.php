<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Strategy;

/**
 * Class StrategyRepository.
 */
class StrategyRepository extends BaseRepository
{
    public function __construct(Strategy $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Strategy
     */
    public function store()
    {
        $strategy = Strategy::create(request(['content:en', 'content:ar']));
    }

    /**
     * @param Strategy  $strategy
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Strategy
     */
    public function update($strategy)
    {
        $strategy->update(request(['content:en', 'content:ar']));
    }

    /**
     * @param Strategy $strategy
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Strategy
     */
    public function destroy($strategy)
    {
        $strategy->delete();
    }

}
