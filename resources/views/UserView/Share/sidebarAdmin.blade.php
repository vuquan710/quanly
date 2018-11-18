<div id="sidebar" class="sidebar responsive ace-save-state">

    <ul class="nav nav-list">
        <li class="">
            <a href="#">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Danh Mục </span>
            </a>

            <b class="arrow"></b>
        </li>
        <li class="{{(strpos(\Route::current()->getName(), 'student') !== false)?"open active":"" }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text">Danh Sách Học Viên</span>
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

                <li class="{{(strpos(\Route::current()->getName(), 'student.new.index') !== false)?"active":"" }}">
                    <a href="{!! route('student.new.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Học Viên Đăng Ký Mới
                    </a>
                    <b class="arrow"></b>
                </li>



                <li class="{{(strpos(\Route::current()->getName(), 'student.waiting.index') !== false)?"active":"" }}">
                    <a href="{!! route('student.waiting.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Danh Sách Chờ Xếp Lớp
                    </a>
                    <b class="arrow"></b>
                </li>



                <li class="{{(strpos(\Route::current()->getName(), 'student.off.index') !== false)?"active":"" }}">
                    <a href="{!! route('student.off.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Danh Sách Học Viên Nghỉ
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="{{(strpos(\Route::current()->getName(), 'student.tutoring.index') !== false)?"active":"" }}">
                    <a href="{!! route('student.tutoring.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Danh Sách Phụ Đạo
                    </a>
                    <b class="arrow"></b>
                </li>


                <li class="{{(strpos(\Route::current()->getName(), 'student.test.index') !== false)?"active":"" }}">
                    <a href="{!! route('student.test.index') !!}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Lớp Kiểm Tra Định Kỳ
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