<?php

namespace App\Http\Requests\Backend\Jobs;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateJobRequest.
 */
class UpdateJobRequest extends FormRequest
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
            'job:en'    => ['required'],
            'job:ar'    => ['required'],
            'description:en'    => ['required'],
            'description:ar'    => ['required'],
        ];
    }
}
