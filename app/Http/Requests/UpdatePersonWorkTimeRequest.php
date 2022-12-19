<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonWorkTimeRequest extends FormRequest
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
            "date" => "required",
            "note" => "nullable"
        ];
    }
    public function messages()
    {
        return [
            "is_present.required" => "الرجاء أختيار الحضور !",
            "date.required" => "الرجاء إختيار التاريخ"
        ];
    }
}
