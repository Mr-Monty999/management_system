<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStockRequest extends FormRequest
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
            "type" => "required",
            "date" => "required|date",
            "sender" => "required",
            "receiver" => "required",
            "type" => "required"
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "الرجاء كتابة الإسم !",
            "type.required" => "الرجاء إختيار النوع !",
            "date.required" => "الرجاء تحديد التاريخ !",
            "sender.required" => "الرجاء كتابة إسم المرسل !",
            "receiver.required" => "الرجاء كتابة إسم المستلم !",
            "type.required" => "الرجاء إختيار نوع المخزون !"



        ];
    }
}
