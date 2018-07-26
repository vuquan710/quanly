@extends('AdminView.AppLayouts.default')

@section('title', __('Dashboard'))

@section('sidebar')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            @include('AdminView.Share.breadcrumbs', ['breadcrumbs'=>__('messages.Categories')])
            <div class="page-header">
                <h1>
                    {{__('messages.Categories')}}
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        {{__('messages.Add')}}
                    </small>
                </h1>
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Name Category</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="description" class="form-control" id="description"
                                           placeholder="Description">
                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-sm-2 control-label">
                                    Parent
                                </label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" name="parent_id">
                                        <option value="0">-- Select parent --</option>
                                        @foreach($listCategories as $category)
                                            <option value="{{$category['id']}}"
                                                    @if(@$category['disable_status'])disabled="disabled"@endif>{{$category['text_name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.page-content -->

        </div>
    </div><!-- /.main-content -->

@endsection