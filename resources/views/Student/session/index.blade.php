@extends('layouts.Student.dashboard')



@section('studentcontent')

<h3 class=" text-center fw-bold p-3"> Practical Session Schedules </h3>

<table class="table table-hover p-3">
<tr>
        <th class="text-info bg-dark">Session ID</th>
        <th class="text-info bg-dark">Date</th>
        <th class="text-info bg-dark">Time</th>
        <th class="text-info bg-dark">Action</th>
</tr>
<tr>
        @foreach ($session as $datas)
        <td class="text-white-50 bg-dark">{{$datas->id}}</td>
        <td class="text-white-50 bg-dark">{{$datas->date}}</td>
        <td class="text-white-50 bg-dark">{{$datas->time}}</td>
        
        <td class="text-white-50 bg-dark">

        <button type="button" class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Delete
        </button> 
        
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-danger" id="exampleModalLabel">Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body bg-dark">
                                                Are you sure to delete Session?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                {!! Form::open(['method' => 'DELETE','route' => ['deleteSession.destroy', $datas->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
                                            </div>
                                            </div>
                                        </div>
                                        </div>

        
        </td>
</tr>     
        @endforeach
        
    </table>

    @endsection