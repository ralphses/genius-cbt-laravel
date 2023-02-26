<div class="intro-section" id="home-section">

    <div class="slide-1" style="background-image: url('{{ asset('assets/frontend/images/hero_1.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center d-flex justify-content-center">
                <!-- <div class="col-12"> -->
                <!-- <div class="row align-items-center"> -->

                    @if (session('status') == 'verification-link-sent')


                    @endif


                <div class="col-lg-5 m-0 " data-aos="fade-up" data-aos-delay="500">
                    <form action="{{ route('verification.send') }}" method="post" class="form-box">

                        <h3 class="h4 text-black mb-4">A Verification link has been sent to your email</h3>


                        @csrf

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-pill" value="Resend Verification Email">
                        </div>
                       
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-primary" type="submit">Logout</button>
                    </form>
                    

                </div>
            </div>
            <!-- </div> -->

        </div>
    </div>
</div>
