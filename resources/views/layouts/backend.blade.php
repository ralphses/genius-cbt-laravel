<!DOCTYPE html>
<html lang="en"
      dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GeniusCBT - Dashboard</title>

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


<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->

    <div style="background-color: white;" id="header"
         class="mdk-header bg-dark js-mdk-header m-0"
         data-fixed
         data-effects="waterfall">
        <div class="mdk-header__content">

            <!-- Navbar -->
            <nav id="default-navbar"
                 class="navbar navbar-expand navbar-dark bg-primary m-0" style="background-color: white;">
                <div class="container" style="background-color: white;">
                    <!-- Toggle sidebar -->
                    <button class="navbar-toggler d-block"
                            data-toggle="sidebar"
                            type="button">

                        <span class="material-icons">menu</span>
                    </button>

                    <!-- Brand -->
                    <a href="fixed-student-dashboard.html"
                       class="navbar-brand">
                        <span class="d-none d-xs-md-block"><img class="mr-2" src="{{ asset('assets/frontend/images/fulogo.png') }}" alt="fulafia-logo"></span>
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
                        </li>
                        <!-- // END Notifications dropdown -->
                        <!-- User dropdown -->
                        <li class="nav-item dropdown ml-1 ml-md-3">
                            <a class="nav-link dropdown-toggle"
                               data-toggle="dropdown"
                               href="#"
                               role="button">
                               @auth
                                    <img src="{{ asset( 'assets/backend/images/people/50/guy-1.jpg') }}"
                               @endauth
                                <img src="{{ asset(session()->get('student') ? session()->get('student')->image_path : "" )}}"

                                    alt="Avatar"
                                    class="rounded-circle"
                                    width="40"></a>
                            <div class="dropdown-menu
                                        dropdown-menu-right">
                                        <form action="{{ route('student.logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="material-icons">lock</i>
                                                Logout
                                            </button>
                                        </form>
                               
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
                        <ul class="nav navbar-na">
                            @auth
                            <li class="nav-item dropdown active text-black">
                                <a href="{{ route('students.all') }}" class="nav-link">Students</a>
                            </li>
                            @endauth
                           
                            <li class="nav-item dropdown active">
                                <a href="{{ route('course.all') }}" class="nav-link">Courses</a>
                            </li>

                            @auth
                            <li class="nav-item dropdown active">
                                <a href="{{ route('staff.all') }}" class="nav-link">Staff</a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="{{ route('faculty.all') }}" class="nav-link">Faculty</a>
                            </li>

                            <li class="nav-item dropdown active">
                                <a href="{{ route('department.all') }}" class="nav-link">Departments</a>
                            </li>
                            @endauth
                            <li class="nav-item dropdown active">
                                <a href="{{ route('quiz.all') }}" class="nav-link">My Examinations</a>
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
                        href="{{ route('welcome') }}">FULafia CBT</a>
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

<script src="{{ asset("assets/backend/vendor/jquery.countdown.min.js") }}"></script>
<script src="{{ asset("assets/backend/js/countdown.js") }}"></script>



<!-- Student Dashboard Page JS -->
<!-- <script src="assets/js/chartjs-rounded-bar.js"></script> -->
<script src="{{ asset('assets/backend/js/page.student-dashboard.js') }}"></script>

</body>



</html>
