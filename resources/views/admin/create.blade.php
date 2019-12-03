@extends('layouts.app')
@section('content')

<ol class="breadcrumb shadow-sm">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
    <li class="breadcrumb-item">Create</li>
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
                        <form action="{{ route('admin.store') }}" method="POST">
                            @csrf
                            <div class="text-left">
                                <div class="input-group col-md-5 offset-md-2 mt-5">
                                    <div class="input-group-prepend shadow">
                                        <span class="input-group-text shadow" id="basic-addon1"><strong>First Name</strong></span>
                                    </div>
                                    <input type="text" name="first_name" class="form-control shadow" placeholder="Firstname" aria-label="Firstname"
                                        aria-describedby="basic-addon1">
                                </div> <br /> <br />

                                <div class="input-group col-md-5 offset-md-2">
                                    <div class="input-group-prepend shadow">
                                        <span class="input-group-text shadow" id="basic-addon1"><strong>Last name</strong></span>
                                    </div>
                                    <input type="text" name="last_name" class="form-control shadow " placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div> <br /> <br />

                                <div class="input-group col-md-6 offset-md-2">
                                    <div class="input-group-prepend shadow">
                                        <span class="input-group-text shadow" id="basic-addon1"><strong>eMail</strong></span>
                                    </div>
                                    <input type="text" name="email" class="form-control shadow" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div> <br /> <br />

                                <div class="input-group col-md-6 offset-md-2">
                                    <div class="input-group-prepend shadow">
                                        <span class="input-group-text shadow"
                                            id="basic-addon1"><strong>Username</strong></span>
                                    </div>
                                    <input type="text" name="user_name" class="form-control shadow" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div> <br /> <br />

                                <div class="input-group col-md-6 offset-md-2">
                                    <div class="input-group-prepend shadow">
                                        <span class="input-group-text shadow"
                                            id="basic-addon1"><strong>Password</strong></span>
                                    </div>
                                    <input type="password" name="password" class="form-control shadow" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
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
                                        <span class="input-group-text shadow" id="inputGroupFileAddon01"><strong>Image</strong></span>
                                    </div>
                                    <div class="custom-file shadow">
                                        <input type="file" name="a_pic" class="custom-file-input shadow" id="inputGroupFile01"
                                            aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label shadow" for="inputGroupFile01">Choose file</label>
                                    </div>
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
