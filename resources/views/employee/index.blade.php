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

                        <div align="right">
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                data-target="#AddUser">Create</button>
                        </div> <br />

                        <table class="table table-responsive-sm" id="user_table">
                            <thead class="table-dark">
                                <tr>
                                    <th width="2%">Picture</th>
                                    <th width="5%">First Name</th>
                                    <th width="3%">Job Profile</th>
                                    {{-- <th width="1%">Shift</th> --}}
                                    <th width="3%" class="text-center">Option</th>
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
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script>
    $(function () {
        $('#user_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{  route('employee.index')  }}",
            },
            columns: [
                {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, full, meta){
                        return "<img src={{ URL::to('/') }}/images/" + data + " width='70' class='img-thumbnail' />";                        
                    },
                },
                {
                    data: 'first_name',
                    name: 'first_name'
                },
                {
                    data: 'last_name',
                    name: 'last_name'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });
    });

</script>








<!-- Modal -->
<div class="modal fade" id="AddUser" tabindex="-1" role="dialog" aria-labelledby="AddUserTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center">Create New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="POST" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="first_name" class="col-xs-2 col-form-label">First Name</label>
                        <div class="col-sm-4">
                            <input type="text" name="first_name" id="first_name" class="form-control" />
                        </div>

                        <label for="last_name" class="col-xs-2 col-form-label">Last Name</label>
                        <div class="col-sm-4">
                            <input type="text" name="last_name" id="last_name" class="form-control" />
                        </div>
                    </div> <br />


                    <div class="form-group">
                        <div class="form-group">
                            <label class="control-label col-sm-6">Select Profile Image</label>
                            <input type="file" name="image" id="image">
                            <span id="store_image"></span>
                        </div>
                    </div>
                    <div class="form-group" align="right">
                        {{-- <button type="hidden" >Submit</button> --}}
                        {{-- <button type="hidden" >Submit</button> --}}
                        <input type="hidden" name="action" id="action" >
                        <input type="hidden" name="hidden_id" id="hidden_id" >
                        <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" >
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
