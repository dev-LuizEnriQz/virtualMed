<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'second_surname' => ['nullable', 'string', 'max:255'],
            'university' => ['required', 'string', 'max:255'],
//          'email' => ['nullable', 'email', 'max:255', 'unique:users,email,' . $this->user()->id],
            'cellphone' => ['nullable', 'string', 'max:15'],
            'city' => ['nullable', 'string', 'max:15'],
            'state' => ['nullable', 'string', 'max:15'],
            'country' => ['nullable', 'string', 'max:15'],
            'age' => ['nullable', 'integer', 'min:18', 'max:100'],
            'birthday' => ['nullable', 'date'],
            'gender' => ['nullable', 'string'],
//            'email' => [
//                'required',
//                'string',
//                'lowercase',
//                'email',
//                'max:255',
//                Rule::unique(User::class)->ignore($this->user()->id),
//        ],
        ];
    }
}
