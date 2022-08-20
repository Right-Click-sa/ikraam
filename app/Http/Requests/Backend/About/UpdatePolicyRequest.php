<?php

namespace App\Http\Requests\Backend\About;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdatePolicyRequest.
 */
class UpdatePolicyRequest extends FormRequest
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
            'file'         => 'file|max:10000|mimes:pdf,docx,doc',
            'policy:en'    => ['required'],
            'policy:ar'    => ['required'],
        ];
    }
}
