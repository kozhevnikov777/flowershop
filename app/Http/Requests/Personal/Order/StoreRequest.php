<?php

namespace App\Http\Requests\Personal\Order;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\Mime\Message;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'order_name' => 'required|string',
            'order_address' => 'required|string',
            'order_phone_number' => 'required|string',
            'order_comment' => 'required|string',
            'order_qty' => 'required|integer',
            'user_id' => 'required|integer|exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'order_name.required' => 'Это поле необходимо для запонения',
            'order_name.string' => 'Данные должы соответствовать строчному типу',
            'order_qty.required' => 'Это поле необходимо для запонения',
            'order_qty.integer' => 'Данные должы соответствовать цифровому типу',
            'order_address.required' => 'Это поле необходимо для запонения',
            'order_address.string' => 'Данные должы соответствовать строчному типу',
            'order_phone_number.required' => 'Это поле необходимо для запонения',
            'order_phone_number.string' => 'Данные должы соответствовать строчному типу',
            'order_comment.required' => 'Это поле необходимо для запонения',
            'order_comment.string' => 'Данные должы соответствовать строчному типу',
            'user_id.required' => 'Это поле необходимо для запонения',
            'user_id.integer' => 'ID категории должен быть числом',
            'user_id.exists' => 'ID категории должен быть в базе данных',
        ];
    }
}
