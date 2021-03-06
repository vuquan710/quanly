@extends('AdminView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('AdminView.Share.breadcrumbs')
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="pull-right tableTools-container">
                            <div class="dt-buttons btn-overlap btn-group">
                                <a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold"
                                   tabindex="0" title="">
                                    <span>
                                        <i class="fa fa-trash-o bigger-110 red"></i>
                                        <span class="hidden">Show/hide columns</span>
                                    </span>
                                </a>
                                <a class="dt-button buttons-csv buttons-html5 btn btn-white btn-primary btn-bold"
                                   title="">
                                    <span>
                                        <i class="fa fa-cloud-download bigger-110 blue"></i>
                                        <span class="hidden">Export to CSV</span>
                                    </span>
                                </a>
                                <a class="dt-button buttons-print btn btn-white btn-primary btn-bold" tabindex="0"
                                   title="">
                                    <span>
                                        <i class="fa fa-print bigger-110 grey"></i>
                                        <span class="hidden">Print</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="pull-left">
                            @include('AdminView.Share.limit_default', ['paginator'=>$data, 'listOption' => \App\Http\Controllers\Admin\AdminAppController::$listOptionPaginate])
                        </div>
                        <div class="clearfix"></div>
                        <div class="table-responsive">
                            <table id="simple-table" class="table  table-bordered table-hover">
                                <thead>
                                <th>STT</th>
                                <th>Họ Tên</th>
                                <th>Ngáy Sinh</th>
                                <th>Tên Phụ Huynh</th>
                                <th>Số Điện Thoại</th>
                                <th>Facebook</th>
                                <th>Khóa Học</th>
                                <th>Lớp Học</th>
                                <th>Ngày Bắt Đầu Nghỉ</th>
                                <th>
                                    <a style="width: 100%" href="{!! route('admin.student.off.create') !!}"
                                       class="btn btn-success btn-bold">
                                    <span>
                                        <i class=" icon-only ace-icon ace-icon fa fa-plus bigger-110"></i>
                                    </span>
                                    </a>
                                </th>
                                </thead>
                                <tbody>
                                @if($data->count()>0)
                                    @foreach($data as $key => $dt)
                                        <tr>
                                            <td>{{($key+1)+($data->currentPage()-1)*$data->perPage()}}</td>
                                            <td>{{$dt->Name}}</td>
                                            <td>{{$dt->Bod}}</td>
                                            <td>{{$dt->Parent}}</td>
                                            <td>{{$dt->Phone}}</td>
                                            <td>{{$dt->Facebook}}</td>
                                            <td>{{$dt->Course}}</td>
                                            <td>{{$dt->ClassName}}</td>
                                            <td>{{$dt->RegDate}}</td>
                                            <td>
                                                <div class="hidden-sm hidden-xs btn-group">
                                                    <a href="{!! route('admin.student.off.update',['id' => $dt->id]) !!}">
                                                        <button class="btn btn-xs btn-info">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                        </button>
                                                    </a>

                                                </div>
                                                <div class="hidden-sm hidden-xs btn-group">
                                                    <form role="form" method="post"
                                                          action="{!! route('admin.student.off.delete') !!}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id" value="{{$dt->id}}">
                                                        <button type="submit" onclick="return confirm('Are you sure?')"
                                                                class="btn btn-xs btn-danger">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>

                        @include('AdminView.Share.pagination_default', ['paginator'=>$data])

                    </div>
                </div>
            </div><!-- /.page-content -->

        </div>
    </div><!-- /.main-content -->

@endsection