<?php

namespace App\Http\Requests;

use App\Services\CustodyService;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCustodySpendRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public $maxMoneyAmount;
    public function authorize()
    {
        $this->maxMoneyAmount = CustodyService::getCustodyLeftMoneyAmount($this->route("custody"));
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
            "money_amount" => "required|numeric|min:1|max:" . $this->maxMoneyAmount,
            "date" => "required|date",
        ];
    }
    public function messages()
    {
        return [
            "responsible.required" => "الرجاء كتابة إسم المسؤول !",
            "date.required" => "الرجاء تحديد التاريخ !",
            "money_amount.required" => "الرجاء إدخال المبلغ",
            "money_amount.max" => "لقد تجاوزت مبلغ العهدة !",
            "money_amount.min" => "1 يجب أن لا يكون المبلغ أقل من"


        ];
    }
}
