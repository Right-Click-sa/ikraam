<?php

namespace App\Http\Requests\Backend\About;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateAboutRequest.
 */
class UpdateAboutRequest extends FormRequest
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
            'about_image'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'goals_image'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'strategy_image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about:en'    => ['required'],
            'about:ar'    => ['required'],
            'vision:en'   => ['required'],
            'vision:ar'   => ['required'],
            'message:en'  => ['required'],
            'message:ar'  => ['required'],
            'goals:en'    => ['required'],
            'goals:ar'    => ['required'],
            'strategy:en'  => ['required'],
            'strategy:ar'  => ['required'],

            'title:en'    =>  ['required'],
            'title:en.*'  =>  ['max:191'],
            'title:ar'    =>  ['required'],
            'title:ar.*'  =>  ['max:191'],
            'description:en'    =>  ['required'],
            // 'description:en.*'  =>  ['required'],
            'description:ar'    =>  ['required'],
            // 'description:ar.*'  =>  ['required'],
        ];
    }
}
