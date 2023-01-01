<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehicleMaintenanceRequest extends FormRequest
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
            "driver" => "required",
            "money_amount" => "required|numeric",
            "date" => "required|date",
            "note" => "nullable"
        ];
    }
    public function messages()
    {
        return [
            "responsible.required" => "الرجاء إدخال إسم المسؤول !",
            "driver.required" => "الرجاء إدخال إسم السائق !",
            "money_amount.numeric" => "الرجاء إدخال أرقام فقط في المبلغ !",
            "money_amount.required" => "الرجاء إدخال المبلغ !",
            "date.required" => "الرجاء إختيار التاريخ"
        ];
    }
}
