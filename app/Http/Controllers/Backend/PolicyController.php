<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\PoliciesRepository;
// use App\Http\Requests\Backend\About\StorePolicyRequest;
use App\Http\Requests\Backend\About\UpdatePolicyRequest;
use App\Models\Policy;

class PolicyController extends Controller
{
   /**
    * @var PoliciesRepository
    */
    protected $policiesRepository;

   /**
    * Policy Controller constructor.
    *
    * @param PoliciesRepository $policiesRepository
    */
    public function __construct(PoliciesRepository $policiesRepository)
    {
       $this->policiesRepository = $policiesRepository;
    }

    /**
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {
      return view('backend.policies.policies')->withPolicies($this->policiesRepository
            ->orderBy('id')
            ->paginate(10));
    }

    /**
    *
    * @return mixed
    */
    public function create()
    {
      return view('backend.policies.create');
    }

   /**
    * @param UpdatePolicyRequest $request
    * @param Policy              $policy
    *
    * @throws \Throwable
    * @return mixed
    */
    public function store(UpdatePolicyRequest $request, Policy $policy)
    {
       $this->policiesRepository->store();
       return redirect()->route('admin.about.policies')->withFlashSuccess(__('Policy Created Successfully'));
    }

     /**
    * @param Policy $policy
    *
    * @return mixed
    */
    public function edit(Policy $policy)
    {
        return view('backend.policies.edit')->withPolicy($policy);
    }

    /**
    * @param UpdatePolicyRequest $request
    * @param Policy              $policy
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(UpdatePolicyRequest $request, Policy $policy)
    {
        $this->policiesRepository->update($policy);
        return redirect()->route('admin.about.policies')->withFlashSuccess(__('Policy Updated Successfully'));
    }

    /**
    * @param Policy $policy
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroy(Policy $policy)
    {
        $this->policiesRepository->destroy($policy);
        return back()->withFlashSuccess(__('Policy Deleted Successfully'));
    }

}
