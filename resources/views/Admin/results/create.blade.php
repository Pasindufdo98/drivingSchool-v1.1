@extends('layouts.Admin.dashboard')

@section('admincontent')



    <div class="container" style="margin-top:20px">
        <div class="row">
            
             <div class="col-md-12">
                <h1>Exam Results</h1>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <form method="post" action="{{route('results.store')}}">
                    @csrf
                    <div class="md-3">
                        <label class="form-label">Student Id<label>
                        <select class="form-select" aria-label="Default select example" name="user_id">
                                <option selected>Open this select menu</option>
                                @foreach ($results as $result)
                                <option value="{{$result->user_id}}">{{$result->user->name}}</option>
                               @endforeach
                                </select>
                    </div>
                   
                    <!-- <div class="md-3">
                        <label class="form-label">Name<label>

                        <input type="text" class="form-control" name="id" placeholder="Student Name" value="{{old('name')}}">
                        @error('id')
                        <div class="alert alert-danger" role="alert">
                         {{$message}}
                         </div>
                         @enderror
                         </div> -->

                    <div class="md-3">
                    <label class="form-label">Theory Results<label>
                    <select class="form-select" aria-label="Default select example" name="Tresults">
                                <option selected >select</option>
                                <option value="Pass">Pass</option>
                                <option value="Fail">Fail</option>
                                
                                </select>
                        
                    </div>

                    <div class="md-3">
                    <label class="form-label">Practical Results<label>
                    <select class="form-select" aria-label="Default select example" name="Presults">
                                <option selected>select</option>
                                <option value="Pass">Pass</option>
                                <option value="Fail">Fail</option>
                                
                                </select>
                        
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/results" class="btn btn-danger">Back</a>
            </form>
</div>
</div>
</div>
@endsection
