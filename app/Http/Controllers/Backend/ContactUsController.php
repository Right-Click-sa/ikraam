<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
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
        // 'name', 'email', 'message'
        $validatedData = \Validator::make($request->all(),[
            'name'      => 'required|max:255',
            'email'     => 'required|email',
            'phone'     =>  'required|numeric',
            'message'   => 'required',
        ]);

        if ($validatedData->fails()){
            $errors = $validatedData->errors();
            return response()->json([
              'errors'    =>  $validatedData->errors()->first(),
              'app_name'  =>  __('Ikraam')
            ]);
        }
        else {
            // store contact us message
            $message = ContactUs::create(request(['name', 'email','phone', 'message']));

            return response()->json([
              'success'   =>  __('Message Sent Successfully'),
              'app_name'  =>  __('Ikraam')
            ]);
        }
    }

    /**
     * @param ContactUs $about
     *
     * @throws \Exception
     * @return mixed
     */
    public function destroy(ContactUs $message)
    {
       $message->delete();
       return back()->withFlashSuccess(__('Message Deleted Successfully'));
    }
}
