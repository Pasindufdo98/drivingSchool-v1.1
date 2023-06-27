@extends('layouts.Tutor.dashboard')
@section('tutorcontent')


<style>
			.input-group-append {
				cursor: pointer;
			}
			 /* .body{
				margin:80px !important;
			}  */

			
		</style> 



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

		<link rel="stylesheet" href="/resources/demos/style.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="//code.jquery.com/jquery-3.5.1.js"></script>
		<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		
<div class="container bg-info" >
<form method="POST" action="{{ route('adminSession') }}">
	@csrf
	
<div class="container">
  	<h3 class="py-2 mb-4">View Practical Sessions</h3>

	  
		            
	    <div class="row">
		    <label for="date" class="col-1 col-form-label fw-bold">Date</label>
		        <div class="col-5 px-2">
		            <!-- <div class="input-group date" id="datepicker"> -->
					<input type="text" id="datepicker" name="date" required>
                        
	            </div>
        </div>
</div>




  

<!-- <div class="container py-3">
<div class="row">
		<label for="date" class="col-1 col-form-label">Time</label>
		<div class="col-5">
            <select class="form-select" aria-label="Default select example" name="time">
            <option selected >Select a time</option>
            <option value="09:00:00">09:00</option>
            <option value="11:00:00">11:00</option>
            <option value="16:00:00">16:00</option>
            </select>
    </div>
    </div>
    </div> -->

<div class="container py-3">
    <div class="row">
    <div class="col-5 align-center">
    <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">View</button>

	
    </div>
	</div>
	</div>
	</div>
	</div>
	

	<!-- card -->
			

	<!-- end card -->
	

	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
	 $(function() {
    $("#datepicker").datepicker({
        minDate: 0, // disable past days
        beforeShowDay: function(date) {
            var day = date.getDay();
            return [(day != 0), '']; // disable Sundays
        }
    });



});


  </script>


@endsection