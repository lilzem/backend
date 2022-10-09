<?php

namespace App\Http\Requests\CostRecords;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'cost_category_id' => ['required', 'exists:cost_categories,id'],
            'user_id' => ['required', 'exists:users,id'],
            'total' => ['required', 'regex:/^\d*(.\d{1,2})?$/', 'min:0']
        ];
    }
}
