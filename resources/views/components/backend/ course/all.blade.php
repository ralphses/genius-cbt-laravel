<div class="container page__container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="fixed-instructor-dashboard.html">Home</a></li>
        <li class="breadcrumb-item active">Courses</li>
    </ol>

    <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
        <div class="flex mb-2 mb-sm-0">
            <h1 class="h2">Manage Courses</h1>
        </div>
        <a href="{{ route('course.add') }}"
           class="btn btn-success">Add course</a>
    </div>

    <div class="card card-body border-left-3 border-left-primary navbar-shadow mb-4">


            <div class="d-flex flex-column flex-sm-row align-items-sm-center"
                 style="white-space: nowrap;">
                <small class="flex text-muted text-uppercase mr-3 mb-2 mb-sm-0">Displaying 4 out of 10 courses</small>


                <div class="w-auto ml-sm-auto table d-flex align-items-center mb-0">
                    <small class="text-muted text-uppercase mr-3 d-none d-sm-block">Sort by</small>
                    <a href="#"
                       class="sort desc small text-uppercase">Title</a>
                    <a href="#"
                       class="sort small text-uppercase ml-2">Code</a>
                    <a href="#"
                       class="sort small text-uppercase ml-2">Unit</a>
                    <a href="#"
                       class="sort small text-uppercase ml-2">Status</a>
                </div>
            </div>
    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex flex-column flex-sm-row">
                        <a href="fixed-instructor-course-edit.html"
                           class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                            <img src="{{ asset('assets/backend/images/vuejs.png') }}"
                                 alt="Card image cap"
                                 class="avatar-img rounded">
                        </a>
                        <div class="flex"
                             style="min-width: 200px;">
                            <!-- <h5 class="card-title text-base m-0"><a href="fixed-instructor-course-edit.html"><strong>Learn Vue.js</strong></a></h5> -->
                            <h4 class="card-title mb-1"><a href="fixed-instructor-course-edit.html">Learn Vue.js</a></h4>
                            <p class="text-black-70">Let’s start with a quick tour of Vue’s data binding features.</p>
                            <div class="d-flex align-items-end">
                                <div class="d-flex flex flex-column mr-3">
                                    <div class="d-flex align-items-center py-1 border-bottom">
                                        <small class="text-black-70 mr-2">&dollar;1,230/mo</small>
                                        <small class="text-black-50">34 SALES</small>
                                    </div>
                                    <div class="d-flex align-items-center py-1">
                                        <small class="text-muted mr-2">GULP</small>
                                        <small class="text-muted">INTERMEDIATE</small>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('course.update') }}"
                                       class="btn btn-sm btn-white">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card__options dropdown right-0 pr-2">
                    <a href="#"
                       class="dropdown-toggle text-muted"
                       data-caret="false"
                       data-toggle="dropdown">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item"
                           href="{{ route('course.update', ['id' => 1]) }}">Edit course</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger"
                           href="">Delete course</a>
                    </div>
                </div>
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
