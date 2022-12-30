<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
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
            "number" => "required|unique:vehicles,number"
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "الرجاء إدخال إسم الآلية !",
            "number.required" => "الرجاء إدخال رقم الآلية !",
            "number.unique" => "رقم الآلية موجود بالفعل !"
        ];
    }
}
