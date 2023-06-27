<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ asset('/css/adminStyle.css') }}">
    @yield('styles')
</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid d-flex justify-content-between">
          <!-- off canvas trigger -->
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- close off canvas trigger -->
          <a class="navbar-brand fw-bold ms-auto" href="#" id="topic"><span class="px-2"><img src={{ asset('logo.svg') }} width="30" height="30" alt=""></span>RUWANSIRI DRIVING SCHOOL</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <form class="d-flex ms-auto">
              <div class="input-group">
              <li><span><a href="/studentnotice"><i class="bi bi-bell p-3">Notice</i></a></span></li>
                <!-- <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2"> -->
                <!-- <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button> -->
              </div>
              
            </form>
            
            <ul class="navbar-nav mb-2 mb-lg-0 ">
              
              
              <li class="nav-item dropdown">
                
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-person p-2">{{ Auth::user()->name }}</i>
                  
                </a>
                <ul class="dropdown-menu dropdown-menu-end ms-auto" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/profile/index">Profile</a></li>
                  
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a></li>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--close navbar -->

      <!-- off canvas -->
      <!-- <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        Link with href </a> -->
      
     
      
      <div class="offcanvas offcanvas-start sidebar-nav bg-dark text-white fw-bold" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 py-2">
                <!-- CORE -->
              </div>
            </li>
            <li>
             <a href="/profile/index" class="nav-link px-3">
              <span class="me-2">
                <i class="bi bi-speedometer2"></i>
              </span>
              <span>Student Dashboard</span>
             </a>
            </li>
            <li class="my-2">
              <hr class="dropdown-dividers">
            </li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                <!-- CORE -->
              </div>
            </li>

            <!-- exam dropdown -->
            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
               <Span class="me-2"><i class="bi bi-people"></i></Span><span>Examination</span><span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
              </a>  
               
              <div class="collapse" id="collapseExample">
                <div>
                  <ul class="navbar-nav ps-3">
                    <li>
                      <a href="{{ route('exam') }}" class="nav-link me-2 px-3">
                        <span class="px-2"> <i class="bi bi-journal-check"></i></span><span> Results</span></a>
                    </li>
                    <li>
                      <a href="{{ route('viewexamdate') }}" class="nav-link me-2 px-3">
                        <span class="px-2"><i class="bi bi-calendar2-check"></i> </i></span><span> Date</span></a>
                    </li>
                   
                    
                  </ul>
                </div>
              </div>
              
            </li>

            <!-- Learning area dropdown -->

            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
               <Span class="me-2"><i class="bi bi-book"></i></Span><span>Learning Area</span><span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
              </a>  
               
              <div class="collapse" id="collapseExample">
                <div>
                  <ul class="navbar-nav ps-3">
                    <li>
                      <a href="{{ route('pp') }}" class="nav-link me-2 px-3">
                        <span class="px-2"> <i class="bi bi-person-add"></i></span><span>Past Papers</span></a>
                    </li>
                    <li>
                      <a href="{{ route('quiz') }}" class="nav-link me-2 px-3">
                        <span class="px-2"><i class="bi bi-vector-pen"></i> </i></span><span>Quiz</span></a>
                    </li>
                   
                    
                  </ul>
                </div>
              </div>
              
            </li>
            <li>
              <a href="{{ route('createSession') }}" class="nav-link px-3 py-3">
               <span class="me-2">
                <i class="bi bi-person-badge"></i></i>
               </span>
               <span>Practical Sessions</span>
              </a>
             </li>
             <li>
              <a href="{{ route('bill') }}" class="nav-link px-3 py-3">
               <span class="me-2">
                <i class="bi bi-book"></i>
               </span>
               <span>Payments</span>
              </a>
             </li>
             <li>
              <!-- <a href="#" class="nav-link px-3 py-3">
               <span class="me-2">
                <i class="bi bi-calendar-date"></i>
               </span>
               <span>Shedule</span>
              </a>
             </li>
             <li> -->
             
              
              
              <a href="/profile/index" class="nav-link px-3 py-3">
               <span class="me-2">
                <i class="bi bi-gear"></i>
               </span>
               <span>Profile</span>
              </a>
             </li>
          </ul>

        </nav> 
      </div> 
      </div>
      </div>
      <!-- close off canvas-->
      <main class="mt-2 px-2">
      @yield('studentcontent')
      </main>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    @yield('scripts')
  </body>
</html>