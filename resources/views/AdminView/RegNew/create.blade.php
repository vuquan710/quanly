@extends('AdminView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('AdminView.Share.breadcrumbs')
            <div class="page-content">
                <form class="form-horizontal" role="form" action="{!! route('admin.student.new.create') !!}"
                      method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên Học Viên </label>

                        <div class="col-sm-9">
                            <input type="text" name="TenHV" required
                                   id="form-field-1" placeholder="Nobita" class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ngày Sinh </label>

                        <div class="col-sm-9">
                            <input type="date" name="Ngaysinh" required
                                   id="form-field-1" placeholder="07/10/1995" class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên Phụ
                            Huynh </label>

                        <div class="col-sm-9">
                            <input type="text" name="TenPH"
                                   id="form-field-1" placeholder="Nobita" class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Số Điện Thoại </label>

                        <div class="col-sm-9">
                            <input type="text" name="Sdt" required
                                   id="form-field-1" placeholder="01688587941" class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Facebook </label>

                        <div class="col-sm-9">
                            <input type="text" name="Fb"
                                   id="form-field-1" placeholder="Facebook" class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lớp Học </label>

                        <div class="col-sm-9">
                            <select class="col-xs-10 col-sm-5 class-std" id="form-field-1" name="Malop">
                                @if(isset($class) && $class->count()>0)
                                    @foreach($class as $key => $v)
                                        <option value="<?= $v->id ?>"><?= $v->TenLop?></option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ca Học </label>

                        <div class="col-sm-9">
                            <select class="col-xs-10 col-sm-5" id="form-field-1" name="Cahoc">
                                <option value="1">9h30 - 11h00</option>
                                <option value="2">17h30 - 19h00</option>
                                <option value="3">19h05 - 20h35</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Khóa Học </label>

                        <div class="col-sm-9">
                            <select class="col-xs-10 col-sm-5" id="form-field-1" name="MaKH">
                                @if(isset($lecture) && $lecture->count()>0)
                                    @foreach($lecture as $key => $v)
                                        <option value="<?= $v->id ?>"><?= $v->Khoahoc?></option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trình Độ </label>

                        <div class="col-sm-9">
                            <select class="col-xs-10 col-sm-5" id="form-field-1" name="MaTD">
                                @if(isset($level) && $level->count()>0)
                                    @foreach($level as $key => $v)
                                        <option value="<?= $v->id ?>"><?= $v->TenTD?></option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ghi Chú </label>

                        <div class="col-sm-9">
                            <input type="text" name="Ghichu"
                                   id="form-field-1" placeholder="Ghi Chú" class="col-xs-10 col-sm-5"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right status" for="form-field-1">Trạng Thái</label>

                        <div class="col-sm-9">
                            <select disabled class="col-xs-10 col-sm-5 status" id="form-field-1" name="Trangthai">
                                <option value="1">Chờ Xếp Lớp</option>
                                <option value="2">Đã Xếp Lớp</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ngày Đăng Ký</label>

                        <div class="col-sm-9">
                            <input type="date" value="<?php echo date("Y-m-d"); ?>" name="NgayDKM" id="form-field-1"
                                   placeholder="11/08/2018" class="col-xs-10 col-sm-5"/>
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