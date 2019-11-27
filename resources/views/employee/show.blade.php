@extends('layouts.app')
@section('content')

<ol class="breadcrumb shadow-sm">
    <li class="breadcrumb-item "><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/employee">Employee</a></li>
    <li class="breadcrumb-item">Show</li>
</ol>

<div class="app-body">
    <div class="container">

        <div class="row">
            <div class="text-center col-md-10 offset-md-1 ">
                <div class="card">
                    <div class="card-header shadow-sm p-3 mb-4 rounded">
                        <h4>Show Employee</h4>
                    </div>
                    <div class="card-body">

                        <div class="row col-md-12">
                            <div class="col-md-4">
                                <div class="shadow-sm p-2 mb-5 bg-white rounded">
                                    <img src="{{ URL::to('/') }}/images/emp/{{ $data->pic}}" width="200px">
                                </div>
                            </div>
                            <div class="d-flex align-items-end flex-column bd-highlight mb-3  col-md-6">
                                <div class="mt-3 p-2 bd-highlight">
                                    <h4>{{ $data->first_name }} {{ $data->last_name }}</h4>
                                </div>
                                <div class="p-1 bd-highlight ">{{ $data->email }}</div>
                                <div class="p-1 bd-highlight ">{{ $data->contact }}</div>
                            </div>
                        </div>
                        <hr class="shadow-sm mb-5 bg-white">

                        <div class="row col-md-12 m-5 text-left">
                            <div class="col-md-6 ">
                                <p>Division : <strong> {{ $data->empDepartment->division }} </strong></p>
                            </div>
                        </div>

                        <div class="row col-md-12 m-5 text-left">
                            <div class="col-md-6">
                                <p>Designation : <strong> {{ $data->empSalary->role }} </strong> </p>
                            </div>
                            <div class="col-md-6">
                                <p> Salary : <strong> {{ $data->empSalary->pay }} </strong> </p>
                            </div>
                        </div>

                        <div class="row col-md-12 m-5 text-left">
                            <div class="col-md-6">
                                <p> Gender : <strong> {{ $data->empGender->gender_name }} </strong> </p>
                            </div>
                            <div class="col-md-6">
                                <p>Date of Birth : <strong> feb </strong> </p>
                            </div>
                        </div>

                        <div class="row col-md-12 m-5 text-left">
                            <div class="col-md-6">
                                <p> City : <strong> {{ $data->empCity->city }} </strong> </p>
                            </div>
                            <div class="col-md-6">
                                <p> State : <strong> {{ $data->empState->state_name }} </strong> </p>
                            </div>
                        </div>

                        <div class="row col-md-12 m-5 text-left">
                            <div class="col-md-6">
                                <p> Country : <strong> {{ $data->empCountry->nation }} </strong> </p>
                            </div>
                            <div class="col-md-6">
                                <p>Date of Join : <strong> March </strong> </p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around p-1 mb-5 ">
                        <a class="btn btn-info shadow rounded" href="/employee">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
