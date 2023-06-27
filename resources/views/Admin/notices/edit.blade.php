<div class="bg-info fluid p-0">

@extends('layouts.Admin.dashboard')



@section('admincontent')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header h2 text-center">Edit Notice</div>

                <div class="card-body">
                    <form method="PATCH" action="{{ route('notices.update',$notice->id) }}">
                        @csrf
                        <div class="py-5">
                        <div class="row mb-3">
                            <label for="notice" class="col-md-4 col-form-label text-md-end" >Notice</label>

                            <div class="col-md-6">
                                <textarea name="notice" id="address" cols="25" rows="4" class="form-control"  required></textarea>
                            </div>
                        </div>

                        </div> 

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>    

@endsection