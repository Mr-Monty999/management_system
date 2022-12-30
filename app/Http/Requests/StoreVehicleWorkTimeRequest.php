<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleWorkTimeRequest extends FormRequest
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
            "is_present" => "required",
            "driver" => "required",
            "overtime" => "numeric|nullable",
            "hours_count" => "numeric|nullable",
            "date" => "required|date",
            "note" => "nullable"
        ];
    }
    public function messages()
    {
        return [
            "is_present.required" => "الرجاء أختيار الحضور !",
            "driver.required" => "الرجاء إدخال إسم السائق !",
            "overtime.numeric" => "الرجاء إدخال أرقام فقط في الزمن الإضافي !",
            "hours_count.numeric" => "الرجاء إدخال أرقام فقط في عدد الساعات !",
            "date.required" => "الرجاء إختيار التاريخ"
        ];
    }
}
