@extends('layouts.app')
@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"> <a href="/">Home</a></li>
        <li class="breadcrumb-item"> <a href="employee">Employee</a> </li>
        <li class="breadcrumb-item"> Dashboard</li>
    </ol>

    
    <div class="app-body">
        <div class="container">
            @include('employee.table')
        </div>
    </div>
@endsection
