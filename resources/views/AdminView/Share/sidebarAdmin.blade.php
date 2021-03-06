<div id="sidebar" class="sidebar responsive ace-save-state">
    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="">
            <a href="#">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>
        <li class="{{(strpos(\Route::current()->getName(), 'admin.employee.') !== false)?"open active":"" }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
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

                <li class="">
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                      Chấm Công
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                       Tính Lương
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        <li class="{{(strpos(\Route::current()->getName(), 'admin.student') !== false)?"open active":"" }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text">Quản Lý Học Viên</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>

            <ul class="submenu">

                {{--<li class="{{(strpos(\Route::current()->getName(), 'admin.student.students.index') !== false)?"active":"" }}">--}}
                    {{--<a href="{!! route('admin.student.students.index') !!}">--}}
                        {{--<i class="menu-icon fa fa-caret-right"></i>--}}
                        {{--Danh Sách Học Viên--}}
                    {{--</a>--}}
                    {{--<b class="arrow"></b>--}}
                {{--</li>--}}

                <li class="{{(strpos(\Route::current()->getName(), 'admin.student.new.index') !== false)?"active":"" }}">
                    <a href="{!! route('admin.student.new.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Học Viên Đăng Ký Mới
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="{{(strpos(\Route::current()->getName(), 'admin.student.next.index') !== false)?"active":"" }}">
                    <a href="{!! route('admin.student.next.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Học Viên Đăng Ký Tiếp
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

                <li class="{{(strpos(\Route::current()->getName(), 'admin.student.waiting.index') !== false)?"active":"" }}">
                    <a href="{!! route('admin.student.waiting.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Danh Sách Chờ Xếp Lớp
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

                <li class="{{(strpos(\Route::current()->getName(), 'admin.student.off.index') !== false)?"active":"" }}">
                    <a href="{!! route('admin.student.off.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Danh Sách Học Viên Nghỉ
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        {{--<li class="{{(strpos(\Route::current()->getName(), 'admin.users.') !== false)?"open active":"" }}">--}}
            {{--<a href="#" class="dropdown-toggle">--}}
                {{--<i class="menu-icon fa fa-users"></i>--}}
                {{--<span class="menu-text">{{__('messages.Users')}}</span>--}}
                {{--<b class="arrow fa fa-angle-down"></b>--}}
            {{--</a>--}}
            {{--<b class="arrow"></b>--}}
            {{--<ul class="submenu">--}}
                {{--<li class="{{(strpos(\Route::current()->getName(), 'admin.users.index')!== false)?"active":"" }}">--}}
                    {{--<a href="{!! route('admin.users.index') !!}">--}}
                        {{--<i class="menu-icon fa fa-users"></i>--}}
                        {{--{{__('messages.List_Users')}}--}}
                    {{--</a>--}}
                    {{--<b class="arrow"></b>--}}
                {{--</li>--}}
                {{--<li class="">--}}
                    {{--<a href="#">--}}
                        {{--<i class="menu-icon fa fa-user-secret"></i>--}}
                        {{--Follow users--}}
                    {{--</a>--}}
                    {{--<b class="arrow"></b>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="">--}}
            {{--<a href="">--}}
                {{--<i class="menu-icon fa fa-user"></i>--}}
                {{--<span class="menu-text">--}}
								{{--Staffs--}}
								{{--<span class="badge badge-transparent tooltip-error" title="2 Important Events">--}}
									{{--<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>--}}
								{{--</span>--}}
							{{--</span>--}}
            {{--</a>--}}
            {{--<b class="arrow"></b>--}}
        {{--</li>--}}
        {{--<li class="">--}}
            {{--<a href="">--}}
                {{--<i class="menu-icon fa fa-cogs"></i>--}}
                {{--<span class="menu-text"> Settings </span>--}}
            {{--</a>--}}
            {{--<b class="arrow"></b>--}}
        {{--</li>--}}
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
           data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>