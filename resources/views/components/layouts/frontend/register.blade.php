<div class="intro-section" id="home-section">

    <div class="slide-1" style="background-image: url('{{ asset('assets/frontend/images/hero_1.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center d-flex justify-content-center">
                <!-- <div class="col-12"> -->
                <!-- <div class="row align-items-center"> -->


                <div class="col-lg-7 m-0 " data-aos="fade-up" data-aos-delay="500">
                    <form action="" method="post" class="form-box">
                        <h3 class="h4 text-black mb-4">Register Here!</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Addresss">
                        </div>
                        <div class="mb-4">
                            <select class="form-control form-select" id="select-school">
                                <option selected>Select school</option>
                                <option value="0">New School</option>
                            </select>
                        </div>

                        <div class="form-group" id="new-school" style="display: none">
                            <input type="text" class="form-control" placeholder="New School">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" placeholder="Re-type Password">
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
