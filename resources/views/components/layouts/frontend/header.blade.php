<header class="site-navbar py-4 js-sticky-header site-navbar-target"
        role="banner">

    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <div class="site-logo mr-auto w-25"><a href="{{ '/' }}"><span class="text-white nav-link">FULafia CBT</span></a></div>
            <div class="mx-auto text-center">
                <nav class="site-navigation position-relative text-right"
                     role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mx-auto d-none
                  d-lg-block m-0 p-0">
                        <li><a href="/" class="nav-link">Home</a></li>
                        <li><a href="{{ route('student.register.start') }}" class="nav-link">Add Student</a></li>
                        <li><a href="{{ route('login') }}" class="nav-link"><strong>Admin Login</strong></a></li>
                    </ul>
                </nav>
            </div>

            <div class="ml-auto w-25">
                
                <a href="#" class="d-inline-block d-lg-none site-menu-toggle
                js-menu-toggle text-black float-right"><span class="icon-menu
                  h3"></span></a>
            </div>
        </div>
    </div>

</header>
