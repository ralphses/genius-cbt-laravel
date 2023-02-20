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
                <h4 class="card-title">Add Department</h4>
                <p>Add a new Department as represented by a real Department in your school. <br><br><strong>NOTE:</strong> Department names must be unique</p>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <form class="flex" action="{{ route('department.store') }}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label class="form-label"
                               for="course-title">Faculty:</label>
                        <select class="form-select form-control" name="faculty">
                            <option selected="">select faculty</option>
                            @foreach ($faculties as $faculty)
                                <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                            @endforeach
                        </select>

                        @if($errors->any('faculty'))
                            <p style="color: red; font-size: small">{{ $errors->first('faculty') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-label"
                               for="course-title">Department Name:</label>
                        <input type="text"
                               class="form-control"
                               id="faculty-name"
                               name="department-name"
                               placeholder="New Faculty here ..">

                        @if($errors->any('department-name'))
                            <p style="color: red; font-size: small">{{ $errors->first('department-name') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>



</div>
