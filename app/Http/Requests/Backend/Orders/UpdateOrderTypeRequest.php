<?php

namespace App\Http\Requests\Backend\Orders;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateOrderTypeRequest.
 */
class UpdateOrderTypeRequest extends FormRequest
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
            'type:en'    => ['required'],
            'type:ar'    => ['required'],
        ];
    }
}
