<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AssociationRequest;

class AssociationRequestController extends Controller
{
    // /**
    //  *
    //  * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    //  */
    // public function index()
    // {
    //     $requests = AssociationRequest::paginate(10);
    //     return view('backend.volunteer.requests')->withRequests($requests);
    // }

    public function store(Request $request)
    {
        // 'name', 'email', 'number', 'chairman', 'founding', 'license', 'executive_director', 'location', 'objective', 'city', 'administrative_officer', 'administrative_officer_number', 'file'
        $validatedData = \Validator::make($request->all(),[
            'name'      => 'required|max:255',
            'email'     => 'required|email',
            'number'     =>  'required|numeric',
            'chairman'   => 'required',
            'founding'   => 'required',
            'license'   => 'required',
            'executive_director'   => 'required',
            'location'   => 'required',
            'objective'   => 'required',
            'city'   => 'required',
            'administrative_officer'   => 'required',
            'administrative_officer_number'   => 'required',
            'file'   => 'required|file|max:10000|mimes:pdf,docx,doc',
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
            $request = AssociationRequest::create(request(['name', 'email', 'number', 'chairman', 'founding', 'license', 'executive_director', 'location', 'objective', 'city', 'administrative_officer', 'administrative_officer_number', 'file']));

            return response()->json([
              'success'   =>  __('Association Create Account Request Sent Successfully'),
              'app_name'  =>  __('Ikraam')
            ]);
        }
    }

    // /**
    //  * @param AssociationRequest $request
    //  *
    //  * @throws \Exception
    //  * @return mixed
    //  */
    // public function destroy(AssociationRequest $request)
    // {
    //    $request->delete();
    //    return back()->withFlashSuccess(__('Volunteer Request Deleted Successfully'));
    // }
}
