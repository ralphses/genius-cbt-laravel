<!DOCTYPE html>
<html lang="en"
      dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student - Dashboard - Fixed layout</title>

    <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
    <meta name="robots"
          content="noindex">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&display=swap"
          rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css"
          href="{{ asset('assets/backend/vendor/perfect-scrollbar.css') }}"
          rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css"
          href="{{ asset('assets/backend/css/material-icons.css') }}"
          rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css"
          href="{{ asset('assets/backend/css/fontawesome.css') }}"
          rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css"
          href="{{ asset('assets/backend/vendor/spinkit.css') }}"
          rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css"
          href="{{ asset('assets/backend/css/app.css') }}"
          rel="stylesheet">

</head>


<body class=" fixed-layout">

<div class="preloader">
    <div class="sk-bounce">
        <div class="sk-bounce-dot"></div>
        <div class="sk-bounce-dot"></div>
    </div>

    <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
</div>

<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->

    <div id="header"
         class="mdk-header bg-dark js-mdk-header m-0"
         data-fixed
         data-effects="waterfall">
        <div class="mdk-header__content">

            <!-- Navbar -->
            <nav id="default-navbar"
                 class="navbar navbar-expand navbar-dark bg-primary m-0">
                <div class="container">
                    <!-- Toggle sidebar -->
                    <button class="navbar-toggler d-block"
                            data-toggle="sidebar"
                            type="button">

                        <span class="material-icons">menu</span>
                    </button>

                    <!-- Brand -->
                    <a href="fixed-student-dashboard.html"
                       class="navbar-brand">
                        <img src="{{ asset('assets/backend/images/logo/white.svg') }}"
                             class="mr-2"
                             alt="LearnPlus" />
                        <span class="d-none d-xs-md-block">LearnPlus</span>
                    </a>

                    <!-- Search -->

                    <!-- // END Search -->

                    <div class="flex"></div>

                    <!-- Menu -->
                    <ul class="nav navbar-nav flex-nowrap">

                        <!-- Notifications dropdown -->
                        <li class="nav-item dropdown
                                    dropdown-notifications
                                    dropdown-menu-sm-full">
                            <button class="nav-link btn-flush
                                        dropdown-toggle"
                                    type="button"
                                    data-toggle="dropdown"
                                    data-dropdown-disable-document-scroll
                                    data-caret="false">
                                <i class="material-icons">notifications</i>
                                <span class="badge badge-notifications
                                            badge-danger">2</span>
                            </button>
                            <div class="dropdown-menu
                                        dropdown-menu-right">
                                <div data-perfect-scrollbar
                                     class="position-relative">
                                    <div class="dropdown-header"><strong>Messages</strong></div>
                                    <div class="list-group
                                                list-group-flush mb-0">

                                        <a
                                            href="fixed-student-messages.html"
                                            class="list-group-item
                                                    list-group-item-action
                                                    border-left-3
                                                    border-left-danger">
                                                    <span class="d-flex
                                                        align-items-center
                                                        mb-1">
                                                        <small
                                                            class="text-muted">3
                                                            minutes ago</small>
                                                    </span>
                                            <span class="d-flex">
                                                        <span class="avatar
                                                            avatar-xs mr-2">
                                                            <span
                                                                class="avatar-title
                                                                rounded-circle
                                                                bg-light">
                                                                <i
                                                                    class="material-icons
                                                                    font-size-16pt
                                                                    text-danger">account_circle</i>
                                                            </span>
                                                        </span>
                                                        <span class="flex d-flex
                                                            flex-column">

                                                            <span
                                                                class="text-black-70">Your
                                                                profile
                                                                information has
                                                                not been synced
                                                                correctly.</span>
                                                        </span>
                                                    </span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- // END Notifications dropdown -->
                        <!-- User dropdown -->
                        <li class="nav-item dropdown ml-1 ml-md-3">
                            <a class="nav-link dropdown-toggle"
                               data-toggle="dropdown"
                               href="#"
                               role="button"><img
                                    src="{{ asset('assets/backend/images/people/50/guy-6.jpg') }}"
                                    alt="Avatar"
                                    class="rounded-circle"
                                    width="40"></a>
                            <div class="dropdown-menu
                                        dropdown-menu-right">
                                <a class="dropdown-item"
                                   href="fixed-student-account-edit.html">
                                    <i class="material-icons">edit</i>
                                    Edit Account
                                </a>
                                <a class="dropdown-item"
                                   href="fixed-student-profile.html">
                                    <i class="material-icons">person</i>
                                    Public Profile
                                </a>
                                <a class="dropdown-item"
                                   href="guest-login.html">
                                    <i class="material-icons">lock</i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        <!-- // END User dropdown -->

                    </ul>
                    <!-- // END Menu -->
                </div>
            </nav>
            <!-- // END Navbar -->

        </div>
    </div>

    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content d-flex flex-column">

        <div class="page__header">
            <div class="navbar bg-dark navbar-dark navbar-expand-sm
                        d-none2 d-md-flex2">
                <div class="container">

                    <div class="navbar-collapse collapse"
                         id="navbarsExample03">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown active">
                                <a href="{{ route('students.all') }}" class="nav-link">Students</a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="{{ route('course.all') }}" class="nav-link">Courses</a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="{{ route('staff.all') }}" class="nav-link">Staff</a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="{{ route('quiz.all') }}" class="nav-link">Quiz</a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown">Student</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active"
                                       href="fixed-student-dashboard.html">Dashboard</a>
                                    <a class="dropdown-item"
                                       href="fixed-student-browse-courses.html">Browse
                                        Courses</a>
                                    <a class="dropdown-item"
                                       href="fixed-student-view-course.html">View
                                        Course</a>
                                    <a class="dropdown-item"
                                       href="fixed-student-take-course.html">Take
                                        Course</a>
                                    <a class="dropdown-item"
                                       href="fixed-student-take-quiz.html">Take
                                        a Quiz</a>
                                    <a class="dropdown-item"
                                       href="fixed-student-quiz-results.html">Quiz
                                        Results</a>
                                    <a class="dropdown-item"
                                       href="fixed-student-my-courses.html">My
                                        Courses</a>
                                    <a class="dropdown-item"
                                       href="fixed-student-billing.html">Billing</a>
                                    <a class="dropdown-item"
                                       href="fixed-student-pay.html">Payment</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="page">

           @yield('content')

            <div class="container page__container">
                <div class="footer">
                    Copyright &copy; 2016 - <a
                        href="http://themeforest.net/item/learnplus-learning-management-application/15287372?ref=mosaicpro">Purchase
                        LearnPlus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- // END Header Layout Content -->

