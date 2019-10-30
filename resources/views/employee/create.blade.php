@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/employee">Employee</a></li>
    <li class="breadcrumb-item">Create</li>
</ol>

<div class="app-body">
    <div class="container">

        <div class="row ">
            <div class="text-center col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Payband</h4>
                    </div>

                    <div class="card-body">
                        <form action=" " method="POST">
                            @csrf
                            <div class="form-row col-md-11 text-left">
                                <div class="form-group col-sm-4 offset-sm-2">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" placeholder="donald"  class="form-control" id="fname" >
                                </div>
                                <div class="form-group col-sm-4 offset-sm-1">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" placeholder="trump"  class="form-control" id="lname" >
                                </div>
                            </div> <br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group col-sm-4 offset-sm-2">
                                    <label for="email">eMail</label>
                                    <input type="text" name="email" placeholder="titan@gmail.com"  class="form-control" id="fname" >
                                </div>
                                <div class="form-group col-sm-3 offset-sm-1">
                                    <label for="contact">Contact</label>
                                    <input type="text" name="contact" placeholder="+91 9483975483"  class="form-control" id="contact" >
                                </div>
                            </div> <br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group col-sm-4 offset-sm-2">
                                    <label for="division">Division</label>
                                    <select class="form-control" name="city">
                                        <option value="" disabled {{ old('city') ? '' : 'selected' }}>Department</option>
                                        @foreach($division as $div)
                                            <option value="{{$div->id}}" {{ old('div') ? 'selected' : '' }} >{{$div->division}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-4 offset-sm-1">
                                    <label for="role">Designation</label>
                                    <select class="form-control" name="city">
                                        <option value="" disabled {{ old('city') ? '' : 'selected' }}>Work Role</option>
                                        @foreach($salaries as $sal)
                                            <option value="{{$sal->id}}" {{ old('sal') ? 'selected' : '' }} >{{$sal->role}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> <br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group col-sm-4 offset-sm-2">   
                                    <label for="state">State</label>
                                    <select class="form-control" name="city">
                                        <option value="" disabled {{ old('city') ? '' : 'selected' }}>State Select</option>
                                        @foreach($state_name as $state)
                                            <option value="{{$state->id}}" {{ old('state') ? 'selected' : '' }} >{{$state->state}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-4 offset-sm-1">
                                    <label for="city">City</label>
                                    <select class="form-control" name="city">
                                        <option value="" disabled {{ old('city') ? '' : 'selected' }}>City Select</option>
                                        @foreach($cities as $city)
                                            <option value="{{$city->id}}" {{ old('city') ? 'selected' : '' }} >{{$city->city}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> <br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group col-sm-4 offset-sm-2">
                                    <label for="fname">Country</label>
                                    <select class="form-control" name="city">
                                        <option value="" disabled {{ old('city') ? '' : 'selected' }}>Country Select</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}" {{ old('country') ? 'selected' : '' }} >{{$country->nation}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- <div class="form-group col-sm-4 offset-sm-1">
                                    <label for="fname">Gender</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="custom-control-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="custom-control-label" for="inlineRadio2">Female</label>
                                    </div>  
                                </div> --}}
                            </div> <br />
{{-- 
                            <div class="form-row col-md-11 text-left">
                                <div class="form-group col-sm-4 offset-sm-2">
                                    <label for="dob">Date Of Birth</label>
                                    <input type="text" placeholder="23-jan-1998"  class="form-control" id="dob" disabled>
                                </div> 
                                <div class="form-group col-sm-4 offset-sm-1">
                                    <label for="doj">Date of Join</label>
                                    <input type="text" placeholder="22-may-2019"  class="form-control" id="doj" disabled>
                                </div>
                            </div> <br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group col-sm-4 offset-sm-2">
                                    <div class="form-group">    
                                        <label for="exampleFormControlFile1">File input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div> <br /> --}}

                            <button type="submit" class="btn btn-success">Add</button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
