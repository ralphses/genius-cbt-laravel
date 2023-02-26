<div class="container page__container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="fixed-instructor-dashboard.html">Home</a></li>
        <li class="breadcrumb-item"><a href="fixed-instructor-quizzes.html">Quiz Manager</a></li>
        <li class="breadcrumb-item active">Add Quiz</li>
    </ol>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Basic</h4>
        </div>
        <div class="card-body" {{ session('questionInfo') ? "disabled" : "" }}>
            <form id="form" action="{{ session('questionInfo') ?  route('quiz.courses', ['id' => session('questionInfo')['quiz']]) : route('quiz.new') }}" method="POST">

                @csrf

                <div class="form-group row">
                    <label for="quiz_title"
                           class="col-sm-3 col-form-label form-label">Quiz Title:</label>
                    <div class="col-sm-9">
                        <input id="quiz_title"
                               type="text"
                               name="quiz-title"
                               class="form-control"
                               placeholder="Title"
                               value="{{ old('quiz-title') }}"
                               {{ session('questionInfo') ? "disabled" : "" }}
                               >

                               @if($errors->any('quiz-title'))
                                    <p style="color: red; font-size: small">{{ $errors->first('quiz-title') }}</p>
                               @endif     
                    </div>
                   
                </div>
                <div class="form-group row">
                    <label for="course_title"
                           class="col-sm-3 col-form-label form-label">Type:</label>
                    <div class="col-sm-9 col-md-4">
                        <select id="course_title" class="custom-select form-control" name="quiz-type"    {{ session('questionInfo') ? "disabled" : "" }}>
                            @foreach(\App\Models\utility\Utility::QUIZ_TYPE as $type)
                                <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </select>

                        @if($errors->any('quiz-type'))
                            <p style="color: red; font-size: small">{{ $errors->first('quiz-type') }}</p>
                        @endif

                    </div>
                </div>
                <div class="form-group row">
                    <label for="course_title" class="col-sm-3 col-form-label form-label">Course:</label>
                    <div class="col-sm-9 col-md-4">
                        <select id="course_title"
                                class="custom-select form-control" name="quiz-course" {{ session('questionInfo') ? "disabled" : "" }}>
                            <option selected value>select course</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                        </select>
                        @if($errors->any('quiz-course'))
                            <p style="color: red; font-size: small">{{ $errors->first('quiz-course') }}</p>
                        @endif     
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="quiz_title"
                           class="col-sm-3 col-form-label form-label">Quiz Date:</label>
                    <div class="col-sm-9 col-md-4">
                        <input id="quiz_title"
                               type="date"
                               {{ session('questionInfo') ? "disabled" : "" }}
                               name="quiz-date"
                               class="form-control"
                               placeholder="Date"
                               value="{{ old('quiz-date') }}">

                        @if($errors->any('quiz-date'))
                            <p style="color: red; font-size: small">{{ $errors->first('quiz-date') }}</p>
                        @endif

                    </div>
                </div>

                <div class="form-group row">
                    <label for="quiz_title"
                           class="col-sm-3 col-form-label form-label">Number of answer options:</label>
                    <div class="col-sm-9 col-md-4">
                        <input id="quiz_title"
                               type="number"
                               {{ session('questionInfo') ? "disabled" : "" }}
                               name="quiz-answer-options"
                               class="form-control"
                               placeholder="Enter number of possible options for each question"
                               value="{{ old('quiz-answer-options') ?? 4 }}">

                        @if($errors->any('quiz-answer-options'))
                            <p style="color: red; font-size: small">{{ $errors->first('quiz-answer-options') }}</p>
                        @endif     

                    </div>
                </div>

                <div class="form-group row">
                    <label for="quiz_title"
                           class="col-sm-3 col-form-label form-label">Number of answerble question:</label>
                    <div class="col-sm-9 col-md-4">
                        <input id="quiz_title"
                               type="number"
                               {{ session('questionInfo') ? "disabled" : "" }}
                               name="quiz-answerable-questions"
                               class="form-control"
                               value="{{ old('quiz-answerable-questions') }}">

                        @if($errors->any('quiz-answerable-questions'))
                            <p style="color: red; font-size: small">{{ $errors->first('quiz-answerable-questions') }}</p>
                        @endif     

                    </div>
                </div>

                <div class="form-group row">
                    <label for="quiz_title"
                           class="col-sm-3 col-form-label form-label">Total number of question:</label>
                    <div class="col-sm-9 col-md-4">
                        <input id="quiz_title"
                               type="number"
                               {{ session('questionInfo') ? "disabled" : "" }}
                               name="quiz-total-questions"
                               class="form-control"
                               value="{{ old('quiz-total-questions') }}">

                        @if($errors->any('quiz-total-questions'))
                            <p style="color: red; font-size: small">{{ $errors->first('quiz-total-questions') }}</p>
                        @endif     

                    </div>
                </div>


                @if (!session('questionInfo'))
                    <div class="form-group row mb-0">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit"
                                    class="btn btn-success" id="saveQuestionBtn">Proceed</button>
                        </div>
                    </div>
                @endif


            </form>
        </div>
    </div>

   @if (session('questionInfo'))

   <div class="card">
    <div class="card-header">
        <h4 class="card-title">Questions</h4>
    </div>
    

    <div class="card-body" id="addQuestion">
        <form action="{{ route("quiz.courses", ['id' => session('questionInfo')['quiz']]) }}" method="POST">

            @csrf

            <div class="form-group row">
                <label for="course_title" class="col-sm-3 col-form-label form-label">Question No.:</label>
                <div class="col-sm-9 col-md-4">
                    <select id="question_no"class="custom-select form-control" name="question-number">
                        @for ($i = 1; $i <= session('questionInfo')['quiz']->no_questions; $i++)
                            <option {{ !session($i - 1) ? "selected" : "" }} value="{{ $i }}">{{ $i }}</option>
                            @if (!session($i - 1))
                                @break
                            @endif
                        @endfor
                    </select>
                    @if($errors->any('question-number'))
                        <p style="color: red; font-size: small">{{ $errors->first('question-number') }}</p>
                    @endif     
                </div>
            </div>

            <div class="form-group row">
                <label for="quiz_title"
                       class="col-sm-3 col-form-label form-label">Quiz Question:</label>
                <div class="col-sm-6">
                    <textarea
                           id="question-text"
                           rows="4"
                           name="currentQuestion"
                           class="form-control qu"
                           placeholder="Type quiz question here">{{ old('currentQuestion') }}</textarea>
                </div>
               
            </div>
            <hr>

            @foreach (session('questionInfo')['options'] as $option)
                <div class="form-group row">
                    <label for="quiz_title"
                        class="col-sm-3 col-form-label form-label">{{ "OPTION $option" }}</label>
                    <div class="col-sm-5">
                        <input
                            type="text"
                            id="{{ $option }}"
                            name="options[]"
                            class="form-control question-options qu"
                            placeholder="Type quiz answer here">
                    </div>
                </div>
            @endforeach
            
            <div class="form-group row">
                <label for="course_title" class="col-sm-3 col-form-label form-label">Correct Option:</label>
                <div class="col-sm-5 col-md-5">
                    <select id="correct-option"
                            class="custom-select form-control" name="correctOptions">
                        <option selected value>select correct option</option>

                        @foreach (session('questionInfo')['options'] as $option)
                            <option value="{{ $option }}">{{ $option }}</option>
                        @endforeach

                    </select>

                </div>
            </div>
                <div class="form-group row mb-0">
                    <div class="col-sm-9 offset-sm-3">
                        <button type="submit"
                                class="btn btn-success" id="saveQuestion">Add Question</button>
                    </div>
                </div>

        </form>


    </div>
    <div class="card-header">
        <form action="{{ route('quiz.save') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-secondary" id="addQuestionBtn">Save All<i class="material-icons">add</i></button>
            
        </form>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">

                <div class="table-responsive border-bottom"
                     data-toggle="lists"
                     data-lists-values='["js-lists-values-employee-name"]'>

                    <table class="table mb-0">
                        <thead>
                        <tr>

                            <th style="width: 10%;">#</th>
                            <th style="width: 20%;">Question</th>

                            @foreach (session('questionInfo')['options'] as $option)
                                <th style="width: 15%;">{{ "Option $option" }}</th>
                            @endforeach
                            
                            <th style="width: 15%;">Correct option</th>
                            <th style="width: 20%;">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="list"
                               id="search">
                        
                               @for ( $i = 0; $i < session('questionInfo')['quiz']->no_questions; $i++ )

                                   @if (session()->has($i))
                                       
                                    <tr>
                                        <td><span class="js-lists-values-employee-name"></span>{{ $i + 1 }}</td>
                                        <td><span class="js-lists-values-employee-name"></span>{{ session()->get($i)->question; }}</td>
                                       
                                        @foreach (session()->get($i)->options as $key => $option )
                                            <td>{{ $option }}</td>
                                        @endforeach

                                        <td><span class="js-lists-values-employee-name"></span>{{ session()->get($i)->correctOption; }}</td>
                                       
                                        <td>
                                            <div class="d-flex d-inline-flex">
                                                <a href="{{ route('question.cancel', ['no' => $i]) }}">
                                                    <button type="button" class="btn btn-link btn-danger" style="background-color: transparent; border: transparent" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-trash" style="color: red"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif

                                @endfor
                     
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
  
</div>
       
   @endif
    
</div>