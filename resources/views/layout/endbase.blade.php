<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title")</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
        crossorigin="anonymous"
    />


    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/style.css"/>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"
    ></script>

    <script
        src="https://kit.fontawesome.com/9f80d7611b.js"
        crossorigin="anonymous"
    ></script>

    <![endif]-->
    @yield("head")
</head>


<body>
@include("admin.sidebar")
@include("admin.nav")
@include("admin.header")





@yield('content')

</body>
<script src="{{asset('assets')}}/admin/js/main.js"></script>

</html>
