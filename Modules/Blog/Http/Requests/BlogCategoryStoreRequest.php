<?php

namespace Modules\Blog\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryStoreRequest extends FormRequest
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
            'slug' =>  'required|string|max:200',
            'title' =>  'required|string|max:200',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
            'description' =>  'required|string|max:250',
            'seo_title' =>  'required|string|max:200',
            'seo_description' =>  'required|string|max:250',
        ];
    }
}
