<?php

namespace App\Http\Requests;

use App\Models\utility\Utility;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewCourseRequest extends FormRequest
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
            'course-title' => ['required', Rule::unique('courses', 'title')],
            'course-code' => ['required', Rule::unique('courses', 'code')],
            'course-unit' => ['required', 'integer'],
            'course-semester' => ['required', Rule::in(array_keys(Utility::SEMESTER))],
            'course-department' => ['required', Rule::exists('departments', 'id')],
            'course-level' => ['required', Rule::in(array_keys(Utility::LEVELS))],
            'course-general' => ['required', 'integer', Rule::in([1, 0])]
        ];
    }
}
