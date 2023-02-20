<div class="intro-section" id="home-section">

    <div class="slide-1" style="background-image: url('{{ asset('assets/frontend/images/hero_1.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center d-flex justify-content-center">
                <!-- <div class="col-12"> -->
                <!-- <div class="row align-items-center"> -->


                <div class="col-lg-7 m-0 " data-aos="fade-up" data-aos-delay="500">
                    <form action="{{ route('student.register.start.save') }}" method="post" class="form-box" enctype="multipart/form-data">

                        @csrf

                        <h3 class="h4 text-black mb-4">New Student!</h3>

                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Full Name">

                            @if($errors->any('name'))
                                <p style="color: red; font-size: small">{{$errors->first('name')}}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ old('matric') }}" name="matric" placeholder="Matric No.">
                            @if($errors->any('matric'))
                                <p style="color: red; font-size: small">{{$errors->first('matric')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" value="{{ old('email') }}" name="email" placeholder="Email Addresss">
                            @if($errors->any('email'))
                                <p style="color: red; font-size: small">{{$errors->first('email')}}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">

                            @if($errors->any('password'))
                                <p style="color: red; font-size: small">{{$errors->first('password')}}</p>
                            @endif

                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Re-type Password">

                            @if($errors->any('password_confirmation'))
                                <p style="color: red; font-size: small">{{$errors->first('password_confirmation')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                           <select class="form-control form-select" name="level">
                            <option selected value=>Select level ..</option>
                            @foreach (App\Models\utility\Utility::LEVELS as  $key => $level )
                                <option value="{{ $level }}">{{ $level }}</option>
                            @endforeach
                           </select>

                            @if($errors->any('level'))
                                <p style="color: red; font-size: small">{{$errors->first('level')}}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="form-label">Select Image</label>
                            <input type="file" class="form-control form-input" name="image">

                            @if($errors->any('image'))
                                <p style="color: red; font-size: small">{{$errors->first('image')}}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-pill"
                                   value="Get Started">
                        </div>
                    </form>
                </div>
            </div>
            <!-- </div> -->

        </div>
    </div>
</div>
