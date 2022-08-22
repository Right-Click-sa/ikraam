<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MembershipRequest;

class MembershipRequestController extends Controller
{
    // /**
    //  *
    //  * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    //  */
    // public function index()
    // {
    //     $requests = MembershipRequest::paginate(10);
    //     return view('backend.volunteer.requests')->withRequests($requests);
    // }

    public function store(Request $request)
    {
        // 'gender_id', 'membership_id', 'identification_number', 'name', 'city', 'phone'
        $validatedData = \Validator::make($request->all(),[
            'gender_id'   => 'required',
            'membership_id'   => 'required',
            'name'      => 'required|max:255',
            'city'     => 'required',
            'phone'     =>  'required|numeric',
            'identification_number'   => 'required|numeric',
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
            $request = MembershipRequest::create(request(['gender_id', 'membership_id', 'identification_number', 'name', 'city', 'phone']));

            return response()->json([
              'success'   =>  __('Membership Request Sent Successfully'),
              'app_name'  =>  __('Ikraam')
            ]);
        }
    }

    // /**
    //  * @param MembershipRequest $request
    //  *
    //  * @throws \Exception
    //  * @return mixed
    //  */
    // public function destroy(MembershipRequest $request)
    // {
    //    $request->delete();
    //    return back()->withFlashSuccess(__('Volunteer Request Deleted Successfully'));
    // }
}
