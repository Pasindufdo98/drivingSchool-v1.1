@extends('layouts.Admin.dashboard')
@section('admincontent')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Notice Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('notices.create') }}"> Creat New Notice</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-dark table-hover">
 <tr>
   <th>Created Date</th>
   <th>Notice</th>
   <th>To Users</th>
   <th>Action</th>
   
   <!-- <th width="280px">Action</th> -->
 </tr>
 @foreach ($notices as $notice)
  <tr>
    
    <td>{{ $notice->created_at }}</td>
    <td>{{ $notice->notice }}</td>
    <td>{{ $notice->toUsers}}</td>
    <td>
      <!-- <a class="btn btn-xs btn-info " href="{{ route('notices.edit',$notice->id) }}">edit</a> -->
    {!! Form::open(['method' => 'DELETE','route' => ['notices.destroy', $notice->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
    
    
  </tr>
  @endforeach
</table>

@endsection
