<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Ruwansiri Driving School</title>

</head> 


<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary fw-bold">
        <div class="container">
            <a href="/" class="navbar-brand" id="topic"><span class="px-2"><img src="logo.svg" width="30" height="30" alt=""></span>Ruwansiri Driving School</a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/prerequisites" class="nav-link">Prerequisites</a>
                </li>
                <li class="nav-item">
                    <a href="/gallery" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="/rates" class="nav-link">Rates </a>
                </li>
                <li class="nav-item">
                    <a href="/contactus" class="nav-link">Contact us</a>
                </li>
            </ul>
        </div>
     
        
        
        
    </nav>
    @yield('content')
        
    


        <!-- <div class="flex-shrink-0 py-4 bg-dark text-white-50">
          <div class="container text-center"><small>All Right Reserved&copy;</small></div>
        </div> -->

        
<!-- Footer of web page -->
        <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style="background-color: #6351ce"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks: <a class="text-ligt" href="https://www.facebook.com/people/Ruwansiri-Driving-School-Pvt-Ltd/100064070856171/">Facebook</a></span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Ruwansiri Driving School</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              Contact us for more services by our company
            </p>
          </div>
          <!-- Grid column -->

         

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href={{ route('login') }} class="text-white">My Account</a>
            </p>
            <p>
              <a href="https://goo.gl/maps/as8jRF1qexE8rWQH7" class="text-white">Location</a>
            </p>
           
            
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> New Tangalle Road Matara </p>
            <p><i class="fas fa-envelope mr-3"></i> info@ruwansiri.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 94 412226193</p>
            
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2022 Copyright:
      <a class="text-white" href="http://127.0.0.1:8000/"
         >RUWANSIRI DRIVING SCHOOL</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

    
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
   

</html>