<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\InitiativesRepository;
use App\Http\Requests\Backend\Initiatives\StoreInitiativeRequest;
use App\Models\Initiative;
use App\Models\InitiativeOutput;

class InitiativeController extends Controller
{
   /**
    * @var InitiativesRepository
    */
    protected $initiativesRepository;

   /**
    * Initiatives Controller constructor.
    *
    * @param InitiativesRepository $initiativesRepository
    */
    public function __construct(InitiativesRepository $initiativesRepository)
    {
       $this->initiativesRepository = $initiativesRepository;
    }

    /**
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {
      return view('backend.initiatives.initiatives')->withInitiatives($this->initiativesRepository
            ->orderBy('id')
            ->paginate(10));
    }

    /**
    *
    * @return mixed
    */
    public function create()
    {
      return view('backend.initiatives.create');
    }

   /**
    * @param StoreInitiativeRequest $request
    * @param Initiative             $initiative
    *
    * @throws \Throwable
    * @return mixed
    */
    public function store(StoreInitiativeRequest $request, Initiative $initiative)
    {
       $this->initiativesRepository->store();
       return redirect()->route('admin.initiatives')->withFlashSuccess(__('Initiative Created Successfully'));
    }

     /**
    * @param Initiative $initiative
    *
    * @return mixed
    */
    public function edit(Initiative $initiative)
    {
        return view('backend.initiatives.edit')->withInitiative($initiative);
    }

    /**
    * @param StoreInitiativeRequest $request
    * @param Initiative              $initiative
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(StoreInitiativeRequest $request, Initiative $initiative)
    {
        $this->initiativesRepository->update($initiative);
        return redirect()->route('admin.initiatives')->withFlashSuccess(__('Initiative Updated Successfully'));
    }

    /**
    * @param Initiative $initiative
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroy(Initiative $initiative)
    {
        $this->initiativesRepository->destroy($initiative);
        return back()->withFlashSuccess(__('Initiative Deleted Successfully'));
    }

    /**
    * @param InitiativeOutput $initiative
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroyOutput(InitiativeOutput $initiative)
    {
        $this->initiativesRepository->destroy($initiative);

        return response()->json([
          'success'   =>  __('Output Deleted Successfully'),
          'app_name'  =>  __('Ikraam')
        ]);
    }
}
