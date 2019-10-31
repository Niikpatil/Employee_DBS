    <div class="animated fadeIn">

        <div class="row m-4">
            <div class="text-center col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>States Records</h4>
                        <div align="right">
                            <a href="{{ route('states.create') }}" class="btn btn-info" role="button"
                                aria-pressed="true">Create</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-responsive-sm">
                            <thead class="table-dark text">
                                <tr>
                                    <th width="2%">State</th>
                                    <th width="4%">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($state as $states)
                                    <tr>
                                        <td class="font-weight-bolder"> {{ $states->state_name }}</td>
                                        <td>
                                            <a href="/states/{{ $states->id }}/edit" class="btn btn-sm btn-secondary">Update</a>&nbsp;&nbsp;
                                            <div class="btn">
                                                <form action="/states/{{ $states->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </div>
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

