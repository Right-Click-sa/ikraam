<?php

namespace App\Http\Requests\Backend\About;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateAboutEnterpriseMissionsRequest.
 */
class UpdateAboutEnterpriseMissionsRequest extends FormRequest
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
            'mission_image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'work_image'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'structure_image'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
