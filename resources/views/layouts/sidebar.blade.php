<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="/AdminLTE-master/dist/img/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Library Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/AdminLTE-master/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Ahmet Eren Selvi</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-header">BOOKS</li>
                <li class="nav-item">
                    <a href="{{ route('books.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Book List
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('books.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Create Book
                        </p>
                    </a>
                </li>
                <li class="nav-header">STUDENTS</li>
                <li class="nav-item">
                    <a href="{{ route('students.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Student List
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('students.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Create Student
                        </p>
                    </a>
                </li>
                <li class="nav-header">ADMINS</li>
                <li class="nav-item">
                    <a href="{{ route('admins.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Admin List
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admins.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Create Admin
                        </p>
                    </a>
                </li>
                <li class="nav-header">ANNOUNCEMENTS</li>
                <li class="nav-item">
                    <a href="{{ route('announcements.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>
                            Announcement List
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('announcements.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                            Create Announcement
                        </p>
                    </a>
                </li>
                <li class="nav-header">MESSAGES</li>
                <li class="nav-item">
                    <a href="{{ route('messages.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Message List
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('messages.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-envelope-open"></i>
                        <p>
                            Create Message
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
