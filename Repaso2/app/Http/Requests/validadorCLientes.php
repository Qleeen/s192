<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorCLientes extends FormRequest
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
            'txtisbn' => 'required|min:13',
            'txttitulo' => 'required|string|max:150',
            'txtautor' => 'required|min:3',
            'txtpaginas' => 'required|integer|min:2',
            'txtanio' => 'required',
            'txteditorial' => 'required',
            'txtemail' => 'required|email:rfc,dns',
        ];
    }
}
