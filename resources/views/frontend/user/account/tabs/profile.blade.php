<form action="{{ route('frontend.auth.associations.update', $logged_in_user->association->id) }}" method="POST" enctype="multipart/form-data">
    @method('patch')
    @csrf

    <!-- The Association Image -->
    <div class="form-group row">
        <label for="image" class="col-md-3 col-form-label text-md-right">@lang('Association Image')</label>

        <div class="col-md-9">
          <div class="col-md-4 offset-md-4 mx-auto">
            <div class="image-upload row">
              <label for="file-input1">
                  @if($logged_in_user->association->image)
                      <img src="/img/backend/associations/img/{{ $logged_in_user->association->image }}" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width: 100%;" name="image" id="image" />
                  @else
                    <div class="d-flex trips-uploaded-images flex-wrap justify-content-center align-content-center">
                      <img src="/img/backend/upload-2.png" style="cursor:pointer; vertical-align: middle; margin-left: auto; margin-right: auto; width:300px; height: 200px;max-width: 100%;margin:0 auto; object-fit:contain;" name="image" id="image" />
                    </div>
                  @endif
              </label>

              <input id="file-input1" type="file" accept="image/*" onchange="readURL(this);" hidden name="image" />
            </div>
          </div>
        </div>
      </div>

    <!-- Association name -->
    <div class="form-group row">
      <label for="name:en" class="col-md-3 col-form-label text-md-right">@lang('association_name:en')</label>

      <div class="col-md-9">
        <input type="text" name="name:en" class="form-control" placeholder="@lang('association_name:en')" dir="ltr" required autofocus value="{{ old('name:en') ?? $logged_in_user->association->{'name:en'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <div class="form-group row">
      <label for="name:ar" class="col-md-3 col-form-label text-md-right">@lang('association_name:ar')</label>

      <div class="col-md-9">
        <input type="text" name="name:ar" class="form-control" placeholder="@lang('association_name:ar')" dir="rtl" required value="{{ old('name:ar') ?? $logged_in_user->association->{'name:ar'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <!-- chairman -->
    <div class="form-group row">
      <label for="chairman:en" class="col-md-3 col-form-label text-md-right">@lang('association_chairman:en')</label>

      <div class="col-md-9">
        <input type="text" name="chairman:en" class="form-control" placeholder="@lang('association_chairman:en')" dir="ltr" required value="{{ old('chairman:en') ?? $logged_in_user->association->{'chairman:en'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <div class="form-group row">
      <label for="chairman:ar" class="col-md-3 col-form-label text-md-right">@lang('association_chairman:ar')</label>

      <div class="col-md-9">
        <input type="text" name="chairman:ar" class="form-control" placeholder="@lang('association_chairman:ar')" dir="rtl" required value="{{ old('chairman:ar') ?? $logged_in_user->association->{'chairman:ar'} }}">
      </div><!--col-->
    </div><!--form-group-->

    {{-- activity --}}
    <div class="form-group row">
      <label for="activity:en" class="col-md-3 col-form-label text-md-right">@lang('activity:en')</label>

      <div class="col-md-9">
          <input type="text" name="activity:en" class="form-control" placeholder="@lang('activity:en')" dir="ltr" required value="{{ old('activity:en') ?? $logged_in_user->association->{'activity:en'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <div class="form-group row">
      <label for="activity:ar" class="col-md-3 col-form-label text-md-right">@lang('activity:ar')</label>

      <div class="col-md-9">
          <input type="text" name="activity:ar" class="form-control" placeholder="@lang('activity:ar')" dir="rtl" required value="{{ old('activity:ar') ?? $logged_in_user->association->{'activity:ar'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <!-- city -->
    <div class="form-group row">
      <label for="city:en" class="col-md-3 col-form-label text-md-right">@lang('city:en')</label>

      <div class="col-md-9">
        <input type="text" name="city:en" class="form-control" placeholder="@lang('city:en')" dir="ltr" required value="{{ old('city:en') ?? $logged_in_user->association->{'city:en'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <div class="form-group row">
      <label for="city:ar" class="col-md-3 col-form-label text-md-right">@lang('city:ar')</label>

      <div class="col-md-9">
        <input type="text" name="city:ar" class="form-control" placeholder="@lang('city:ar')" dir="rtl" required value="{{ old('city:ar') ?? $logged_in_user->association->{'city:ar'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <!-- Association website -->
    <div class="form-group row">
      <label for="website" class="col-md-3 col-form-label text-md-right">@lang('Association website')</label>

      <div class="col-md-9">
        <input type="text" name="website" class="form-control" placeholder="@lang('Association website (https://example.com)')" value="{{ old('website') ?? $logged_in_user->association->{'website'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <!-- executive_director -->
    <div class="form-group row">
      <label for="executive_director:en" class="col-md-3 col-form-label text-md-right">@lang('executive_director:en')</label>

      <div class="col-md-9">
        <input type="text" name="executive_director:en" class="form-control" placeholder="@lang('executive_director:en')" dir="ltr" required value="{{ old('executive_director:en') ?? $logged_in_user->association->{'executive_director:en'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <div class="form-group row">
      <label for="executive_director:ar" class="col-md-3 col-form-label text-md-right">@lang('executive_director:ar')</label>

      <div class="col-md-9">
        <input type="text" name="executive_director:ar" class="form-control" placeholder="@lang('executive_director:ar')" dir="rtl" required value="{{ old('executive_director:ar') ?? $logged_in_user->association->{'executive_director:ar'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <!-- executive director number -->
    <div class="form-group row">
      <label for="executive_director_number" class="col-md-3 col-form-label text-md-right">@lang('Executive director\'s number')</label>

      <div class="col-md-9">
        <input type="number" name="executive_director_number" class="form-control" placeholder="@lang('Executive director\'s number')"  required value="{{ old('executive_director_number') ?? $logged_in_user->association->{'executive_director_number'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <!-- administrative_officer -->
    <div class="form-group row">
      <label for="administrative_officer:en" class="col-md-3 col-form-label text-md-right">@lang('administrative_officer:en')</label>

      <div class="col-md-9">
        <input type="text" name="administrative_officer:en" class="form-control" placeholder="@lang('administrative_officer:en')" dir="ltr" required value="{{ old('administrative_officer:en') ?? $logged_in_user->association->{'administrative_officer:en'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <div class="form-group row">
      <label for="administrative_officer:ar" class="col-md-3 col-form-label text-md-right">@lang('administrative_officer:ar')</label>

      <div class="col-md-9">
        <input type="text" name="administrative_officer:ar" class="form-control" placeholder="@lang('administrative_officer:ar')" dir="rtl" required value="{{ old('administrative_officer:ar') ?? $logged_in_user->association->{'administrative_officer:ar'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <!-- email -->
    <div class="form-group row">
      <label for="email" class="col-md-3 col-form-label text-md-right">@lang('Email')</label>

      <div class="col-md-9">
        <input type="email" name="email" class="form-control" placeholder="@lang('Email')"  required value="{{ old('email') ?? $logged_in_user->association->{'email'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <!-- founding -->
    <div class="form-group row">
      <label for="founding" class="col-md-3 col-form-label text-md-right">@lang('Founding date')</label>

      <div class="col-md-9">
        <input type="date" name="founding" class="form-control" placeholder="@lang('Founding date')" required value="{{ old('founding') ?? $logged_in_user->association->{'founding'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <!-- license -->
    <div class="form-group row">
      <label for="license" class="col-md-3 col-form-label text-md-right">@lang('License')</label>

      <div class="col-md-9">
        <input type="text" name="license" class="form-control" placeholder="@lang('License')"  required value="{{ old('license') ?? $logged_in_user->association->{'license'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <!-- administrative_officer_number -->
    <div class="form-group row">
      <label for="administrative_officer_number" class="col-md-3 col-form-label text-md-right">@lang("Administrative officer's number")</label>

      <div class="col-md-9">
        <input type="number" name="administrative_officer_number" class="form-control" placeholder="@lang("Administrative officer's number")" required value="{{ old('administrative_officer_number') ?? $logged_in_user->association->{'administrative_officer_number'} }}">
      </div><!--col-->
    </div><!--form-group-->

    <!-- file -->
    <div class="form-group row mb-3">
      <label for="file" class="col-md-3 col-form-label text-md-right">@lang('Upload the association certificate')</label>

      <div class="col-md-9">
          <input class="form-control " id="file" type="file" name="file" accept=".pdf,docx,doc" value="{{ $logged_in_user->association->file }}">
      </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-12 text-right">
            <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Edit Association')</button>
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
