<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">

            <img src="{{asset('Closor-Logo-Wide-darkBG.svg')}}" alt="logo" width="100%">
        </div>
        <ul class="nav" id="side-menu">

            <li class="{{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
                <a href="{{url('admin/dashboard')}}" class="waves-effect"><i class="mdi mdi-view-dashboard"
                        data-icon="v"></i>
                    <span class="hide-menu"> Dashboard <span class="fa arrow"></span> </span>
                </a>
            </li>
            <li class="{{ (request()->is('admin/zone*')) ? 'active' : '' }}">
                <a href="{{url('admin/zone')}}" class="waves-effect"><i class="mdi mdi-home-map-marker"
                        data-icon="v"></i>
                    <span class="hide-menu"> Zones <span class="fa arrow"></span> </span>
                </a>
            </li>
            <li class="{{ (request()->is('admin/moderator*')) ? 'active' : '' }}">
                <a href="{{url('admin/moderator')}}" class="waves-effect"><i class="mdi mdi-crown"
                        data-icon="v"></i>
                    <span class="hide-menu"> Moderators <span class="fa arrow"></span> </span>
                </a>
            </li>
            <li class="{{ (request()->is('admin/user*')) ? 'active' : '' }}">
                <a href="{{url('admin/user')}}" class="waves-effect"><i class="mdi mdi-account"
                        data-icon="v"></i>
                    <span class="hide-menu"> Users <span class="fa arrow"></span> </span>
                </a>
            </li>
            <li class="{{ (request()->is('admin/workplace*')) ? 'active' : '' }}">
                <a href="{{url('admin/workplace')}}" class="waves-effect"><i class="mdi mdi-home-modern"
                        data-icon="v"></i>
                    <span class="hide-menu"> WorkPlaces <span class="fa arrow"></span> </span>
                </a>
            </li>
            <li class="{{ (request()->is('admin/lead*')) ? 'active' : '' }}">
                <a href="{{url('admin/lead')}}" class="waves-effect"><i class="mdi mdi-account-multiple fa-fw"
                        data-icon="v"></i>
                    <span class="hide-menu"> Leads <span class="fa arrow"></span> </span>
                </a>
            </li>
            <li class="{{ (request()->is('admin/email_log*')) ? 'active' : '' }}">
                <a href="{{url('admin/email_log')}}" class="waves-effect"><i class="mdi mdi-account-multiple fa-fw"
                        data-icon="v"></i>
                    <span class="hide-menu"> Email Logs <span class="fa arrow"></span> </span>
                </a>
            </li>
            <li class="{{ (request()->is('admin/view_exceptions*')) ? 'active' : '' }}">
                <a href="{{url('admin/view_exceptions')}}" class="waves-effect"><i class="mdi mdi-account-multiple fa-fw"
                        data-icon="v"></i>
                    <span class="hide-menu"> View Exceptions <span class="fa arrow"></span> </span>
                </a>
            </li>
        </ul>
    </div>
</div>
