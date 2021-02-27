<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">

            <img src="{{asset('Closor-Logo-Wide-darkBG.svg')}}" alt="logo" width="100%">
        </div>
        <div class="dropdown workspace_dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <b>
                    @if(session('workplace'))
                    {{session('workplace')->title}}
                    @else
                    Create Workspace
                    @endif
                </b>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu  animated">
                @if(session('workplace'))
                @if(get_role(session('workplace')->id) == 0 || get_role(session('workplace')->id) == 1)
                <li>
                    <a href="{{url('workplace/'.session('workplace')->id.'/edit')}}">
                        Workspace Preferences
                    </a>
                </li>
                <li role="separator" class="divider"></li>
                @endif
                @foreach(get_workplaces(session('workplace')->admin_id) as $value)
                <li>
                    <a href="{{url($value->workplace->id.'/products')}}">
                        {{$value->workplace->title}}
                    </a>
                </li>
                @endforeach
                <li role="separator" class="divider"></li>
                @endif
                <li>
                    <a href="{{url('workplace/create')}}">
                        Create New Workspace
                    </a>
                </li>

            </ul>
            <!-- /.dropdown-user -->
        </div>
        <ul class="nav" id="side-menu">


            @if(session('workplace') && get_role(session('workplace')->id) != 9)
            <li class="{{ (request()->is('dashboard*')) ? 'active' : '' }}">
                <a href=" {{url('dashboard')}}" class="waves-effect"><i class="mdi mdi-view-dashboard"
                        data-icon="v"></i>
                    <span class="hide-menu"> Dashboard <span class="fa arrow"></span> </span>
                </a>
            </li>

            <li class="{{ (request()->is('leads*')) ? 'active' : '' }}">
                <a href="{{url('leads')}}" class="waves-effect"><i class="mdi mdi-contacts fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Leads <span class="fa arrow"></span> </span>
                </a>
            </li>
            <li class="{{ (request()->is(session('workplace')->id.'/products')) ? 'active' : '' }}">
                <a href="{{url(session('workplace')->id.'/products')}}" class="waves-effect"><i
                        class="mdi mdi-directions-fork fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Products <span class="fa arrow"></span> </span>
                </a>
            </li>
            <li class="{{ (request()->is(session('workplace')->id.'/team')) ? 'active' : '' }}">
                <a href="{{url(session('workplace')->id.'/team')}}" class="waves-effect"><i
                        class="mdi mdi-account-multiple fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Team <span class="fa arrow"></span> </span>
                </a>
            </li>
            @if(get_role(session('workplace')->id) == 0 || get_role(session('workplace')->id) == 1)
            <li class="{{ (request()->is('sources*')) ? 'active' : '' }}">
                <a href="{{url('sources')}}" class="waves-effect"><i class="mdi mdi-filter fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Lead Sources <span class="fa arrow"></span> </span>
                </a>
            </li>
            <li>
                <a href="#" class="waves-effect"><i class="mdi mdi-chart-bar fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Reports <span class="fa arrow"></span> </span>
                </a>
            </li>
            @endif
            @endif

        </ul>
        <div class="sidebar-footer">
            <a href="https://help.closor.com" target="blank">
                <i class="mdi mdi-information fa-fw" data-icon="v"></i>
                Need Help?
            </a>
        </div>
    </div>
</div>