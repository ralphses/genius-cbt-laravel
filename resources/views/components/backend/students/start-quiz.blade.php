<div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
<div class="mdk-drawer-layout__content page ">

   <form action="{{ route('quiz.submit', ['id' => $quiz->id]) }}">

    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="fixed-student-dashboard.html">Home</a></li>
            <li class="breadcrumb-item active">Quiz</li>
        </ol>
 
        <div class="card-group">
            <button type="submit" class="btn btn-primary float-right">Submit Now</button>
 
        </div>
 
        <div class="card">

             @foreach ($questions as $question)
 
             <div class="question q{{ ++$loop->index }}" style="display: none">
 
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
                         <div class="custom-control custom-radio">
                             <input id="{{ $option }}"
                                    type="radio"
                                    value="{{ $key }}"
                                    name="{{ $question->id }}"
                                    class="custom-control-input">
                             <label for="{{ $option }}"
                                    class="custom-control-label">({{ Str::lower($key)}}) {{ $option }}</label>
                         </div>
                     </div>
                         
                     @endforeach
                </div>
                 
                 </div>            
             @endforeach
               
            <div class="card-footer">
                <button type="button" class="btn btn-primary float-left" id="prevBtn">previous <i class="material-icons btn__icon--left">send</i></button>
                <button type="button" class="btn btn-primary float-right" id="nextBtn">Next <i class="material-icons btn__icon--right">send</i></button>
            </div>
        </div>
    </div>
   </form>

</div>

<div class="mdk-drawer js-mdk-drawer" data-align="end">
   <div class="mdk-drawer__content ">
       <div class="sidebar sidebar-right sidebar-light bg-white o-hidden"
            data-perfect-scrollbar>
           <div class="sidebar-p-y">
               <div class="sidebar-heading">Time left</div>
               <div class="countdown sidebar-p-x"
                    data-value="{{ $quiz->duration }}"
                    data-unit="minutes"></div>              
           </div>

       </div>

   </div>
</div>

</div>

<script>

    let currentQuestion = "q1";

    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');
    const allQuestions = document.querySelectorAll('.question');
    const totalQuestions = allQuestions.length;

    sessionStorage.setItem('question', currentQuestion);
    prevBtn.style.display = 'none';


    document.querySelector(`.${currentQuestion}`).style.display = "block";

    nextBtn.addEventListener('click', () => {

        let que = sessionStorage.getItem('question');
        let next = que.substring(1, que.length);

        next = next * 1 + 1;

        if(next == totalQuestions) {
            nextBtn.style.display = 'none';
        }

        sessionStorage.setItem('question', `q${next}`);
        next = sessionStorage.getItem('question')

        prevBtn.style.display = 'block';

        document.querySelector(`.${next}`).style.display = "block";
        document.querySelector(`.${que}`).style.display = "none";

    });

    prevBtn.addEventListener('click', () => {
        
        let que = sessionStorage.getItem('question');
        let next = que.substring(1, que.length);

        next = next * 1 - 1;

        if(next == 1) {
            prevBtn.style.display = 'none';
            nextBtn.style.display = 'block';
        }

        nextBtn.style.display = 'block';

        sessionStorage.setItem('question', `q${next}`);
        next = sessionStorage.getItem('question')

        document.querySelector(`.${next}`).style.display = "block";
        document.querySelector(`.${que}`).style.display = "none";

    });



</script>

