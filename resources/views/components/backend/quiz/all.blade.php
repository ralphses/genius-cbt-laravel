<div class="container page__container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Quizzes</li>
    </ol>

    <div class="media align-items-center mb-headings">
        <div class="media-body">
            <h1 class="h2">Quizzes</h1>
        </div>
        <div class="media-right d-flex align-items-center">
            <a href="{{ route('quiz.new') }}"
               class="btn btn-success mr-2">New Quiz</a>
            <div class="dropdown">
                <a href="#"
                   data-toggle="dropdown"
                   class="btn btn-white"><i class="material-icons">tune</i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-item">
                        <form action="#">
                            <div class="form-group mb-0">
                                <label class="form-label"
                                       for="custom-select">Category</label><br>
                                <select id="custom-select"
                                        class="form-control custom-select"
                                        style="width: 200px;">
                                    <option selected>All categories</option>
                                    <option value="1">Vue.js</option>
                                    <option value="2">Node.js</option>
                                    <option value="3">GitHub</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-columns">

        <div class="card card-sm">
            <div class="card-body media">
                <div class="media-left">
                    <a href=""
                       class="avatar avatar-lg avatar-4by3">
                        <img src="{{ asset('assets/backend/images/vuejs.png') }}"
                             alt="Card image cap"
                             class="avatar-img rounded">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="card-title mb-0"><a href="fixed-instructor-review-quiz.html">Vue.js Deploy Quiz</a></h4>
                    <small class="text-muted">25 Completed</small>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('quiz.view', ['id' => 1]) }}"
                   class="btn btn-default btn-sm float-right"><i class="material-icons btn__icon--left">edit</i> Edit </a>
                <div class="clearfix"></div>
            </div>
        </div>

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
