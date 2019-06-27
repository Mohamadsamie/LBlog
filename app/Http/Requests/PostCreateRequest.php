<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
            'title' => 'required|min:10',
            'slug' => 'unique:posts',
            'description' => 'required',
            'featured_image' => 'required',
            'category' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا برای مطلب عنوانی تعریف کنید.',
            'title.min' => 'حداقل طول عنوان مطلب 10 کاراکتر میباشد.',
            'slug.unique' => 'این نام مستعار قبلا انتخاب شده لطفا نام دیگری وارد کنید.',
            'description.required' => 'لطفا برای مطلب توضیحات تعریف کنید.',
            'featured_image.required' => 'انتخاب تصویر شاخص برای مطلب الزامیست.',
            'category.required' => 'انتخاب دسته بندی برای مطلب الزامیست.',
            'status.required' => 'انتخاب وضعیت برای مطلب الزامیست.',

        ];
    }
}
