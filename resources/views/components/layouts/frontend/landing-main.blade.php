<div class="intro-section" id="home-section">

    <div class="slide-1" style="background-image: url('{{ asset('assets/frontend/images/cbt.webp') }}');"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row align-items-center">
                        <div class="col-lg-5 ml-auto" data-aos="fade-up"
                             data-aos-delay="500">
                            <form action="" method="post" class="form-box">
                                <h3 class="h4 text-black mb-4">Sign In</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Matriculation number/Staff Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
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
