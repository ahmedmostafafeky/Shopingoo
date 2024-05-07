<?php

namespace App\Http\Requests\Auth;

use App\Enums\UserType;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => [
                "required",
                "email",
                "unique:buyers,email",
                "unique:sellers,email",
                "unique:admins,email"
            ],
            'password' => [
                "required",
                "max:255",
                "min:6"
            ],
            'name' => [
                "required"
            ],
            'username' => [
                "required",
                "unique:buyers,username",
                "unique:sellers,username",
                "unique:admins,username"
            ],
            'photo' => [
                "required",
                "image"
            ],
            'type' => [
                "required",
                Rule::enum(UserType::class)
            ],
        ];
    }


    public function messages(): array
{
    return [
        
    ];
}

}
