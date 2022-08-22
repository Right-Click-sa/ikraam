<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\MembershipType;

/**
 * Class MembershipsRepository.
 */
class MembershipsRepository extends BaseRepository
{
    public function __construct(MembershipType $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return MembershipType
     */
    public function store()
    {
        $membership = MembershipType::create(request(['type:en', 'type:ar']));
    }

    /**
     * @param MembershipType  $membership
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return MembershipType
     */
    public function update($membership)
    {
        $membership->update(request(['type:en', 'type:ar']));
    }

    /**
     * @param MembershipType $membership
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return MembershipType
     */
    public function destroy($membership)
    {
        $membership->delete();
    }

}
