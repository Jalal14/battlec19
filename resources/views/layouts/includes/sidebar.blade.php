<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="{{ url('admin/dashboard') }}" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title" title="healthcare">BattleC19</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">                
                <li class="nav-item {{ $menu == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="pcoded-mtext"> Dashboard </span>
                    </a>
                </li>
                <li class="nav-item {{ $menu == 'donation' ? 'active' : '' }}">
                    <a href="{{ url('admin/donation') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="fas fa-hand-holding-usd"></i></span>
                        <span class="pcoded-mtext"> Donation </span>
                    </a>
                </li>
                <li class="nav-item {{ $menu == 'member' ? 'active' : '' }}">
                    <a href="{{ url('admin/member/list') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="fas fa-user-cog"></i></span>
                        <span class="pcoded-mtext"> Team member </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
