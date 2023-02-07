<?php

namespace App\Http\Requests\Dashboard\MyOrder;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMyOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'buyer_id' => [
                'nullable', 'integer'
            ],
            'freelancer_id' => [
                'nullable', 'integer'
            ],
            'service_id' => [
                'nullable', 'integer'
            ],
            'file' => [
                'nullable', 'mimes:zip', 'max:1024'
            ],
            'note' => [
                'required', 'string', 'max:10000'
            ],
            'expired' => [
                'nullable', 'date'
            ],
            'order_status_id' => [
                'nullable', 'integer'
            ]
        ];
    }
}
