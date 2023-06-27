<!-- <div class="bg-info fluid p-0"> -->

@extends('layouts.frontend')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header h2 text-center">{{ __('Student Registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('signup') }}">
                        @csrf
                        <div class="py-5">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                         <!-- NIC -->
                         <div class="row mb-3">
                            <label for="nic" class="col-md-4 col-form-label text-md-end">NIC</label>

                            <div class="col-md-6">
                                <input id="nic" type="text" class="form-control" name="nic" required >
                            </div>
                        </div>

                         <!-- Blood Group -->
                         <div class="row mb-3">
                            <label for="bloodGroup" class="col-md-4 col-form-label text-md-end">Blood Group</label>

                            <div class="col-md-6">
                            <select id="bloodGroup" class="form-select form-select-sm"  name="bloodGroup" >
                                
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
                                <input id="contact" type="text" class="form-control" name="contact" required >
                            </div>
                        </div>



                        <!-- address -->
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end" >Address</label>

                            <div class="col-md-6">
                                <textarea name="address" id="address" cols="25" rows="4" class="form-control"  required></textarea>
                            </div>
                        </div>

                       
                        

                        <div class="row mb-3">
                            <label for="contact" class="col-md-4 col-form-label text-md-end">Vehicle class</label>

                            <div class="col-md-6">
                            <!-- <input type="hidden" name="classA" value="No" /> -->
                            <input type="checkbox" name="classA" id="A" value="Selected" onchange="changeThis1(this)" />class A
                            <input type="radio" name="classA_transmission" id="A_auto" value="Auto" disabled />Auto
                            <input type="radio" name="classA_transmission" id="A_manual" value="Manual" disabled />Manual
                            
                            
                            <br/>
                            <input type="checkbox" name='classB' id="B" value="Selected" onchange="changeThis2(this)" />class B
                            <input type="radio" name="classB_transmission" id="B_auto" value="Auto" disabled />Auto
                            <input type="radio" name="classB_transmission" id="B_manual" value="Manual" disabled />Manual

                            <br/>
                            <input type="checkbox" id="B1" name="classB1" value="Selected" />class B1

                            <br/>
                            <input type="checkbox" id="CE" name="classCE" value="Selected" />class CE

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
                                    {{ __('Register') }}
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
