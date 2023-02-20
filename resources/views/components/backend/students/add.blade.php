<div class="container page__container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Student</li>
        <li class="breadcrumb-item active">Add</li>
    </ol>

    <h1 class="h2">Student Management</h1>

    <div class="card card-body">
        <div class="row">
            <div class="col-lg-4 mr-5 ml-5">
                <h4 class="card-title">Add Student</h4>
                <p>Create a new record for student by saving a newly generated matric number <br><br><strong>NOTE:</strong> Faculty names must be unique</p>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <form class="flex" action="{{ route('student.store') }}" method="POST">

                    @csrf

                    <div class="form-group">
                        
                        <label class="form-label"
                               for="course-title">Matric:</label>

                        <input type="text"
                               class="form-control"
                               id="student-matric"
                               name="student-matric"
                               placeholder="Add matric number here ..">

                        @if($errors->any('student-matric'))
                            <p style="color: red; font-size: small">{{ $errors->first('student-matric') }}</p>
                        @endif

                    </div>
                    <button type="submit" class="btn btn-primary">Create New Record</button>
                </form>
            </div>
        </div>
    </div>
</div>