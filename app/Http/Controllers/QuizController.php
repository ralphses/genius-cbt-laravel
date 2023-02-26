<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewQuizRequest;
use App\Models\Course;
use App\Models\Question as ModelsQuestion;
use App\Models\Quiz;
use App\Models\utility\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index() {
        return view('backend.quiz.all', ['quizzes' => Quiz::all()]);
    }

    public function create() {
        // dd(session()->all());
        return view('backend.quiz.add', ['courses' => Course::all()]);
    }

    public function store(NewQuizRequest $request) {

        $request->validated();

        $noOfOptions = $request->get('quiz-answer-options');
        $noOfAnswerableQuestions = $request->get('quiz-answerable-questions');
        $totalNoOfQuestions = $request->get('quiz-total-questions');


        $quiz = new Quiz([
            'course_id' => $request->get('quiz-course'),
            'title' => $request->get('quiz-title'),
            'type' => $request->get('quiz-type'),
            'date' => $request->get('quiz-date'),
            'no_options' => $noOfOptions,
            'no_questions' => $totalNoOfQuestions,
            'no_answerable_questions' => $noOfAnswerableQuestions
        ]);

        $options = [];

        for($i = 65; $i < 65+$noOfOptions; $i++) {
            $options[] = chr($i);
        }

        $questionInfo = ['quiz' => $quiz, 'options' => $options];

        session()->put('questionInfo', $questionInfo);
        
        return redirect()->back()->withInput();

    }

    public function courses(Request $request) {

        $options = [];
        $currentOption = 64;

        foreach($request->get('options') as $option) {
            $options[chr(++$currentOption)] = $option;
        }

        $question = new Question();

        $questionNo = $request->get('question-number');

        $question->question = $request->get('currentQuestion');
        $question->correctOption = $request->get('correctOptions');
        $question->options = $options;
        $question->questionNo = $questionNo;

        session()->put($questionNo, $question);

        return redirect()->back();

    }

    public function removeQuestion(Request $request) {
        session()->forget($request->no);
        return back()->withInput();
    }

    public function saveCurrentQuiz() {

        $questionInfo = session()->get('questionInfo');
        
        $currentQuiz = $questionInfo['quiz'];
        $options = $questionInfo['options'];

        //save quiz
        $quiz = Quiz::create($currentQuiz->getAttributes());

        // dd($quiz);

        //save questions for this quiz

        for($i = 0; $quiz->no_questions; $i++) {

            if(session()->has($i)) {
                $currentQue = session()->get($i);

                ModelsQuestion::create([
                    'question' => $currentQue->question,
                    'options' => implode('|', array_values($currentQue->options)),
                    'correct_option' => $currentQue->correctOption,
                    'quiz_id' => $quiz->id
                ]);
            }
            else break;
        }

        session()->flush();

        return redirect(route('quiz.all'));

    }
}
