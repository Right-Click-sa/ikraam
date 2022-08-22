<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\MembershipsRepository;
use App\Http\Requests\Backend\Memberships\UpdateMembershipRequest;
use App\Models\MembershipType;

class MembershipTypeController extends Controller
{
   /**
    * @var MembershipsRepository
    */
    protected $membershipsRepository;

   /**
    * Memberships Controller constructor.
    *
    * @param MembershipsRepository $membershipsRepository
    */
    public function __construct(MembershipsRepository $membershipsRepository)
    {
       $this->membershipsRepository = $membershipsRepository;
    }

    /**
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {
      return view('backend.memberships.memberships')->withMemberships($this->membershipsRepository
            ->orderBy('id')
            ->paginate(10));
    }

    /**
    *
    * @return mixed
    */
    public function create()
    {
      return view('backend.memberships.create');
    }

   /**
    * @param UpdateMembershipRequest $request
    * @param MembershipType              $membership
    *
    * @throws \Throwable
    * @return mixed
    */
    public function store(UpdateMembershipRequest $request, MembershipType $membership)
    {
       $this->membershipsRepository->store();
       return redirect()->route('admin.memberships')->withFlashSuccess(__('Membership Created Successfully'));
    }

     /**
    * @param MembershipType $membership
    *
    * @return mixed
    */
    public function edit(MembershipType $membership)
    {
        return view('backend.memberships.edit')->withMembership($membership);
    }

    /**
    * @param UpdateMembershipRequest $request
    * @param MembershipType              $membership
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(UpdateMembershipRequest $request, MembershipType $membership)
    {
        $this->membershipsRepository->update($membership);
        return redirect()->route('admin.memberships')->withFlashSuccess(__('Membership Updated Successfully'));
    }

    /**
    * @param MembershipType $membership
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroy(MembershipType $membership)
    {
        $this->membershipsRepository->destroy($membership);
        return back()->withFlashSuccess(__('Membership Deleted Successfully'));
    }

}
