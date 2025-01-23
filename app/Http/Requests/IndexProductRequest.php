<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }


    protected function prepareForValidation()
    {

        $this->merge([
            'email' => $this->email,
            'passwrod' => $this->password,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'patronymic' => $this->patronymic ?? null,
            'work_phone' => $this->work_phone ?? null,
            'mobile_phone' => $this->mobile_phone ?? null,
            'old_password' => $this->old_password ?? null,
        ]);
    }
    public function messages(): array
    {
        return [
            'email' => 'не указан email',
            'passwrod' => 'Пароль должен содержать больше 5 символов',
            'lastname' => 'Отсутвует фамилия',
            'firstname' => 'Отсутсвует имя',
            'work_phone' => 'Укажите корректный номер телефона (11 цифр)',
            'mobile_phone' => 'Укажите корректный номер телефона (11 цифр)',
            'old_password' => 'Неверный текущий пароль',
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
            'email' => 'required',
            'old_password' => [
                function ($attribute, $value, $fail) {
                    if (!is_null($value) && !Hash::check($value, auth()->user()->getAuthPassword())) {
                        $fail('Пароль должен содержать больше 5 символов');
                    }
                },],
            'password' => [
                function ($attribute, $value, $fail) {
                    if (!is_null($this->old_password) && mb_strlen((string)$value) < 6) {
                        $fail('Пароль должен содержать больше 5 символов');
                    }
                },],
            'firstname' => 'required',
            'lastname' => 'required',
            'work_phone' => [
                'required',
            ],
            'mobile_phone' => [
                'required',
            ]
        ];
    }
}
