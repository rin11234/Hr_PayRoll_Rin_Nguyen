<div id="sidebar-menu" class="sidebar-menu">
    <ul>
        <li class="menu-title">
            <span>Chính</span>
        </li>
        <li class="submenu">
            <a href="#"><i class="la la-dashboard"></i> <span> Bảng điều khiển</span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
                <li><a class="active" href="{{ route('index') }}">Bảng điều khiển quản trị</a></li>
                <li><a href="{{ route('dashboard_employee') }}">Bảng điều khiển Nhân viên</a></li>
            </ul>
        </li>
        <li class="menu-title">
            <span>Nhân viên</span>
        </li>
        <li class="submenu">
            <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Nhân viên</span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
                <li><a href="{{ route('employees.index') }}">Danh sách Nhân viên</a></li>
                <li><a href="{{ route('departments.index') }}">Phòng ban</a></li>
                <li><a href="{{ route('earning.index') }}">Thu nhập</a></li>
                <li><a href="{{ route('vacation_days.index') }}">Ngày nghỉ</a></li>
                <li><a href="{{ route('benefits.index') }}">Quyền lợi</a></li>
            </ul>
        </li>
        <li>
            <a href="settings.html"><i class="la la-cog"></i> <span>Cài đặt</span></a>
        </li>

    </ul>
</div>
