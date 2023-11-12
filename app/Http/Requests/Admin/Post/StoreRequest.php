<?php

namespace App\Http\Requests\Admin\Post;

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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'first_category_id' => 'required|integer|exists:first_categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для запонения',
            'title.string' => 'Данные должы соответствовать строчному типу',
            'content.required' => 'Это поле необходимо для запонения',
            'content.string' => 'Данные должы соответствовать строчному типу',
            'preview_image.required' => 'Это поле необходимо для запонения',
            'preview_image.file' => 'Необходимо выбрать файл',
            'main_image.required' => 'Это поле необходимо для запонения',
            'main_image.file' => 'Необходимо выбрать файл',
            'category_id.required' => 'Это поле необходимо для запонения',
            'category_id.integer' => 'ID категории должен быть числом',
            'category_id.exists' => 'ID категории должен быть в базе данных',
            'first_category_id.required' => 'Это поле необходимо для запонения',
            'first_category_id.integer' => 'ID категории должен быть числом',
            'first_category_id.exists' => 'ID категории должен быть в базе данных',
            'tag_ids.array' => 'Необходимо отправить массив данных',
        ];
    }
}
