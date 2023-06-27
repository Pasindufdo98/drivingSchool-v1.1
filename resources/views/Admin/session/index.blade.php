@extends('layouts.Tutor.dashboard')
@section('tutorcontent')

<h3 class=" text-center fw-bold p-3 "> Practical Session Schedules </h3>

<table class="table table-hover p-3">
<tr>
        <th class="fw-bold bg-info">Session ID</th>
        <th class="fw-bold bg-info">Student ID</th>
        <th class="fw-bold bg-info">Date</th>
        <th class="fw-bold bg-info">Time</th>
        <th class="fw-bold bg-info">Attendance</th>
        <th class="fw-bold bg-info">Mark Attendance</th>
        
</tr>
<tr>
        @foreach ($session as $datas)
        <td class="">{{$datas->id}}</td>
        <td class="">STD{{$datas->user_id}}</td>
        <td class="">{{$datas->date}}</td>
        <td class="">{{$datas->time}}</td>
        <td class="">{{$datas->attendance}}</td>
        <td class=""><a class="btn btn-primary" href="{{ route('deleteSession.edit',$datas->id) }}">Edit</a></td>

        
       
</tr>
@endforeach
</table>




@endsection