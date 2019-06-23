<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'roles' => 'required',
            'status' => 'required',
            'password' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'نام و نام خانوادگی الزامی میباشد.',
            'email.required' => 'ایمیل الزامی میباشد.',
            'email.email' => 'ایمیل وارد شده صحیح نمیباشد.',
            'roles.required' => 'لطفا حداقل یک نقش برای کاربر انتخاب نمایید.',
            'status.required' => 'تعیین وضعیت کاربر الزامی میباشد.',
            'password.required' => 'رمز عبور الزامی میباشد.',
            'password.min' => 'حداقل کلمه عبور 8 کاراکتر میباشد.',
        ];
    }
}