</div>
<!-- // END Header Layout -->

<div class="mdk-drawer js-mdk-drawer"
     id="default-drawer">
    <div class="mdk-drawer__content ">
        <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden"
             data-perfect-scrollbar>
            <div class="sidebar-p-y">
                <div class="sidebar-heading">APPLICATIONS</div>
                <ul class="sidebar-menu sm-active-button-bg">
                    <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button"
                           href="">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i>Students
                        </a>
                    </li>
                    <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button"
                           href="">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i>Courses
                        </a>
                    </li>
                    <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button"
                           href="">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i>Staff
                        </a>
                    </li>
                    <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button"
                           href="">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i>Quiz
                        </a>
                    </li>
                    <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button"
                           href="{{ route('school.settings') }}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i>Settings
                        </a>
                    </li>
                    <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button"
                           href="">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i>Logout
                        </a>
                    </li>
                </ul>
                <!-- Account menu -->

            </div>
        </div>
    </div>
</div>

<!-- App Settings FAB -->

<!-- jQuery -->
<script src="{{ asset('assets/backend/vendor/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/backend/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/bootstrap.min.js') }}"></script>

<!-- Perfect Scrollbar -->
<script src="{{ asset('assets/backend/vendor/perfect-scrollbar.min.js') }}"></script>

<!-- MDK -->
<script src="{{ asset('assets/backend/vendor/dom-factory.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/material-design-kit.js') }}"></script>

<!-- App JS -->
<script src="{{ asset('/assets/backend/js/app.js') }}"></script>

<!-- Highlight.js -->
<script src="{{ asset('assets/backend/js/hljs.js') }}"></script>

<!-- App Settings (safe to remove) -->
<script src="{{ asset('assets/backend/js/app-settings.js') }}"></script>

<!-- Global Settings -->
<script src="{{ asset('assets/backend/js/settings.js') }}"></script>

<!-- Moment.js -->
<script src="{{ asset('assets/backend/vendor/moment.min.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/moment-range.js') }}"></script>


<!-- Student Dashboard Page JS -->
<!-- <script src="assets/js/chartjs-rounded-bar.js"></script> -->
<script src="{{ asset('assets/backend/js/page.student-dashboard.js') }}"></script>



<div class="modal fade"
     id="editQuiz">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-white">Edit Question</h4>
                <button type="button"
                        class="close text-white"
                        data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="form-group row">
                        <label for="qtitle"
                               class="col-form-label form-label col-md-3">Title:</label>
                        <div class="col-md-9">
                            <input id="qtitle"
                                   type="text"
                                   class="form-control"
                                   value="Database Access">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type"
                               class="col-form-label form-label col-md-3">Type:</label>
                        <div class="col-md-4">
                            <select id="type"
                                    class="custom-control custom-select form-control">
                                <option value="1">Input</option>
                                <option value="2">Textarea</option>
                                <option value="3">Checkbox</option>
                                <option value="3">Radio</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label form-label col-md-3">Answers:</label>
                        <div class="col-md-9">
                            <a href="#"
                               class="btn btn-default"><i class="material-icons">add</i> Add Answer</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="touch-spin-2"
                               class="col-form-label form-label col-md-3">Question Score:</label>
                        <div class="col-md-4">
                            <input id="touch-spin-2"
                                   data-toggle="touch-spin"
                                   data-min="0"
                                   data-max="100"
                                   data-step="5"
                                   type="text"
                                   value="50"
                                   name="demo2"
                                   class="form-control" />
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-3">
                            <button type="submit"
                                    class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>
