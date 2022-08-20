<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VolunteerRequest;

class VolunteerRequestController extends Controller
{
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $requests = VolunteerRequest::paginate(10);
        return view('backend.volunteer.requests')->withRequests($requests);
    }

    public function store(Request $request)
    {
        // 'name', 'email', 'message'
        $validatedData = \Validator::make($request->all(),[
            'field_id'   => 'required',
            'location_id'   => 'required',
            'gender_id'   => 'required',
            'name'      => 'required|max:255',
            'email'     => 'required|email',
            'phone'     =>  'required|numeric',
            'age'   => 'required',
        ]);

        if ($validatedData->fails()){
            $errors = $validatedData->errors();
            return response()->json([
              'errors'    =>  $validatedData->errors()->first(),
              'app_name'  =>  __('Ikraam')
            ]);
        }
        else {
            // store voluntee request
            $request = VolunteerRequest::create(request(['field_id', 'location_id', 'gender_id', 'name', 'email', 'phone', 'age']));

            return response()->json([
              'success'   =>  __('Volunteer Information Sent Successfully'),
              'app_name'  =>  __('Ikraam')
            ]);
        }
    }

    /**
     * @param VolunteerRequest $request
     *
     * @throws \Exception
     * @return mixed
     */
    public function destroy(VolunteerRequest $request)
    {
       $request->delete();
       return back()->withFlashSuccess(__('Volunteer Request Deleted Successfully'));
    }
}
