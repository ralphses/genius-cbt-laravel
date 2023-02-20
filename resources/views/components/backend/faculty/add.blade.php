<div class="container page__container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Faculty</li>
        <li class="breadcrumb-item active">Add</li>
    </ol>

    <h1 class="h2">Faculty Management</h1>

    <div class="card card-body">
        <div class="row">
            <div class="col-lg-4 mr-5 ml-5">
                <h4 class="card-title">Add Faculty</h4>
                <p>Add a new faculty as represented by a real faculty in your school. <br><br><strong>NOTE:</strong> Faculty names must be unique</p>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <form class="flex" action="{{ route('faculty.store') }}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label class="form-label"
                               for="course-title">Title:</label>
                        <input type="text"
                               class="form-control"
                               id="faculty-name"
                               name="faculty-name"
                               placeholder="New Faculty here ..">

                        @if($errors->any('faculty-name'))
                            <p style="color: red; font-size: small">{{ $errors->first('faculty-name') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>



</div>
