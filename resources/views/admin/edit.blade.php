@extends('layouts.app')
@section('content')

<ol class="breadcrumb shadow-sm">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
    <li class="breadcrumb-item">Edit</li>
</ol>

<div class="app-body">
    <div class="container">

        <div class="row m-4">
            <div class="text-center col-md-10 offset-md-1">
                <div class="card shadow">
                    <div class="card-header shadow-sm">
                        <h4>Create Admin</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('cities.store') }}" method="POST">
                            @csrf
                            <div class="text-left">
                                <div class="input-group col-md-4 offset-md-2 mt-5">
                                    <div class="input-group-prepend shadow">
                                        <span class="input-group-text shadow"><strong>First Name</strong></span>
                                    </div>
                                    <input type="text" name="first_name" value="{{ $admin->first_name }}" class="form-control shadow" >
                                </div> <br /> <br />

                                <div class="input-group col-md-4 offset-md-2">
                                    <div class="input-group-prepend shadow">
                                        <span class="input-group-text shadow"><strong>Last name</strong></span>
                                    </div>
                                    <input type="text"  name="last_name"  value="{{ $admin->last_name }}"  class="form-control shadow" >
                                </div> <br /> <br />

                                <div class="input-group col-md-6 offset-md-2">
                                    <div class="input-group-prepend shadow">
                                        <span class="input-group-text shadow"><strong>eMail</strong></span>
                                    </div>
                                    <input type="text"  name="email"  value="{{ $admin->email }}"  class="form-control shadow" >
                                </div> <br /> <br />

                                <div class="input-group col-md-6 offset-md-2">
                                    <div class="input-group-prepend shadow">
                                        <span class="input-group-text shadow"><strong>Username</strong></span>
                                    </div>
                                    <input type="text"  name="user_name"  value="{{ $admin->user_name }}"  class="form-control shadow" >
                                </div> <br /> <br />

                                <div class="input-group col-md-6 offset-md-2">
                                    <div class="input-group-prepend shadow">
                                        <span class="input-group-text shadow"><strong>Password</strong></span>
                                    </div>
                                    <input type="password"  name="password"  value="{{ $admin->password }}"  class="form-control shadow" >
                                </div> <br /> <br />

                                {{-- <div class="input-group col-md-6 offset-md-2">
                                    <div class="input-group-prepend shadow">
                                        <span class="input-group-text shadow"
                                            id="basic-addon1"><strong>Password</strong></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div> <br /> <br /> --}}

                                <div class="input-group col-md-6 offset-md-2 ">
                                    <div class="input-group-prepend shadow">
                                        <span class="input-group-text shadow" ><strong>Image</strong></span>
                                    </div>
                                    <div class="custom-file shadow">
                                        <input type="file" class="custom-file-input shadow">
                                        <label class="custom-file-label shadow" for="inputGroupFile01">Choose file</label>
                                    </div>

                                    {{-- <div class="form-group">
                                        <input type="hidden" class="custom-file-input shadow" >
                                    </div> --}}

                                </div>

                            </div> <br /><br />
                            <a href="/cities" class="btn btn-sm btn-danger shadow">Back</a>
                            <div class="btn">
                                <button type="submit" class="btn btn-sm btn-primary shadow">Submit</button>
                            </div>

                            
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
