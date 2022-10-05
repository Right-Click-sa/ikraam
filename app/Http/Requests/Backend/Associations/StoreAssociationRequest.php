<?php

namespace App\Http\Requests\Backend\Associations;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class StoreAssociationRequest.
 */
class StoreAssociationRequest extends FormRequest
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
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'file'        => 'file|max:10000|mimes:pdf,docx,doc,jpeg,png,jpg,gif,svg',
            'email'       => ['required', 'max:255', 'email', Rule::unique('associations')],
            'founding'    => 'required|date',
            'license'     => 'required|numeric',
            'name:en'       => 'required|max:255',
            'name:ar'       => 'required|max:255',
            'chairman:en'   => 'required',
            'chairman:ar'   => 'required',
            'activity:en'   => 'required',
            'activity:ar'   => 'required',
            'city:en'   => 'required',
            'city:ar'   => 'required',
            'executive_director:en'   => 'required',
            'executive_director:ar'   => 'required',
            'executive_director_number' => 'required|digits_between:8,13',
            'administrative_officer:en'   => 'required',
            'administrative_officer:ar'   => 'required',
            'administrative_officer_number'   => 'required|digits_between:8,13',
            'user_id'   => 'required',
        ];
    }
}
