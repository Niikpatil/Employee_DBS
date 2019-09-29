@extends('layouts.app')
@section('content')

<div class="app-body">
    <div class="container">

        <div class="row m-4">
            <div class="text-center col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Payband</h4>
                    </div>

                    <div class="card-body">
                        <form>
                            <div class="form-row col-md-10 text-left">
                                <div class="form-group col-md-4 offset-md-1">
                                    <label for="Total">Basic pay (monthly) </label>
                                    <input type="text" class="form-control" id="Total" placeholder="eg. 24,000 INR">
                                </div>
                                <div class="form-group col-md-4 offset-md-3">
                                    <label for="employeedesignation">Work Role</label>
                                    <select class="form-control" id="employeedesignation">
                                        <option value="1">Trainee</option>
                                        <option value="2">Junior</option>
                                        <option value="3">Associate</option>
                                        <option value="4">Senior</option>
                                    </select>
                                </div>
                            </div> <br />
                            <button type="submit" class="btn btn-info">Add</button> 
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
