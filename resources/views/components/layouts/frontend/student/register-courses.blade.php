<div class="intro-section" id="home-section">

    <div class="slide-1" style="background-image: url('{{ asset('assets/frontend/images/hero_1.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center d-flex justify-content-center">
                <!-- <div class="col-12"> -->
                <!-- <div class="row align-items-center"> -->
                <div class="col-lg-7 m-0 justify-center" data-aos="fade-up" data-aos-delay="500">
                    <form action="{{ route('student.register.courses.save') }}" method="post" class="form-box">
                        <h4 class="h4 text-black mb-4">Select Courses</h4>

                        @csrf

                        <div class="row">
                            <div class="m-lg-4 d-flex justify-center">
                               @foreach ($courses as $course)
                                <div class="form-check mr-4">
                                        <input class="form-check-input" name="courses[]" type="checkbox" value="{{ $course->id }}" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{ $course->title }}
                                        </label>
                                    </div>
                               @endforeach
                                                               
                            </div>

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-pill" value="Complete Registration">
                        </div>
                    </form>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
</div>
