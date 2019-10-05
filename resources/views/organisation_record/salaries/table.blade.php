    <div class="animated fadeIn">

    <div class="row m-4">
        <div class="text-center col-lg-10 offset-1">
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
                                <th width="2%">Role</th>
                                <th width="5%">Monthly Salaries</th>
                                <th width="4%">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sal as $salary)
                            
                            
                            
                                <tr>
                                    <td>{{ $salary->pay}}</td>
                                    <td>{{ $salary->role}}</td>
                                    <td>
                                        {{-- <button type="button" class="view btn btn-sm btn-secondary">View</button>&nbsp;&nbsp; --}}
                                        <a href="/salaries/{{$salary->id}}/edit"  class="edit btn btn-sm btn-secondary">Edit</a>&nbsp;
                                        <div class="btn">
                                            <form action="/salaries/{{$salary->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete btn btn-sm btn-danger">Delete</button>
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
