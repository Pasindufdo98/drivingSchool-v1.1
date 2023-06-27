@extends('layouts.frontend')
@section('content')

<div class="row">
<div class="col-4">
      <div class="card bg-primary bg-gradient" style="width: 25rem;">
        <img src="light.jpg" class="card-img-top" alt="light.jpg"><div class="card-body">
              <p class="card-text fw-bold">Light Vehicle with Training Packages</p>
              <ul class="list-group">
                  <li class="list-group-item">Bike Only: Rs.15000.00</li>
                  <li class="list-group-item">Manual Light Vehicles only: Rs.20000.00</li>
                  <li class="list-group-item">Auto Light Vehicles only: Rs.18000.00</li>
                  <li class="list-group-item">All light vehicles: Rs.35000.00</li>
                  <br/>
                  
                </ul>
             </div>
          </div>


          
        </div>


        <div class="col-4">
      <div class="card bg-secondary bg-gradient" style="width: 25rem;">
        <img src="3wheel.jpg" class="card-img-top" alt="open.jpg"><div class="card-body">
              <p class="card-text fw-bold">Three-wheeler with Training Packages</p>
              <ul class="list-group">
                  <li class="list-group-item">Rs.12000.00</li>
                  
                  <br/>
                  
                </ul>
             </div>
          </div>


          
        </div>


        <div class="card bg-info bg-gradient" style="width: 25rem;">
        <img src="heavy.jpg" class="card-img-top" alt="open.jpg"><div class="card-body">
              <p class="card-text fw-bold">Heavy Vehicles with Training Packages</p>
              <ul class="list-group">
                  <li class="list-group-item">Rs.40000.00</li>
                  
                  <br/>
                  
                </ul>
             </div>
          </div>


          
        </div>

        

        @endsection