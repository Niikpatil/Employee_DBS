@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/department">Departments</a></li>
    <li class="breadcrumb-item">Edit</li>
</ol>

<div class="app-body">
    <div class="container">

        <div class="row m-4">
            <div class="text-center col-lg-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Department</h4>
                    </div>

                    <div class="card-body">
                    <form action="/department/{{ $dept->id }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="form-row col-md-10 text-left">
                                <div class="form-group col-md-5 offset-md-1">
                                    <label for="Division">Division</label>
                                    <input type="text" name="division" value="{{ $dept->division }}" placeholder="eg. Human Resources" class="form-control" id="Division" >
                                </div>
                                <div class="form-group col-md-5 offset-md-1">
                                    <label for="HOD">Department Incharge </label>
                                    <input type="text" name="department_head" value="{{ $dept->department_head }}" placeholder="eg. Mr Borkar" class="form-control" id="HOD">
                                </div>
                            </div> <br />
                        <button type="submit" class="btn btn-success">Add</button> 
                    </form>



                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
