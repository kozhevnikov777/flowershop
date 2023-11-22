<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'preview_image' => 'required|file',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для запонения',
            'title.string' => 'Данные должы соответствовать строчному типу',
            'description.required' => 'Это поле необходимо для запонения',
            'description.string' => 'Данные должы соответствовать строчному типу',
            'preview_image.required' => 'Это поле необходимо для запонения',
            'preview_image.file' => 'Необходимо выбрать файл',
        ];
    }
}
