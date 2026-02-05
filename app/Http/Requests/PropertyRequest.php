<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'deposit' => 'required|numeric',
            'months' => 'required|in:3,6,12',
            'photos' => 'nullable|array',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10200',
            'video' => 'nullable|mimes:mp4,avi,mkv,mov|max:10200',
            'address' => 'required|string',
            'city' => 'required|string',
            'neighborhood' => 'required|string',
            'lot_size' => 'required|numeric',
            'rooms' => 'required|numeric',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'floors' => 'nullable|numeric',
            'amenities' => 'nullable|array',
        ];
    }
}
