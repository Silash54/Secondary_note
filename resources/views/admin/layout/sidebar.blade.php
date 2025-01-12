<ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
        <a class="nav-link " href="index.html">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    <li class="nav-heading">Pages</li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>Profile</span>
        </a>
    </li><!-- End Profile Page Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('level.index') }}">
            <i class="bi bi-card-list"></i>
            <span>Level</span>
        </a>
    </li><!-- End Register Page Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('course.index') }}">
            <i class="bi bi-card-list"></i>
            <span>Course</span>
        </a>
    </li><!-- End Course Page Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Login</span>
        </a>
    </li><!-- End Login Page Nav -->
</ul>