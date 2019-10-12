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
                    <div class="card-header">
                        <h5>Employee Details </h5>
                    </div>
                    <div class="card-body">
                        <div align="right">
                            <button type="button" name="create_record" id="create_record"
                                class="btn btn-info btn-sm">Create </button>
                        </div> <br />

                        <table class="table table-responsive-sm" id="user_table">
                            <thead class="table-dark">
                                <tr>
                                    <th width="2%">Picture</th>
                                    <th width="5%">First Name</th>
                                    <th width="3%">Job Profile</th>
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


<!-- Modal -->
<div id="AddUser" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold ">Add New Record</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="POST" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col-md-5 offset-1">
                                    <label for="first_name" class="col-xs-2 col-form-label">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" />
                                </div>
                                <div class="col-md-5 ">
                                    <label for="last_name" class="col-xs-2 col-form-label">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control" />
                                </div>
                            </div><br />
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <div class="col-md-4 offset-2">
                                    <label for="image" class="col-xs-2">Picture</label>
                                    <input type="file" name="image" id="image" />
                                    <span id="store_image"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" align="right">
                        <input type="hidden" name="action" id="action" />
                        <input type="hidden" name="hidden_id" id="hidden_id" />
                        <input type="submit" name="action_button" id="action_button" class="btn btn-success"
                            value="Add" />
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>




{{-- MODAL FOR DELETE --}}


<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center text-danger">
                <h4 class="modal-title w-100 font-weight-bold ">Warning</h4>
            </div>
            <div class="modal-body">
                <p align="center">You want to remove this data?</p>
            </div>
            <div class="modal-footer">
                <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>


<script>
    $(document).ready(function () {
        $('#user_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{  route('employee.index')  }}",
            },
            columns: [{
                    data: 'image',
                    name: 'image',
                    render: function (data, type, full, meta) {
                        return "<img src={{ URL::to('/') }}/images/" + data +
                            " width='70' class='img-thumbnail' />";
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
                    name: 'action',
                }
            ]
        });

        $('#create_record').click(function () {
            $('#sample_form')[0].reset();
            $('#user_table').DataTable().ajax.reload();

            $('.modal-title').text("Add User");
            $('#AddUser').modal('show');
            $('#action').val("Add");


            // $('#action_button').val("Add");
            // $('#sample_form')[0].reset();
            // $('#user_table').DataTable().ajax.reload();
        });

        $('#sample_form').on('submit', function (event) {
            event.preventDefault();
            if ($('#action').val() == 'Add') {
                $.ajax({
                    url: "{{ route('employee.store') }}",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    // cache: false,
                    processData: false,
                    dataType: "json",
                    success: function (data) {
                        var html = '';
                        if (data.errors) {
                            html = '<div class="alert alert-danger">';
                            for (var count = 0; count < data.errors.length; count++) {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if (data.success) {
                            html = '<div class="alert alert-success">' + data.success +
                                '</div>';
                            $('#sample_form')[0].reset();
                            $('#user_table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
            }

            if ($('#action').val() == "Edit") {
                $.ajax({
                    url: "{{ route('employee.update') }}",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function (data) {
                        var html = '';
                        if (data.errors) {
                            html = '<div class="alert alert-danger">';
                            for (var count = 0; count < data.errors.length; count++) {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if (data.success) {
                            html = '<div class="alert alert-success">' + data.success +
                                '</div>';
                            $('#sample_form')[0].reset();
                            $('#store_image').html('');
                            $('#user_table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
            }
        });


        $(document).on('click', '.edit', function () {
            var id = $(this).attr('id');
            $('#form_result').html('');
            $.ajax({
                url: "/employee/" + id + "/edit",
                dataType: "json",
                success: function (html) {
                    $('#first_name').val(html.data.first_name);
                    $('#last_name').val(html.data.last_name);
                    $('#store_image').html("<img src={{ URL::to('/') }}/images/" + html.data
                        .image + " width='70' class='img-thumbnail' />");
                    $('#store_image').append(
                        "<input type='hidden' name='hidden_image' value='" + html.data
                        .image + "' />");
                    $('#hidden_id').val(html.data.id);
                    $('.modal-title').text("Edit Record");
                    $('#action_button').val("Edit");
                    $('#action').val("Edit");
                    $('#AddUser').modal('show');
                }
            })
        });

        var user_id;
        $(document).on('click', '.delete', function () {
            user_id = $(this).attr('id');
            $('#confirmModal').modal('show');
        });
        $('#ok_button').click(function () {
            $.ajax({
                url: "employee/destroy/" + user_id,
                success: function (data) {
                    $('#confirmModal').modal('hide');
                    $('#user_table').DataTable().ajax.reload();
                }
            })
        });

    });

</script>
