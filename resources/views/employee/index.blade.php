
@extends('layouts.app')
@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"> <a href="/">Home</a></li>
        <li class="breadcrumb-item"> <a href="employee">Employee</a> </li>
        <li class="breadcrumb-item"> Dashboard</li>
    </ol>

    
    <div class="app-body">
        <div class="container">

                <div class="row m-4">
                    <div class=" col-lg-12">
                        <div class="card">
                            <div class="card-header"> Employee Table </div>
                            <div class="card-body">


                                <table class="table table-responsive-sm" id="user_table">
                                    <thead class="table-dark">
                                        <tr>
                                            {{-- <th width="10%">Id</th> --}}
                                            <th width="30%">First_name</th>
                                            <th width="25%">Job_Profile</th>
                                            <th width="25%">Shift</th>
                                            <th  class="text-center">Option</th>
                                        </tr>
                                    </thead>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection

{{-- 
@push('scripts')
    <script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatables.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'first_name', name: 'first_name' },
                { data: 'last_name', name: 'last_name' },
                { data: 'city', name: 'city' },
                // // { data: 'email', name: 'email' }
            ]
        });
    });
    </script>
@endpush --}}











<script>


    $(function() {
    $('#user_table').DataTable({
        processing: true,
        serverSide: true,
        ajax:{
            url: "{!  route('employee.index')  !}",
        },
            columns:[
                {   data: 'first_name', name: 'first_name' },
                {   data: 'last_name', name: 'last_name'  },
                {   data: 'city', name: 'city'          },
                // {   data: 'action', name: 'action'    }
            ]
        });
    });



</script> 