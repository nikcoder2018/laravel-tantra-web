<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon --> 
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link href="{{asset('admin/css/normalize.css')}}" rel="stylesheet" >
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" >
    <link href="{{asset('admin/css/themify-icons.css')}}" rel="stylesheet" >
    <link href="{{asset('admin/css/flag-icon.min.css')}}" rel="stylesheet" >
    <link href="{{asset('admin/css/cs-skin-elastic.css')}}" rel="stylesheet" >
    <link href="{{asset('admin/scss/style.css')}}" rel="stylesheet" >

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body class="">
    @include('admin.include.left-panel')
    @include('admin.include.right-panel')


    <script src="{{asset('admin/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{asset('admin/js/plugins.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>

    <script src="{{asset('admin/js/dashboard.js')}}"></script>
    <script src="{{asset('admin/js/widgets.js')}}"></script>
    <script>
    $(function(){
        $(document).tooltip();
    });
    </script>
    
    @include('vendor.sweetalert.cdn')   
    @include('vendor.sweetalert.view')
    @include('vendor.sweetalert.validator')  
</body>
</html>
