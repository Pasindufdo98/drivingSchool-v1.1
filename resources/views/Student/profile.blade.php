@extends('layouts.Student.dashboard')
@section('studentcontent')

<div class="container">
@foreach($user_students as $user_students)
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
           

            <div class="pull-left">
                <h2> {{ $user_students->name }}</h2>
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
                            {{ $user_students->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Contact No:</strong>
                            {{ $user_students->contact }}
                            <br>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>NIC:</strong>
                            {{ $user_students->nic }}
                            <br>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $user_students->address }}
                            <br>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Blood Group:</strong>
                            {{$user_students->bloodGroup}}
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
                    <td>{{$user_students->classA}}</td>
                            <td>{{$user_students->classA_transmission}}</td>
                            <td>{{$user_students->classB}}</td>
                            <td>{{$user_students->classB_transmission}}</td>
                            <td>{{$user_students->classB1}}</td>
                            <td>{{$user_students->classCE}}</td> 

@endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection