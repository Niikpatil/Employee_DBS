@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item">Salaries</li>
</ol>

<div class="app-body">
    <div class="container">
        @include('organisation_record.salaries.table')
    </div>
</div>  

@endsection