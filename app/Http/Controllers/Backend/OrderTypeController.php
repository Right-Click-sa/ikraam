<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\OrderTypesRepository;
use App\Http\Requests\Backend\Orders\UpdateOrderTypeRequest;
use App\Models\OrderType;

class OrderTypeController extends Controller
{
   /**
    * @var OrderTypesRepository
    */
    protected $orderTypesRepository;

   /**
    * Order Types Controller constructor.
    *
    * @param OrderTypesRepository $orderTypesRepository
    */
    public function __construct(OrderTypesRepository $orderTypesRepository)
    {
       $this->orderTypesRepository = $orderTypesRepository;
    }

    /**
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {
      return view('backend.order_types.types')->withTypes($this->orderTypesRepository
            ->orderBy('id')
            ->paginate(10));
    }

    /**
    *
    * @return mixed
    */
    public function create()
    {
      return view('backend.order_types.create');
    }

   /**
    * @param UpdateOrderTypeRequest $request
    * @param OrderType     $order
    *
    * @throws \Throwable
    * @return mixed
    */
    public function store(UpdateOrderTypeRequest $request, OrderType $type)
    {
       $this->orderTypesRepository->store();
       return redirect()->route('admin.order.types')->withFlashSuccess(__('Order Type Created Successfully'));
    }

     /**
    * @param OrderType $order
    *
    * @return mixed
    */
    public function edit(OrderType $type)
    {
        return view('backend.order_types.edit')->withType($type);
    }

    /**
    * @param UpdateOrderTypeRequest $request
    * @param OrderType              $order
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(UpdateOrderTypeRequest $request, OrderType $type)
    {
        $this->orderTypesRepository->update($type);
        return redirect()->route('admin.order.types')->withFlashSuccess(__('Order Type Updated Successfully'));
    }

    /**
    * @param OrderType $order
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroy(OrderType $type)
    {
        $this->orderTypesRepository->destroy($type);
        return back()->withFlashSuccess(__('Order Type Deleted Successfully'));
    }

}
