    <div class="animated fadeIn">

    <div class="row m-4">
        <div class="text-center col-md-10 offset-md-1">
            <div class="card shadow">
                <div class="card-header shadow-sm p-3 mb-4 rounded">
                    <h4>Admin</h4>
                </div>

                <div class="card-body shadow-sm">
                    <table class="table table-striped table-responsive-sm">
                        <thead class="table-dark text">
                            <tr>
                                <th width="1%">Picture</th>
                                <th width="1%">Username</th>
                                <th width="2%">eMail</th>
                                <th width="5%" colspan="3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin as $adm)
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/admin/' .$adm->admin_pic) }}" class="img-thumbnail" width="70px">
                                    </td>
                                    <td> {{ $adm->name }} </td>
                                    <td> {{ $adm->email }} </td>
                                    <td>
                                        <a class="btn btn-sm btn-primary shadow-sm text-white m-1" href="/admin/{{ $adm->id }}"> Show </a>
                                        <a class="btn btn-sm btn-warning shadow-sm text-white m-1" href="/admin/{{ $adm->id }}/edit"> Update </a>
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
