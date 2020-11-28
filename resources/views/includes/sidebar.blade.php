<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{route('home')}}">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="../images/logo-light.png" alt="">
                        <h3><b>Teklif</b>Sistemi</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="treeview">
                <a href="#">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Nav::isRoute('home') }}"><a href="{{route('profile')}}"><i class="ti-more"></i>Dashboard 1</a></li>
                    <li class="{{ Nav::isRoute('profile') }}"><a href="{{route('profile')}}"><i class="ti-more"></i>Dashboard 2</a></li>
                </ul>
            </li>
            <li>
                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none">
                    @csrf
                </form>
                <a href="{{route('logout')}}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit(); ">
                    <i data-feather="lock"></i>
                    <span>Log Out</span>
                </a>
            </li>

        </ul>
    </section>
</aside>
