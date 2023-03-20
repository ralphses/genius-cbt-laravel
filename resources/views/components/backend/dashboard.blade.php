<div class="container page__container">

    <h1 class="h2">Admin Dashboard</h1>


</div>

<div class="container page__container">

    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex flex-column flex-sm-row">
                       
                        <div class="flex"
                             style="min-width: 200px;">
                            <!-- <h5 class="card-title text-base m-0"><a href="fixed-instructor-course-edit.html"><strong>Learn Vue.js</strong></a></h5> -->
                            <h4 class="card-title mb-1"><a href="fixed-instructor-course-edit.html">Students</a></h4>
                            <p class="text-black-70">View or add students to this system.</p>
                            <div class="d-flex align-items-end">
                                <div class="text-center">
                                    <a href="{{ route('students.all') }}"
                                       class="btn btn-sm btn-white">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex flex-column flex-sm-row">
                       
                        <div class="flex"
                             style="min-width: 200px;">
                            <!-- <h5 class="card-title text-base m-0"><a href="fixed-instructor-course-edit.html"><strong>Learn Vue.js</strong></a></h5> -->
                            <h4 class="card-title mb-1"><a href="fixed-instructor-course-edit.html">Quizzes</a></h4>
                            <p class="text-black-70">View or add Quiz to this system.</p>
                            <div class="d-flex align-items-end">
                                <div class="text-center">
                                    <a href="{{ route('quiz.all') }}"
                                       class="btn btn-sm btn-white">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex flex-column flex-sm-row">
                       
                        <div class="flex"
                             style="min-width: 200px;">
                            <!-- <h5 class="card-title text-base m-0"><a href="fixed-instructor-course-edit.html"><strong>Learn Vue.js</strong></a></h5> -->
                            <h4 class="card-title mb-1"><a href="fixed-instructor-course-edit.html">Courses</a></h4>
                            <p class="text-black-70">View or add a Course to this system.</p>
                            <div class="d-flex align-items-end">
                                <div class="text-center">
                                    <a href="{{ route('course.all') }}"
                                       class="btn btn-sm btn-white">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex flex-column flex-sm-row">
                       
                        <div class="flex"
                             style="min-width: 200px;">
                            <!-- <h5 class="card-title text-base m-0"><a href="fixed-instructor-course-edit.html"><strong>Learn Vue.js</strong></a></h5> -->
                            <h4 class="card-title mb-1"><a href="fixed-instructor-course-edit.html">Staff</a></h4>
                            <p class="text-black-70">Manage Staff on this system.</p>
                            <div class="d-flex align-items-end">
                                <div class="text-center">
                                    <a href="{{ route('staff.all') }}"
                                       class="btn btn-sm btn-white">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

