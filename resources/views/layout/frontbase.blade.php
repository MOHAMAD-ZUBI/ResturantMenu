<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet"/>
    <link href="{{asset('assets')}}/css/templatemo-style.css" rel="stylesheet"/>
    <title>@yield("title")</title>
    <link rel="icon" href="{{Storage::url($setting->icon)}}"/>

    @yield("head")
</head>
@yield("head")
<body>
@include("home.nav")
@include("home.header")
@include("home.footer")
@yield('foot')


<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/js/parallax.min.js"></script>
<script>
    $(document).ready(function () {
        // Handle click on paging links
        $('.tm-paging-link').click(function (e) {
            e.preventDefault();

            $('.tm-paging-link').removeClass('active');
            $(this).addClass("active");
        });
    });
</script>
<script src="{{asset('assets')}}/js/onscroll.js"></script>
</body>
</html>
