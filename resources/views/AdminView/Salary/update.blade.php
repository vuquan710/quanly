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
                                    Công </label>

                                <div class="col-sm-9">
                                    <input type="text" value="{{ isset($dt->Work) ? $dt->Work : '' }}" name="Work"
                                           id="form-field-1" class="col-xs-10 col-sm-5 work"
                                           onkeydown="Check(event);" onkeyup="Check(event);"
                                    />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lương Cơ Bản </label>

                                <div class="col-sm-9">
                                    <input type="text" name="Basic" value="{{ isset($dt->Basic) ? $dt->Basic : '' }}"
                                           id="form-field-1" class="col-xs-10 col-sm-5 basic"
                                           onkeydown="Check(event);" onkeyup="Check(event);"
                                    />
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tháng </label>

                                <div class="col-sm-9">
                                    <input type="month" name="Month" value="{{ isset($dt->Month) ? $dt->Month : '' }}"
                                           id="form-field-1" placeholder="Hà Nội" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Thưởng </label>

                                <div class="col-sm-9">
                                    <input type="text" name="Bonus" value="{{ isset($dt->Bonus) ? $dt->Bonus : '' }}"
                                           id="form-field-1" class="col-xs-10 col-sm-5 basic bonus"
                                           onkeydown="Check(event);" onkeyup="Check(event);"
                                    />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Thực Lĩnh </label>

                                <div class="col-sm-9">
                                    <input type="text" name="Total" readonly value="{{ (($dt->Basic/26)*$dt->Work)+$dt->Bonus }}"
                                           id="form-field-1" class="col-xs-10 col-sm-5 total"/>
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