

     <div class="container page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Student</li>
            <li class="breadcrumb-item active">Add</li>
        </ol>
    
        <h1 class="h2">Quiz Results</h1>
    
        <div class="card card-body">
            <div class="row">
                <div class="col-lg-4 mr-5 ml-5">
                    <h4 class="card-title">Result Summary</h4>
                    <p>Answered Questions: {{ $result->questions->count() - $result->unAnswered }}</p>
                    <p>Unanswered Questions: {{ $result->unAnswered }}</p>
                    <p class="is-valid" style="color: green">Correct Answers: {{ $result->correct }}</p>
                    <p class="is-invalid" style="color: red">Incorrect Answers: {{ $result->incorrect }}</p>
                    <p>Total Questions: {{ $result->questions->count() }}</p>

                    <h3>Score: {{ $result->correct }}/{{ $result->questions->count() }}</h3>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <form onsubmit="return false">
                        
                                 @foreach ($result->questions as $question)
                     
                                 <div class="question q{{ ++$loop->index }}">
                                       
                                     <div class="card-header">
                                         <div class="media align-items-center">
                                             <div class="media-left">
                                                 <h4 class="mb-0"><strong>#{{ $loop->index }}</strong></h4>
                                             </div>
                                             <div class="media-body">
                                                 <h4 class="card-title">
                                                     {{ $question->question }}
                                                 </h4>
                                             </div>
                                         </div>
                                     </div>
                         
                                     <div class="card-body">
                         
                                         @foreach ($question->options as $key => $option)
                         
                                         <div class="form-group">
                                             <div class="custom-control custom-checkbox">
                                                 <input id="{{ $option }}"
                                                        type="checkbox"
                                                        name="{{ $question->id }}"
                                                        @if ($key == $question->choosedAnswer)
                                                            @checked(true)
                                                        @endif
                                                        class="custom-control-input 
                                                        @if ($question->correct AND $key == $question->correctOption)
                                                            {{ "is-valid" }}
                                                        @endif
                                                        @if (!$question->correct AND $key == $question->correctOption)
                                                            {{ "is-invalid" }}
                                                        @endif
                                                        "
                                                        >
                                                 <label for=""
                                                        class="custom-control-label">({{ Str::lower($key)}}) {{ $option }}</label>
                                             </div>
                                         </div>
                                             
                                         @endforeach
                                     </div>
                                 
                                    @endforeach
                                   
                              
                            </div>
                       </form>
            </div>
        <form action="{{ route('student.logout') }}" method="POST">
        
            @csrf
            <button type="submit" class="btn btn-primary btn-pill float-left">Finish</button></form>

        </div>
    </div>