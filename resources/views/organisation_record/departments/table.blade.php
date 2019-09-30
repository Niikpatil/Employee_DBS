    <div class="animated fadeIn">

    <div class="row m-4">
        <div class="text-center col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Departments</h4>       
                    <div align="right">
                        <a href="{{ route('department.create') }}" class="btn btn-info" role="button" aria-pressed="true">Create</a>
                    </div> 
                </div>

                <div class="card-body">
                    <table class="table table-striped table-responsive-sm">
                        <thead class="table-dark text">
                            <tr>
                                {{-- <th width="1%">ID</th> --}}
                                <th width="2%">Divisions</th>
                                <th width="5%">Head</th>    
                                <th colspan="2" width="1%">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($department as $dept)
                                <tr>
                                    <td> {{ $dept->division }} </td>
                                    <td> {{ $dept->department_head }} </td>
                                <td > <a class="btn btn-warning" href="department/{{ $dept->id }}/edit">UPDATE</a>  </td>
                                <td > <a class="btn btn-danger" href="department/{{ $dept->id }}/edit">Delete</a> </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
