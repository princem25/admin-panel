<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class FormvalidRequest extends FormRequest
{
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
              'name' => ['required'],
            'price' => ['required','numeric'],
            'description' => ['required'],
            'file' => ['required','image','mimes:jpg,jpeg,png','max:2048']
        ];
    }
}
