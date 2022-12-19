<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonRequest extends FormRequest
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
            "name" => "required",
            "gender" => "required",
            "hiredate" => "nullable|date",
            "birthdate" => "nullable|date",
            "salary" => "nullable|numeric",
            "national_number" => "nullable|numeric|unique:people,national_number," . $this->route("person")
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "الرجاء كتابة الإسم !",
            "gender.required" => "الرجاء إختيار النوع !",
            // "hiredate.required" => "الرجاء تحديد تاريخ التعيين !",
            // "birthdate.required" => "الرجاء إختيار تاريخ الميلاد !",
            // "salary.required" => "الرجاء كتابة المرتب !",
            "salary.numeric" => "الرجاء كتابة أرقام فقط في المرتب",
            "national_number.unique" => "الرقم الوطني موجود بالفعل !",
            "national_number.numeric" => "الرجاء كتابة أرقام فقط في الرقم الوطني !",


        ];
    }
}
