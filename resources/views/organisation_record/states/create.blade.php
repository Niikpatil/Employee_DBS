@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/states">States</a></li>
    <li class="breadcrumb-item">Create</li>
</ol>

<div class="app-body">
    <div class="container">

        <div class="row m-4">
            <div class="text-center col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Add State</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('states.store') }}" method="POST">
                            @csrf
                            <div class="form-row col-md-10">
                                <div class="form-group col-md-5 offset-md-5">
                                    <label for="state">State</label>
                                    <input type="text" name="state_name" placeholder="eg. Karnataka"  class="form-control" id="state">
                                </div>
                            </div> <br />

                            <a href="/states" class="btn btn-sm btn-danger">Back</a>
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
