<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item ">
            <a class="nav-link {{request()->is('home') ? 'active' : ''}}" href="{{url('home')}}">
                <i class="typcn typcn-th-small-outline menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item {{request()->is('post*') ? 'active' : ''}}"> <a class="nav-link" href="{{url('post')}}">
                <i class="typcn typcn-flow-children menu-icon"></i>
                <span class="menu-title">Posts</span>
            </a>
        </li>
        @hasrole('Registrar|Super Admin')
        <li class="nav-item">
            <a class="nav-link {{(request()->is('schoolyear*')|| request()->is('semester*') || request()->is('course*')) ? 'active' : ''}}" data-toggle="collapse" href="#ssettings" aria-expanded="false" aria-controls="icons">
                <i class="typcn typcn-spanner-outline menu-icon"></i>
                <span class="menu-title">School Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ssettings">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{request()->is('schoolyear*') ? 'active' : ''}}"> <a class="nav-link" href="{{url('schoolyear')}}">School Years</a></li>
                    <li class="nav-item {{request()->is('semester*') ? 'active' : ''}}"> <a class="nav-link" href="{{url('semester')}}">Semesters</a></li>
                    <li class="nav-item {{request()->is('course*') ? 'active' : ''}}"> <a class="nav-link" href="{{url('course')}} ">Courses</a></li>
                    <li class="nav-item {{request()->is('level*') ? 'active' : ''}}" > <a class="nav-link" href="{{url('level')}} ">Levels</a></li>
                    <li class="nav-item {{request()->is('section*') ? 'active' : ''}}" > <a class="nav-link" href="{{url('section')}} ">Sections</a></li>
                    <li class="nav-item"> <a class="nav-link" href=" ">Subjects</a></li>
                </ul>
            </div>
        </li>
        @endhasrole
        @hasrole('Admin|Super Admin')

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#assettings" aria-expanded="false" aria-controls="icons">
                <i class="typcn typcn-cog-outline menu-icon"></i>
                <span class="menu-title">Access Control</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="assettings">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{request()->is('role*') ? 'active' : ''}}"> <a class="nav-link " href="{{url('role')}} ">Roles</a></li>
                    <li class="nav-item"> <a class="nav-link" href=" ">Permissions</a></li>
                    <li class="nav-item {{request()->is('user*') ? 'active' : ''}}"> <a class="nav-link " href="{{url('user')}} ">Users</a></li>
                </ul>
            </div>
        </li>
        @endhasrole
    </ul>
</nav>