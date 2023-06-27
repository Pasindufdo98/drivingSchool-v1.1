<div class="bg-info fluid p-0">

@extends('layouts.Admin.dashboard')



@section('admincontent')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header h2 text-center">{{ __('Student Registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('students.update',$student->user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                       
                        <div class="py-5">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $student->user->name }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $student->user->email }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

                         <!-- NIC -->
                         <div class="row mb-3">
                            <label for="nic" class="col-md-4 col-form-label text-md-end">NIC</label>

                            <div class="col-md-6">
                                <input id="nic" type="text" class="form-control" name="nic" value="{{ $student->nic }}"  >
                            </div>
                        </div>

                         <!-- Blood Group -->
                         <div class="row mb-3">
                            <label for="bloodGroup" class="col-md-4 col-form-label text-md-end">Blood Group</label>

                            <div class="col-md-6">
                            <select id="bloodGroup" class="form-select form-select-sm"  name="bloodGroup" >
                            <option selected class="fw-bold">{{ $student->bloodGroup }}</option> 
                                <option value="A-">A-</option>
                                <option value="A+">A+</option>
                                <option value="B-">B-</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">AB+</option>
                                <option value="O-">O-</option>
                                <option value="O+">O+</option>
                                </select>
                            </div>
                        </div>

                        <!-- contact-->
                        <div class="row mb-3">
                            <label for="contact" class="col-md-4 col-form-label text-md-end">Phone</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control" name="contact" value="{{ $student->contact }}"  >
                            </div>
                        </div>



                        <!-- address -->
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end" >Address</label>

                            <div class="col-md-6">
                                <textarea name="address" id="address" cols="25" rows="4" class="form-control" >{{ $student->address }}</textarea>
                            </div>
                        </div>

                        <!-- photo upload -->
                        <div class="row mb-3">
                                
                        <label for="uploadImage" class="col-md-4 col-form-label text-md-end" >Student Photo</label>
                             <div class="col-md-6">
                                <input class="input--style-5" type="file" id="uploadImage"  name="file">
                            </div>
                        </div>

                        <!-- photo upload validation -->
                        <script>
                                            var fileUpload = document.getElementById("uploadImage");
                                    fileUpload.addEventListener("change", function () {
                                    if (typeof fileUpload.files != "undefined") {
                                        var size = parseFloat(fileUpload.files[0].size / 1024).toFixed(2);

                                        if (size > 2048) {
                                        alert("Your file is more than 2MB at: " + size + " KB.");
                                            //do something here if less
                                        } else {
                                        //   alert("Your file is more than 2MB at: " + size + " KB.");
                                            //do something here if more
                                        }
                                    } else {
                                        alert("File Not Supported");
                                    }
                                    });
                        </script>
                        

                        <div class="row mb-3">
                            <label for="vehicle class" class="col-md-4 col-form-label text-md-end">Vehicle class</label>

                            <div class="col-md-6">
                            <!-- <input type="hidden" name="classA" value="No" /> -->
                            <input type="checkbox" name="classA" id="A" value="Selected" {{ $student->classA == 'Selected' ? 'checked' : '' }} onchange="changeThis1(this)" />class A
                            <input type="radio" name="classA_transmission" id="A_auto" value="Auto" {{ $student->classA_transmission == 'Auto' ? 'checked' : '' }} disabled />Auto
                            <input type="radio" name="classA_transmission" id="A_manual" value="Manual" {{ $student->classA_transmission == 'Manual' ? 'checked' : '' }} disabled />Manual
                            
                            
                            <br/>
                            <input type="checkbox" name='classB' id="B" value="Selected" {{ $student->classB == 'Selected' ? 'checked' : '' }} onchange="changeThis2(this)" />class B
                            <input type="radio" name="classB_transmission" id="B_auto" value="Auto" {{ $student->classB_transmission == 'Auto' ? 'checked' : '' }} disabled />Auto
                            <input type="radio" name="classB_transmission" id="B_manual" value="Manual" {{ $student->classB_transmission == 'Manual' ? 'checked' : '' }} disabled />Manual

                            <br/>
                            <input type="checkbox" id="B1" name="classB1" value="{{ $student->classB1 }}" />class B1

                            <br/>
                            <input type="checkbox" id="CE" name="classCE" value="{{ $student->classCE }}" />class CE

                            </div>

                          
                            

                        </div>


                        <!-- Vehicle class select script -->
                        <script>
                            function changeThis1(sender) { 
                                if(document.getElementById('A').checked){
                                document.getElementById("A_auto").removeAttribute('disabled');
                                document.getElementById("A_manual").removeAttribute('disabled');
                                }
                                else{
                                document.getElementById("A_auto").disabled = true;
                                document.getElementById("A_manual").disabled = true;
                                }
                            }
                        

                            function changeThis2(sender) { 
                                if(document.getElementById('B').checked){
                                document.getElementById("B_auto").removeAttribute('disabled');
                                document.getElementById("B_manual").removeAttribute('disabled');
                                }
                                else{
                                document.getElementById("B_auto").disabled = true;
                                document.getElementById("B_manual").disabled = true;
                                }
                            }
    
                        </script>

                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
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
