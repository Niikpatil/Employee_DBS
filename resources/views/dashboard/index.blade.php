@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">
        <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Dashboard</li>
</ol>


<div class="app-body">
    <div class="container">
        @include('dashboard.admin_ui')
    </div>
</div>
@endsection