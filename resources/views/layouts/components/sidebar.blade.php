<div class="c-sidebar c-sidebar-green c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
         {{-- <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/brand/coreui.svg#signet') }}"></use>
        </svg>  --}}
        <h3>
            <center>Tracking Covid</center>
        </h3>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('admin/') ? 'c-active' : '' }}"
                href="{{ url('/admin') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-3d') }}"></use>
                </svg> Dashboard</a>
        </li>
        @if (Auth::user()->role == 'Petugas')
        @else
            <li class="c-sidebar-nav-title">User Management</li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->is('admin/users*') ? 'c-active' : '' }}"
                    href="{{ url('/admin/users') }}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                    </svg> Data Users
                </a>
            </li>
        @endif
        <li class="c-sidebar-nav-title">Data Master</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('admin/provinsi*') ? 'c-active' : '' }}"
                href="{{ url('/admin/provinsi') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur-circular') }}"></use>
                </svg> Provinsi
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('admin/kota*') ? 'c-active' : '' }}"
                href="{{ url('/admin/kota') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur-circular') }}">
                    </use>
                </svg> Kota / Kabupaten
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('admin/kecamatan*') ? 'c-active' : '' }}"
                href="{{ url('/admin/kecamatan') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur-circular') }}"></use>
                </svg> Kecamatan
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('admin/kelurahan*') ? 'c-active' : '' }}"
                href="{{ url('/admin/kelurahan') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur-circular') }}"></use>
                </svg> Kelurahan
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('admin/rw*') ? 'c-active' : '' }}"
                href="{{ url('/admin/rw') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur-circular') }}"></use>
                </svg> Rukun Warga
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('admin/kasus*') ? 'c-active' : '' }}"
                href="{{ url('/admin/kasus') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur-circular') }}"></use>
                </svg> Kasus
            </a>
        </li>
        @if (Auth::user()->role == 'Petugas')
        @else
            <li class="c-sidebar-nav-title">Data Laporan</li>
            
            {{-- <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-link c-sidebar-nav-dropdown" href="{{ url('admin/report-provinsi') }}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur-linear') }}"></use>
                    </svg> Laporan Provinsi
                </a>
            </li>
            <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-link c-sidebar-nav-dropdown"href="{{ url('admin/report-kota')}}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur-linear') }}"></use>
                    </svg> Laporan Kota / Kabupaten</a>
            </li>
            <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-link c-sidebar-nav-dropdown"href="{{ url('admin/report-kecamatan')}}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur-linear') }}">
                        </use>
                    </svg> Laporan Kecamatan</a>
            </li>
            <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-link c-sidebar-nav-dropdown"href="{{ url('admin/report-kelurahan')}}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur-linear') }}">
                        </use>
                    </svg> Laporan Kelurahan / Desa</a>
            </li>
            <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-link c-sidebar-nav-dropdown" href="{{ url('admin/report-rw')}}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur-linear') }}"></use>
                    </svg> Laporan RW
                </a>
            </li> --}}
            <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-link c-sidebar-nav-dropdown" href="{{ url('admin/report-provinsi') }}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur-linear') }}"></use>
                    </svg> Laporan Kasus
                </a>
            </li>
        @endif
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>
