<?php

namespace App\Http\Requests\Backend\MainPage;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateMainPageRequest.
 */
class UpdateMainPageRequest extends FormRequest
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
            'video_link'  => ['required'],
            'programs_number'    => ['required', 'numeric'],
            'associations_number'    => ['required', 'numeric'],
            'initiatives_number'   => ['required', 'numeric'],
            'year1'   => ['required', 'numeric'],
            'year1_cases'  => ['required', 'numeric'],
            'year2'  => ['required', 'numeric'],
            'year2_cases'    => ['required', 'numeric'],
            'year3'    => ['required', 'numeric'],
            'year3_cases'  => ['required', 'numeric'],
            'tombs_number'  => ['required', 'numeric'],
            'washbasins_number'  => ['required', 'numeric'],
        ];
    }
}
