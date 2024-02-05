<div class="container-fluid">
    <button class="header-toggler px-md-0 me-md-3" type="button"
        onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
        <svg class="icon icon-lg">
            <use xlink:href="admin/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
        </svg>
    </button>
    <a class="header-brand d-md-none" href="#">
        <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="admin/assets/brand/coreui.svg#full"></use>
        </svg>
    </a>
    <ul class="header-nav d-none d-md-flex">
        <li class="nav-item"><a class="nav-link" href="{{ url('/admin') }}">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/admin') }}">Website Setting</a></li>
    </ul>
    <ul class="header-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <svg class="icon icon-lg">
                    <use xlink:href="admin/vendors/@coreui/icons/svg/free.svg#cil-cart"></use>
                </svg>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <svg class="icon icon-lg">
                    <use xlink:href="admin/vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                </svg>
            </a>
        </li>
    </ul>
    <ul class="header-nav ms-3">
        <li class="nav-item dropdown">
            <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
                <div class="avatar avatar-md">
                    <img class="avatar-img" src="admin/assets/img/avatars/default.jpg" alt="user@email.com">
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                    <div class="fw-semibold">Settings</div>
                </div>
                <a class="dropdown-item" href="{{ url('admin/account/profile') }}">
                    <svg class="icon me-2">
                        <use xlink:href="admin/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                    </svg> Profile</a>

                <a class="dropdown-item" href="{{ url('admin/account/edit-password') }}">
                    <svg class="icon me-2">
                        <use xlink:href="admin/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                    </svg> Update Password</a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="{{ route('admin.logout') }}">
                    <svg class="icon me-2">
                        <use xlink:href="admin/vendors/@coreui/icons/svg/free.svg#cil-account-logout">
                        </use>
                    </svg> Logout</a>
            </div>
        </li>
    </ul>
</div>
<div class="header-divider"></div>
