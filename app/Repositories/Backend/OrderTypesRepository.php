<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\OrderType;

/**
 * Class OrderTypesRepository.
 */
class OrderTypesRepository extends BaseRepository
{
    public function __construct(OrderType $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return OrderType
     */
    public function store()
    {
        $order = OrderType::create(request(['type:en', 'type:ar']));
    }

    /**
     * @param OrderType  $order
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return OrderType
     */
    public function update($order)
    {
        $order->update(request(['type:en', 'type:ar']));
    }

    /**
     * @param OrderType $order
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return OrderType
     */
    public function destroy($order)
    {
        $order->delete();
    }

}
