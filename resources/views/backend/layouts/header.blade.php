<header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo"><b>Admin</b></a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    </a>
                </li>
            </ul>
        </div>

        <li class="user-footer" style="list-style:none">
            <div class="pull-right">
                <a href="#" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                {!! Form::open(['route' => 'logout', 'method' => 'post', 'id' => 'logout-form'])  !!}
                {!! Form::close() !!}
            </div>
        </li>
    </nav>
</header>