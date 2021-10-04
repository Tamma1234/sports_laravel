<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('home')}}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->


        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        <li class="dropdown dropdown-notifications">
            <a class="nav-link"  data-toggle="dropdown" href="#notifications-panel"  >
                <i data-count="0" class="far fa-bell notification-icon"></i>
                {{-- <span data-count="0" class="badge badge-warning navbar-badge">0</span> --}}
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-toolbar">
                    <div class="dropdown-toolbar-actions">
                        <a href="#">Đơn hàng mới</a>
                    </div>
                    <p class="dropdown-toolbar">Số lượng (<span class="notif-count">0</span>)
                    </p>
                </div>
                <ul class="dropdown-item">
                 
                </ul>
             
            </div>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
            </a>
        </li> --}}
    </ul>
</nav>