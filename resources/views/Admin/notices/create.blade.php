

@extends('layouts.Admin.dashboard')



@section('admincontent')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header h2 text-center">Create Notice</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('notices.store') }}">
                        @csrf
                        <div class="py-5">
                        <div class="row mb-3">
                            <label for="notice" class="col-md-4 col-form-label text-md-end" >Notice</label>

                            <div class="col-md-6">
                                <textarea name="notice" id="address" cols="25" rows="4" class="form-control" placeholder="Write the notice here" required></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="toUsers" class="col-md-4 col-form-label text-md-end">To Users</label>

                            <div class="col-md-6">
                            <select id="toUsers" class="form-select form-select-sm" name="toUsers" >
                                
                                <option value="All Users">All Users</option>
                                <option value="Students">Students</option>
                                <option value="Tutors">Tutors</option>
                                
                                </select>
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