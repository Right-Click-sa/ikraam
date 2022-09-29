<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\OrderRequestsRepository;
use App\Http\Requests\Backend\Orders\StoreOrderRequest;
use App\Http\Requests\Backend\Orders\UpdateOrderRequest;
use App\Models\OrderRequest;
use App\Models\Status;

class OrderRequestController extends Controller
{
   /**
    * @var OrderRequestsRepository
    */
    protected $orderRequestsRepository;

   /**
    * Order Requests Controller constructor.
    *
    * @param OrderRequestsRepository $orderRequestsRepository
    */
    public function __construct(OrderRequestsRepository $orderRequestsRepository)
    {
       $this->orderRequestsRepository = $orderRequestsRepository;
    }

    /**
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {
      return view('backend.order_requests.orders')->withOrders($this->orderRequestsRepository
            ->orderBy('id')
            ->paginate(10));
    }

   //  /**
   //  *
   //  * @return mixed
   //  */
   //  public function create()
   //  {
   //    return view('backend.order_requests.create');
   //  }
   //
   /**
    * @param StoreOrderRequest $request
    * @param OrderRequest       $order
    *
    * @throws \Throwable
    * @return mixed
    */
    public function store(StoreOrderRequest $request, OrderRequest $order)
    {
       $this->orderRequestsRepository->store($request);
       return redirect()->route('frontend.user.account', ['#upload-order'])->withFlashSuccess(__('Order Sent Successfully'));
    }

     /**
    * @param OrderRequest $order
    *
    * @return mixed
    */
    public function edit(OrderRequest $order)
    {
        return view('backend.order_requests.edit')
              ->withOrder($order)
              ->withStatuses(Status::all());
    }

    /**
    * @param UpdateOrderRequest $request
    * @param OrderRequest       $order
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(UpdateOrderRequest $request, OrderRequest $order)
    {
        $this->orderRequestsRepository->update($order);
        return redirect()->route('admin.order.requests')->withFlashSuccess(__('Order Updated Successfully'));
    }

    /**
    * @param OrderRequest $order
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroy(OrderRequest $order)
    {
        $this->orderRequestsRepository->destroy($order);
        return back()->withFlashSuccess(__('Order Deleted Successfully'));
    }

}
