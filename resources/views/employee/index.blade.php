@extends('layouts.app')
@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"> <a href="/">Home</a></li>
        <li class="breadcrumb-item"> <a href="employee">Employee</a> </li>
        <li class="breadcrumb-item"> Dashboard</li>
    </ol>

    
    <div class="app-body">
        <div class="container">
            <div class="animated fadeIn">


                <div class="row m-4">
                    <div class=" col-lg-12">
                        <div class="card">
                            <div class="card-header"> Employee Table </div>
                            <div class="card-body">
                                <table class="table table-responsive-sm" id="table">
                                    <thead class="table-dark text">
                                        <tr>
                                            <th class="text-center">First_name</th>
                                            <th class="text-center">Job_Profile</th>
                                            <th class="text-center">Shift</th>
                                            <th class="text-center">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    @foreach ($employee as $emp)
                                        <tr>
                                            <td> {{ $emp -> first_name }} </td>
                                            <td> {{ $emp -> last_name }} </td>
                                            <td> {{ $emp -> city }} </td>
                                            <td>
                                                <button type="button" class="btn btn-brand btn-xing">
                                                    View
                                                </button> 
                                                <button type="button" class="btn btn-brand btn-css3">
                                                    Update
                                                </button>
                                                <button type="button" class="btn btn-brand btn-spotify">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            
            
            </div>
        </div>
    </div>
@endsection

<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>