    <div class="animated fadeIn">

    <div class="row m-4">
        <div class="text-center col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Countries</h4>       
                    <div align="right">
                        <a href="{{ route('countries.create') }}" class="btn btn-info" role="button" aria-pressed="true">Create</a>
                    </div> 
                </div>

                <div class="card-body">
                    <table class="table table-striped table-responsive-sm">
                        <thead class="table-dark text">
                            <tr>
                                {{-- <th width="1%">Code</th> --}}
                                <th width="4%">Country</th>
                                <th width="2%">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nation as $nations)
                                <tr>
                                    <td>{{ $nations->nation }}</td>
                                    <td>
                                        <a href="/countries/{{ $nations->id }}/edit" class="edit btn btn-sm btn-primary">Update</a>&nbsp;
                                        <div class="btn">
                                            <form action="/countries/{{$nations->id}}" method="POST">
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
