    <div class="animated fadeIn">

    <div class="row m-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="text-center card-header">
                    <h4>Office Location's</h4>       
                    <div align="right">
                        <a href="{{ route('cities.create') }}" class="btn btn-info" role="button" aria-pressed="true">Create</a>
                    </div> 
                </div>

                <div class="card-body">
                    <table class="table table-striped table-responsive-sm">
                        <thead class="table-dark text">
                            <tr>
                                <th width="2%">City</th>
                                <th width="4%">Locality</th>
                                <th width="1%">Pin Code</th>
                                <th width="4%">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($city as $cities)
                            <tr>
                                <td>{{ $cities->city }}</td>
                                <td>{{ $cities->area }}</td>
                                <td>{{ $cities->pincode }}</td>
                                <td>
                                    <a class="edit btn btn-sm btn-secondary" href="cities/{{ $cities->id }}/edit">Update</a>
                                    <div class="btn">
                                        <form action="/cities/{{ $cities->id }}" method="POST">
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