<div class="container page__container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="fixed-instructor-dashboard.html">Home</a></li>
        <li class="breadcrumb-item"><a href="fixed-instructor-quizzes.html">Quiz Manager</a></li>
        <li class="breadcrumb-item active">Edit Quiz</li>
    </ol>
    <h1 class="h2">Vue.js Deploy Quiz</h1>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Basic</h4>
        </div>
        <div class="card-body">
            <form action="#">
                <div class="form-group row">
                    <label for="quiz_title"
                           class="col-sm-3 col-form-label form-label">Quiz Title:</label>
                    <div class="col-sm-9">
                        <input id="quiz_title"
                               type="text"
                               name="quiz-title"
                               class="form-control"
                               placeholder="Title"
                               value="Vue.js Introduction">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="course_title"
                           class="col-sm-3 col-form-label form-label">Type:</label>
                    <div class="col-sm-9 col-md-4">
                        <select id="course_title" class="custom-select form-control" name="quiz-type">
                            @foreach(\App\Models\utility\Utility::QUIZ_TYPE as $type)
                                <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="course_title" class="col-sm-3 col-form-label form-label">Course:</label>
                    <div class="col-sm-9 col-md-4">
                        <select id="course_title"
                                class="custom-select form-control">
                            <option value="#">HTML</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="quiz_title"
                           class="col-sm-3 col-form-label form-label">Start Time:</label>
                    <div class="col-sm-9 col-md-4">
                        <input id="quiz_title"
                               type="time"
                               name="quiz-start-time"
                               class="form-control"
                               placeholder="Title"
                               value="Vue.js Introduction">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="quiz_title"
                           class="col-sm-3 col-form-label form-label">Stop Time:</label>
                    <div class="col-sm-9 col-md-4">
                        <input id="quiz_title"
                               type="time"
                               name="quiz-stop-time"
                               class="form-control"
                               placeholder="Title"
                               value="Vue.js Introduction">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="quiz_title"
                           class="col-sm-3 col-form-label form-label">Quiz Date:</label>
                    <div class="col-sm-9 col-md-4">
                        <input id="quiz_title"
                               type="date"
                               name="quiz-stop-time"
                               class="form-control"
                               placeholder="Title"
                               value="Vue.js Introduction">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="quiz_title"
                           class="col-sm-3 col-form-label form-label">Number of answer options:</label>
                    <div class="col-sm-9 col-md-4">
                        <input id="quiz_title"
                               type="number"
                               name="quiz-answer-options"
                               class="form-control"
                               placeholder="Enter number of possible options for each question"
                               value="4">
                    </div>
                </div>


                <div class="form-group row mb-0">
                    <div class="col-sm-9 offset-sm-3">
                        <button type="submit"
                                class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Questions</h4>
        </div>
        <div class="card-header">
            <a href="#"
               data-toggle="modal"
               data-target="#editQuiz"
               class="btn btn-outline-secondary">Add Question <i class="material-icons">add</i></a>
        </div>
        <div class="nestable"
             id="nestable">
            <ul class="list-group list-group-fit nestable-list-plain mb-0">
                <li class="list-group-item nestable-item">
                    <div class="media align-items-center">
                        <div class="media-left">
                            <a href="#"
                               class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                        </div>
                        <div class="media-body">
                            Installation
                        </div>
                        <div class="media-right text-right">
                            <div style="width:100px">
                                <a href="#"
                                   data-toggle="modal"
                                   data-target="#editQuiz"
                                   class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
