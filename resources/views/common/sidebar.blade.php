<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="\">
                <i class="nav-icon icon-home"></i> Dashboard
            </a>
        </li>

        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-layers"></i>Company details </a>
            <ul class="nav-dropdown-items">
            
                <li class="nav-item">   
                    <a class="nav-link" href="{{ route('department.index') }}">
                        <i class="nav-icon cui-briefcase"></i> Department</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="base/cards.html">
                        <i class="nav-icon icon-screen-desktop"></i> Division</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('salaries.index') }}">
                        <i class="nav-icon cui-dollar"></i> Salaries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cities.index') }}">
                        <i class="nav-icon icon-location-pin"></i> City</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('states.index') }}">
                        <i class="nav-icon icon-home"></i> State</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('countries.index') }}">
                        <i class="nav-icon icon-globe"></i> Country</a>
                </li>
                
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('employee.index') }}" >
                <i class="nav-icon  icon-people"></i> Employee</a>
        </li> 

        <li class="nav-item">
            <a class="nav-link" href="admin">
                <i class="nav-icon icon-star"></i> Admin</a>
        </li>

    </ul>
</nav>
<button class="sidebar-minimizer brand-minimizer" type="button"></button>
