<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AssociationRequest;

class AssociationRequestController extends Controller
{
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $requests = AssociationRequest::paginate(10);
        return view('backend.associations_requests.requests')->withRequests($requests);
    }

    public function store(Request $request)
    {
        // 'name', 'email', 'executive_director_number', 'chairman', 'founding', 'license', 'executive_director', 'website', 'activity', 'city', 'administrative_officer', 'administrative_officer_number', 'file'
        $validatedData = \Validator::make($request->all(),[
            'name'      => 'required|max:100',
            'license'   => 'required|numeric|max:5',
            'chairman'   => 'required|max:100',
            'founding'   => 'required|date',
            'executive_director'   => 'required|max:100',
            'executive_director_number'   =>  'required|digits_between:8,13',
            'website'   => 'max:100',
            'activity'   => 'required|max:100',
            'email'     => 'required|email|max:70',
            'city'   => 'required|max:50',
            'administrative_officer'   => 'required|max:100',
            'administrative_officer_number'   => 'required|digits_between:8,13',
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
            // store Association request
            $request = AssociationRequest::create(request(['name', 'license', 'chairman', 'founding', 'executive_director', 'executive_director_number', 'website', 'activity', 'email', 'city', 'administrative_officer', 'administrative_officer_number']));

            if($file = request('file'))
            {
                $request->file  = time().'.'.$file->getClientOriginalName();
                $file->move(public_path('/img/backend/associations/requests/'),$request->file );

                $request->save();
            }

            return response()->json([
              'success'   =>  __('Association Create Account Request Sent Successfully'),
              'app_name'  =>  __('Ikraam')
            ]);
        }
    }

    /**
     * @param AssociationRequest $request
     *
     * @throws \Exception
     * @return mixed
     */
    public function destroy(AssociationRequest $association)
    {
        $file_path = public_path('/img/backend/associations/requests/').$association->file;

        if (file_exists($file_path) ) {
          unlink($file_path);
        }

       $association->delete();

       return back()->withFlashSuccess(__('Association Request Deleted Successfully'));
    }
}
