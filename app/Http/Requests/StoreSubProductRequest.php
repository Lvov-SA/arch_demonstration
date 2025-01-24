<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreSubProductRequest extends FormRequest
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
            'product_id' => $this->route('product'),
        ]);
    }

    public function messages(): array
    {
        return [
            'name' => 'Некорректное название продукта',
            'product_id' => 'не существующий продукт',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string',
            'product_id' => 'exists:products,id',
        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
