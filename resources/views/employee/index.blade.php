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



                                <table class="table table-responsive-sm" id="table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>First_name</th>
                                            <th>Job_Profile</th>
                                            <th>Shift</th>
                                            <th class="text-center">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($employee as $emp)
                                        <tr>
                                            <td> {{ $emp -> first_name }} </td>
                                            <td> {{ $emp -> last_name }} </td>
                                            <td> {{ $emp -> city }} </td>
                                            <td class="text-center">
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
@endsection

<script type="text/javascript">
        $(function(){
            var table = $('#table').DataTable({
                processing:true,
                serverSide:true,
                ajax: "{{   route('employee.index')   }} ",

                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'first_name', name: 'first_name'},
                    {data: 'last_name', name: 'last_name'},
                    {data: 'city', name: 'city'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]

            });
        });
</script>