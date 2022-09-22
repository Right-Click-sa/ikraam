<?php

namespace App\Http\Requests\Backend\ContactUS;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateMessageRequest.
 */
class UpdateMessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name'      => 'required|max:60',
          'email'     => 'required|email|max:70',
          'phone'     =>  'required|numeric|digits_between:8,12',
          'message'   => 'required|max:500',
        ];
    }
}
