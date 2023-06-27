@extends('layouts.Student.dashboard')



@section('studentcontent')


@if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
<link rel="stylesheet" href="{{ asset('/css/bill.css') }}">
    <div class="container bg-info">
        <form method="POST" action="{{ route('billStore') }}" enctype="mulipart/form-data" >
            @csrf
            @foreach ($bill as $bills)
        <div class="row m-0">
            <div class="col-lg-7 pb-5 pe-lg-5">
                <div class="row">
                    
                    <div class="row m-0 bg-light">
                        <div class="col-md-4 col-6 ps-30 pe-0 my-4">
                            <p class="text-muted">Installment</p>
                            <p class="h5">1</p>
                        </div>
                        <div class="col-md-4 col-6  ps-30 my-4">
                            <p class="text-muted">Price(Rs.)</p>
                            <p class="h5 m-0" >{{ $bills->installment1 }}</p>
                        </div>
                        <div class="col-md-4 col-6 ps-30 my-4">
                            <p class="text-muted">Payment Status</p>
                            <p class="h5 m-0" id="pay1"> 
                            @if($bills->paid_unpaid1 == 1)
                                    Paid
                                    @else
                                    Unpaid
                                @endif
                            </p>
                        </div>
                        <div class="container">
                                <a href="/pay-form" class="btn btn-primary" id="sub">Pay</a>
                                </div>
                        <div class="col-md-4 col-6 ps-30 my-4 visually-hidden">
                            <p class="text-muted">Upload Payment Slip</p>
                            <form action="/" method="post"></form>
                            <input class="form-control" type="file" id="formFile" name="slip1_photo">
                        </div>
                        <div class="col-md-4 col-6 ps-30 my-4">
                            
                            <button type="submit" class="btn btn-primary visually-hidden">Submit</button>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row m-0">
                    <div class="col-lg-7 pb-5 pe-lg-5">
                        <div class="row">
                            
                            <div class="row m-0 bg-light">
                                <div class="col-md-4 col-6 ps-30 pe-0 my-4">
                                    <p class="text-muted">Installment</p>
                                    <p class="h5">2</p>
                                </div>
                                <div class="col-md-4 col-6  ps-30 my-4">
                                    <p class="text-muted">Price(Rs.)</p>
                                    <p class="h5 m-0">{{ $bills->installment2 }}</p>
                                </div>
                                <div class="col-md-4 col-6 ps-30 my-4">
                                    <p class="text-muted">Payment Status</p>
                                    <p class="h5 m-0" id="ins1"> @if($bills->paid_unpaid2 == 1)
                                    Paid
                                    @else
                                    Unpaid
                                        @endif</p>
                                </div>
                                <div class="container">
                                <a href="#" class="btn btn-primary" id="sub2">Pay</a>
                                </div>
                                <div class="col-md-4 col-6 ps-30 my-4 visually-hidden">
                                    <p class="text-muted">Upload Payment Slip</p>
                                    <input class="form-control" type="file" id="formFile" name="slip2_photo">
                                </div>
                                <div class="col-md-4 col-6 ps-30 my-4">
                                    
                                    <button type="submit" class="btn btn-primary visually-hidden">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

            <div class="col-lg-5 p-0 ps-lg-4">
                <div class="row m-0">
                    <div class="col-12 px-4">
                        <div class="d-flex align-items-start mt-4 mb-2">
                            <p class="h4 m-0">Package Price(Rs.)
                                    </p>
                            
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <!-- <p class="textmuted">Vehcile Class</p>
                            <p class="fs-14 fw-bold">A</p> -->
                        </div>
                        
                        
                       
                        <div class="d-flex justify-content-between mb-3">
                            <p class="textmuted fw-bold">Total</p>
                            <div class="d-flex align-text-top ">
                                <span class="fas fa-dollar-sign mt-1 pe-1 fs-14 "></span><span class="h4">{{ $bills->total }}</span>
                            </div>
                        </div>
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </form>
    </div>

</div>

<script>
var payStatus = document.getElementById('pay1').textContent.trim();
var payButton = document.getElementById('sub');

if (payStatus === 'Paid') {
  payButton.classList.add('btn-disabled');
  payButton.textContent = 'Paid';
}
</script>

@endsection
