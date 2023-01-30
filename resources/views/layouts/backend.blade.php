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
    <div class="sk-chase">
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
    </div>

    <!-- <div class="sk-bounce">
<div class="sk-bounce-dot"></div>
<div class="sk-bounce-dot"></div>
</div> -->

    <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
</div>


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
                           href="fixed-student-dashboard.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Student
                        </a>
                    </li>
                </ul>
                <!-- Account menu -->

            </div>
        </div>
    </div>
</div>

<!-- App Settings FAB -->
<div id="app-settings" style="display: none;">
    <app-settings layout-active="fixed"
                  :layout-location="{
      'fixed': 'fixed-student-dashboard.html',
      'default': 'student-dashboard.html'
    }"
                  sidebar-variant="bg-transparent border-0"></app-settings>
</div>
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
<script src="{{ 'assets/backend/js/app.js' }}"></script>

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

</body>

</html>
