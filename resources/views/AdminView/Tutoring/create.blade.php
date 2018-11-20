@extends('AdminView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('AdminView.Share.breadcrumbs')
            <div class="page-content">

                <form class="form-horizontal" role="form" action="{!! route('admin.student.tutoring.create') !!}"
                      method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên Học Sinh </label>

                        <div class="col-sm-9">
                            <select class="col-xs-10 col-sm-5 class-std" id="form-field-1" name="MaHV">
                                @if(isset($student) && $student->count()>0)
                                    @foreach($student as $key => $v)
                                        <option value="<?= $v->id ?>"><?= $v->TenHV?></option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Thời Gian </label>

                        <div class="col-sm-9">
                            <select class="col-xs-10 col-sm-5" id="form-field-1" name="ThoiGian">
                                <option value="1">9h30 - 11h00</option>
                                <option value="2">17h30 - 19h00</option>
                                <option value="3">19h05 - 20h35</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ngày Phụ Đạo</label>

                        <div class="col-sm-9">
                            <input type="date" value="<?php echo date("Y-m-d"); ?>" name="NgayPD" id="form-field-1"
                                   class="col-xs-10 col-sm-5"/>
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