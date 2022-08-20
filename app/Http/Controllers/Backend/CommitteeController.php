<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\CommitteesRepository;
use App\Http\Requests\Backend\About\Committees\StoreCommitteeRequest;
use App\Http\Requests\Backend\About\Committees\UpdateCommitteeRequest;
use App\Models\Committee;
use App\Models\CommitteeTask;

class CommitteeController extends Controller
{
   /**
    * @var CommitteesRepository
    */
    protected $committeesRepository;

   /**
    * Committee Controller constructor.
    *
    * @param CommitteesRepository $committeesRepository
    */
    public function __construct(CommitteesRepository $committeesRepository)
    {
       $this->committeesRepository = $committeesRepository;
    }

    /**
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {
      return view('backend.committees.committees')->withCommittees($this->committeesRepository
            ->orderBy('id')
            ->paginate(10));
    }

    /**
    *
    * @return mixed
    */
    public function create()
    {
      return view('backend.committees.create');
    }

   /**
    * @param StoreCommitteeRequest $request
    * @param Committee             $committee
    *
    * @throws \Throwable
    * @return mixed
    */
    public function store(StoreCommitteeRequest $request, Committee $committee)
    {
       $this->committeesRepository->store();
       return redirect()->route('admin.about.committees')->withFlashSuccess(__('Committee Created Successfully'));
    }

     /**
    * @param Committee $committee
    *
    * @return mixed
    */
    public function edit(Committee $committee)
    {
        return view('backend.committees.edit')->withCommittee($committee);
    }

    /**
    * @param UpdateCommitteeRequest $request
    * @param Committee              $committee
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(UpdateCommitteeRequest $request, Committee $committee)
    {
        $this->committeesRepository->update($committee);
        return redirect()->route('admin.about.committees')->withFlashSuccess(__('Committee Updated Successfully'));
    }

    /**
    * @param Committee $committee
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroy(Committee $committee)
    {
        $this->committeesRepository->destroy($committee);
        return back()->withFlashSuccess(__('Committee Deleted Successfully'));
    }

    /**
    * @param CommitteeTask $about
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroyTask(CommitteeTask $committee)
    {
        $this->committeesRepository->destroy($committee);

        return response()->json([
          'success'   =>  __('Task Deleted Successfully'),
          'app_name'  =>  __('Ikraam')
        ]);
    }

}
