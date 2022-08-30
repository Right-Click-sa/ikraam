<?php

namespace App\Http\Requests\Backend\News;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreArticleRequest.
 */
class StoreArticleRequest extends FormRequest
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
            'content:en'  => ['required'],
            'content:ar'  => ['required'],
        ];
    }
}
