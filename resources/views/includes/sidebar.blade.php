<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/admin') }}" class="site_title">Samidha</a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ asset('/images/profileimages/'.Auth::user()->profile_image)}}" alt="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
            </div>
        </div>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>&nbsp;</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Volunteers <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/admin/volunteers')}}">Volunteers list</a></li>
                            <li><a href="{{url('/admin/volunteer/add')}}">Add Volunteer</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-users"></i> Teams <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                             <li><a href="{{url('/admin/my-teams')}}">My Teams List</a></li>
                            <li><a href="{{url('/admin/teams')}}">Teams List</a></li>
                            <li><a href="{{url('/admin/team/add')}}">Add Team</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-home"></i> Department <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/admin/department')}}">Department list</a></li>
                            <li><a href="{{url('/admin/department/add')}}">Add Department</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-home"></i> Task <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/admin/task')}}">Task list</a></li>
                            <li><a href="{{url('/admin/task/add')}}">Add Task</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('/admin/notifications')}}"><i class="fa fa-bell "></i> Notifications<span class="fa fa-chevron-down"></span></a>                    
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-laptop"></i>
                            Test link
                            <span class="label label-success pull-right">Flag</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <!-- <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a> -->
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/admin/logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
