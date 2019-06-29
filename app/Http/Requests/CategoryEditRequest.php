<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryEditRequest extends FormRequest
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
    protected function prepareForValidation()
    {
        if($this->input('slug')){
            $this->merge(['slug' => make_slug($this->input('slug'))]);
        }else{
            $this->merge(['slug' => make_slug($this->input('title'))]);
        }
    }
    public function rules()
    {
        return [
            'title' => 'required',
            'slug' => Rule::unique('categories')->ignore(request()->category),
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا برای دسته عنوانی تعریف کنید.',
            'slug.unique' => 'این نام مستعار قبلا انتخاب شده.',
            'meta_description.required' => 'لطفا برای دسته توضیحاتی تعریف کنید.',
            'meta_keywords.required' => 'لطفا برای دسته کلمه کلیدی تعریف کنید.',
        ];
    }
}
