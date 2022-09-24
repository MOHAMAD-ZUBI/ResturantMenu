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
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css"/>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
        crossorigin="anonymous"
    />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css"/>
    <title>@yield("title")</title>
    @yield('head')
</head>
@yield("head")
<body>
<div class="main-section">
    @include("home.nav")
    @include("home.header")
    @include("home.footer")
    @yield('foot')


    <script src="{{asset('assets')}}/js/app.js"></script>

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
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</div>
</body>
</html>
