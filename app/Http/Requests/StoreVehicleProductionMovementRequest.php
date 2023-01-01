<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleProductionMovementRequest extends FormRequest
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
            "responsible" => "nullable",
            "driver" => "required",
            "quantity" => "nullable",
            "type" => "required",
            "date" => "required|date",
            "note" => "nullable"
        ];
    }
    public function messages()
    {
        return [
            // "responsible.required" => "الرجاء إدخال إسم المسؤول !",
            "driver.required" => "الرجاء إدخال إسم السائق !",
            "type.required" => "الرجاء إدخال نوع الإنتاج !",
            "date.required" => "الرجاء إختيار التاريخ"
        ];
    }
}
