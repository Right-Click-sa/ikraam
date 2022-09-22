<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\ContactUs;

/**
 * Class ContactUsRepository.
 */
class ContactUsRepository extends BaseRepository
{
    public function __construct(ContactUs $model)
    {
        $this->model = $model;
    }

    // /**
    //  * @param Request $request
    //  *
    //  * @throws \Exception
    //  * @throws \Throwable
    //  * @return ContactUs
    //  */
    // public function store()
    // {
    //     $message = ContactUs::create(request(['name', 'email','phone', 'message']));
    // }

    /**
     * @param ContactUs  $message
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return ContactUs
     */
    public function update($message)
    {
        $message->update(request(['name', 'email','phone', 'message']));
    }

    /**
     * @param ContactUs $message
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return ContactUs
     */
    public function destroy($message)
    {
        $message->delete();
    }

}
