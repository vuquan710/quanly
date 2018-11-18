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
                        <div class="pull-right tableTools-container" style="display: inline-flex">
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
                                    <th>Lớp Học</th>
                                    <th>Ca Học</th>
                                    <th>Khóa Học</th>
                                    <th>Trình Độ</th>
                                    <th>Trạng Thái</th>
                                    <th>Ngày Đăng Ký</th>
                                    <th>Ngày Kết Khóa</th>
                                </tr>
                                </thead>

                                <tbody>
                                @if($data->count()>0)
                                    @foreach($data as $key => $dt)
                                        <tr>
                                            <td>{{($key+1)+($data->currentPage()-1)*$data->perPage()}}</td>
                                            <td>{{$dt->TenHV}}</td>
                                            <td>{{$dt->Ngaysinh}}</td>
                                            <td>{{$dt->TenPH}}</td>
                                            <td>{{$dt->Sdt}}</td>
                                            <td>{{$dt->Fb}}</td>
                                            <td>{{$dt->TenLop}}</td>

                                            @if($dt->Cahoc == 1)
                                                <td>9h30 - 11h00</td>
                                            @elseif ($dt->Cahoc == 2)
                                                <td>17h30 - 19h00</td>
                                            @else
                                                <td>19h05 - 20h35</td>
                                            @endif
                                            <td>{{$dt->Khoahoc }} Tháng</td>
                                            <td>{{$dt->TenTD }}</td>
                                            @if($dt->Trangthai == 3)
                                                <td>Nghỉ</td>
                                            @elseif ($dt->Trangthai == 2)
                                                <td>Đã Xếp Lớp</td>
                                            @else
                                                <td>Chưa Xếp Lớp</td>
                                            @endif
                                            <td>{{$dt->NgayDKM}}</td>
                                            <td>{{$dt->NgayKetKhoa}}</td>
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