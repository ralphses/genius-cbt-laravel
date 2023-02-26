<div class="intro-section" id="home-section">

    <div class="slide-1" style="background-image: url('{{ asset('assets/frontend/images/cbt.webp') }}');"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row align-items-center">
                        <div class="col-lg-5 ml-auto" data-aos="fade-up"
                             data-aos-delay="500">
                            <form action="{{ route("student.authenticate") }}" method="post" class="form-box">
                                
                                @csrf
                                <h3 class="h4 text-black mb-4">Student Sign In</h3>
                                <div class="form-group">
                                    <input type="text" name="matric" value="{{ old('matric') }}" class="form-control" placeholder="Matriculation number">
                                    
                                    @if($errors->any('matric'))
                                        <p style="color: red; font-size: medium">{{ $errors->first('matric') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-pill"
                                           value="Submit">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
