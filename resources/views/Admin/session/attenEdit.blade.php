@extends('layouts.Tutor.dashboard')
@section('tutorcontent')

<form action="{{ route('deleteSession.update',$session->id) }}" method="Post">
    @csrf
    @method('PUT')
<label for="name" class="col-md-4 col-form-label text-md-end">Attendance</label>
   
    <input type="checkbox" name="attendance" id="attendance" value="1">
    <button class="btn btn-warning" type="submit">Mark Attendance</button>
</form>

@endsection