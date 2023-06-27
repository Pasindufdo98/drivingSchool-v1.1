<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Contact Us</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mr-auto">
          <div class="mb-5">
            <h3 class="text-white mb-4">Contact Info</h3>
            <p class="text-white">Feel free to contact us anytime...</p>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h3 class="text-white h5 mb-3"><i class="bi bi-geo-alt"></i>Matara
              </h3>
              <ul class="list-unstyled mb-5">
                <li class="d-flex text-white mb-2">
                  <span class="mr-3"><span class="icon-map"></span></span>New Tangalle Road,Matara
                </li>
                <li class="d-flex text-white mb-2"><span class="mr-3"><span class="icon-phone"></span></span> 0412226193</li>
                <li class="d-flex text-white"><span class="mr-3"><span class="icon-envelope-o"></span></span> info@mywebsite.com </li>
              </ul>
            </div>
            <div class="col-md-6">
              <h3 class="text-white h5 mb-3"></h3>
              <ul class="list-unstyled mb-5">
                <li class="d-flex text-white mb-2">
                  <span class="mr-3"><span class="icon-map"></span></span>    </li>
                <li class="d-flex text-white mb-2"><span class="mr-3"><span class="icon-phone"></span></span></li>
                <li class="d-flex text-white"><span class="mr-3"><span class="icon-envelope-o"></span></span> </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="box">
            <h3 class="heading">Send us a message</h3>
            <form class="mb-5" method="post" id="contactForm" name="contactForm" action="/saveContact">
              {{csrf_field()}}
              <div class="row">
                
                <div class="col-md-12 form-group">
                  <label for="name" class="col-form-label">Name</label>
                  <input type="text" class="form-control" name="name" id="name" required>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email" class="col-form-label">Email</label>
                  <input type="text" class="form-control" name="email" id="email" required>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-12 form-group">
                  <label for="message" class="col-form-label">Message</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="7" required></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>
          </div>
        </div>
      </div>
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>