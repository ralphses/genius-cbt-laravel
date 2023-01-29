<div class="intro-section" id="home-section">

    <div class="slide-1" style="background-image: url('{{ asset('assets/frontend/images/hero_1.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center d-flex justify-content-center">
                <!-- <div class="col-12"> -->
                <!-- <div class="row align-items-center"> -->


                <div class="col-lg-5 m-0 " data-aos="fade-up" data-aos-delay="500">
                    <form action="{{ route('login') }}" method="post" class="form-box">

                        @csrf

                        <h3 class="h4 text-black mb-4">Sign In</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email Addresss">
{{--                            <p style="color: red; font-size: medium">jjj</p>--}}
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-pill" value="Sign in">
                        </div>
                        <p style="color: black">Not yet registered? Click <a href="">Here</a></p>
                    </form>

                </div>
            </div>
            <!-- </div> -->

        </div>
    </div>
</div>
