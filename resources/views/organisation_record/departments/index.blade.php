@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item">Departments</li>
</ol>


<div class="app-body">
    <div class="container">
        @include('organisation_record.departments.table')
    </div>
</div>

@endsection