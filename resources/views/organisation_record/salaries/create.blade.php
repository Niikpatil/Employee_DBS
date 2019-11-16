@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/salaries">Salaries</a></li>
    <li class="breadcrumb-item active">Create</li>
</ol>

<div class="app-body">
    <div class="container">

        <div class="row m-4">
            <div class="text-center col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Payband</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('salaries.store')}}" method="POST">
                            @csrf
                            <div class="form-row col-md-10 text-left">
                                <div class="form-group col-md-4 offset-md-1">
                                    <label for="Total">Basic pay (monthly) </label>
                                    <input type="text" name="pay" placeholder="eg. 24,000 INR" class="form-control" id="Total">
                                </div>
                                <div class="form-group col-md-4 offset-md-3">
                                    <label for="employeedesignation">Work Role</label>
                                    <select name="role" class="form-control" id="employeedesignation">
                                        <option value="Trainee">Trainee</option>
                                        <option value="Junior">Junior</option>
                                        <option value="Associate">Associate</option>
                                        <option value="Senior">Senior</option>
                                    </select>
                                </div>
                            </div> <br />

                            <a href="/salaries" class="btn btn-sm btn-danger">Back</a>
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
