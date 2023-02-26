<div class="container page__container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="fixed-instructor-dashboard.html">Home</a></li>
        <li class="breadcrumb-item active">Courses</li>
    </ol>

    <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
        <div class="flex mb-2 mb-sm-0">
            <h1 class="h2">{{ Auth::check() ? "Manage Courses" : "My Courses" }}</h1>
        </div>
        @auth
            <a href="{{ route('course.add') }}" class="btn btn-success">Add course</a>
        @endauth
        
    </div>
    <div class="row">

        <div class="d-flex flex-wrap-reverse">

            @foreach ($courses as $course )
                
                <div class="card mr-3">
                    <div class="card-body">

                        <div class="d-flex flex-column flex-sm-row">
                           
                            <div class="flex"
                                style="min-width: 200px;">
                                <!-- <h5 class="card-title text-base m-0"><a href="fixed-instructor-course-edit.html"><strong>Learn Vue.js</strong></a></h5> -->
                                <h4 class="card-title mb-1"><a href="fixed-instructor-course-edit.html">{{  $course->title }}</a></h4>
                                <div class="d-flex align-items-end">
                                    <div class="d-flex flex flex-column mr-3">
                                        <div class="d-flex align-items-center py-1 border-bottom">
                                            <p class="text-black-70 mr-2">{{ $course->code }}</p>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('course.update', ['id' => $course->id]) }}"
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
                            <form action="{{ route('course.delete', ['id' => $course->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="dropdown-item text-danger" value="Delete Course">
                            </form>
                        </div>
                    </div>
                </div>

            @endforeach

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
