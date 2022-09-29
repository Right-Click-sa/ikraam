<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\OrderRequest;

/**
 * Class OrderRequestsRepository.
 */
class OrderRequestsRepository extends BaseRepository
{
    public function __construct(OrderRequest $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return OrderRequest
     */
    public function store($request)
    {
        request()->merge([
            'association_id' => auth()->user()->association->id,
        ]);

        $order = OrderRequest::create(request(['order_type_id', 'description', 'association_id']));

        if(request('attachment'))
        {
          foreach (request('attachment') as $key => $attachment) {

            $this->saveFile($attachment, $order);
            $order->save();
          }
        }
    }

    /**
     * @param OrderRequest  $trustee
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return OrderRequest
     */
    public function update($order)
    {
        $order->update(request(['status_id', 'rejection_reason']));
    }

    /**
     * @param OrderRequest $trustee
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return OrderRequest
     */
    public function destroy($order)
    {
        if($order->attachments)
        {
          foreach ($order->attachments as $key => $attachment) {
            $this->deleteFile($attachment->attachment);
          }
        }

        $order->delete();
    }

    public function saveFile($attachment, $order)
    {
        // save attachment
        $attachment_name = $order->attachments()->create([
          'attachment'  =>  uniqid().$attachment->getClientOriginalName()
        ]);

        $attachment->move(public_path('/img/backend/orders_attachments/'),$attachment_name->attachment );

        $order->save();
    }

    public function deleteFile($attachment)
    {
        $file_path = public_path('/img/backend/orders_attachments/').$attachment;
        if (\File::exists($file_path)) {
          unlink($file_path);
        }
    }
}
