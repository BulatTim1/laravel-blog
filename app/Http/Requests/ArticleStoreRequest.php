<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'min:6|max:70|required',
            'theme' => 'min:3|max:40|required',
            'content' => 'min:20|max:5000|required',
            'slug' => 'required|unique:articles,slug',
            'photos'=> 'nullable',
            'photos.*' => 'nullable|image|mimes:jpg,jpeg,png'
        ];
    }
}
