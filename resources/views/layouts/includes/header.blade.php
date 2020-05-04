<header class="navbar pcoded-header navbar-expand-lg navbar-light">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
        <a href="#" class="b-brand">
               <div class="b-bg">
                   <i class="feather icon-trending-up"></i>
               </div>
               <span class="b-title" title="$">healthcare</span>
           </a>
    </div>
    <a class="mobile-menu" id="mobile-header" href="javascript:">
        <i class="feather icon-more-horizontal"></i>
    </a>
    <div class="collapse navbar-collapse">
        
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown"><i class="feather icon-shopping-cart"></i></a>
                    <div class="dropdown-menu dropdown-menu-right notification">
                        <div class="noti-head">
                            <h6 class="d-inline-block m-b-0">Orders (3)</h6>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown"><i class="feather icon-bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-right notification">
                        <div class="noti-head">
                            <h6 class="d-inline-block m-b-0">Notifications (1)</h6>
                        </div>
                        <ul class="noti-body">    
                            <li class="notification">
                              
                              <div class="media">
                                <div class="media-body">
                                    <p><i class="feather icon-alert-triangle text-warning"></i><span> Item name: iPhone11 | Quantity 5</span></p>
                                </div>
                              </div>
                            </li>

                            <li class="notification">
                                <div class="media">
                                  <div class="media-body">
                                      <p><span class="text-danger"><i class="feather icon-alert-triangle"></i> Storage running out</span></p>
                                  </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="javascript:" class="displayChatbox">
                    <i class="feather icon-refresh-cw"></i>
                </a>
            </li>
            <li>
                <div class="dropdown drp-user">
                    <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="feather icon-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <a href="{{ url('admin/member/edit') }}" title="Profile">
                                <img src="{{ url('public/images/content/avatar.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                <span class="text-white">Battle</span>
                            </a>
                            <a href="{{ url('/admin/logout') }}" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li><a href="{{ url('admin/password') }}" class="dropdown-item"><i class="feather icon-unlock"></i>Reset password</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
