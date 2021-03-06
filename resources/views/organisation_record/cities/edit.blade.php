@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/cities">City</a></li>
    <li class="breadcrumb-item">Edit</li>
</ol>

<div class="app-body">
    <div class="container">

        <div class="row m-4">
            <div class="text-center col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update City</h4>
                    </div>

                    <div class="card-body">
                    <form action="/cities/{{$city->id}}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="form-row col-md-12 text-left">
                                <div class="form-group col-md-3">
                                    <label for="Area">Area</label>
                                    <input type="text" name="area" value="{{ $city->area }}" placeholder="eg. wakad" class="form-control" id="Area">
                                </div>
                                <div class="form-group col-md-3 offset-md-1">
                                    <label for="city">City</label>
                                    <input type="text" name="city" value="{{ $city->city }}" placeholder="eg. pune" class="form-control" id="city">
                                </div>
                                <div class="form-group col-md-3 offset-md-1">
                                    <label for="pcode">Pin Code</label>
                                    <input type="text" name="pincode" value="{{ $city->pincode }}" placeholder="412107"  class="form-control" id="pcode">
                                </div>
                            </div> <br />

                            <a href="/cities" class="btn btn-sm btn-danger">Back</a>
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