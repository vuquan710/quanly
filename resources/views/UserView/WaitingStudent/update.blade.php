@extends('AdminView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('AdminView.Share.breadcrumbs')
            <div class="page-content">
                <form class="form-horizontal" role="form" action="{!! route('admin.student.waiting.update') !!}"
                      method="post">
                    {{ csrf_field() }}
                    @if(count($data) > 0)
                        @foreach($data as $dt)
                            <input type="hidden" name="Type" value="4">
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
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên Phụ
                                    Huynh </label>

                                <div class="col-sm-9">
                                    <input type="text" value="{{ isset($dt->Parent) ? $dt->Parent : '' }}" name="Parent"
                                           id="form-field-1" placeholder="Vũ Văn Vũ" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Khóa
                                    Học </label>

                                <div class="col-sm-9">
                                    <input type="text" value="{{ isset($dt->Course) ? $dt->Course : '' }}" name="Course"
                                           id="form-field-1" placeholder="English" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lớp
                                    Học </label>

                                <div class="col-sm-9">
                                    <input type="text" value="{{ isset($dt->ClassName) ? $dt->ClassName : '' }}"
                                           name="ClassName" id="form-field-1" placeholder="Ielts 8.0"
                                           class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Số Điện
                                    Thoại </label>

                                <div class="col-sm-9">
                                    <input type="text" value="{{ isset($dt->Phone) ? $dt->Phone : '' }}" name="Phone"
                                           id="form-field-1" placeholder="01688587941" class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"
                                       for="form-field-1">Facebook </label>

                                <div class="col-sm-9">
                                    <input type="text" value="{{ isset($dt->Facebook) ? $dt->Facebook : '' }}"
                                           name="Facebook" id="form-field-1" placeholder="Facebook"
                                           class="col-xs-10 col-sm-5"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ca
                                    Học Mong Muốn </label>

                                <div class="col-sm-9">
                                    <select class="col-xs-10 col-sm-5" id="form-field-1" name="Lecture">
                                        @if(isset($dt->Lecture))
                                            <option value="1" {{$dt->Lecture == 1 ? 'selected' : ''  }}>9h30 - 11h00
                                            </option>
                                            <option value="2" {{$dt->Lecture == 2 ? 'selected' : ''  }}>17h30 - 19h00
                                            </option>
                                            <option value="3" {{$dt->Lecture == 3 ? 'selected' : ''  }}>19h05 - 20h35
                                            </option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Ngày Đăng
                                    Ký</label>

                                <div class="col-sm-9">
                                    <input type="date" value="{{ isset($dt->RegDate) ? $dt->RegDate :'' }}"
                                           name="RegDate" id="form-field-1" placeholder="11/08/2018"
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