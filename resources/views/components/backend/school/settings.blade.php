<div class="container page__container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">School Settings</li>
    </ol>
    <h1 class="h2">School Settings</h1>

    <div class="card">
        <ul class="nav nav-tabs nav-tabs-card">
            <li class="nav-item">
                <a class="nav-link active"
                   href="#first"
                   data-toggle="tab">Basic Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="#second"
                   data-toggle="tab">Grading System</a>
            </li>
        </ul>
        <div class="tab-content card-body">
            <div class="tab-pane active"
                 id="first">
                <form action="#" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="avatar"
                               class="col-sm-3 col-form-label form-label">Logo</label>
                        <div class="col-sm-9">
                            <div class="media align-items-center">
                                <div class="media-left">
                                    <div class="icon-block rounded">
                                        <i class="material-icons text-muted-light md-36">photo</i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="custom-file"
                                         style="width: auto;">
                                        <input type="file"
                                               id="avatar"
                                               name="school-logo"
                                               class="custom-file-input">
                                        <label for="avatar"
                                               class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name"
                               class="col-sm-3 col-form-label form-label">School name</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-md-9">
                                    <input id="name"
                                           type="text"
                                           name="school-name"
                                           class="form-control"
                                           placeholder="First Name"
                                           value="Laza">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email"
                               class="col-sm-3 col-form-label form-label">Email</label>
                        <div class="col-sm-6 col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="material-icons md-18 text-muted">mail</i>
                                    </div>
                                </div>
                                <input type="text"
                                       id="email"
                                       class="form-control"
                                       placeholder="Email Address"
                                       value="contact@mosaicpro.biz"
                                       disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="website"
                               class="col-sm-3 col-form-label form-label">Website</label>
                        <div class="col-sm-6 col-md-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="material-icons md-18 text-muted">language</i>
                                    </div>
                                </div>
                                <input type="text"
                                       id="website"
                                       name="school-website"
                                       class="form-control"
                                       placeholder="www."
                                       value="learnplus.frontendmatter.com">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-3">
                            <div class="media align-items-center">
                                <div class="media-left">
                                    <a href="#"
                                       class="btn btn-success">Save Changes</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="tab-pane" id="second">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <form>
                                <div class="was-validated grade-view">
                                    <div class="form-row grade-number">
                                        <div class="col-12 col-md-12 mb-3">
                                            <label class="form-label" for="school-grading-type">First name</label>
                                            <input type="number" class="form-control" id="school-grading-type" name="school-grading-type" placeholder="Grading type" value="5" required="">
                                            <div class="invalid-feedback">Please provide a first name.</div>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>

                                    </div>

                                    <div class="form-row grade-system">
                                        <div class="col-12 col-md-4 mb-3">
                                            <label class="form-label" for="validationSample01">Grade</label>
                                            <input type="text" class="form-control" id="validationSample01" placeholder="First name" value="A" required="" readonly>
                                            <div class="invalid-feedback">Please provide Grade.</div>
                                        </div>
                                        <div class="col-12 col-md-4 mb-3">
                                            <label class="form-label" for="validationSample02">Score Range</label>
                                            <input type="text" class="form-control" id="validationSample02" placeholder="e.g 70 - 100" required="">
                                            <div class="invalid-feedback">Please provide a <strong>score range</strong>.</div>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        <div class="col-12 col-md-4 mb-3">
                                            <label class="form-label" for="validationSample02">Score remark</label>
                                            <input type="text" class="form-control" id="validationSample02" placeholder="e.g Distinction" required="">
                                            <div class="invalid-feedback">Please provide a remark.</div>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                    </div>

                                </div>

                                <button class="btn btn-primary" type="submit">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

