@extends('layouts.app')
@section('content')

<div class="app-body">
    <div class="container">

        <div class="row m-4">
            <div class="text-center col-lg-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Department</h4>
                    </div>

                    <div class="card-body">
                        <form>
                            <div class="form-row col-md-10 text-left">
                                <div class="form-group col-md-5 offset-md-1">
                                    <label for="Division">Division</label>
                                    <input type="text" class="form-control" id="Division" placeholder="eg. Human Resources">
                                </div>
                                <div class="form-group col-md-5 offset-md-1">
                                    <label for="HOD">Department Incharge </label>
                                    <input type="text" class="form-control" id="HOD" placeholder="eg. Mr Borkar">
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
