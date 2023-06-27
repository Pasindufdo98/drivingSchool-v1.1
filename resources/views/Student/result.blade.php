@extends('layouts.Student.dashboard')



@section('studentcontent')

<div class="container text-center" style="width: 18rem;">
<div class="card" style="width: 18rem;">
  <div class="card-body bg-info">
    <h1 class="card-title">Exam Results</h1>
    
   <div class="container">
   
<div class="container-sm p-3">
    @foreach ($result as $result)   
    <h5>Theory Exam <span class="badge bg-secondary">{{ $result->Tresults }}</span></h5>
    <h5>Practical Exam <span class="badge bg-secondary">{{ $result->Presults }}</span></h5>
</div>
@endforeach 
   </div>
    
  </div>
</div>



@endsection