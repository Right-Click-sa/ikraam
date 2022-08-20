<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\VolunteerField;

/**
 * Class FieldsRepository.
 */
class FieldsRepository extends BaseRepository
{
    public function __construct(VolunteerField $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return VolunteerField
     */
    public function store()
    {
        $field = VolunteerField::create(request(['field:en', 'field:ar']));
    }

    /**
     * @param VolunteerField  $field
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return VolunteerField
     */
    public function update($field)
    {
        $field->update(request(['field:en', 'field:ar']));
    }

    /**
     * @param VolunteerField $field
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return VolunteerField
     */
    public function destroy($field)
    {
        $field->delete();
    }

}
