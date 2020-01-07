@extends('layouts.app')
@section('content')

<ol class="breadcrumb shadow-sm">
    <li class="breadcrumb-item "><strong>Home</strong></li>
    <li class="breadcrumb-item active"> <strong>Dashboard</strong> </li>
</ol>

<div class="app-body">
    <div class="container">
        @include('dashboard.admin_ui')
    </div>
</div>
@endsection