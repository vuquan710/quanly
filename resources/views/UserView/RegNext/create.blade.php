@extends('AdminView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('AdminView.Share.breadcrumbs')
            <div class="page-content">
                <form class="form-horizontal" role="form" action="{!! route('admin.student.next.create') !!}"
                      method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="Type" value="2">
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Họ Tên </label>

                        <div class="col-sm-9">
                            <input type="text" name="Name"
                                   id="form-field-1" placeholder="Nobita" class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ngày Sinh </label>

                        <div class="col-sm-9">
                            <input type="date" name="Bod"
                                   id="form-field-1" placeholder="07/10/1995" class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên Phụ
                            Huynh </label>

                        <div class="col-sm-9">
                            <input type="text" name="Parent"
                                   id="form-field-1" placeholder="Nobita" class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Khóa Học Hiện Tại</label>

                        <div class="col-sm-9">
                            <input type="text" name="Course"
                                   id="form-field-1" placeholder="English" class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lớp Học </label>

                        <div class="col-sm-9">
                            <input type="text"
                                   name="ClassName" id="form-field-1" placeholder="Ielts 8.0"
                                   class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Số Điện Thoại </label>

                        <div class="col-sm-9">
                            <input type="text" name="Phone"
                                   id="form-field-1" placeholder="01688587941" class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Facebook </label>

                        <div class="col-sm-9">
                            <input type="text" name="Facebook"
                                   id="form-field-1" placeholder="Facebook" class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ca Học </label>

                        <div class="col-sm-9">
                            <select class="col-xs-10 col-sm-5" id="form-field-1" name="Lecture">
                                <option></option>
                                <option value="1">9h30 - 11h00</option>
                                <option value="2">17h30 - 19h00</option>
                                <option value="3">19h05 - 20h35</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ngày Đăng Ký Thêm</label>

                        <div class="col-sm-9">
                            <input type="date" value="<?php echo date("Y-m-d"); ?>" name="RegDateNew" id="form-field-1"
                                   placeholder="11/08/2018" class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Khóa Học Tiếp</label>

                        <div class="col-sm-9">
                            <input type="text" name="CourseNew"
                                   id="form-field-1" placeholder="English" class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>
                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info" type="submit">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Submit
                            </button>
                            <button class="btn" type="reset">
                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

@endsection