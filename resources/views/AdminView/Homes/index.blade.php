@extends('AdminView.AppLayouts.default')

@section('title', __('Doremon'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('AdminView.Share.breadcrumbs')
            <div class="page-content">
                Admin-View
            </div><!-- /.page-content -->

        </div>
    </div><!-- /.main-content -->

@endsection