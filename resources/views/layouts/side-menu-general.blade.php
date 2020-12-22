@if(session('workplace') && get_role(session('workplace')->id) != 9)
<li>
    <a href="#" class="waves-effect"><i class="mdi mdi-home fa-fw" data-icon="v"></i>
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
            class="mdi mdi-account-card-details fa-fw" data-icon="v"></i>
        <span class="hide-menu"> Products <span class="fa arrow"></span> </span>
    </a>
</li>
<li class="{{ (request()->is(session('workplace')->id.'/team')) ? 'active' : '' }}">
    <a href="{{url(session('workplace')->id.'/team')}}" class="waves-effect"><i class="mdi mdi-account-multiple fa-fw"
            data-icon="v"></i>
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
