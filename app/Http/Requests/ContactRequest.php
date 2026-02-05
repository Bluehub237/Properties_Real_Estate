<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Mail;

class ContactRequest extends FormRequest
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
            'first_name' => 'bail|required|string|between:2,50',
            'last_name' => 'bail|required|string|between:2,50',
            'phone'=> 'bail|required|numeric',
            'email'=> 'bail|required|email',
            'service'=> 'bail|required|string|max:100',
            'message'=> 'bail|required|string|min:10'
        ];
    }
}
