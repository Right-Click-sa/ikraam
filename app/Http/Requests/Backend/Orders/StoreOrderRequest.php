<?php

namespace App\Http\Requests\Backend\Orders;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreOrderRequest.
 */
class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      if ($this->user()->isAdmin()) {
        return $this->user()->isAdmin();
      }
      elseif ($this->user()->isAssociation()) {
        return $this->user()->isAssociation();
      }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'order_type_id'     => ['required'],
            'description'       => ['required'],
            'attachment.*'        => 'file|max:5000|mimes:docx,pdf,doc',
        ];
    }
}
