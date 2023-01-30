
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
                        <img src="assets/images/logo/white.svg"
                             class="mr-2"
                             alt="LearnPlus" />
                        <span class="d-none d-xs-md-block">LearnPlus</span>
                    </a>

                    <!-- Search -->
                    <form class="search-form d-none d-md-flex">
                        <input type="text"
                               class="form-control"
                               placeholder="Search">
                        <button class="btn"
                                type="button"><i class="material-icons font-size-24pt">search</i></button>
                    </form>
                    <!-- // END Search -->

                    <div class="flex"></div>

                    <!-- Menu -->
                    <ul class="nav navbar-nav flex-nowrap">

                        <li class="nav-item d-none d-md-flex">
                            <a href="fixed-student-cart.html"
                               class="nav-link">
                                <i class="material-icons">shopping_cart</i>
                            </a>
                        </li>

                        <!-- Notifications dropdown -->
                        <li class="nav-item dropdown dropdown-notifications dropdown-menu-sm-full">
                            <button class="nav-link btn-flush dropdown-toggle"
                                    type="button"
                                    data-toggle="dropdown"
                                    data-dropdown-disable-document-scroll
                                    data-caret="false">
                                <i class="material-icons">notifications</i>
                                <span class="badge badge-notifications badge-danger">2</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div data-perfect-scrollbar
                                     class="position-relative">
                                    <div class="dropdown-header"><strong>Messages</strong></div>

                                    <div class="list-group list-group-flush mb-0">

                                        <a href="fixed-student-messages.html"
                                           class="list-group-item list-group-item-action border-left-3 border-left-danger">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">3 minutes ago</small>

                                                    </span>
                                            <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <i class="material-icons font-size-16pt text-danger">account_circle</i>
                                                            </span>
                                                        </span>
                                                        <span class="flex d-flex flex-column">

                                                            <span class="text-black-70">Your profile information has not been synced correctly.</span>
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
                               role="button"><img src="assets/images/people/50/guy-6.jpg"
                                                  alt="Avatar"
                                                  class="rounded-circle"
                                                  width="40"></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item"
                                   href="fixed-student-account-edit.html">
                                    <i class="material-icons">edit</i> Edit Account
                                </a>
                                <a class="dropdown-item"
                                   href="fixed-student-profile.html">
                                    <i class="material-icons">person</i> Public Profile
                                </a>
                                <a class="dropdown-item"
                                   href="guest-login.html">
                                    <i class="material-icons">lock</i> Logout
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
            <div class="navbar bg-dark navbar-dark navbar-expand-sm d-none2 d-md-flex2">
                <div class="container">

                    <div class="navbar-collapse collapse"
                         id="navbarsExample03">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown active">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown">Student</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active"
                                       href="fixed-student-dashboard.html">Dashboard</a>
                                    <a class="dropdown-item"
                                       href="fixed-student-browse-courses.html">Browse Courses</a>
                                    <a class="dropdown-item"
                                       href="fixed-student-view-course.html">View Course</a>
                                    <a class="dropdown-item"
                                       href="fixed-student-take-course.html">Take Course</a>
                                    <a class="dropdown-item"
                                       href="fixed-student-take-quiz.html">Take a Quiz</a>
                                    <a class="dropdown-item"
                                       href="fixed-student-quiz-results.html">Quiz Results</a>
                                    <a class="dropdown-item"
                                       href="fixed-student-my-courses.html">My Courses</a>
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

        <div class="page ">

            <div class="container page__container">

                <h1 class="h2">Dashboard</h1>

                <div class="card border-left-3 border-left-primary card-2by1">
                    <div class="card-body">
                        <div class="media flex-wrap align-items-center">
                            <div class="media-left">
                                <i class="material-icons text-muted-light">credit_card</i>
                            </div>
                            <div class="media-body"
                                 style="min-width: 180px">
                                Your subscription ends on <strong>25 February 2015</strong>
                            </div>
                            <div class="media-right mt-2 mt-xs-plus-0">
                                <a class="btn btn-success"
                                   href="fixed-student-account-billing-upgrade.html">Upgrade</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container page__container">
                <div class="footer">
                    Copyright &copy; 2016 - <a href="http://themeforest.net/item/learnplus-learning-management-application/15287372?ref=mosaicpro">Purchase LearnPlus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- // END Header Layout Content -->

</div>
<!-- // END Header Layout -->
