@extends('layouts.app')
@section('content')

<div class="app-body">
    <div class="container">

        <div class="row m-4">
            <div class="text-center col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add City</h4>
                    </div>

                    <div class="card-body">
                        <form>
                            <div class="form-row col-md-12 text-left">
                                <div class="form-group col-md-3">
                                    <label for="Area">Area</label>
                                    <input type="text" class="form-control" id="Area" placeholder="eg. wakad">
                                </div>

                                <div class="form-group col-md-3 offset-md-1">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" placeholder="eg. pune">
                                </div>

                                <div class="form-group col-md-3 offset-md-1">
                                    <label for="pcode">Pin Code</label>
                                    <input type="text" class="form-control" id="pcode" placeholder="412107">
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
