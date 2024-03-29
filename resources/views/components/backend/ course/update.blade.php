<div class="container page__container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Course</li>
        <li class="breadcrumb-item active">Add</li>
    </ol>

    <h1 class="h2">Courses</h1>

    <div class="card card-body">
        <div class="row">
            <div class="col-lg-4 mr-5 ml-5">
                <h4 class="card-title">Add Course</h4>
                <p>Add a new course as represented by a real course being taken by students in your school. <br><br><strong>NOTE:</strong> Course titles must be unique</p>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <form class="flex" action="{{ route('course.update', ['id' => $course->id]) }}" method="POST">

                    <div class="form-group">
                        <label class="form-label"
                               for="course-title">Title:</label>
                        <input type="text"
                               class="form-control"
                               value="{{ $course->title }}"
                               id="course-title"
                               name="course-title"
                               placeholder="Course title here ..">

                        @if($errors->any('course-title'))
                            <p style="color: red; font-size: small">{{ $errors->first('course-title') }}</p>
                        @endif
                    </div>

                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label class="form-label"
                               for="course-code">Code:</label>
                        <input type="text"
                               class="form-control"
                               value="{{ $course->code }}"
                               id="course-code"
                               name="course-code"
                               placeholder="Course code here ..">

                        @if($errors->any('course-code'))
                            <p style="color: red; font-size: small">{{ $errors->first('course-code') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-label"
                               for="course-unit">Credit Unit:</label>
                        <input type="number"
                               class="form-control"
                               id="course-unit"
                               value="{{ $course->unit }}"
                               name="course-unit"
                               placeholder="Course credit unit here ..">

                        @if($errors->any('course-unit'))
                            <p style="color: red; font-size: small">{{ $errors->first('course-unit') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-label"
                               for="course-semester">Semester:</label>
                        <select class="form-select custom-select" id="course-semester" name="course-semester">
                            <option selected value="{{ $course->semester }}">{{ App\Models\utility\Utility::SEMESTER[$course->semester] }}</option>
                            @foreach(\App\Models\utility\Utility::SEMESTER as $key => $semester)
                                @if ($key != $course->semester)
                                    <option value="{{ $key }}">{{ $semester }}</option>  
                                @endif
                            @endforeach
                        </select>

                        @if($errors->any('course-semester'))
                            <p style="color: red; font-size: small">{{ $errors->first('course-semester') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-label"
                               for="course-department">Department:</label>
                        <select class="form-select custom-select" id="course-department" name="course-department">
                            <option selected value="{{ $course->department->id }}">{{ $course->department->name }}</option>
                           @foreach ($departments as $department)
                                @if ($department->id != $course->department->id)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endif
                           @endforeach
                        </select>

                        @if($errors->any('course-department'))
                            <p style="color: red; font-size: small">{{ $errors->first('course-department') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-label"
                               for="course-level">Level:</label>
                        <select class="form-select custom-select" id="course-level" name="course-level">
                            <option selected value="{{ $course->level }}">{{ \App\Models\utility\Utility::LEVELS[$course->level] }}</option>

                            @foreach(\App\Models\utility\Utility::LEVELS as $key => $level)
                                @if ($key != $course->level)
                                    <option value="{{ $key }}">{{ $level }}</option>
                                @endif
                            @endforeach
                        </select>

                        @if($errors->any('course-level'))
                            <p style="color: red; font-size: small">{{ $errors->first('course-level') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="course-general">General:</label>

                        <div class="custom-controls-stacked">
                            <div class="custom-control custom-radio">
                                <input id="yes" value="{{ 1 }}" name="course-general" type="radio" class="custom-control-input">
                                <label for="yes" class="custom-control-label">Yes</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="No" name="course-general" type="radio" class="custom-control-input" checked>
                                <label for="No" class="custom-control-label">No</label>
                            </div>
                        </div>

                        @if($errors->any('course-general'))
                            <p style="color: red; font-size: small">{{ $errors->first('course-general') }}</p>
                        @endif
                    </div>

                    <button type="submit"
                            class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>



</div>
