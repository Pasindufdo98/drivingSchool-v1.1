@extends('layouts.Student.dashboard')
@section('studentcontent')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Notices</h2>
        </div>
            
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<br/>
<table class="table table-dark table-hover">
 <tr>
   <th>Created Date</th>
   <th>Notice</th>
   
   
   <!-- <th width="280px">Action</th> -->
 </tr>
 @foreach ($notices as $notice)
  <tr>
    
    <td>{{ $notice->created_at }}</td>
    <td>{{ $notice->notice }}</td>
   
    </td>
    
    
  </tr>
  @endforeach
</table>

@endsection
