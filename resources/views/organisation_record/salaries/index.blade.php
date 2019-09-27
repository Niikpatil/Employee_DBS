@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">
        <a href="admin">Admin</a>
    </li>
    <li class="breadcrumb-item active">Dashboard</li>
</ol>


<div class="app-body">
    <div class="container">
        @include('organisation_record.salaries.table')
    </div>
</div>  

@endsection