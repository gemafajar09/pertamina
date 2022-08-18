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
                @if(Auth::user()->level == 'SUPER ADMIN')
                <li class="nav-item">
                    <a href="{{route('user')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>
                @endif

                @if(Auth::user()->level == 'SUPER ADMIN')
                <li class="nav-item">
                    <a href="{{route('agen')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Agen NSPO
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('provinsi')}}" class="nav-link">
                        <i class="nav-icon fas fa-city"></i>
                        <p>
                            Provinsi
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('kabupaten')}}" class="nav-link">
                        <i class="nav-icon fas fa-city"></i>
                        <p>
                            Kabupaten / Kota
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('pangkalan')}}" class="nav-link">
                        <i class="nav-icon fas fa-city"></i>
                        <p>
                            Kecamatan
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('pangkalan')}}" class="nav-link">
                        <i class="nav-icon fas fa-city"></i>
                        <p>
                            Kelurahan
                        </p>
                    </a>
                </li>
                @endif

                @if(Auth::user()->level == 'ADMIN APROVAL'  || Auth::user()->level == 'SUPER ADMIN')
                <li class="nav-item">
                    <a href="{{route('aproval')}}" class="nav-link">
                        <i class="nav-icon fas fa-check"></i>
                        <p>
                            Aproval Pangkalan
                        </p>
                    </a>
                </li>
                @endif

                <!-- data punya Agen -->
                @if(Auth::user()->level == 'AGEN' || Auth::user()->level == 'SUPER ADMIN')
                <li class="nav-item">
                    <a href="{{route('pangkalan')}}" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Pangkalan
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
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
                </li> -->
                @endif

                @if(Auth::user()->level == 'AGEN' || Auth::user()->level == 'SUPER ADMIN')
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-upload"></i>
                        <p>
                            Upload Lapoan
                        </p>
                    </a>
                </li> -->

                <!-- admin -->
                <li class="nav-item">
                    <a href="{{route('laporan')}}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Lapoan Agen
                        </p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
