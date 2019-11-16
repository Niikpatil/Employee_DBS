@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/department">Departments</a></li>
    <li class="breadcrumb-item">Create</li>
</ol>

<div class="app-body">
    <div class="container">

        <div class="row m-4">
            <div class="text-center col-lg-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Department</h4>
                    </div>

                    <div class="card-body">
                    <form action="{{ route('department.store') }}" method="POST">
                            @csrf
                            <div class="form-row col-md-10 text-left">
                                <div class="form-group col-md-5 offset-md-1">
                                    <label for="Division">Division</label>
                                    <input type="text" class="form-control" name="division" id="Division" placeholder="eg. Human Resources">
                                </div>
                                <div class="form-group col-md-5 offset-md-1">
                                    <label for="HOD">Department Incharge </label>
                                    <input type="text" class="form-control" name="department_head" id="HOD" placeholder="eg. Mr Borkar">
                                </div>
                            </div> <br />
                            <a href="/department" class="btn btn-sm btn-danger">Back</a>
                            <div class="btn">
                                <button type="submit" class="btn btn-sm btn-primary">Submit</button> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
