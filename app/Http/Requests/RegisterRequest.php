<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            // 'name'     => 'required|regex:/^[\pL\s\-]+$/u',
            'email'    => 'required|unique:users,email',
            'password' => ['required', 'regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/', 'same:confirm_password'],
            // 'password' => 'required|same:confirm_password|min:5',
        ];
    }

    public function messages()
    {
        return [
            // 'name.required'     => 'Nama tidak boleh kosong',
            // 'name.regex'        => 'Nama hanya boleh huruf dan spasi',
            'email.required'    => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'password.regex'    => 'Format Password tidak sesuai',
            'password.same'     => 'Konfirmasi password tidak sesuai',
        ];
    }
}


