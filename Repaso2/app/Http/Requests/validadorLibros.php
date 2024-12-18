<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorLibros extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $currentYear = date('Y');

        return [
            'txtisbn' => 'required|min:13',
            'txttitulo' => 'required|string|max:150',
            'txtautor' => 'required|min:3',
            'txtpaginas' => 'required|integer|min:2',
            'txtanio' => "required|integer|digits:4|between:1000,$currentYear",
            'txteditorial' => 'required|',
            'txtemail' => 'required|email:rfc,dns',
        ];
    }
}
