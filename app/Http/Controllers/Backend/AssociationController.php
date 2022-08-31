<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\AssociationsRepository;
use App\Http\Requests\Backend\Associations\StoreAssociationRequest;
use App\Http\Requests\Backend\Associations\UpdateAssociationRequest;
use App\Models\Association;
use App\Domains\Auth\Models\User;

class AssociationController extends Controller
{
   /**
    * @var AssociationsRepository
    */
    protected $associationsRepository;

   /**
    * AssociationController constructor.
    *
    * @param AssociationsRepository $associationsRepository
    */
    public function __construct(AssociationsRepository $associationsRepository)
    {
       $this->associationsRepository = $associationsRepository;
    }

    /**
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {
      return view('backend.associations.associations')->withAssociations($this->associationsRepository
            ->orderBy('id')
            ->paginate(10));
    }

    /**
    *
    * @return mixed
    */
    public function create()
    {
      $users = User::where('type','association')->get();
      return view('backend.associations.create')->withUsers($users);
    }

   /**
    * @param StoreAssociationRequest $request
    * @param Association              $association
    *
    * @throws \Throwable
    * @return mixed
    */
    public function store(StoreAssociationRequest $request, Association $association)
    {
       $this->associationsRepository->store();
       return redirect()->route('admin.associations')->withFlashSuccess(__('Association Created Successfully'));
    }

     /**
    * @param Association $association
    *
    * @return mixed
    */
    public function edit(Association $association)
    {
        $users = User::where('type','association')->get();
        return view('backend.associations.edit')
            ->withAssociation($association)
            ->withUsers($users);
    }

    /**
    * @param UpdateAssociationRequest $request
    * @param Association              $association
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(UpdateAssociationRequest $request, Association $association)
    {
        $this->associationsRepository->update($association);
        return redirect()->route('admin.associations')->withFlashSuccess(__('Association Updated Successfully'));
    }

    /**
    * @param Association $association
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroy(Association $association)
    {
        $this->associationsRepository->destroy($association);
        return back()->withFlashSuccess(__('Association Deleted Successfully'));
    }

    /**
    * @param UpdateAssociationRequest $request
    * @param Association              $association
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function updateProfile(UpdateAssociationRequest $request, Association $association)
    {
        $this->associationsRepository->update($association);
        return back()->withFlashSuccess(__('Association Updated Successfully'));
    }

}
