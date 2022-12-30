<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">


            <ul class="metismenu" id="side-menu">
                @can('dashboard')
                    <li>
                        <a href="{{ route('dashboard') }}" class="waves-effect">
                            <i class="mdi mdi-home"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
                @endcan

                @can('user')
                    <li>
                        <a href="{{ route('users.index') }}" class="waves-effect">
                            <i class="fas fa-user"></i>
                            <span> User </span>
                        </a>
                    </li>
                @endcan

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="fas fa-wrench"></i>
                        <span> Settings </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('user.settings', Auth::id()) }}">Settings</a></li>
                        <li><a href="{{ route('roles.index') }}">Role & Permission </a></li>

                    </ul>
                </li>

            </ul>
            {{-- <hr>
            <ul class="metismenu align-bottom" id="side-menu">
                <li>
                    <a href="{{route('logout')}}" class="waves-effect">
                        <i class="mdi mdi-power-settings"></i>
                        <span> Logout </span>
                    </a>
                </li>
            </ul> --}}



        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>


    </div>
    <!-- Sidebar -left -->

</div>
