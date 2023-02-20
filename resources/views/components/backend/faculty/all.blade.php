<div class="container page__container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item">Staff</li>
        <li class="breadcrumb-item active">All</li>
    </ol>

    <div class="d-flex justify-content-between">
        <h1 class="h2">Faculty Management</h1>
        <a href="{{ route('faculty.add') }}" class="btn btn-success">Add Faculty</a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <h4 class="card-title">Faculties</h4>
                    <p>View all faculties registered in this school, you can also search for staff details using the search bar.</p>
                </div>
                <div class="col-lg-8">

                    <div class="table-responsive border-bottom"
                         data-toggle="lists"
                         data-lists-values='["js-lists-values-employee-name"]'>

                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th style="width: 10%;">#</th>
                                <th style="width: 40%;">Faculty Name</th>
                                <th style="width: 20%;">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="list" id="search">

                                @foreach ($faculties as $faculty)

                                    <tr>
                                        <td><small class="text-muted">{{ ++$loop->index }}</small></td>
                                        <td><span class="js-lists-values-employee-name">{{ $faculty->name }}</span></td>
                                        <td>
                                            <div class="d-flex d-inline-flex">
                
                                                <form action="{{ route('faculty.delete', ['id' => $faculty->id]) }}" method="POST">
        
                                                    @csrf
                                                    @method('DELETE')
        
                                                    <button type="submit" class="btn btn-link btn-danger" style="background-color: transparent; border: transparent" data-bs-toggle="tooltip" title="Delete"><i class="fa fa-trash" style="color: red"></i></button>
                                                </form>
    
                                            </div>
                                        </td>
                                    </tr>
                                    
                                @endforeach

                        
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
