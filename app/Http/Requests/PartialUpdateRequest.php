<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartialUpdateRequest extends FormRequest
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

        $user = $this ->route('user');
        return [
            'name' => ['nullable', 'string', 'max:255'],
            'lastname' => ['nullable', 'string', 'max:255'],
            'username' => ['nullable', 'string', 'max:255', 'unique:users,username'],
            'email' => ['nullable', 'email', 'unique:users,email'],
        ];
    }
}
