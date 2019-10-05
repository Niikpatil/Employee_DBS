@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/cities">City</a></li>
    <li class="breadcrumb-item">Create</li>
</ol>

<div class="app-body">
    <div class="container">

        <div class="row m-4">
            <div class="text-center col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add City</h4>
                    </div>

                    <div class="card-body">
                    <form action="{{ route('cities.store') }}" method="POST">
                        @csrf

                            <div class="form-row col-md-12 text-left">
                                <div class="form-group col-md-3">
                                    <label for="Area">Area</label>
                                    <input type="text" name="area" placeholder="eg. wakad" class="form-control" id="Area">
                                </div>
                                <div class="form-group col-md-3 offset-md-1">
                                    <label for="city">City</label>
                                    <input type="text" name="city" placeholder="eg. pune" class="form-control" id="city">
                                </div>
                                <div class="form-group col-md-3 offset-md-1">
                                    <label for="pcode">Pin Code</label>
                                    <input type="text" name="pincode" placeholder="412107"  class="form-control" id="pcode">
                                </div>
                            </div> <br />

                        <button type="submit" class="btn btn-success">Add</button> 
                    </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
