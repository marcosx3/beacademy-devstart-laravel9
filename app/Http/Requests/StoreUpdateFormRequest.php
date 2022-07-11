<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateFormRequest extends FormRequest
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
        $id = $this->id ?? '';
        $rules = [
            'name' => 'required |string|max:58|min:2',
            'email' => [
                'required',
                'email',
                'unique:users,email,{$id},id',
            ],
            'image' => [
                'file',
            ],
            'password' => [
                'required',
                'min:2',
                'max:12'
            ]
        ];

        if ($this->method('PUT')) {
            $rules['password'] = [
                'nullable',
                'min:2',
                'max:12'
            ];
        }
        return   $rules;
    }
}
