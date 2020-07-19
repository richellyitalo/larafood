<?php

namespace App\Http\Requests\Plan;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePlan extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $planUrl = $this->segment(3);

        return [
            'name' => "required|min:3|max:255|unique:plans,name,{$planUrl},url",
            'description' => 'nullable',
            'price' => 'required'
        ];
    }
}
