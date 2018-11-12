@extends('AdminView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('AdminView.Share.breadcrumbs')
            <div class="page-content">
                <form class="form-horizontal" role="form" action="{!! route('admin.class.update') !!}"
                      method="post">
                    {{ csrf_field() }}
                        @foreach($data as $dt)
                            <input type="hidden" name="id" value="{{$dt->id}}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Họ
                                    Tên </label>

                                <div class="col-sm-9">
                                    <input type="text" value="{{ isset($dt->TenLop) ? $dt->TenLop : '' }}" name="TenLop"
                                           id="form-field-1" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>
                        @endforeach
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