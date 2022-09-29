<form action="{{ route('frontend.order.requests.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Order type -->
    <div class="form-group row">
      <label for="type" class="col-md-3 col-form-label text-md-right">@lang('Order type')</label>

      <div class="col-md-9">
          <select name="order_type_id" class="form-control" required >
              <option value="">@lang('Order type')</option>
              @foreach ($types as $key => $type)
                <option value="{{ $type->id }}">{{ $type->type }}</option>
              @endforeach
          </select>
      </div>
    </div><!--form-group-->

    <!-- Order Description -->
    <div class="form-group row">
      <label for="description" class="col-md-3 col-form-label text-md-right">@lang('Order description')</label>

      <div class="col-md-9">
          <textarea name="description" class="form-control" rows="8" cols="80" placeholder="{{ __('Order description') }}" required>{{ old('description') }}</textarea>
      </div>
    </div><!--form-group-->

    <!-- Attachments -->
    <div class="form-group row mb-3">
      <label for="file" class="col-md-3 col-form-label text-md-right">@lang('Attachments')</label>

      <div class="col-md-9">
          <input class="form-control " id="file" type="file" name="attachment[]" accept=".pdf,docx,doc" multiple >
      </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-12 text-right">
            <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Upload Order')</button>
        </div>
    </div><!--form-group-->
</form>

@push('after-scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script type="text/javascript">
	    function readURL(input)
	    {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();

	            reader.onload = function (e)
	            {
	                $('#'+ input.name).attr('src', e.target.result);
	            }

	            reader.readAsDataURL(input.files[0]);
	        }
	    }
	</script>
@endpush
