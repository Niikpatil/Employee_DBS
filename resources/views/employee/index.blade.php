@extends('layouts.app')
@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"> <a href="/">Home</a></li>
        <li class="breadcrumb-item"> <a href="employee">Employee</a> </li>
        <li class="breadcrumb-item"> Dashboard</li>
    </ol>

    <div class="app-body">
        <div class="container">
                <div class="row m-6">
                    <div class="text-center col-lg-12">
                        <div class="card">
                            <div class="card-header"> Employee Table </div>
                            <div class="card-body">


                                <table class="table table-responsive-sm" id="user_table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th width="5%">First Name</th>
                                            <th width="5%">Job Profile</th>
                                            <th width="5%">Shift</th>
                                            <th width="5%" class="text-center">Option</th>
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




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> 

<script>

    $(function() {
    $('#user_table').DataTable({
        processing: true,
        serverSide: true,
        ajax:{
            url: "{{  route('employee.index')  }}",
        },
            columns:[
                {   data: 'first_name', name: 'first_name' },
                {   data: 'last_name', name: 'last_name'  },
                {   data: 'city', name: 'city'          },
                {   data: 'action', name: 'action'    },   
            ]
        });
    });

</script> 