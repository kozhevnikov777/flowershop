<?php

namespace App\Http\Requests\Personal\Like;

use Illuminate\Foundation\Http\FormRequest;

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
            'count' => 'required|integer',

            'user_id' => 'required|integer|exists:users,id',

            'post_id' => 'required|integer|exists:posts,id',
        ];
    }
}
