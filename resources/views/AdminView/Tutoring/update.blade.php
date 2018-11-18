@extends('AdminView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('AdminView.Share.breadcrumbs')
            <div class="page-content">
                <form class="form-horizontal" role="form" action="{!! route('admin.student.tutoring.update') !!}"
                      method="post">
                    {{ csrf_field() }}
                    @if(count($data) > 0)
                        @foreach($data as $dt)
                            <input type="hidden" name="id" value="{{$dt->id}}">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lớp Học </label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5 class-std" id="form-field-1" name="MaHV">
                                        @if(isset($student) && $student->count()>0)
                                            @foreach($student as $key => $v)
                                                <option value="<?= $v->id ?>" <?= $dt->MaHV == $v->id ? 'selected' : '' ?>><?= $v->TenHV?></option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Thời Gian </label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5" id="form-field-1" name="ThoiGian">
                                        @if(isset($dt->ThoiGian))
                                            <option value="1" {{$dt->ThoiGian == 1 ? 'selected' : ''  }}>9h30 - 11h00
                                            </option>
                                            <option value="2" {{$dt->ThoiGian == 2 ? 'selected' : ''  }}>17h30 - 19h00
                                            </option>
                                            <option value="3" {{$dt->ThoiGian == 3 ? 'selected' : ''  }}>19h05 - 20h35
                                            </option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ngày Phụ Đạo</label>

                                <div class="col-sm-9">
                                    <input type="date" value="{{ isset($dt->NgayPD) ? $dt->NgayPD :'' }}" name="NgayPD" id="form-field-1"
                                           class="col-xs-10 col-sm-5"/>
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