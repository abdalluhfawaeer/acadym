<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <center>{{ Auth::user()->name }}</center>
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="form-control form-control-user" href="/admin/logout/">
                <span>Logout</span></a>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="form-control form-control-user" href="logout/">
                <span>AR</span></a>
        </li>
    </ul>
</nav>
