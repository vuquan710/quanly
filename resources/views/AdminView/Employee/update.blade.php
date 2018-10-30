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
                                    <input type="text" value="{{ isset($dt->Name) ? $dt->Name : '' }}" name="Name"
                                           id="form-field-1" placeholder="Vũ Tùng Quân" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ngày
                                    Sinh </label>

                                <div class="col-sm-9">
                                    <input type="date" value="{{ isset($dt->Bod) ? $dt->Bod : '' }}" name="Bod"
                                           id="form-field-1" placeholder="07/10/1995" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Trường Theo Học </label>

                                <div class="col-sm-9">
                                    <input type="text" name="School" value="{{ isset($dt->School) ? $dt->School : '' }}"
                                           id="form-field-1" placeholder="Đại Học University" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Quê Quán </label>

                                <div class="col-sm-9">
                                    <input type="text" name="Country" value="{{ isset($dt->Country) ? $dt->Country : '' }}"
                                           id="form-field-1" placeholder="Hà Nội" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Cấp Bậc </label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5" id="form-field-1" name="Rank">
                                        <option value="0" {{ isset($dt->Rank) && $dt->Rank == 0  ? 'selected' : '' }} >Nhân viên hành chính</option>
                                        <option value="1" {{ isset($dt->Rank) && $dt->Rank == 1  ? 'selected' : '' }} >Giáo viên</option>
                                        <option value="2" {{ isset($dt->Rank) && $dt->Rank == 2  ? 'selected' : '' }} >Quản Lý</option>
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