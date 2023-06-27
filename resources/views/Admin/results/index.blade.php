@extends('layouts.Admin.dashboard')

@section('admincontent')
<div class="container-fluid">
    {{-- @can('student-create') --}}
        <div style="align:center">
            <a class="btn btn-success" href="{{ route('results.create') }}">Add Results</a>
        </div>
     {{-- @endcan --}}
     <br>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Student Exam Results</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <!-- <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                        <label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                            <option value="10" selected="">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select></label>
                    </div> -->
                </div>
                <!-- <div class="col-md-6">
                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label">
                        <input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label>
                    </div>
                </div> -->
            </div>

            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Theory Results</th>
                            <th>Practical Results</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($user_results as $result)    
                        <tr>
                            <td>{{ ++$i }}</td>
                             <td>
                             {{$result->user_id}}</td>
                           
                            <td>{{$result->name}}</td>
                            <td>{{$result->Tresults}}</td>
                            <td>{{$result->Presults}}</td>
                            
                            <td>     
                                <!-- <a class="btn btn-xs btn-primary" href="#">
                                    view
                                </a>
                            
                                <a class="btn btn-xs btn-info" href="#">
                                    edit 
                                </a> -->
                           
                                
                          
                                <!-- <form action="#" method="Delete" onsubmit="" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                                    
        {!! Form::close() !!}
                                    
                                    <!-- <input type="submit" class="btn btn-xs btn-danger" value="delete"> -->

                                    <!-- new -->
                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Delete
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to delete Result?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
                                                @csrf
                                    {!! Form::open(['method' => 'DELETE','route' => ['results.destroy', $result->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                
                                                              
                                                
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                </form>
                           </td>
                        </tr>
                    @endforeach   

                   
            
            <div class="row">
                <!-- <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                </div> -->
                <div class="col-md-6">
                 {!! $user_results->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection