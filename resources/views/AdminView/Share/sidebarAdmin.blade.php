<div id="sidebar" class="sidebar responsive ace-save-state">

    <ul class="nav nav-list">
        <li class="">
            <a href="#">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Danh Mục </span>
            </a>

            <b class="arrow"></b>
        </li>
        <li class="{{(strpos(\Route::current()->getName(),'admin.employee.') !== false) || (strpos(\Route::current()->getName(),'admin.salary.') !== false) ?"open active":"" }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text">Quản Lý Nhân Viên</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{(strpos(\Route::current()->getName(), 'admin.employee.index') !== false)?"active":"" }}">
                    <a href="{!! route('admin.employee.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Thông Tin Nhân Viên
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="{{(strpos(\Route::current()->getName(), 'admin.salary.index') !== false)?"active":"" }}">
                    <a href="{!! route('admin.salary.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Tính Lương
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="{{(strpos(\Route::current()->getName(),'admin.class.') !== false) || (strpos(\Route::current()->getName(),'admin.class.') !== false) ?"open active":"" }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text">Quản Lý Lớp Học</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{(strpos(\Route::current()->getName(), 'admin.class.index') !== false)?"active":"" }}">
                    <a href="{!! route('admin.class.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Danh Sách Lớp Học
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
            <b class="arrow"></b>
        </li>

        <li class="{{(strpos(\Route::current()->getName(),'admin.course.') !== false) || (strpos(\Route::current()->getName(),'admin.course.') !== false) ?"open active":"" }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text">Quản Lý Khóa Học</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{(strpos(\Route::current()->getName(), 'admin.course.index') !== false)?"active":"" }}">
                    <a href="{!! route('admin.course.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Danh Sách Lớp Học
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
            <b class="arrow"></b>
        </li>

        <li class="{{(strpos(\Route::current()->getName(),'admin.level.') !== false) || (strpos(\Route::current()->getName(),'admin.level.') !== false) ?"open active":"" }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text">Danh Sách Trình Độ</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{(strpos(\Route::current()->getName(), 'admin.level.index') !== false)?"active":"" }}">
                    <a href="{!! route('admin.level.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Danh Sách Lớp Học
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
            <b class="arrow"></b>
        </li>


        <li class="{{(strpos(\Route::current()->getName(), 'admin.student') !== false)?"open active":"" }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text">Quản Lý Học Viên</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>

            <ul class="submenu">

                <li class="{{(strpos(\Route::current()->getName(), 'admin.student.new.index') !== false)?"active":"" }}">
                    <a href="{!! route('admin.student.new.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Danh Sách Học Viên
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="{{(strpos(\Route::current()->getName(), 'admin.student.waiting.index') !== false)?"active":"" }}">
                    <a href="{!! route('admin.student.waiting.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Học Viên Chờ Xếp Lớp
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="{{(strpos(\Route::current()->getName(), 'admin.student.off.index') !== false)?"active":"" }}">
                    <a href="{!! route('admin.student.off.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Học Viên Nghỉ
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="{{(strpos(\Route::current()->getName(), 'admin.student.tutoring.index') !== false)?"active":"" }}">
                    <a href="{!! route('admin.student.tutoring.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Danh Sách Phụ Đạo
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="{{(strpos(\Route::current()->getName(), 'admin.student.test.index') !== false)?"active":"" }}">
                    <a href="{!! route('admin.student.test.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Lớp Kiểm Tra Định Kỳ
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    </ul>

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
           data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>