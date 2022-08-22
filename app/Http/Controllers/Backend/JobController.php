<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\JobsRepository;
use App\Http\Requests\Backend\Jobs\UpdateJobRequest;
use App\Models\Job;

class JobController extends Controller
{
   /**
    * @var JobsRepository
    */
    protected $jobsRepository;

   /**
    * Jobs Controller constructor.
    *
    * @param JobsRepository $jobsRepository
    */
    public function __construct(JobsRepository $jobsRepository)
    {
       $this->jobsRepository = $jobsRepository;
    }

    /**
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {
      return view('backend.jobs.jobs')->withJobs($this->jobsRepository
            ->orderBy('id')
            ->paginate(10));
    }

    /**
    *
    * @return mixed
    */
    public function create()
    {
      return view('backend.jobs.create');
    }

   /**
    * @param UpdateJobRequest $request
    * @param Job              $job
    *
    * @throws \Throwable
    * @return mixed
    */
    public function store(UpdateJobRequest $request, Job $job)
    {
       $this->jobsRepository->store();
       return redirect()->route('admin.jobs')->withFlashSuccess(__('Job Created Successfully'));
    }

     /**
    * @param Job $job
    *
    * @return mixed
    */
    public function edit(Job $job)
    {
        return view('backend.jobs.edit')->withJob($job);
    }

    /**
    * @param UpdateJobRequest $request
    * @param Job              $job
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(UpdateJobRequest $request, Job $job)
    {
        $this->jobsRepository->update($job);
        return redirect()->route('admin.jobs')->withFlashSuccess(__('Job Updated Successfully'));
    }

    /**
    * @param Job $job
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroy(Job $job)
    {
        $this->jobsRepository->destroy($job);
        return back()->withFlashSuccess(__('Job Deleted Successfully'));
    }

}
