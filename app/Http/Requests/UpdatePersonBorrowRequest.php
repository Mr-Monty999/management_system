<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonBorrowRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            "money_amount" => "required|numeric",
            "date" => "required",
            "note" => "nullable"
        ];
    }
    public function messages()
    {
        return [
            "money_amount.required" => "الرجاء إدخال المبلغ !",
            "money_amount.numeric" => "الرجاء إدخال أرقام فقط في المبلغ !",
            "date.required" => "الرجاء إختيار التاريخ"
        ];
    }
}
