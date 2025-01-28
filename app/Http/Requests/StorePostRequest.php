<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required | min:5 | max:255',
			'slug' => 'required | min:5 | max:255 | unique:posts',
			'category' => 'required | min:5 | max:255',
			'content' => 'required | min:5 | max:255'
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'El titulo es requerido.',
            'slug.required' => 'El slug es requerido.',
            'category.required' => 'La categoria es requerida',
            'content.required' => 'El contenido es requerido'
        ];
    }
}
