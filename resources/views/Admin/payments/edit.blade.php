@extends('layouts.Admin.dashboard')

@section('admincontent')

@error('cost')
   <span class="text-danger">{{$message}}</span>
@enderror

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header h2 text-center">{{ __('Packages Price Edit') }}</div>

                <form method="POST" action="{{ route('costs.update',$cost->id) }}">
    @csrf
    @method('PUT')
    <label for="name">Price:</label>
    <input type="integer" class="form-control" name="cost" value="{{ $cost->cost }}">
    
    <button type="submit">Update</button>
</form>

                        

@endsection