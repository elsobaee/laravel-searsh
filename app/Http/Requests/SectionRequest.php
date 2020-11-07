<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'section_name' => 'required|string|unique:sections|max:255',
            'description' => 'required'|'string',
        ];
    }
    public function messages()
    {
        return [
            'section_name.required' => 'هذا الحقل مطلوب',
            'description.required' => 'هذا الحقل مطلوب',
            'section_name.unique' => 'هذا لاسم مسجب مسبقا ',
            'description.string' => 'اسم اللغة لابد ان يكون احرف',
            'section_name.string' => 'هذا الحقل لابد ان يكون احرف ',
            'section_name.max' => 'اسم اللغة لابد الا يزيد عن 100 احرف ',
        ];
    }
}
