<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">

          @foreach ($logged_in_user->association->requests->reverse() as $key => $order)
            <x-frontend.card>
                <x-slot name="header">
                    <h5><strong style="color: #1F9DAC;">@lang('Order type') : </strong> <span>{{ $order->type->type }}</span> </h5>
                </x-slot>

                <x-slot name="body">
                    <div class="row">
                        <div class="col-xl-12 {{ app()->getLocale() == 'ar' ? 'text-right' : ''}}">
                            <h5><strong style="color: #1F9DAC;">@lang('Order date') : </strong> <span>{{ $order->created_at->toDateString() }}</span> </h5>
                            <hr>
                            <h5><strong style="color: #1F9DAC;">@lang('Status') : </strong> <span @if($order->status->id == 1) class="p-1 mb-2 bg-success text-white text-center" @elseif($order->status->id == 2) class="p-1 mb-2 bg-warning text-dark text-center" @elseif($order->status->id == 3) class="p-1 mb-2 bg-danger text-white text-center" @endif>{{ $order->status->status }}</span> </h5>
                            <hr>
                            <h5><strong style="color: #1F9DAC;">@lang('Order description') : </strong> <span>{{ $order->description }}</span> </h5>
                            @if($order->status->id == 3)
                              <hr>
                              <h5><strong style="color: #1F9DAC;">@lang('Rejection reason') : </strong> <span>{{ $order->rejection_reason }}</span> </h5>
                            @endif
                        </div><!--col-->
                    </div><!--row-->

                </x-slot>
            </x-frontend.card>
            <br>
          @endforeach
        </div><!--col-md-12-->
    </div><!--row-->
</div><!--container-->
