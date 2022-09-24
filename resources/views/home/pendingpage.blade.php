@if(Auth::check())

@endif
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
    <link rel="stylesheet" href="{{asset('assets')}}/css/register.css"/>
    <title>انتظار الموافقة!</title>
</head>
<body>
<div id="register-container">
    <div class="img-div">
        <img src="{{asset('assets')}}/img/Waiting-amico.png" alt="hero-photo"/>
    </div>
    <h2 style="color: white;">لقد اخذنا طلبك ستتم المراجعة في أقرب وقت ممكن!</h2>
</div>
<!--Scripts-->
<script src="{{asset('assets')}}/js/main.js"></script>
<script
    src="https://kit.fontawesome.com/9f80d7611b.js"
    crossorigin="anonymous"
></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
</html>
