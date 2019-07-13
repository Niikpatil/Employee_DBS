<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">
        <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="container-fluid" style="background-color: #F5F5F5">
    <div id="ui-view">










        <div class="row">

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white " style="background-color: #FFA500">
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
                        <div class="text-value">Admin</div>
                        <div>Total {@__@}</div>
                    </div>
                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                        <div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"
                            class="chartjs-size-monitor">
                            {{-- <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div> --}}



                        </div>
                        <canvas class="chart chartjs-render-monitor" id="card-chart1" height="87"
                            style="display: block; height: 70px; width: 259px;" width="323"></canvas>
                        <div id="card-chart1-tooltip" class="chartjs-tooltip bottom top"
                            style="opacity: 0; left: 230.5px; top: 124.889px;">
                            {{-- <div class="tooltip-header">
                                <div class="tooltip-header-item">June</div>
                            </div> --}}
                            {{-- <div class="tooltip-body">
                                <div class="tooltip-body-item"><span class="tooltip-body-item-color"
                                        style="background-color: rgb(0, 165, 224);"></span><span
                                        class="tooltip-body-item-label">My First dataset</span><span
                                        class="tooltip-body-item-value">55</span></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>



















            <div class="col-sm-6 col-lg-3">
                <div class="card text-white " style=" background-color: #008080 ">
                    <div class="card-body pb-0">
                        <button class="btn btn-transparent p-0 float-right" type="button">
                            <i class="icon-location-pin"></i>
                        </button>
                        <div class="text-value">Employee</div>
                        <div>Total {@__@}</div>
                    </div>
                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                        <div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"
                            class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas class="chart chartjs-render-monitor" id="card-chart2" height="87"
                            style="display: block; height: 70px; width: 259px;" width="323"></canvas>
                        <div id="card-chart2-tooltip" class="chartjs-tooltip top bottom"
                            style="opacity: 0; left: 23.5px; top: 139.372px;">
                            <div class="tooltip-header">
                                <div class="tooltip-header-item">January</div>
                            </div>
                            <div class="tooltip-body">
                                <div class="tooltip-body-item"><span class="tooltip-body-item-color"
                                        style="background-color: rgb(38, 203, 253);"></span><span
                                        class="tooltip-body-item-label">My First dataset</span><span
                                        class="tooltip-body-item-value">1</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white " style=" background-color: #4682B4 ">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="text-value">Salary</div>
                        <div>Total {@__@}</div>
                    </div>
                    <div class="chart-wrapper mt-3" style="height:70px;">
                        <div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"
                            class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas class="chart chartjs-render-monitor" id="card-chart3" height="87"
                            style="display: block; height: 70px; width: 291px;" width="363"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white " style=" background-color: #708090 ">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="text-value">Work Role</div>
                        <div>Total {*__*}</div>
                        
                    </div>
                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                        <div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"
                            class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas class="chart chartjs-render-monitor" id="card-chart4" height="87"
                            style="display: block; height: 70px; width: 259px;" width="323"></canvas>
                    </div>
                </div>
            </div>

        </div>



        <div class="row">

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white " style=" background-color: #0F5A7D ">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="text-value">States</div>
                        <div>Total {*__*}</div>
                    </div>
                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                        <div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"
                            class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas class="chart chartjs-render-monitor" id="card-chart1" height="87"
                            style="display: block; height: 70px; width: 259px;" width="323"></canvas>
                        <div id="card-chart1-tooltip" class="chartjs-tooltip bottom top"
                            style="opacity: 0; left: 230.5px; top: 124.889px;">
                            <div class="tooltip-header">
                                <div class="tooltip-header-item">June</div>
                            </div>
                            <div class="tooltip-body">
                                <div class="tooltip-body-item"><span class="tooltip-body-item-color"
                                        style="background-color: rgb(0, 165, 224);"></span><span
                                        class="tooltip-body-item-label">My First dataset</span><span
                                        class="tooltip-body-item-value">55</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white " style=" background-color: #2F4F4F ">
                    <div class="card-body pb-0">
                        <button class="btn btn-transparent p-0 float-right" type="button">
                            <i class="icon-location-pin"></i>
                        </button>
                        <div class="text-value">City</div>
                        <div>Total {*__*}</div>
                    </div>
                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                        <div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"
                            class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas class="chart chartjs-render-monitor" id="card-chart2" height="87"
                            style="display: block; height: 70px; width: 259px;" width="323"></canvas>
                        <div id="card-chart2-tooltip" class="chartjs-tooltip top bottom"
                            style="opacity: 0; left: 23.5px; top: 139.372px;">
                            <div class="tooltip-header">
                                <div class="tooltip-header-item">January</div>
                            </div>
                            <div class="tooltip-body">
                                <div class="tooltip-body-item"><span class="tooltip-body-item-color"
                                        style="background-color: rgb(38, 203, 253);"></span><span
                                        class="tooltip-body-item-label">My First dataset</span><span
                                        class="tooltip-body-item-value">1</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white " style=" background-color: #FFD700 ">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="text-value">Country</div>
                        <div>Total {*__*}</div>
                    </div>
                    <div class="chart-wrapper mt-3" style="height:70px;">
                        <div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"
                            class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas class="chart chartjs-render-monitor" id="card-chart3" height="87"
                            style="display: block; height: 70px; width: 291px;" width="363"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white " style=" background-color: #32CD32 ">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="text-value">Divisions</div>
                        <div>User online</div>
                    </div>
                    <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                        <div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">Traffic</h4>
                        <div class="small text-muted">November 2017</div>
                    </div>

                    {{-- <div class="col-sm-7 d-none d-md-block">
                        <button class="btn btn-primary float-right" type="button">
                            <i class="icon-cloud-download"></i>
                        </button>
                        <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                            <label class="btn btn-outline-secondary">
                                <input id="option1" name="options" autocomplete="off" type="radio"> Day
                            </label>
                            <label class="btn btn-outline-secondary active">
                                <input id="option2" name="options" autocomplete="off" checked="" type="radio"> Month
                            </label>
                            <label class="btn btn-outline-secondary">
                                <input id="option3" name="options" autocomplete="off" type="radio"> Year
                            </label>
                        </div>
                    </div> --}}
                </div>

                {{-- <div class="chart-wrapper" style="height:300px;margin-top:40px;">
                    <div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"
                        class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand"
                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink"
                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                        </div>
                    </div>
                    <canvas class="chart chartjs-render-monitor" id="main-chart" height="375"
                        style="display: block; height: 300px; width: 1218px;" width="1522"></canvas>
                    <div id="main-chart-tooltip" class="chartjs-tooltip center"
                        style="opacity: 0; left: 58px; top: 277.112px;">
                        <div class="tooltip-header">
                            <div class="tooltip-header-item">M</div>
                        </div>
                        <div class="tooltip-body">
                            <div class="tooltip-body-item"><span class="tooltip-body-item-color"
                                    style="background-color: rgb(255, 255, 255);"></span><span
                                    class="tooltip-body-item-label">My First dataset</span><span
                                    class="tooltip-body-item-value">165</span></div>
                            <div class="tooltip-body-item"><span class="tooltip-body-item-color"
                                    style="background-color: rgb(255, 255, 255);"></span><span
                                    class="tooltip-body-item-label">My Second dataset</span><span
                                    class="tooltip-body-item-value">92</span></div>
                            <div class="tooltip-body-item"><span class="tooltip-body-item-color"
                                    style="background-color: rgb(255, 255, 255);"></span><span
                                    class="tooltip-body-item-label">My Third dataset</span><span
                                    class="tooltip-body-item-value">65</span></div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="card-footer">
                <div class="row text-center">
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Visits</div>
                        <strong>29.703 Users (40%)</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Unique</div>
                        <strong>24.093 Users (20%)</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Pageviews</div>
                        <strong>78.706 Views (60%)</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">New Users</div>
                        <strong>22.123 Users (80%)</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="text-muted">Bounce Rate</div>
                        <strong>40.15%</strong>
                        <div class="progress progress-xs mt-2">
                            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


















    </div>
</div>
