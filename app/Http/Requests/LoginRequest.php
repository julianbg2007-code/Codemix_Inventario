<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    //  Determina si el usuario está autorizado para hacer esta petición.
    public function authorize(): bool
    {
        return true; // Cambia esto a true para permitir la petición
    }

    /**
     * Reglas de validación que se aplican a la petición.
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'Ingresa tu correo.',
            'password.required' => 'Ingresa tu contraseña',
            'email.email' => 'Formato de correo incorrecto',
            'password.string' => 'Formato de contraseña invalido',
        ];
    }
}