<?php

namespace App\Http\Requests;

use App\Models\utility\Utility;
use Illuminate\Validation\Rules;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewStudentRequest extends FormRequest
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
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('students', 'email')],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'matric' => ['required', Rule::exists('students', 'matric')],
            'level' => ['required', Rule::in(array_values(Utility::LEVELS))]
        ];
    }
}
