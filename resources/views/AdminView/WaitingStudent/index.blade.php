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
                            <form role="search">
                                <span class="input-icon">
									<input type="text" placeholder="Search ..." name="search"/>
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                            </form>

                            <form action="{!! route('admin.student.new.download')!!}" method="get">
                                <button class="dt-button buttons-csv buttons-html5 btn btn-white btn-primary btn-bold">
                                    <i class="fa fa-cloud-download bigger-110 blue"></i>
                                    <span class="hidden">Export to CSV</span>
                                </button>
                            </form>
                        </div>
                        <div class="pull-left">
                            @include('AdminView.Share.limit_default', ['paginator'=>$data, 'listOption' => \App\Http\Controllers\Admin\AdminAppController::$listOptionPaginate])
                        </div>
                        <div class="clearfix"></div>
                        <div class="table-responsive">
                            <table id="simple-table" class="table  table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ Tên</th>
                                    <th>Ngáy Sinh</th>
                                    <th>Tên Phụ Huynh</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Facebook</th>
                                    <th>Khóa Học</th>
                                    <th>Lớp Học</th>
                                    <th>Ca Học Mong Muốn</th>
                                    <th>Trạng Thái Xếp Lớp</th>
                                    <th>Ngày Đăng Ký</th>
                                    <th><a style="width: 100%" href="{!! route('admin.student.waiting.create') !!}"
                                           class="btn btn-success btn-bold">
                                    <span>
                                        <i class=" icon-only ace-icon ace-icon fa fa-plus bigger-110"></i>
                                    </span>
                                        </a>
                                    </th>
                                </tr>
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
                                            @if($dt->Lecture == 1)
                                                <td>9h30 - 11h00</td>
                                            @elseif ($dt->Lecture == 1)
                                                <td>17h30 - 19h00</td>
                                            @else
                                                <td>19h05 - 20h35</td>
                                            @endif
                                            <td>
                                                @if($dt->ClassName == '')
                                                    <span class="label label-sm label-warning">Waiting...</span>
                                                @else
                                                    <span class="label label-sm label-success">Confirm...</span>
                                                @endif
                                            </td>
                                            <td>{{$dt->RegDate}}</td>
                                            <td>
                                                <div class="hidden-sm hidden-xs btn-group">
                                                    <a href="{!! route('admin.student.waiting.update',['id' => $dt->id]) !!}">
                                                        <button class="btn btn-xs btn-info">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                        </button>
                                                    </a>

                                                </div>
                                                <div class="hidden-sm hidden-xs btn-group">
                                                    <form role="form" method="post"
                                                          action="{!! route('admin.student.waiting.delete') !!}">
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