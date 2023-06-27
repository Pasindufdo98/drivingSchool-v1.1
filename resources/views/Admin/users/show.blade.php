@extends('layouts.Admin.dashboard')
@section('admincontent')

<div class="row">
    <div class="col-lg-12 margin-tb">
       
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="container text-center p-3" style="width: 18rem;">
<div class="card text-center" style="width: 18rem;">
  <div class="card-body">
    <h2 class="card-title"> <div class="pull-left">
            User Details</h2>
        </div>
    
   


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 p-3">
        <div class="form-group">
            <strong>Roles:</strong>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <label class="badge bg-success">{{ $v }}</label>
                @endforeach
            @endif
        </div>
    </div>
</div>

    
  </div>
</div>
</div>

@endsection