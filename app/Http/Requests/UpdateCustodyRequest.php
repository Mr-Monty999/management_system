<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustodyRequest extends FormRequest
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
            "money_amount" => "required|numeric",
            "sender" => "required",
            "receiver" => "required",
            "date" => "required|date",

        ];
    }
    public function messages()
    {
        return [
            "money_amount.required" => "الرجاء تحديد التاريخ !",
            "sender.required" => "الرجاء كتابة إسم المرسل !",
            "receiver.required" => "الرجاء كتابة إسم المستلم !",
            "date.required" => "الرجاء تحديد التاريخ !",




        ];
    }
}
