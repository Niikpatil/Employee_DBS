@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/countries">Countries</a></li>
    <li class="breadcrumb-item">Edit</li>
</ol>

<div class="app-body">
    <div class="container">

        <div class="row m-4">
            <div class="text-center col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Countries</h4>
                    </div>
                    <div class="card-body">
                        <form action='/countries/{{ $country->id }}' method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-row col-md-10 text-left">
                                <div class="form-group col-md-4 offset-md-5">
                                    <label for="country">Country</label>
                                    <input type="text" name="nation" value="{{ $country->nation }}" placeholder="India"  class="form-control" id="country" >
                                </div>
                            </div> <br />
                            <a href="/countries" class="btn btn-sm btn-danger">Back</a>
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
