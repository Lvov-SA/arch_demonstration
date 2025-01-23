<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ShowSubProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {

        $this->merge([
            'id' => $this->route('sub_product'),
            'product_id' => $this->route('product'),
        ]);
    }

    public function messages(): array
    {
        return [
            'product_id' => 'не существующий подпродукт',
            'id' => 'не существующий подпродукт',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        //dd($this->input());
        return [

            'product_id' => 'exists:products,id',
            'id' => 'exists:sub_products,id',
        ];
    }
}
