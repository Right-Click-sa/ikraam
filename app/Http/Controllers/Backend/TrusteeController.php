<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\TrusteesRepository;
use App\Http\Requests\Backend\About\Trustees\StoreTrusteeRequest;
use App\Http\Requests\Backend\About\Trustees\UpdateTrusteeRequest;
use App\Models\Trustee;

class TrusteeController extends Controller
{
   /**
    * @var TrusteesRepository
    */
    protected $trusteesRepository;

   /**
    * Trustee Controller constructor.
    *
    * @param TrusteesRepository $trusteesRepository
    */
    public function __construct(TrusteesRepository $trusteesRepository)
    {
       $this->trusteesRepository = $trusteesRepository;
    }

    /**
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {
      return view('backend.trustees.trustees')->withTrustees($this->trusteesRepository
            ->orderBy('id')
            ->paginate(10));
    }

    /**
    *
    * @return mixed
    */
    public function create()
    {
      return view('backend.trustees.create');
    }

   /**
    * @param StoreTrusteeRequest $request
    * @param Trustee              $trustee
    *
    * @throws \Throwable
    * @return mixed
    */
    public function store(StoreTrusteeRequest $request, Trustee $trustee)
    {
       $this->trusteesRepository->store();
       return redirect()->route('admin.about.trustees')->withFlashSuccess(__('Trustee Created Successfully'));
    }

     /**
    * @param Trustee $trustee
    *
    * @return mixed
    */
    public function edit(Trustee $trustee)
    {
        return view('backend.trustees.edit')->withTrustee($trustee);
    }

    /**
    * @param UpdateTrusteeRequest $request
    * @param Trustee              $trustee
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(UpdateTrusteeRequest $request, Trustee $trustee)
    {
        $this->trusteesRepository->update($trustee);
        return redirect()->route('admin.about.trustees')->withFlashSuccess(__('Trustee Updated Successfully'));
    }

    /**
    * @param Trustee $trustee
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroy(Trustee $trustee)
    {
        $this->trusteesRepository->destroy($trustee);
        return back()->withFlashSuccess(__('Trustee Deleted Successfully'));
    }

}
