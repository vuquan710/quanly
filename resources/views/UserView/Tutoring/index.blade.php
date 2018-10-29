@extends('UserView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('UserView.Share.breadcrumbs')
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="pull-right tableTools-container"  style="display: inline-flex">
                            <form role="search">
                                <span class="input-icon">
									<input type="text" placeholder="Search ..." name="search"/>
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                            </form>
                        </div>
                        <div class="pull-left">
                            @include('UserView.Share.limit_default', ['paginator'=>$data, 'listOption' => \App\Http\Controllers\Admin\AdminAppController::$listOptionPaginate])
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
                                    <th>Trạng Thái</th>
                                    <th>Buổi Nghỉ</th>
                                    <th>Ngày Phụ Đạo</th>
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
                                            <td>
                                                @if($dt->Status == 1)
                                                    <span class="label label-sm label-warning">Đến Học...</span>
                                                @else
                                                    <span class="label label-sm label-success">Không Đến Học...</span>
                                                @endif
                                            </td>
                                            <td>{{$dt->RegDate}}</td>
                                            <td>{{$dt->RegDateNew}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>

                        @include('UserView.Share.pagination_default', ['paginator'=>$data])

                    </div>
                </div>
            </div><!-- /.page-content -->

        </div>
    </div><!-- /.main-content -->

@endsection