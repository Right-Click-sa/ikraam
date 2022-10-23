@extends('backend.layouts.app')

@section('title', __('Edit Order'))

@section('content')
    <form action="{{ route('admin.order.requests.update', $order) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <x-backend.card>
            <x-slot name="header">
                @lang('Edit Order')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.order.requests')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div >

                  <div class="form-group row">
                    <label for="type" class="col-md-2 col-form-label">@lang('Order type')</label>

                    <div class="col-md-10">
                        <input type="text" class="form-control" placeholder="@lang('Order type')" value="{{ $order->type->type }}" disabled>
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="association_name" class="col-md-2 col-form-label">@lang('Association name')</label>

                    <div class="col-md-10">
                        <input type="text" class="form-control" placeholder="@lang('Association name')" value="{{ $order->association->name }}" disabled>
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="association_name" class="col-md-2 col-form-label">@lang('Order date')</label>

                    <div class="col-md-10">
                        <input type="date" class="form-control" placeholder="@lang('Order date')" value="{{ $order->created_at->toDateString() }}" disabled>
                    </div><!--col-->
                  </div><!--form-group-->

                  <div class="form-group row">
                    <label for="description" class="col-md-2 col-form-label">@lang('Order description')</label>

                    <div class="col-md-10">
                        <textarea class="form-control" rows="8" cols="80" placeholder="{{ __('Order description') }}" disabled >{{ $order->description }}</textarea>
                    </div><!--col-->
                  </div><!--form-group-->

                  <!-- Order status -->
                  <div class="form-group row">
                    <label for="type" class="col-md-2 col-form-label">@lang('Status')</label>

                    <div class="col-md-10">
                        <select name="status_id" class="form-control" required onchange="status_changed(this);">
                            <option value="">@lang('Status')</option>
                            @foreach ($statuses as $key => $status)
                              <option value="{{ $status->id }}" {{ $status->id === $order->status->id ? 'selected' : '' }}>{{ $status->status }}</option>
                            @endforeach
                        </select>
                    </div>
                  </div><!--form-group-->

                  @if ($order->status->id == 3)
                    <div class="form-group row" id="rejection_reason">
                      <label for="rejection_reason" class="col-md-2 col-form-label">@lang('Rejection reason')</label>

                      <div class="col-md-10">
                        <textarea name="rejection_reason" class="form-control" rows="8" cols="80" placeholder="{{ __('Rejection reason') }}">{{ $order->rejection_reason }}</textarea>
                      </div><!--col-->
                    </div><!--form-group-->
                  @endif

                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary {{ app()->getLocale() == 'en' ? 'float-right' : 'float-left' }}" type="submit">@lang('Edit Order')</button>
            </x-slot>
        </x-backend.card>
    </form>
@endsection

@push('after-scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script type="text/javascript">

    // hide rejection reason div on page load
    // $("#rejection_reason").hide();

    // check if status is reject to show rejection reason div or not
    function status_changed(status)
    {
      if (status.value == 3) {
        $('#rejection_reason').show();
      }
      else {
        $("#rejection_reason").hide();
      }
    }
  </script>
@endpush
