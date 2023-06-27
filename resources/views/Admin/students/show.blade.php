@extends('layouts.Admin.dashboard')

@section('admincontent')

<div class="container">
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div><br>

            <div class="pull-left">
                <h2>Student Details</h2>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="card shadow mb-3">
        <div class="card-body" style="margin-bottom: 5px; padding-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $suser->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Contact No:</strong>
                            {{ $student->contact }}
                            <br>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>NIC:</strong>
                            {{ $student->nic }}
                            <br>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $student->address }}
                            <br>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Blood Group:</strong>
                            {{$student->bloodGroup}}
                            <br>
                        </div>

                        <br>
                        <h4>Vehicle classes</h4>
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                        <th>Vehicle Class A</th>
                            <th>A/M</th>

                            <th>Vehicle Class B</th>
                            <th>A/M</th>

                            <th>Vehicle Class B1</th>
                            
                            <th>Vehicle Class CE</th>
                            </tr>
                    </thead>
                    <tbody>
                    <td>{{$student->classA}}</td>
                            <td>{{$student->classA_transmission}}</td>
                            <td>{{$student->classB}}</td>
                            <td>{{$student->classB_transmission}}</td>
                            <td>{{$student->classB1}}</td>
                            <td>{{$student->classCE}}</td> 




                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection