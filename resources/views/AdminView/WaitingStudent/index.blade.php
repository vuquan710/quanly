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
                    {{--<div class="col-md-12 col-lg-12">--}}
                    {{--Search--}}
                    {{--<input name="email" type="text" class="margin-bottom-10" placeholder="Search name, email, phone,..."/><button class="btn btn-success btn-sm margin-left-10">Search</button>--}}
                    {{--</div>--}}
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
                                <tr>
                                    <th class="center" width="1%">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace">
                                            <span class="lbl"></span>
                                        </label>
                                    </th>
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
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @if($data->count()>0)
                                    @foreach($data as $key => $dt)
                                        <tr>
                                            <td class="center">
                                                <label class="pos-rel">
                                                    <input type="checkbox" class="ace"/>
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
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
                                            <td><span class="label label-sm label-warning">Waiting...</span></td>
                                            <td>{{$dt->RegDate}}</td>
                                            <td>
                                                <div class="hidden-sm hidden-xs btn-group">
                                                    <button class="btn btn-xs btn-success">
                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                    </button>

                                                    <button class="btn btn-xs btn-info">
                                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                    </button>

                                                    <button class="btn btn-xs btn-danger">
                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                    </button>

                                                    <button class="btn btn-xs btn-warning">
                                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                                    </button>
                                                </div>

                                                <div class="hidden-md hidden-lg">
                                                    <div class="inline pos-rel">
                                                        <button class="btn btn-minier btn-primary dropdown-toggle"
                                                                data-toggle="dropdown" data-position="auto">
                                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip"
                                                                   title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip"
                                                                   title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip"
                                                                   title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
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