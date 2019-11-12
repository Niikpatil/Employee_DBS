    <div class="animated fadeIn">

    <div class="row m-4">
        <div class="text-center col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Employee details</h4>       
                    <div align="right">
                        <a href="{{ route('employee.create') }}" class="btn btn-info" role="button" aria-pressed="true">Create</a>
                    </div> 
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive-sm">
                        <thead class="table-dark text">
                            <tr>
                                <th width="2%">Image</th>
                                <th width="5%">Name</th>
                                <th width="2%">Role</th>
                                <th width="3%">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($emp_data as $emp)
                                <tr>
                                    {{-- <td>Derick Maximinus</td> --}}
                                    <td>{{ $emp->first_name }} {{ $emp->last_name }}</td>
                                    <td>{{ $emp->empDepartment->division }}</td>
                                    <td>{{ $emp->role }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-secondary">Show</a>
                                        <a class="btn btn-sm btn-warning" href="/employee/{{ $emp->id }}/edit">Update</a>
                                        <div class="btn btn-sm" >
                                            <form action="/department/{{ $emp->id }}" method="POST">
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
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">Prev</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
