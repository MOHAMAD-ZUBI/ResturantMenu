<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
        href="https://fonts.googleapis.com/css?family=Changa"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css"
    />
    <link rel="stylesheet" href="{{asset('assets')}}/css/dashboard.css"/>
    <title>@yield('title')</title>
    @yield("head")
</head>
<body>


@section('side')
    @include("home.usersidebar")

    @section('nav')
        @include("home.usernav")
        @yield('content')
</body>
</html>
