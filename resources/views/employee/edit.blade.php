@extends('layouts.app')
@section('content')

<ol class="breadcrumb shadow-sm">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/employee">Employee</a></li>
    <li class="breadcrumb-item">Edit</li>
</ol>

<div class="app-body">
    <div class="container">

        <div class="row">
            <div class="text-center col-md-10 offset-md-1">
                <div class="card shadow">
                    <div class="card-header shadow-sm p-3 mb-4 rounded">
                        <h4>Edit Employee</h4>
                    </div>

                    <div class="card-body">
                        <form action="/employee/{{ $employee->id }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-row col-md-11 text-left">
                                <div class="form-group col-sm-4 offset-sm-2">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="first_name" value="{{ $employee->first_name }}" placeholder="donald"  class="form-control shadow shadow" id="fname" >
                                </div>
                                <div class="form-group col-sm-4 offset-sm-1">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="last_name" value="{{ $employee->last_name }}" placeholder="trump"  class="form-control shadow" id="lname" >
                                </div>
                            </div> <br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group col-sm-4 offset-sm-2">
                                    <label for="email">eMail</label>
                                    <input type="text" name="email" value="{{ $employee->email }}" placeholder="titan@gmail.com"  class="form-control shadow" id="fname" >
                                </div>
                                <div class="form-group col-sm-3 offset-sm-1">
                                    <label for="contact">Contact</label>
                                    <input type="text" name="contact" value="{{ $employee->contact }}" placeholder="+91 9483975483"  class="form-control shadow" id="contact" >
                                </div>
                            </div> <br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group col-sm-4 offset-sm-2">
                                    <label for="division">Division</label>
                                    <select class="form-control shadow" name="division">
                                        <option value="" disabled {{ old('division') ? '' : 'selected' }}>Department</option>
                                        @foreach($division as $div)
                                            <option 
                                                value="{{$div->id}}" {{ old('div') ? 'selected' : '' }}
                                                {{ $employee->empDepartment==$div ? 'selected' : '' }} > {{$div->division}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-4 offset-sm-1">
                                    <label for="role">Designation</label>
                                    <select class="form-control shadow" name="role">
                                        <option value="" disabled {{ old('role') ? '' : 'selected' }}>Work Role</option>
                                        @foreach($salaries as $sal)
                                            <option 
                                                value="{{$sal->id}}" {{ old('sal') ? 'selected' : '' }} 
                                                {{ $employee->empSalary==$sal ? 'selected' : '' }} > {{$sal->role}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> <br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group col-sm-4 offset-sm-2">   
                                    <label for="state">State</label>
                                    <select class="form-control shadow" name="state_name">
                                        <option value="state_name" disabled {{ old('state_name') ? '' : 'selected' }}>State Select</option>
                                        @foreach($state_name as $state)
                                            <option 
                                                value="{{$state->id}}" {{ old('state') ? 'selected' : '' }}
                                                {{ $employee->empState==$state ? 'selected' : ''}} > {{$state->state_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-4 offset-sm-1">
                                    <label for="city">City</label>
                                    <select class="form-control shadow" name="city">
                                        <option value="city" disabled {{ old('city') ? '' : 'selected' }}>City Select</option>
                                        @foreach($cities as $city)
                                            <option 
                                                value="{{$city->id}}" {{ old('city') ? 'selected' : '' }}
                                                {{ $employee->empCity==$city ? 'selected' : ''}} > {{$city->city}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> <br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group col-sm-4 offset-sm-2">
                                    <label for="fname">Country</label>
                                    <select class="form-control shadow" name="country">
                                        <option value="country" disabled {{ old('country') ? '' : 'selected' }}>Country Select</option>
                                        @foreach($countries as $country)
                                            <option
                                                value="{{$country->id}}" {{ old('country') ? 'selected' : '' }}
                                                        {{ $employee->empCountry==$country ? 'selected' : ''}} > {{$country->nation}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-sm-2 offset-sm-1">
                                    <label for="fname">Gender</label>
                                    <select class="form-control shadow" name="gender_name">
                                        <option value="gender_name" disabled {{ old('gender_name') ? '' : 'selected' }}>Select</option>
                                        @foreach($gender_name as $gender)
                                            <option 
                                                value="{{$gender->id}}" {{ old('gender') ? 'selected' : '' }}
                                                {{ $employee->empGender==$gender ? 'selected' : ''}} >{{$gender->gender_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> <br /><br /><br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group col-sm-4 offset-sm-2">
                                    <div class="form-group">    
                                        <label for="picture">Profile Picture</label>
                                        <input type="file" name="pic" class="form-control-file" id="picture"/>
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 offset-sm-2">
                                    <div class="form-group">    
                                        <img src="{{ URL::to('/') }}/images/emp/{{ $employee->pic}}" class="img-thumbnail shadow" width="150px">
                                        <input type="hidden" name="hidden_pic" value="{{ $employee->pic }}" />
                                    </div>
                                </div>
                            </div> <br /> 
                                <a href="/employee" class="btn btn-sm btn-danger shadow-md">Back</a>
                                <div class="btn">
                                    <button type="submit" class="btn btn-sm btn-primary shadow-md">Submit</button> 
                                </div> 
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
