<div class="container page__container">

    <h1 class="h2">My Quizzes</h1>

 

</div>

<div class="container page__container">

    <div class="row">

        @foreach ($quizzes as $quiz)
            
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column flex-sm-row">
                        <div class="flex"
                             style="min-width: 200px;">
                            <!-- <h5 class="card-title text-base m-0"><a href="fixed-instructor-course-edit.html"><strong>Learn Vue.js</strong></a></h5> -->
                            <h4 class="card-title mb-1"><a href="fixed-instructor-course-edit.html">{{ $quiz->title }}</a></h4>
                            <div class="d-flex align-items-end">
                                <div class="d-flex flex flex-column mr-3">
                                    <div class="d-flex align-items-center py-1">
                                        <p class="text-muted mr-2">Number of Questions: <strong>{{ $quiz->questions->count() }}</strong></p>
                                    </div>
                                    <p class="text-black mr-2">Due date: <strong>{{ $quiz->date }}</strong></p>

                                </div>
                                <div class="text-center">
                                    <a href="{{ route('quiz.start', ['id' => $quiz->id]) }}"
                                       class="btn btn-sm btn-white">TAKE {{ Str::upper($quiz->type) }} NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
              
            </div>
        </div>

        @endforeach


    </div>

    <!-- Pagination -->
    <ul class="pagination justify-content-center pagination-sm">
        <li class="page-item disabled">
            <a class="page-link"
               href="#"
               aria-label="Previous">
                                    <span aria-hidden="true"
                                          class="material-icons">chevron_left</span>
                <span>Prev</span>
            </a>
        </li>
        <li class="page-item active">
            <a class="page-link"
               href="#"
               aria-label="1">
                <span>1</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link"
               href="#"
               aria-label="1">
                <span>2</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link"
               href="#"
               aria-label="Next">
                <span>Next</span>
                <span aria-hidden="true"
                      class="material-icons">chevron_right</span>
            </a>
        </li>
    </ul>
</div>

