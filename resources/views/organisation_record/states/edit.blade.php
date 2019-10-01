@extends('layouts.app')
@section('content')

<div class="app-body">
    <div class="container">

        <div class="row m-4">
            <div class="text-center col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Add State</h4>
                    </div>
                    <div class="card-body">
                    <form action="/states/{{$region->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-row col-md-10">
                                <div class="form-group col-md-5 offset-md-5">
                                    <label for="region">State</label>
                                <input type="text" name="state" value="{{ $region->state }}" placeholder="eg. Karnataka"  class="form-control" id="region">
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
