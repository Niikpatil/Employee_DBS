@extends('layouts.app')
@section('content')

<div class="app-body">
    <div class="container">

        <div class="row m-4">
            <div class="text-center col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Countries</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('countries.store') }}" method="POST">
                            @csrf
                            <div class="form-row col-md-10 offset-md-2">
                                <div class="form-group col-md-6 offset-md-4">
                                    <label for="country">Country</label>
                                    <input type="text" name="nation" placeholder="India"  class="form-control" id="country" >
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
