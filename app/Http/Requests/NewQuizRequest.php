<?php

namespace App\Http\Requests;

use App\Models\utility\Utility;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewQuizRequest extends FormRequest
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
            'quiz-title' => ['required'],
            'quiz-type' => ['required', Rule::in(Utility::QUIZ_TYPE)],
            'quiz-course' => ['required', Rule::exists('courses', 'id')],
            'quiz-date' => ['required'],
            'quiz-answer-options' => ['required', 'integer', Rule::in([2,3,4,5,6])],
            'quiz-total-questions' => ['required', 'integer'],
            'quiz-answerable-questions' => ['required', 'integer']
        ];
    }
}
