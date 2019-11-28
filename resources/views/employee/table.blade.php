    <div class="animated fadeIn">

        <div class="row m-4">
            <div class="text-center col-lg-12">
                <div class="card">
                    <div class="card-header shadow-sm p-3 mb-4 rounded">
                        <h4>Employee details</h4>
                        <div align="right">
                            <a href="{{ route('employee.create') }}" class="btn btn-info shadow-md rounded" role="button"
                                aria-pressed="true">Create</a>
                        </div>
                    </div>

                    <div class="card-body shadow-sm">
                        <table class="table table-striped table-responsive-sm">
                            <thead class="table-dark text">
                                <tr>
                                    <th width="2%">Image</th>
                                    <th width="3%">Name</th>
                                    <th width="2%">Role</th>
                                    <th width="5%" colspan="3">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($emp_data as $emp)
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/emp/' .$emp->pic) }}" class="img-thumbnail"
                                            width="70px">
                                    </td>
                                    <td>{{ $emp->first_name }} {{ $emp->last_name }}</td>
                                    <td>{{ $emp->empDepartment->division }}</td>
                                    <td>{{ $emp->role }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary shadow-sm text-white m-1"
                                                href="/employee/{{ $emp->id }}"> Show </a>
                                        <a class="btn btn-sm btn-warning shadow-sm text-white m-1"
                                                href="/employee/{{ $emp->id }}/edit"> Update </a>
                                        <div class="btn btn-sm">
                                            <form action="/employee/{{ $emp->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm shadow-sm btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- For paginate --}}
                        {{ $emp_data->links() }}

                    </div>
                </div>
            </div>

        </div>
    </div>
