
<!DOCTYPE html>
<html lang="en">
    <head>


		@include('dashboard.head')
    </head>

    <body>
		<!-- Main Wrapper -->

        @yield('content')
          <!-- Header -->
    <div class="main-wrapper">


        <div class="header">


            <div class="header-left">
                <a href="{{ route('index') }}" class="logo">
                    <img src="assets/img/logo.png" width="40" height="40" alt="">
                </a>
            </div>
            <!-- /Logo -->

            <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <!-- Header Title -->
            <div class="page-title-box">
                <h3>Hr payroll</h3>
            </div>
            <!-- /Header Title -->

            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

            <!-- Header Menu -->
            <ul class="nav user-menu">

                <!-- Search -->
                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                    </a>
                        <form action="search.html">
                            <input class="form-control" type="text" placeholder="Search here">
                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </li>
                <!-- /Search -->

                <!-- Flag -->
                <li class="nav-item dropdown has-arrow flag-nav">
                </li>
                <!-- /Flag -->

                <!-- Notifications -->
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="assets/img/profiles/av2.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Rin </span> đã thêm nhiệm vụ mới <span class="noti-title">Đặt hẹn bệnh nhân</span></p>
                                                <p class="noti-time"><span class="notification-time">4 phút trước</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="assets/img/profiles/av2.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Tan anh</span> đã thay đổi tên nhiệm vụ thành <span class="noti-title">Đặt hẹn với cổng thanh toán</span></p>
                                                <p class="noti-time"><span class="notification-time">6 phút trước</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="assets/img/profiles/av2.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Rin Tinus</span> đã thêm <span class="noti-title">Domenic Houston</span> và <span class="noti-title">Claire Mapes</span> vào dự án <span class="noti-title">Module bác sĩ có sẵn</span></p>
                                                <p class="noti-time"><span class="notification-time">8 phút trước</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="assets/img/profiles/av2.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Do</span> đã hoàn thành nhiệm vụ <span class="noti-title">Hội thảo video bệnh nhân và bác sĩ</span></p>
                                                <p class="noti-time"><span class="notification-time">12 phút trước</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="" src="assets/img/profiles/av2.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Giang</span> đã thêm nhiệm vụ mới <span class="noti-title">Module trò chuyện riêng tư</span></p>
                                                <p class="noti-time"><span class="notification-time">2 ngày trước</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <!-- /Notifications -->

                <!-- Message Notifications -->
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Messages</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="assets/img/profiles/av2.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Rin An Giang</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Xin chào, có phải bạn đã nhận được tin nhắn của tôi không?</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="assets/img/profiles/av1.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Rin An Giang</span>
                                                <span class="message-time">6 Tháng 3</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Xin chào, hôm nay bạn đã làm việc gì chưa?</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="assets/img/profiles/av2.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Rin An Giang</span>
                                                <span class="message-time">5 Tháng 3</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Chúc bạn một ngày tốt lành!</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="assets/img/profiles/av1.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Rin An Giang</span>
                                                <span class="message-time">3 Tháng 3</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Bạn đã hoàn thành công việc của mình chưa?</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">
                                                    <img alt="" src="assets/img/profiles/av2.jpg">
                                                </span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Rin An Giang</span>
                                                <span class="message-time">27 Tháng 2</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Bạn có kế hoạch gì cho ngày mai không?</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <div class="topnav-dropdown-footer">
                            <a href="chat.html">View all Messages</a>
                        </div>
                    </div>
                </li>
                <!-- /Message Notifications -->

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img src="assets/img/profiles/av2.jpg" alt="">
                        <span class="status online"></span></span>
                        <span>{{ auth()->user()->name }}</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="{{ route('logOut') }}">Logout</a>
                    </div>
                </li>
            </ul>
            <!-- /Header Menu -->

            <!-- Mobile Menu -->
            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
            <!-- /Mobile Menu -->

        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                @include('dashboard.sidebar')
                @include('dashboard.alert')
            </div>
        </div>

        @yield('main')

    </div>

    <!-- /Header -->

		<!-- /Main Wrapper -->

		<!-- jQuery -->
      @include('dashboard.footer')

    </body>
</html>
