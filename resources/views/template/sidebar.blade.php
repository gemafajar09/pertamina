<aside class="main-sidebar  sidebar-light-primary elevation-4">
    <a href="{{route('home')}}">
        <img src="{{asset('/')}}img/pertamina.png" alt="AdminLTE Logo" style="width: 100%">
    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{route('home')}}" class="nav-link activex">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <!-- data Admin Aprovals -->
                <li class="nav-item">
                    <a href="{{route('user')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('aproval')}}" class="nav-link">
                        <i class="nav-icon fas fa-check"></i>
                        <p>
                            Aproval Pangkalan
                        </p>
                    </a>
                </li>

                <!-- data punya Agen -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Data Master
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('pangkalan')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pangkalan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('agen')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Agen NSPO</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('type')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Type</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-upload"></i>
                        <p>
                            Upload Lapoan
                        </p>
                    </a>
                </li>

                <!-- admin -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Lapoan Agen
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
