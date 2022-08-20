<?php

namespace App\Http\Requests\Backend\About\Committees;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreCommitteeRequest.
 */
class StoreCommitteeRequest extends FormRequest
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
            'committee_name:en'  => ['required'],
            'committee_name:ar'  => ['required'],
            'chairman:en'  => ['required'],
            'chairman:ar'  => ['required'],
            'goal:en'  => ['required'],
            'goal:ar'  => ['required'],

            'task:en'    =>  ['array'],
            'task:en.*'  =>  ['required'],
            'task:ar'    =>  ['array'],
            'task:ar.*'  =>  ['required'],
        ];
    }
}
