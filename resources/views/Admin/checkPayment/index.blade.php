@extends('layouts.Admin.dashboard')

@section('admincontent')

<section class="intro">
  <div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                  <h1>Payments</h1>
                <table class="table table-striped mb-0">
                    <thead style="background-color: #002d72;">
                      <tr>
                      <th scope="col" class="text-light">Student ID</th>
                        <th scope="col" class="text-light">Name</th>
                        <th scope="col" class="text-light">Total</th>
                        <th scope="col" class="text-light">Installment 1(paid/unpaid)</th>
                        <th scope="col" class="text-light">Installment 2(paid/unpaid)</th>
                        <th scope="col" class="text-light">
                            Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($user_results as $pay)
                      <tr>
                      <td>STD{{$pay->user_id}}</td>
                        <td>{{$pay->name}}</td>
                        
                        <td>{{$pay->total}}</td>
                        <td>@if($pay->paid_unpaid1 == 1)
                                    Paid
                                    @else
                                    Unpaid
                                        @endif</td>
                        <td>@if($pay->paid_unpaid2 == 1)
                                    Paid
                                    @else
                                    Unpaid
                                        @endif</td></td>
                        <td><a class="btn btn-primary" href="{{ route('checkPay.edit',$pay->id) }}">Edit</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection