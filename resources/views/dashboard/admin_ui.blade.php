
<div class="card shadow-sm">
    <div class="card-body text-center">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="card-title">Admin</h4>
                <div class="small text-muted">You have the all access </div>
            </div>
        </div>
    </div>
</div>


<div class="row p-2">
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white shadow" style="background-color: #FFA500">
            <div class="card-body pb-0">
                <div class="text-value">Admin</div>
                <div>Total ( {{ $user }} )</div>
            </div>
            <div class="mt-3 mx-3" style="height:30px;"></div>
        </div>
    </div>


    <div class="col-sm-6 col-lg-3">
        <div class="card text-white shadow" style="background-color: #008080">
            <div class="card-body pb-0">
                {{-- <div class="btn-group float-right">
                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </div> --}}
                <div class="text-value">Employees</div>
                <div>Total ( {{ $employee }} )</div>
            </div>
            <div class="mt-3 mx-3" style="height:30px;"></div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white shadow" style="background-color: #4682B4">
            <div class="card-body pb-0">
                {{-- <div class="btn-group float-right">
                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </div> --}}

                <div class="text-value">Department</div>
                <div>Total ( {{ $department }} )</div>
            </div>

            <div class="mt-3 mx-3" style="height:30px;"></div>
        </div>
    </div>


    <div class="col-sm-6 col-lg-3">
        <div class="card text-white shadow" style="background-color: #708090">
            <div class="card-body pb-0">
                {{-- <div class="btn-group float-right">
                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>

                </div> --}}
                <div class="text-value">City</div>
                <div>Total ( {{ $city }} )</div>
            </div>

            <div class="mt-3 mx-3" style="height:30px;"></div>
        </div>
    </div>
</div>

{{-- <div class="row">
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white shadow" style="background-color: #0F5A7D">
            <div class="card-body pb-0">
                <div class="btn-group float-right">
                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>

                </div>
                <div class="text-value">Department</div>
                <div>Total {@__@}</div>
            </div>

            <div class="mt-3 mx-3" style="height:30px;"></div>
        </div>
    </div>


    <div class="col-sm-6 col-lg-3">
        <div class="card text-white shadow" style="background-color: #2F4F4F">
            <div class="card-body pb-0">
                <div class="btn-group float-right">
                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>

                </div>
                <div class="text-value">Cities</div>
                <div>Total {@__@}</div>
            </div>

            <div class="mt-3 mx-3" style="height:30px;"></div>
        </div>
    </div>


    <div class="col-sm-6 col-lg-3">
        <div class="card text-white shadow" style="background-color: #FFD700">
            <div class="card-body pb-0">
                <div class="btn-group float-right">
                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>

                </div>
                <div class="text-value">States</div>
                <div>Total {@__@}</div>
            </div>

            <div class="mt-3 mx-3" style="height:30px;"></div>
        </div>
    </div>


    <div class="col-sm-6 col-lg-3">
        <div class="card text-white shadow" style="background-color: #32CD32">
            <div class="card-body pb-0">
                <div class="btn-group float-right">
                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>

                </div>
                <div class="text-value">Counties</div>
                <div>Total {@__@}</div>
            </div>

            <div class="mt-3 mx-3" style="height:30px;"></div>
        </div>
    </div>
</div> --}}



