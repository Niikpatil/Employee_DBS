    <div class="animated fadeIn">

    <div class="row m-4">
        <div class="text-center col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Office Location's</h4>       
                    <div align="right">
                        <a href="{{ route('cities.create') }}" class="btn btn-info" role="button" aria-pressed="true">Create</a>
                    </div> 
                </div>

                <div class="card-body">
                    <table class="table table-striped table-responsive-sm">
                        <thead class="table-dark text">
                            <tr>
                                <th width="1%">Pin Code</th>
                                <th width="2%">Locality</th>
                                <th width="5%">City</th>
                                <th width="4%">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>425401</td>
                                <td>Hinjwadi</td>
                                <td>Pune</td>
                                <td>
                                    <button type="button" class="view btn btn-sm btn-secondary">View</button>&nbsp;&nbsp;
                                    <button type="button" class="edit btn btn-sm btn-primary">Edit</button>&nbsp;&nbsp;
                                    <button type="button" class="delete btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>590383</td>
                                <td>Andheri West</td>
                                <td>Mumbai</td>
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
