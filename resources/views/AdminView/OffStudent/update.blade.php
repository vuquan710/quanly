@extends('AdminView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('AdminView.Share.breadcrumbs')
            <div class="page-content">
                <form class="form-horizontal" role="form" action="{!! route('admin.student.off.update') !!}"
                      method="post">
                    {{ csrf_field() }}
                    @if(count($data) > 0)
                        @foreach($data as $dt)
                            <input type="hidden" name="id" value="{{$dt->id}}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Họ
                                    Tên </label>

                                <div class="col-sm-9">
                                    <input type="text" value="{{ isset($dt->TenHV) ? $dt->TenHV : '' }}" name="TenHV"
                                           id="form-field-1" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ngày
                                    Sinh </label>

                                <div class="col-sm-9">
                                    <input type="date" value="{{ isset($dt->Ngaysinh) ? $dt->Ngaysinh : '' }}"
                                           name="Ngaysinh"
                                           id="form-field-1" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên Phụ
                                    Huynh </label>

                                <div class="col-sm-9">
                                    <input type="text" value="{{ isset($dt->TenPH) ? $dt->TenPH : '' }}" name="TenPH"
                                           id="form-field-1" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Số Điện
                                    Thoại </label>

                                <div class="col-sm-9">
                                    <input type="text" value="{{ isset($dt->Sdt) ? $dt->Sdt : '' }}" name="Sdt"
                                           id="form-field-1" placeholder="01688587941" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"
                                       for="form-field-1">Facebook </label>

                                <div class="col-sm-9">
                                    <input type="text" value="{{ isset($dt->Fb) ? $dt->Fb : '' }}"
                                           name="Fb" id="form-field-1"
                                           class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lớp
                                    Học </label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5 class-std" id="form-field-1" name="Malop">
                                        @if(isset($class) && $class->count()>0)
                                            @foreach($class as $key => $v)
                                                <option value="<?= $v->id ?>" <?= $dt->Malop == $v->id ? 'selected' : '' ?>><?= $v->TenLop?></option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ca
                                    Học </label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5" id="form-field-1" name="Cahoc">
                                        @if(isset($dt->Cahoc))
                                            <option value="1" {{$dt->Cahoc == 1 ? 'selected' : ''  }}>17h30 - 19h00 (Thứ 3 - 5)
                                            </option>
                                            <option value="2" {{$dt->Cahoc == 2 ? 'selected' : ''  }}>17h30 - 19h00 (Thứ 4 - 6)
                                            </option>
                                            <option value="3" {{$dt->Cahoc == 3 ? 'selected' : ''  }}>19h05 - 20h35 (Thứ 4- 6)
                                            </option>
                                            <option value="4" {{$dt->Cahoc == 4 ? 'selected' : ''  }}>19h05 - 20h35 (Thứ 3- 5)
                                            </option>
                                            <option value="5" {{$dt->Cahoc == 5 ? 'selected' : ''  }}>8h - 9h30 (Thứ 7 - CN)
                                            </option>
                                            <option value="6" {{$dt->Cahoc == 6 ? 'selected' : ''  }}>9h30 - 11h00 (Thứ 7 - CN)
                                            </option>
                                            <option value="7" {{$dt->Cahoc == 7 ? 'selected' : ''  }}>14h30 - 16h00 (Thứ 7 - CN)
                                            </option>
                                            <option value="8" {{$dt->Cahoc == 8 ? 'selected' : ''  }}>16h00 - 17h30 (Thứ 7 - CN)
                                            </option>
                                            <option value="9" {{$dt->Cahoc == 9 ? 'selected' : ''  }}>17h30 - 19h00 (Thứ 7 - CN)
                                            </option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Khóa
                                    Học </label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5" id="form-field-1" name="MaKH">
                                        @if(isset($lecture) && $lecture->count()>0)
                                            @foreach($lecture as $key => $v)
                                                <option value="<?= $v->id ?>" <?=$dt->MaKH == $v->id ? 'selected' : '' ?>><?= $v->Khoahoc?> Tháng</option>
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
                                                <option value="<?= $v->id ?>" <?=$dt->MaTD == $v->id ? 'selected' : '' ?>><?= $v->TenTD?></option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right status" for="form-field-1">Trạng Thái</label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5 status" id="form-field-1" name="Trangthai">
                                        <option value="1" <?= $dt->Trangthai == 1 ? 'selected' : '' ?> >Chờ Xếp Lớp</option>
                                        <option value="2" <?= $dt->Trangthai == 2 ? 'selected' : '' ?> >Đã Xếp Lớp</option>
                                        <option value="3" <?= $dt->Trangthai == 3 ? 'selected' : '' ?> >Nghỉ</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group off"style="display:<?= $dt->Trangthai == 3 ? ''  : 'none' ?> ">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ngày Nghỉ</label>

                                <div class="col-sm-9">
                                    <input type="date" value="<?= $dt->NgayNghi != '' ? $dt->NgayNghi :  date("Y-m-d"); ?>" name="NgayNghi" id="form-field-1"
                                           class="col-xs-10 col-sm-5 off-std"/>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info" type="submit">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div><!-- /.page-content -->

        </div>
    </div><!-- /.main-content -->

@endsection