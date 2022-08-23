<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\MainPage;

/**
 * Class MainPageRepository.
 */
class MainPageRepository extends BaseRepository
{
    public function __construct(MainPage $model)
    {
        $this->model = $model;
    }

    /**
     * @param MainPage  $mainPage
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return MainPage
     */
    public function update($mainPage)
    {
        $mainPage->update(request(['video_link', 'programs_number', 'associations_number', 'initiatives_number', 'year1', 'year1_cases', 'year2', 'year2_cases', 'year3', 'year3_cases', 'tombs_number', 'washbasins_number']));
    }

}
