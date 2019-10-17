    <div class="animated fadeIn">

    <div class="row m-4">
        <div class="text-center col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Countries</h4>       
                    <div align="right">
                        <a href="{{ route('employee.create') }}" class="btn btn-info" role="button" aria-pressed="true">Create</a>
                    </div> 
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive-sm">
                        <thead class="table-dark text">
                            <tr>
                                <th>Username</th>
                                <th>Date registered</th>
                                <th>Role</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Derick Maximinus</td>
                                <td>2012/03/01</td>
                                <td>Member</td>
                                <td>
                                    <span class="badge badge-warning">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Friderik Dávid</td>
                                <td>2012/01/21</td>
                                <td>Staff</td>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                            </tr>
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
