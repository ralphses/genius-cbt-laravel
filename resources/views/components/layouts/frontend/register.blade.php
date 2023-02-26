<div class="intro-section" id="home-section">

    <div class="slide-1" style="background-image: url('{{ asset('assets/frontend/images/hero_1.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center d-flex justify-content-center">
                <!-- <div class="col-12"> -->
                <!-- <div class="row align-items-center"> -->


                <div class="col-lg-7 m-0 " data-aos="fade-up" data-aos-delay="500">
                    <form action="{{ route('register') }}" method="post" class="form-box">
                        @csrf
                        <h3 class="h4 text-black mb-4">Register Here!</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name">
                            @if($errors->any('name'))
                                <p style="color: red; font-size: small">{{ $errors->first('name') }}</p>
                            @endif     
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" value="{{ old('email') }}" name="email" placeholder="Email Addresss">
                            
                            @if($errors->any('email'))
                                <p style="color: red; font-size: small">{{ $errors->first('email') }}</p>
                            @endif     
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            @if($errors->any('password'))
                                <p style="color: red; font-size: small">{{ $errors->first('password') }}</p>
                            @endif     
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Re-type Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-pill"
                                   value="Sign up">
                        </div>
                    </form>
                </div>
            </div>
            <!-- </div> -->

        </div>
    </div>
</div>

<script>

    let newSchoolField = document.getElementById('new-school');
    let selectSchool = document.getElementById('select-school');

    selectSchool.addEventListener('change', () => {

        if(selectSchool.options[selectSchool.selectedIndex].value === "0") {
            newSchoolField.style.display = 'block';
            console.log(selectSchool)
        }
    });

</script>
