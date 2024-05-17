<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|min:10|max:200',
            'price' => 'required|max:30',
            'thumb' => 'nullable|min:30',
            'series' => 'nullable|max:50',
            'type' => 'nullable|max:10',
            'description' => 'nullable|max:300'
        ];
    }
}