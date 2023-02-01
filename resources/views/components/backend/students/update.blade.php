<div class="container page__container p-0">
    <div class="row m-0">
        <div class="col-lg container-fluid page__container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="fixed-student-dashboard.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Update Account</li>
            </ol>
            <h1 class="h2">Basic Information</h1>
            <form action="" method="POST">

                @csrf
                @method('PATCH')

                <div class="card">
                    <div class="list-group list-group-fit">

                        <div class="list-group-item">
                            <div class="form-group m-0" role="group" aria-labelledby="label-firstname">
                                <div class="form-row">
                                    <label id="label-firstname"
                                           for="firstname"
                                           class="col-md-3 col-form-label form-label">Matric Number</label>
                                    <div class="col-md-9">
                                        <input id="firstname"
                                               type="text"
                                               value="matric"
                                               disabled
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="form-group m-0"
                                 role="group"
                                 aria-labelledby="label-lastname">
                                <div class="form-row">
                                    <label id="label-lastname"
                                           for="lastname"
                                           class="col-md-3 col-form-label form-label">Full Name</label>
                                    <div class="col-md-9">
                                        <input id="lastname"
                                               type="text"
                                               value="name"
                                               name="student-name"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="form-group m-0"
                                 role="group"
                                 aria-labelledby="label-email">
                                <div class="form-row">
                                    <label id="label-email"
                                           for="email"
                                           class="col-md-3 col-form-label form-label">Email address</label>
                                    <div class="col-md-9">
                                        <div role="group"
                                             class="input-group input-group-merge">
                                            <input id="email"
                                                   type="email"
                                                   placeholder="Your email address"
                                                   value="alexander.watson@gmail.com"
                                                   class="form-control form-control-prepended">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="material-icons">email</i>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Note that if you change your email, you will have to confirm it again.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div role="group" aria-labelledby="label-avatar" class="m-0 form-group">
                                <div class="form-row">
                                    <label id="label-avatar" for="avatar" class="col-md-3 col-form-label form-label">Your photo</label>
                                    <div class="col-md-9">
                                        <div class="media align-items-center">
                                            <div class="d-flex mr-3 align-self-center">
                                                                <span class="avatar avatar-lg">
                                                                    <span class="avatar-title rounded">
                                                                        <i class="material-icons">photo</i>
                                                                    </span>
                                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <div class="custom-file b-form-file">
                                                    <input type="file" id="avatar" aria-describedby="label-avatar-control" class="custom-file-input">
                                                    <label id="label-avatar-control" class="custom-file-label">Your avatar photo</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-address-book mr-2"></i>Update Basic Information
                        </button>
                    </div>
                </div>


            </form>

            <h4>Change Password</h4>

            @if(session('student-password-change'))
                <div class="alert alert-light border-1 border-left-3 border-left-primary d-flex">
                    <i class="material-icons text-success mr-3">check_circle</i>
                    <div class="text-body">An email with password reset instructions has been sent to your email address, if it exists on our system.</div>
                </div>
            @endif

           <form action="" method="POST">

               @csrf
               @method('PATCH')

               <div class="card">
                   <div class="list-group list-group-fit">
                       <div class="list-group-item">
                           <div class="form-group m-0"
                                role="group"
                                aria-labelledby="label-password">
                               <div class="form-row">
                                   <label id="label-password"
                                          for="password"
                                          class="col-sm-3 col-form-label form-label">New password:</label>
                                   <div class="col-sm-9">
                                       <div role="group"
                                            class="input-group input-group-merge form-control-prepended">
                                           <input id="password"
                                                  type="password"
                                                  name="password"
                                                  required="required"
                                                  placeholder="New password"
                                                  aria-required="true"
                                                  class="form-control form-control-prepended">
                                           <div class="input-group-prepend">
                                               <div class="input-group-text">
                                                   <span class="far fa-key"></span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="list-group-item">
                           <div class="form-group m-0"
                                role="group"
                                aria-labelledby="label-password2">
                               <div class="form-row">
                                   <label id="label-password2"
                                          for="password2"
                                          class="col-sm-3 col-form-label form-label">Confirm password:</label>
                                   <div class="col-sm-9">
                                       <div role="group"
                                            class="input-group input-group-merge form-control-prepended">
                                           <input id="password2"
                                                  type="password"
                                                  required="required"
                                                  name="password-confirmation"
                                                  placeholder="Confirm password"
                                                  aria-required="true"
                                                  class="form-control form-control-prepended">
                                           <div class="input-group-prepend">
                                               <div class="input-group-text">
                                                   <span class="far fa-key"></span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <button type="submit" class="btn btn-info">
                           <i class="fa fa-lock mr-2"></i>Update Password
                       </button>
                   </div>
               </div>


           </form>
        </div>
        <div id="page-nav"
             class="col-lg-auto page-nav">
            <div data-perfect-scrollbar>
                <div class="page-section pt-lg-32pt">

                    <div class="page-nav__content">
                       <a href="{{ route('dashboard') }}"> <button class="btn btn-success">Finished Account Update</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
