
<li class = "treeview">
<a href = "#">
<i class = "fa fa-dashboard"></i>
<span>General Users</span>
<span class = "pull-right-container">
<i class = "fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class = "treeview-menu">

<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{{ route('clients.index') }}"><i class="fa fa-user-circle"></i><span>Clients</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-user"></i><span>Users</span></a>
</li>

</ul>
</li>

