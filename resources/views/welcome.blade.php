@extends('layouts.frontend')
@section('content')
<!-- slide show -->

    
<div class="container-fluid p-0">
<div class="bg-image" 
     style="background-image:url(bg.jpg);
            ">


      
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="car.jpg"  class="d-block w-100" alt="car1.jpg">
            </div>
            <div class="carousel-item">
              <img src="car1.jpg"  class="d-block w-100" alt="car.jpg">
            </div>
            <div class="carousel-caption">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-7">
                          <h1 class="display-2 fw-bolder mb-5 animated slideInDown">Learn To Drive With Confidence</h1>
                          
                          <a href={{ route('reg') }} class="btn btn-primary py-sm-3 px-sm-5" >Sign Up</a>
                          <a href={{ route('login') }} class="btn btn-light py-sm-3 px-sm-5 ms-3">Login</a>

                      
                          
                      </div>
                      
                  </div>
              </div>
          </div>
          
          


          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      
        
      </div>

      

      
        <!-- description -->
        <div class="container mt-3 py-3">
          
            <div class="">
          <div class="p" id="des">


             
        <!-- col -->
        <!-- <div class="row gx-5">
    <div class="col">
     <div class=""> -->
                <!-- card -->
            <!-- <div class="card bg-info bg-gradient" style="width: 18rem;">
              <img src="card1.jpg" class="card-img-top" alt="card1.jpg">
          <div class="card-body">
          <p class="card-text fw-bold fst-italic">Easy enrollment & sheduling with your busy plans</p>
          <ul>
            <li>You can enroll fastly and easily from our Website and shedule training easily.
           
          </ul>
        </div>
    </div>  -->


     </div>
    </div>
   


    <div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-4 mb-4">
      <div class="card bg-info bg-gradient" style="width: 100%;">
        <img src="card1.jpg" class="card-img-top" alt="card1.jpg">
        <div class="card-body">
          <p class="card-text fw-bold fst-italic">Easy enrollment &amp; scheduling with your busy plans</p>
          <ul>
            <li>You can enroll quickly and easily from our website and schedule training at your convenience.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-4 mb-4">
      <div class="card bg-primary bg-gradient" style="width: 100%;">
        <img src="open.jpg" class="card-img-top" alt="open.jpg">
        <div class="card-body">
          <p class="card-text fw-bold">Opening Hours</p>
          <ul class="list-group">
            <li class="list-group-item">Weekdays: 9.00 AM-5.00 PM</li>
            <li class="list-group-item">Weekends: 9.00 AM-4.00 PM</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-4 mb-4">
      <div class="card bg-info bg-gradient" style="width: 100%;">
        <img src="24h.jpg" class="card-img-top" alt="card1.jpg">
        <div class="card-body">
          <p class="card-text fw-bold fst-italic">Access your account anytime</p>
          <ul>
            <li>Our website is open 24/7, you can access your account anytime.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
          

      </div>
    
  

  <div class="container">
    <h3 class="text-light">Why choose us?</h3>
    <ul class="text-light">
    <li>Exceptional Customer Service</li>
    <li>New Vehicles with every Safety Feature Available</li>
    <li>Behind-the-Wheel Online Scheduling</li>
    <li>Behind-the-Wheel Reminders</li>
    <li>24/7 Student Account Access</li>
    </ul>
  </div>

  
  

  
 
        
      <div class="container text-light">
          <h3 class="fw-bold py-3">About Us</h3>
          <h5 class="align-justify">
          Ruwansiri Driving school is a trusted driving school with grade A in Matara Sri Lanka with over
60 years experience in teaching learners how to drive.We highly believe in Promoting Road
safety and safe Driving will all over very professional,motivated drivig instructors who specially
have excellent knowledge to get you through your driving test first time and train you for the life time..</h5></div>



</div>
        
      </div>  
      </div>
      </div>
    </div>
  </div>

  
    @endsection
