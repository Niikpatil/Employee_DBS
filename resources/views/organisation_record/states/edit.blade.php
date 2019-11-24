@extends('layouts.app')
@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/states">States</a></li>
    <li class="breadcrumb-item">Edit</li>
</ol>

<div class="app-body">
    <div class="container">

        <div class="row m-4">
            <div class="text-center col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Update State</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops !</strong> <br />
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li >{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <form action="/states/{{$state->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-row col-md-10">
                                <div class="form-group {{ $errors->has('state') }} col-md-5 offset-md-5">
                                    <label for="state">State</label>
                                    <input type="text" name="state" value="{{ $state->state_name }}" placeholder="eg. Karnataka"  class="form-control" id="state">
                                    <span class="text-danger">{{ $errors->first('state') }}</span>
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
