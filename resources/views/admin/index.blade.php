@extends('layouts.app')
@section('content')

    <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Admin</li>
    </ol>

    <div class="app-body">
        <div class="container">
            @include('admin.table')
        </div>
    </div>
@endsection
