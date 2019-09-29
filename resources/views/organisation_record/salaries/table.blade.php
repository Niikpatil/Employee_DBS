    <div class="animated fadeIn">

    <div class="row m-4">
        <div class="text-center col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Financial Accounts</h4>       
                    <div align="right">
                        <a href="{{ route('salaries.create') }}" class="btn btn-info" role="button" aria-pressed="true">Create</a>
                    </div> 
                </div>

                <div class="card-body">
                    <table class="table table-striped table-responsive-sm">
                        <thead class="table-dark text">
                            <tr>
                                <th width="1%">Emp_ID</th>
                                <th width="2%">Role</th>
                                <th width="5%">Monthly Salaries</th>
                                <th width="4%">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>201 </td>
                                <td>Human Resource</td>
                                <td>16399</td>
                                <td>
                                    <button type="button" class="view btn btn-sm btn-secondary">View</button>&nbsp;&nbsp;
                                    <button type="button" class="edit btn btn-sm btn-primary">Edit</button>&nbsp;&nbsp;
                                    <button type="button" class="delete btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>501</td>
                                <td>Web Developer</td>
                                <td>25000</td>
                                <td>
                                    <button type="button" class="view btn btn-sm btn-secondary">View</button>&nbsp;&nbsp;
                                    <button type="button" class="edit btn btn-sm btn-primary">Edit</button>&nbsp;&nbsp;
                                    <button type="button" class="delete btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>801</td>
                                <td>Network Admin</td>
                                <td>22000</td>
                                <td>
                                    <button type="button" class="view btn btn-sm btn-secondary">View</button>&nbsp;&nbsp;
                                    <button type="button" class="edit btn btn-sm btn-primary">Edit</button>&nbsp;&nbsp;
                                    <button type="button" class="delete btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
