@extends('AdminView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('AdminView.Share.breadcrumbs')
            <div class="page-content">
                <form class="form-horizontal" role="form" action="{!! route('admin.employee.update') !!}"
                      method="post">
                    {{ csrf_field() }}
                    @if(count($data) > 0)
                        @foreach($data as $dt)
                            <input type="hidden" name="Type" value="1">
                            <input type="hidden" name="id" value="{{$dt->id}}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Họ
                                    Tên </label>

                                <div class="col-sm-9">
                                    <input type="text" value="{{ isset($dt->TenNV) ? $dt->TenNV : '' }}" name="TenNV"
                                           id="form-field-1" placeholder="Vũ Tùng Quân" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ngày
                                    Sinh </label>

                                <div class="col-sm-9">
                                    <input type="date" value="{{ isset($dt->Ngaysinh) ? $dt->Ngaysinh : '' }}" name="Ngaysinh"
                                           id="form-field-1" placeholder="07/10/1995" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Quê Quán </label>

                                <div class="col-sm-9">
                                    <input type="text" name="Quequan" value="{{ isset($dt->Quequan) ? $dt->Quequan : '' }}"
                                           id="form-field-1" placeholder="Hà Nội" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bằng Cấp </label>

                                <div class="col-sm-9">
                                    <input type="text" name="Bangcap" value="{{ isset($dt->Bangcap) ? $dt->Bangcap : '' }}"
                                           id="form-field-1" placeholder="Hà Nội" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Cấp Bậc </label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5" id="form-field-1" name="Capbac">
                                        <option value="0" {{ isset($dt->Capbac) && $dt->Capbac == 0  ? 'selected' : '' }} >Nhân viên hành chính</option>
                                        <option value="1" {{ isset($dt->Capbac) && $dt->Capbac == 1  ? 'selected' : '' }} >Giáo viên</option>
                                        <option value="2" {{ isset($dt->Capbac) && $dt->Capbac == 2  ? 'selected' : '' }} >Quản Lý</option>
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