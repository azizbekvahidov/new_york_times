<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=> 'required|string|unique:news|max:250',
            'content'=> 'required|string',
            'author'=> 'required|string',
            'tags' => 'required|array',
            'category_id' => 'required|integer|exists:categories,id',
            'image' => 'required|mimes:png,jpg,jpeg,gif'
        ];
    }
}
