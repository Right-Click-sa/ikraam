<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\FieldsRepository;
use App\Http\Requests\Backend\Volunteer\StoreFieldRequest;
use App\Models\VolunteerField;

class VolunteerFieldController extends Controller
{
   /**
    * @var FieldsRepository
    */
    protected $fieldsRepository;

   /**
    * Volunteer Fields Controller constructor.
    *
    * @param FieldsRepository $fieldsRepository
    */
    public function __construct(FieldsRepository $fieldsRepository)
    {
       $this->fieldsRepository = $fieldsRepository;
    }

    /**
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {
      return view('backend.fields.fields')->withFields($this->fieldsRepository
            ->orderBy('id')
            ->paginate(10));
    }

    /**
    *
    * @return mixed
    */
    public function create()
    {
      return view('backend.fields.create');
    }

   /**
    * @param StoreFieldRequest $request
    * @param VolunteerField              $field
    *
    * @throws \Throwable
    * @return mixed
    */
    public function store(StoreFieldRequest $request, VolunteerField $field)
    {
       $this->fieldsRepository->store();
       return redirect()->route('admin.volunteer.fields')->withFlashSuccess(__('Field Created Successfully'));
    }

     /**
    * @param VolunteerField $field
    *
    * @return mixed
    */
    public function edit(VolunteerField $field)
    {
        return view('backend.fields.edit')->withField($field);
    }

    /**
    * @param StoreFieldRequest $request
    * @param VolunteerField              $field
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(StoreFieldRequest $request, VolunteerField $field)
    {
        $this->fieldsRepository->update($field);
        return redirect()->route('admin.volunteer.fields')->withFlashSuccess(__('Field Updated Successfully'));
    }

    /**
    * @param VolunteerField $field
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroy(VolunteerField $field)
    {
        $this->fieldsRepository->destroy($field);
        return back()->withFlashSuccess(__('Field Deleted Successfully'));
    }

}
