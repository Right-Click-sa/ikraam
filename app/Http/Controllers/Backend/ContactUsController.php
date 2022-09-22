<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\ContactUsRepository;
use App\Http\Requests\Backend\ContactUS\UpdateMessageRequest;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMessage;

class ContactUsController extends Controller
{
    /**
     * @var ContactUsRepository
     */
     protected $contactUsRepository;

    /**
     * Contact Us Controller constructor.
     *
     * @param ContactUsRepository $contactUsRepository
     */
     public function __construct(ContactUsRepository $contactUsRepository)
     {
        $this->contactUsRepository = $contactUsRepository;
     }

    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $messages = ContactUs::paginate(10);
        return view('backend.contact.messages')->withMessages($messages);
    }

    public function store(Request $request)
    {
        // 'name', 'email', 'phone', 'message'
        $validatedData = \Validator::make($request->all(),[
            'name'      => 'required|max:60',
            'email'     => 'required|email|max:70',
            'phone'     =>  'required|numeric|digits_between:8,10',
            'message'   => 'required|max:500',
        ]);

        if ($validatedData->fails()){
            $errors = $validatedData->errors();
            return response()->json([
              'errors'    =>  $validatedData->errors()->first(),
              'app_name'  =>  __('Ikraam')
            ]);
        }
        else {
          $request->merge([
              'phone' => (int)"966" . request('phone'),
          ]);

            // store contact us message
            $message = ContactUs::create(request(['name', 'email','phone', 'message']));

            // sending email for the support team
            Mail::to('‫‪info@ikraam.org.sa‬‬', 'Info')
            ->send(new ContactUsMessage($message));

            return response()->json([
              'success'   =>  __('Message Sent Successfully'),
              'app_name'  =>  __('Ikraam')
            ]);
        }
    }

    /**
     * @param ContactUs $message
     *
     * @return mixed
     */
     public function edit(ContactUs $message)
     {
         return view('backend.contact.edit')->withMessage($message);
     }

     /**
     * @param UpdateMessageRequest $request
     * @param ContactUs              $message
     *
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     * @return mixed
     */
     public function update(UpdateMessageRequest $request, ContactUs $message)
     {
         $this->contactUsRepository->update($message);
         return redirect()->route('admin.contact_us')->withFlashSuccess(__('Contact Us Message Updated Successfully'));
     }

    /**
     * @param ContactUs $about
     *
     * @throws \Exception
     * @return mixed
     */
    public function destroy(ContactUs $message)
    {
       $this->contactUsRepository->destroy($message);
       return back()->withFlashSuccess(__('Message Deleted Successfully'));
    }
}
