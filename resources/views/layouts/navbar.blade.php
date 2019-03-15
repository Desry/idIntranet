<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">General</a></li>
    <li><a href="#!">Professional Services</a></li>
    <!-- <li class="divider"></li> -->
    <li><a href="#!">Labs</a></li>
    <li><a href="#!">Customer Success</a></li>
    <li><a href="#!">Sales</a></li>

</ul>
<div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="/"><img class="logo-img" src="{{URL::asset('/images/infinitedata_logo.jpg')}}" alt="InfiniteDATA Logo"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li @if(isset($activenavbar) and $activenavbar == 'announcements') class="active" @endif><a href="/announcements">Announcements</a></li>
                <li @if(isset($activenavbar) and $activenavbar == 'directory') class="active" @endif><a href="/directory">Directory</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Resources<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>
</div>
<ul class="sidenav" id="mobile-demo">
    <li><a href="/announcements"><i class="material-icons">announcement</i>Announcements</a>
    <li><a href="/directory"><i class="material-icons">people</i>Directory</a></li>
    <li><a href="#!"><i class="material-icons">insert_drive_file</i>Resources</a></li>
</ul>