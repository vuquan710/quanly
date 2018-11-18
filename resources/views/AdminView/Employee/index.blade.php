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

                        <div class="pull-left">
                            @include('AdminView.Share.limit_default', ['paginator'=>$data, 'listOption' => \App\Http\Controllers\Admin\AdminAppController::$listOptionPaginate])
                        </div>
                        <div class="clearfix"></div>
                        <div class="table-responsive">
                            <table id="simple-table" class="table  table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Nhân Viên</th>
                                    <th>Ngáy Sinh</th>
                                    <th>Quê Quán</th>
                                    <th>Bằng Cấp</th>
                                    <th>Cấp Bậc</th>
                                    <th width="7%">
                                        <a style="width: 100%" href="{!! route('admin.employee.create') !!}"
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
                                            <td>{{$dt->TenNV}}</td>
                                            <td>{{$dt->Ngaysinh}}</td>
                                            <td>{{$dt->Quequan}}</td>
                                            <td>{{$dt->Bangcap}}</td>
                                            @if($dt->Capbac == 2)
                                                <td>Quản Lý</td>
                                            @elseif ($dt->Rank == 1)
                                                <td>Giáo Viên</td>
                                            @else
                                                <td>Nhân viên hành chính</td>
                                            @endif
                                            <td>
                                                <div class="hidden-sm hidden-xs btn-group">
                                                    <a href="{!! route('admin.employee.update',['id' => $dt->id]) !!}">
                                                        <button class="btn btn-xs btn-info">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                        </button>
                                                    </a>

                                                </div>
                                                <div class="hidden-sm hidden-xs btn-group">
                                                    <form role="form" method="post"
                                                          action="{!! route('admin.employee.delete') !!}">
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