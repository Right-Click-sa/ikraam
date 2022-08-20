<?php

namespace App\Http\Requests\Backend\About\Trustees;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreTrusteeRequest.
 */
class StoreTrusteeRequest extends FormRequest
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
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'title:en'  => ['required'],
            'title:ar'  => ['required'],
            'name:en'  => ['required'],
            'name:ar'  => ['required'],
        ];
    }
}
