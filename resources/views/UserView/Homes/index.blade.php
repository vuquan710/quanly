@extends('UserView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('UserView.Share.breadcrumbs')
            <div class="page-content">
                User-View
            </div><!-- /.page-content -->

        </div>
    </div><!-- /.main-content -->

@endsection