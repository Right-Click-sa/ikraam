<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JobRequest;
use App\Models\Job;

class JobRequestController extends Controller
{
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $requests = JobRequest::paginate(10);
        return view('backend.jobs_requests.requests')->withRequests($requests);
    }

    public function store(Request $request, Job $job)
    {
        // 'gender_id', 'job_id', 'identification_number', 'name', 'age', 'phone', 'specialization', 'file'
        $validatedData = \Validator::make($request->all(),[
            'gender_id'   => 'required',
            'name'      => 'required|max:255',
            'phone'     =>  'required|numeric',
            'identification_number'   => 'required|numeric',
            'age'     => 'required|numeric',
            'specialization'  =>  'required',
            'file'    =>  'required|file|max:10000|mimes:pdf,docx,doc'
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
            $request = JobRequest::create(
              array_merge(request(['gender_id', 'job_id', 'identification_number', 'name', 'age', 'phone', 'specialization']), ['job_id'  =>  $job->id])
            );

            if($file = request('file'))
            {
                $request->file  = time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('/img/backend/jobs/requests/'),$request->file );

                $request->save();
            }

            return response()->json([
              'success'   =>  __('Job Request Sent Successfully'),
              'app_name'  =>  __('Ikraam')
            ]);
        }
    }

    /**
     * @param JobRequest $request
     *
     * @throws \Exception
     * @return mixed
     */
    public function destroy(JobRequest $job)
    {
        if($job->file)
        {
          $file_path = public_path('/img/backend/jobs/requests/').$job->file;
          unlink($file_path);
        }

        $job->delete();

        return back()->withFlashSuccess(__('Job Request Deleted Successfully'));
    }
}
