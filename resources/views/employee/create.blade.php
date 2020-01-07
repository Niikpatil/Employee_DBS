@extends('layouts.app')
@section('content')

<ol class="breadcrumb shadow-sm">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/employee">Employee</a></li>
    <li class="breadcrumb-item">Create</li>
</ol>

<div class="app-body">
    <div class="container">

        <div class="row">
            <div class="text-center col-md-10 offset-md-1">
                <div class="card shadow">
                    <div class="card-header shadow-sm p-3 mb-4 rounded">
                        <h4>Create Profile</h4>
                    </div>

                    <div class="card-body shadow-sm">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops !</strong> <br />
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row col-md-11 text-left">
                                <div class="form-group  {{ $errors->has('first_name') ? 'has-error' : '' }}  col-sm-4 offset-sm-2">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" placeholder="donald"  class="form-control shadow" id="first_name" >
                                    <span class="text-danger"> {{ $errors->first('first_name') }} </span>
                                </div>
                                <div class="form-group  {{ $errors->has('last_name') ? 'has-error' : '' }}  col-sm-4 offset-sm-1">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" placeholder="trump"  class="form-control shadow" id="last_name" >
                                    <span class="text-danger"> {{ $errors->first('last_name') }} </span>
                                </div>
                            </div> <br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}  col-sm-4 offset-sm-2">
                                    <label for="email">eMail</label>
                                    <input type="text" name="email" placeholder="titan@gmail.com"  class="form-control shadow" id="email" >
                                    <span class="text-danger"> {{ $errors->first('email') }} </span>
                                </div>
                                <div class="form-group  {{ $errors->has('contact') ? 'has-error' : '' }}  col-sm-3 offset-sm-1">
                                    <label for="contact">Contact</label>
                                    <input type="text" name="contact" placeholder="9400000000"  class="form-control shadow" id="contact" >
                                    <span class="text-danger"> {{ $errors->first('contact') }} </span>
                                </div>
                            </div> <br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group  {{ $errors->has('division') ? 'has-error' : '' }}  col-sm-4 offset-sm-2">
                                    <label for="division">Division</label>
                                    <select class="form-control shadow" name="division">
                                        <option value="division" disabled {{ old('division') ? '' : 'selected' }}>Department</option>
                                        @foreach($division as $div)
                                            <option value="{{$div->id}}" {{ old('div') ? 'selected' : '' }} >{{$div->division}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger"> {{ $errors->first('division') }} </span>
                                </div>
                                <div class="form-group  {{ $errors->has('role') ? 'has-error' : '' }}  col-sm-4 offset-sm-1">
                                    <label for="role">Designation</label>
                                    <select class="form-control shadow" name="role">
                                        <option value="role" disabled {{ old('role') ? '' : 'selected' }}>Work Role</option>
                                        @foreach($salaries as $sal)
                                            <option value="{{$sal->id}}" {{ old('sal') ? 'selected' : '' }} >{{$sal->role}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->first('role') }}</span>
                                </div>
                            </div> <br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group  {{ $errors->has('state_name') ? 'has-error' : '' }}  col-sm-4 offset-sm-2">   
                                    <label for="state">State</label>
                                    <select class="form-control shadow" name="state_name">
                                        <option value="state_name" disabled {{ old('state_name') ? '' : 'selected' }}>State Select</option>
                                        @foreach($state_name as $state)
                                            <option value="{{$state->id}}" {{ old('state') ? 'selected' : '' }} >{{$state->state_name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger"> {{ $errors->first('state_name')}} </span>
                                </div>
                                <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }} col-sm-4 offset-sm-1">
                                    <label for="city">City</label>
                                    <select class="form-control shadow" name="city">
                                        <option value="city" disabled {{ old('city') ? '' : 'selected' }}>City Select</option>
                                        @foreach($cities as $city)
                                            <option value="{{$city->id}}" {{ old('city') ? 'selected' : '' }} >{{$city->city}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger"> {{ $errors->first('city') }} </span>
                                </div>
                            </div> <br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group  {{ $errors->has('country') ? 'has-error' : '' }}  col-sm-4 offset-sm-2">
                                    <label for="fname">Country</label>
                                    <select class="form-control shadow" name="country">
                                        <option value="country" disabled {{ old('country') ? '' : 'selected' }}>Country Select</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}" {{ old('country') ? 'selected' : '' }} >{{$country->nation}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger"> {{ $errors->first('country') }} </span>
                                </div>

                                <div class="form-group  {{ $errors->has('gender_name') ? 'has-error' : '' }}  col-sm-2 offset-sm-1">
                                    <label for="fname">Gender</label>
                                    <select class="form-control shadow" name="gender_name">
                                        <option value="gender_name" disabled {{ old('gender_name') ? '' : 'selected' }}>Select</option>
                                        @foreach($gender_name as $gender)
                                            <option value="{{$gender->id}}" {{ old('gender') ? 'selected' : '' }} >{{$gender->gender_name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger"> {{$errors->first('gender_name')}} </span>
                                </div>
                            </div> <br /><br />

                            <div class="form-row col-md-11 text-left">
                                <div class="form-group  {{$errors->has('picture') ? 'has->error' : '' }}  col-sm-4 offset-sm-2">
                                    <div class="form-group">    
                                        <label for="picture">File input</label>
                                        <input type="file" name="pic" class="form-control-file" id="picture" />
                                        <span class="text-danger">{{ $errors->first('picture') }}</span>
                                    </div>
                                </div>
                            </div> <br /> 
                                <a href="/employee" class="btn btn-md btn-danger shadow rounded">Back</a>
                                <div class="btn">
                                    <button type="submit" class="btn btn-md btn-primary shadow rounded">Submit</button> 
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
