<?php

namespace App\Http\Requests\Backend\Associations;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateAssociationRequest.
 */
class UpdateAssociationRequest extends FormRequest
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
            'image'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'file'        => 'file|max:10000|mimes:pdf,docx,doc',
            'email'       => 'required|email',
            'number'      =>  'required|numeric',
            'founding'    => 'required',
            'license'     => 'required',
            'administrative_officer_number'   => 'required',
            'name:en'       => 'required|max:255',
            'name:ar'       => 'required|max:255',
            'chairman:en'   => 'required',
            'chairman:ar'   => 'required',
            'executive_director:en'   => 'required',
            'executive_director:ar'   => 'required',
            'location:en'    => 'required',
            'location:ar'    => 'required',
            'objective:en'   => 'required',
            'objective:ar'   => 'required',
            'city:en'   => 'required',
            'city:ar'   => 'required',
            'administrative_officer:en'   => 'required',
            'administrative_officer:ar'   => 'required',
        ];
    }
}
