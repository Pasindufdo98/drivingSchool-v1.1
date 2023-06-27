@extends('layouts.Admin.dashboard')

@section('admincontent')


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header h2 text-center">{{ __('Payment Edit') }}</div>

                <form method="POST" action="{{ route('checkPay.update',$user->id) }}">
    @csrf
    @method('PUT')
    <label for="name">1st installment Paid/Unpaid:</label>
    <input type="hidden" class="form-control" name="id" value="{{ $user->id }}">

    <input type="integer" class="form-control" name="paid_unpaid1" value="{{ $user->paid_unpaid1 }}">
    
    <label for="name">2st installment Paid/Unpaid:</label>
    <input type="integer" class="form-control" name="paid_unpaid2" value="{{ $user->paid_unpaid2 }}">
    <button type="submit">Update</button>
</form>

@endsection