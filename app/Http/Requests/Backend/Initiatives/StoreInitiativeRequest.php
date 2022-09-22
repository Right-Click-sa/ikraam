<?php

namespace App\Http\Requests\Backend\Initiatives;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreInitiativeRequest.
 */
class StoreInitiativeRequest extends FormRequest
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
            'title:en'    => ['required'],
            'title:ar'    => ['required'],
            'initiative:en'    => ['required'],
            'initiative:ar'    => ['required'],

            'output:en'    =>  ['array'],
            'output:en.*'  =>  ['required'],
            'output:ar'    =>  ['array'],
            'output:ar.*'  =>  ['required'],
        ];
    }
}
