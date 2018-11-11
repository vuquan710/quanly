<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8"/>

    <meta name="description" content="User login page"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>@yield('title')</title>
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{!! URL::asset('css/bootstrap.min.css') !!}"/>
    <link rel="stylesheet" href="{!! URL::asset('css/font-awesome.min.css') !!}"/>
    <link rel="stylesheet" href="{!! URL::asset('css/select2.min.css') !!}"/>
    <!-- ace styles -->
    <link rel="stylesheet" href="{!! URL::asset('css/admin/ace.min.css') !!}" class="ace-main-stylesheet"
          id="main-ace-style"/>
    <!--[if lte IE 9]-->
    <link rel="stylesheet" href="{!! URL::asset('css/admin/ace-part2.min.css') !!}"/>
    <!--[endif]-->
    <link rel="stylesheet" href="{!! URL::asset('css/admin/ace-rtl.min.css') !!}"/>

    <!--[if lte IE 9]--->
    <link rel="stylesheet" href="{!! URL::asset('css/admin/ace-ie.min.css') !!}"/>
    <!----[endif]-->
    <link rel="stylesheet" href="{!! URL::asset('css/fashion_font.css') !!}"/>
    <link rel="stylesheet" href="{!! URL::asset('css/app.css') !!}"/>
    <link rel="stylesheet" href="{!! URL::asset('css/admin/style.css') !!}"/>

    @yield('css')

</head>
<body class="admin-layout no-skin">
@widget('AdminNavBar')
@section('sidebar')
@show
<div class="main-container ace-save-state" id="main-container">
    @include('AdminView.Share.sidebarAdmin')
    @yield('content')
    @include('AdminView.Share.footer')
</div>
<script src="{!! URL::asset('js/jquery-3.2.1.min.js') !!}"></script>
<script src="{!! URL::asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! URL::asset('js/select2.min.js') !!}"></script>
<script src="{!! URL::asset('js/admin/ace-extra.min.js') !!}"></script>
<script src="{!! URL::asset('js/admin/ace-elements.min.js') !!}"></script>
<script src="{!! URL::asset('js/admin/ace.min.js') !!}"></script>
<script src="{!! URL::asset('js/common.js') !!}"></script>
<script type="text/javascript">
    function Check(e) {
        var keyCode = (e.keyCode ? e.keyCode : e.which);
        if (keyCode < 47 || keyCode > 58) {
            e.preventDefault();
        }
    }
    $(".basic").keyup(function (e) {
        var basic = $('.basic').val();
        var work = $('.work').val();
        var bonus = $('.bonus').val();
        if ( bonus > 0) {
            basic = (work / 26) * basic + parseInt(bonus);
        }else {
            basic = (work / 26) * basic;
        }
        $('.total').val(basic);
    });

    $(".work").keyup(function () {
        var basic = $('.basic').val();
        var work = $('.work').val();
        var bonus = $('.bonus').val();
        if ( bonus > 0) {
            basic = (work / 26) * basic + parseInt(bonus);
        }else {
            basic = (work / 26) * basic;
        }
        $('.total').val(basic);
    });

    $(".bonus").keyup(function () {
        var basic = $('.basic').val();
        var work = $('.work').val();
        var bonus = $('.bonus').val();
        if ( bonus > 0) {
            basic = (work / 26) * basic + parseInt(bonus);
        }else {
            basic = (work / 26) * basic;
        }
        $('.total').val(basic);
    });

    $( ".class-std" ).change(function() {
        if (this.value == 1) {
            $(".status").val(1);
        }else {
            $(".status").val(2);
        }
    });


</script>
@yield('script')
</body>
</html>