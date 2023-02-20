<div class="intro-section" id="home-section">

    <div class="slide-1" style="background-image: url('{{ asset('assets/frontend/images/hero_1.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center d-flex justify-content-center">
                <!-- <div class="col-12"> -->
                <!-- <div class="row align-items-center"> -->


                <div class="col-lg-7 m-0 " data-aos="fade-up" data-aos-delay="500">
                    <form action="{{ route('student.register.faculty.save') }}" method="post" class="form-box">
                        <h4 class="h4 text-black mb-4">Select Faculty</h4>

                        @csrf

                        <div class="mb-4">
                            <label for="select-school">Faculty</label>
                            <select class="form-control form-select" id="select-school" name="student-faculty">
                                <option selected>Select faculty</option>
                                @foreach ($faculties as $faculty)
                                     <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->any('student-faculty'))
                            <p style="color: red; font-size: small">{{$errors->first('student-faculty')}}</p>
                        @endif
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-pill"
                                   value="Continue">
                        </div>
                    </form>
                </div>
            </div>
            <!-- </div> -->

        </div>
    </div>
</div>
