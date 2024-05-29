<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'title' => 'required|max:255|min:3',
            'description' => 'nullable',
            'image' => 'nullable|max:255',
            'type' => 'required|max:20',
            'cooking_time' => 'required|max:20',
            'weight' => 'required|max:20',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'type.required' => 'Il tipo è obbligatorio',
            'type.max' => 'Il tipo deve avere massimo :max caratteri',
            'cooking_time.required' => 'Il tempo di cottura è obbligatorio',
            'cooking_time.max' => 'Il tempo di cottura deve avere massimo :max caratteri',
            'weight.required' => 'Il peso è obbligatorio',
            'weight.max' => 'Il peso deve avere massimo :max caratteri'
        ];
    }
}
