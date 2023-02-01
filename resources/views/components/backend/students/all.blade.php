<div class="container page__container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item">Students</li>
        <li class="breadcrumb-item active">All</li>
    </ol>

    <h1 class="h2">Students</h1>


    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <h4 class="card-title">Students</h4>
                    <p>View all students registered in this school, you can also search for student details using the search bar.</p>
                </div>
                <div class="col-lg-8">

                    <div class="table-responsive border-bottom"
                         data-toggle="lists"
                         data-lists-values='["js-lists-values-employee-name"]'>

                        <form action="" method="GET">
                            <div class="search-form search-form--light mb-3">
                                <input type="text"
                                       class="form-control search"
                                       name="keywords"
                                       placeholder="Search students">
                                <button class="btn"
                                        type="submit"
                                        role="button"><i class="material-icons">search</i></button>
                            </div>
                        </form>

                        <table class="table mb-0">
                            <thead>
                            <tr>


                                <th style="width: 20%;">Matric</th>
                                <th style="width: 40%;">Name</th>

                                <th style="width: 15%;">Department</th>
                                <th style="width: 10%;">Level</th>
                                <th style="width: 20%;">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="list"
                                   id="search">

                            <tr>

                                <td>

                                    <span class="js-lists-values-employee-name">Kalum Atherton</span>

                                </td>

                                <td><small class="text-muted">3 days ago</small></td>
                                <td>&dollar;12,402</td>
                                <td><a href="" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                <td>
                                    <div class="d-flex d-inline-flex">

                                        <button  style="background-color: transparent; border: transparent"><a href="{{ route('student.view', ['id' => 1]) }}" class="text-muted" data-bs-toggle="tooltip" title="View"><i class="fa fa-eye" ></i></a></button>

                                        <form action="" method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-link btn-danger" style="background-color: transparent; border: transparent" data-bs-toggle="tooltip" title="Delete"><i class="fa fa-trash" style="color: red"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- Pagination -->
    <ul class="pagination justify-content-center pagination-sm">
        <li class="page-item disabled">
            <a class="page-link"
               href="#"
               aria-label="Previous">
                                    <span aria-hidden="true"
                                          class="material-icons">chevron_left</span>
                <span>Prev</span>
            </a>
        </li>
        <li class="page-item active">
            <a class="page-link"
               href="#"
               aria-label="1">
                <span>1</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link"
               href="#"
               aria-label="1">
                <span>2</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link"
               href="#"
               aria-label="Next">
                <span>Next</span>
                <span aria-hidden="true"
                      class="material-icons">chevron_right</span>
            </a>
        </li>
    </ul>
</div>
