<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    
    <title>Admin</title>

    <link rel="stylesheet" href="{{ asset('/css/adminStyle.css') }}">
</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
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
                <!-- <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button> -->
              </div>

              
              
            </form>
            
            <ul class="navbar-nav mb-2 mb-lg-0 ">
              
            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                
                <i class="bi bi-person">{{ Auth::user()->name }}</i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end ms-auto" aria-labelledby="navbarDropdown">
                 
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
             <a href="/users" class="nav-link px-3">
              <span class="me-2">
                <i class="bi bi-speedometer2"></i>
              </span>
              <span>Admin Dashboard</span>
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
            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
               <Span class="me-2"><i class="bi bi-people"></i></Span><span>Management</span><span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
              </a>  
               
              <div class="collapse" id="collapseExample">
                <div>
                  <ul class="navbar-nav ps-3">
                    <li>
                      <a href="{{ route('users.index') }}" class="nav-link me-2 px-3">
                        <span class="px-2"> <i class=""></i></span><span> User</span></a>
                    </li>
                    <li>
                      <a href="{{ route('roles.index') }}" class="nav-link me-2 px-3">
                        <span class="px-2"><i class="bi bi-user"></i> </i></span><span> Role</span></a>
                    </li>
                    <!-- <li>
                      <a href="{{ route('products.index') }}" class="nav-link me-2 px-3">
                        <span class="px-2"><i class="bi bi-user"></i> </i></span><span> Vehicles</span></a>
                    </li> -->
                    <li>
                      <a href="{{ route('students.index') }}" class="nav-link me-2 px-3">
                        <span class="px-2"> <i class="bi bi-user"></i></span><span> Students</span></a>
                    </li>
                    <!-- <li>
                      <a href="{{ route('costs.index') }}" class="nav-link me-2 px-3">
                        <span class="px-2"> <i class="bi bi-cash"></i></span><span> Payments</span></a>
                    </li> -->
                    <li class="my-4">
                      <hr class="dropdown-dividers">
                    </li>
                    
                  </ul>
                </div>
              </div>
              
            </li>
            <li>
              <a href="{{ route('costs.index') }}" class="nav-link px-3 py-3">
               <span class="me-2">
               <i class="bi bi-cash"></i></i>
               </span>
               <span>Price List</span>
              </a>
             </li>
             <li>
              <a href=/results class="nav-link px-3 py-3">
               <span class="me-2">
                <i class="bi bi-book"></i>
               </span>
               <span>Examination Results</span>
              </a>
             </li>
             <li>
              <a href="/fixexam" class="nav-link px-3 py-3">
               <span class="me-2">
                <i class="bi bi-calendar-date"></i>
               </span>
               <span>Exam Date Schedule</span>
              </a>
             </li>
             <li>

              <a href="/AdminViewExamDate" class="nav-link px-3 py-3">
               <span class="me-2">
                <i class="bi bi-card-checklist"></i>
               </span>
               <span>Scheduled Exam Dates</span>
              </a>
             </li>
             <li>
              <a href="/checkPay" class="nav-link px-3 py-3">
               <span class="me-2">
                <i class="bi bi-currency-dollar"></i>
               </span>
               <span>Payments</span>
              </a>
             </li>
             <li>
              <a href="{{ route('notices.index') }}" class="nav-link px-3 py-3">
               <span class="me-2">
                <i class="bi bi-file-earmark-post"></i>
               </span>
               <span>Notices</span>
              </a>
             </li>
             <li>
              <a href="/viewContact" class="nav-link px-3 py-3">
               <span class="me-2">
                <i class="bi bi-envelope"></i>
               </span>
               <span>Community Messages</span>
              </a>
             </li>
          </ul>

          

        </nav> 
      </div> 
      </div>
      </div>
      <!-- close off canvas-->
      <main class="mt-2 px-2">
      @yield('admincontent')
      </main>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>