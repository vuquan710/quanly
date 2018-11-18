@extends('AdminView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('AdminView.Share.breadcrumbs')
            <div class="page-content">
                <form class="form-horizontal" role="form" action="{!! route('admin.salary.update') !!}"
                      method="post">
                    {{ csrf_field() }}
                    @if(count($data) > 0)
                        @foreach($data as $dt)
                            <input type="hidden" name="id" value="{{$dt->id}}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Họ Tên </label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5" id="form-field-1" name="MaNV">
                                        @if(isset($employee) && $employee->count()>0)
                                            @foreach($employee as $key => $e)
                                                <option value="<?= $e->id ?>" <?= $dt->id == $e->id ? 'selected' : '' ?> ><?= $e->TenNV?></option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ngày Công </label>

                                <div class="col-sm-9">
                                    <input type="text" name="Ngaycong" required value="<?= $dt->Ngaycong?>"
                                           id="form-field-1" class="col-xs-10 col-sm-5 work"
                                           onkeydown="Check(event);" onkeyup="Check(event);"
                                    />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lương Cơ Bản </label>

                                <div class="col-sm-9">
                                    <input type="text" name="LuongCB" required value="<?= $dt->LuongCB?>"
                                           id="form-field-1" class="col-xs-10 col-sm-5 basic"
                                           onkeydown="Check(event);" onkeyup="Check(event);"
                                    />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tháng </label>

                                <div class="col-sm-9">
                                    <input type="month" name="Thang" min="2018-03"value="<?= $dt->Thang?>"
                                           id="form-field-1" class="col-xs-10 col-sm-5 basic"/>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Thưởng </label>

                                <div class="col-sm-9">
                                    <input type="text" name="Thuong" value="<?= $dt->Thuong?>"
                                           id="form-field-1" class="col-xs-10 col-sm-5 bonus"
                                           onkeydown="Check(event);" onkeyup="Check(event);"
                                    />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Thực Lĩnh </label>

                                <div class="col-sm-9">
                                    <input type="text" name="LuongTL" readonly value="<?= $dt->LuongTL?>"
                                           id="form-field-1" class="col-xs-10 col-sm-5 total"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trạng Thái </label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5 status" id="form-field-1" name="Trangthai">
                                        @if(isset($dt->Trangthai))
                                            <option value="1" {{$dt->Trangthai == 1 ? 'selected' : ''  }}>Đã Nhận
                                            </option>
                                            <option value="2" {{$dt->Trangthai == 2 ? 'selected' : ''  }}>Chưa Nhận
                                            </option>

                                        @endif
                                    </select>
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