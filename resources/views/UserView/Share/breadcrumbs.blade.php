<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="{!! route('homes.index') !!}">Home</a>
        </li>
        <li class="active">{{ @$breadcrumbs }}</li>
    </ul><!-- /.breadcrumb -->

    <div class="nav-search" id="nav-search">
        {{--<form class="form-search" action="{{\Route::current()->getName()}}" method="get">--}}
        {{--<form class="form-search" action="{!! route(\Route::current()->getName()) !!}" method="get">--}}
								{{--<span class="input-icon">--}}
									{{--<input type="text" placeholder="Search ..." --}}
                                           {{--id="nav-search-input" autocomplete="off" name="search"/>--}}
									{{--<i class="ace-icon fa fa-search nav-search-icon"></i>--}}
								{{--</span>--}}
        {{--</form>--}}
    </div><!-- /.nav-search -->
</div>