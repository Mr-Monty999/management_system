<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleFuelRequest extends FormRequest
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
            "fuel_quantity" => "required|numeric",
            "date" => "required|date",
            "note" => "nullable"
        ];
    }
    public function messages()
    {
        return [
            "responsible.required" => "الرجاء إدخال إسم المسؤول !",
            "driver.required" => "الرجاء إدخال إسم السائق !",
            "fuel_quantity.numeric" => "الرجاء إدخال أرقام فقط في كمية الوقود !",
            "fuel_quantity.required" => "الرجاء إدخال كمية الوقود !",
            "date.required" => "الرجاء إختيار التاريخ"
        ];
    }
}
