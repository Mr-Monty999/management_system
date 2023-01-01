<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustodySpendRequest extends FormRequest
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
            "responsible" => "required",
            "type" => "required",
            "money_amount" => "required|numeric",
            "date" => "required|date",
        ];
    }
    public function messages()
    {
        return [
            "responsible.required" => "الرجاء كتابة إسم المسؤول !",
            "date.required" => "الرجاء تحديد التاريخ !",
            "type.required" => "الرجاء إختيار نوع المنصرف !",
            "money_amount.required" => "الرجاء إدخال المبلغ",

        ];
    }
}
