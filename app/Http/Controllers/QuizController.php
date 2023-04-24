<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewQuizRequest;
use App\Models\Course;
use App\Models\Question as ModelsQuestion;
use App\Models\Quiz;
use App\Models\utility\Question;
use App\Models\utility\Quiz as UtilityQuiz;
use App\Models\utility\Result;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        return view('backend.quiz.all', ['quizzes' => Quiz::all()]);
    }

    public function create()
    {
        return view('backend.quiz.add', ['courses' => Course::all()]);
    }

    public function store(NewQuizRequest $request)
    {

        $request->validated();

        $noOfOptions = $request->get('quiz-answer-options');
        $noOfAnswerableQuestions = $request->get('quiz-answerable-questions');
        $totalNoOfQuestions = $request->get('quiz-total-questions');


        $quiz = new Quiz([
            'course_id' => $request->get('quiz-course'),
            'title' => $request->get('quiz-title'),
            'type' => $request->get('quiz-type'),
            'date' => $request->get('quiz-date'),
            'duration' => $request->get('quiz_duration'),
            'no_options' => $noOfOptions,
            'no_questions' => $totalNoOfQuestions,
            'no_answerable_questions' => $noOfAnswerableQuestions
        ]);

        $options = [];

        for ($i = 65; $i < 65 + $noOfOptions; $i++) {
            $options[] = chr($i);
        }

        $questionInfo = ['quiz' => $quiz, 'options' => $options];

        session()->put('questionInfo', $questionInfo);

        return redirect()->back()->withInput();
    }

    public function courses(Request $request)
    {

        $options = [];
        $currentOption = 64;

        foreach ($request->get('options') as $option) {
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

    public function removeQuestion(Request $request)
    {
        session()->forget($request->no);
        return back()->withInput();
    }

    public function saveCurrentQuiz()
    {

        $questionInfo = session()->get('questionInfo');

        $currentQuiz = $questionInfo['quiz'];
        $options = $questionInfo['options'];

        //save quiz
        $quiz = Quiz::create($currentQuiz->getAttributes());

        //save questions for this quiz
        for ($i = 0; $quiz->no_questions; $i++) {

            if (session()->has($i)) {

                $currentQue = session()->get($i);

                ModelsQuestion::create([
                    'question' => $currentQue->question,
                    'options' => implode('|', array_values($currentQue->options)),
                    'correct_option' => $currentQue->correctOption,
                    'quiz_id' => $quiz->id
                ]);
            } else break;
        }

        session()->flush();

        return redirect(route('quiz.all'));
    }

    public function startQuiz(Request $request)
    {

        $quizId = $request->id;

        try {

            $quiz = Quiz::find($quizId);

            $questions = $this->prepareQuestions($quiz);

            $thisQuiz = $this->prepareQuiz($quiz);

            session()->put('quiz', $thisQuiz);
            session()->put('questions', $questions);

            return view('backend.students.start-quiz', ['quiz' => $thisQuiz, 'questions' => $questions]);
        } catch (\Throwable $th) {
            return redirect(route('student.logout'));
        }
    }

    public function prepareQuestions(Quiz $quiz)
    {

        return $quiz->questions->map(function ($question) use ($quiz) {

            $que = new Question();

            $que->id = $question->id;
            $que->question = $question->question;
            $que->options = $this->prepareOptions($question);
            $que->correctOption = $question->correct_option;

            return $que;
        })->shuffle()->all();
    }

    public function prepareQuiz(Quiz $quiz)
    {

        $qu = new UtilityQuiz();

        $qu->courseTitle = Course::find($quiz->course_id)->title;
        $qu->title = $quiz->title;
        $qu->date = $quiz->date;
        $qu->type = $quiz->type;
        $qu->noOptions = $quiz->no_options;
        $qu->noQuestions = $quiz->no_answerable_questions;
        $qu->duration = $quiz->duration;
        $qu->id = $quiz->id;

        return $qu;
    }

    public function prepareOptions(ModelsQuestion $question)
    {

        $allOptions = [];

        $options = explode('|', $question->options);
        $start = 65;

        for ($i = 0; $i < count($options); $i++) {
            $allOptions[chr($start + $i)] = $options[$i];
        }

        return $allOptions;
    }

    public function submit(Request $request)
    {

        $answers = $request->all();

        $answeredQuestions = [];

        $realQuestions = session()->get('questions');

        foreach ($realQuestions as $que) {

            $an = $answers[$que->id] ?? false;

            if ($an) {
                $que->choosedAnswer = $answers[$que->id];
            }
            $que->correct = $que->choosedAnswer == $que->correctOption;
        }

        //filter correct questions
        $correctQuestions = collect($realQuestions)->filter(function ($va) {
            return $va->correct;
        });
        $incorrectQuestions = collect($realQuestions)->filter(function ($va) {
            return !$va->correct;
        });
        $unansweredQuestions = collect($realQuestions)->filter(function ($va) {
            return $va->choosedAnswer == "0";
        });

        $result = new Result();

        $result->questions = collect($realQuestions);
        $result->incorrect = $incorrectQuestions->count();
        $result->correct = $correctQuestions->count();
        $result->unAnswered = $unansweredQuestions->count();

        return view('backend.students.result', ['result' => $result]);
    }
}
