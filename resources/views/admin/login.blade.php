<html>

<head>
    <link href="{{asset('assets/admin/css/bootstrap.css')}}" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets/admin/css/font-awesome.css')}}" rel="stylesheet"/>
</head>
<body>
<div class="section">

    <div class="container">

        <div class="row">
            <form action="{{route('loginadmincheck')}}" method="post">
                @include('home.messages')
                @csrf
                <h3>Login to your Account</h3>
                <hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                           placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="/registeruser" type="submit" class="text-center">Register </a>
            </form>
        </div>
    </div>
</div>
</body>

<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

<!-- Bootstrap 3.3.2 -->
<link href="{{asset('assets')}}/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- FontAwesome 4.3.0 -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
      type="text/css"/>
<!-- Ionicons 2.0.0 -->
<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
<!-- Theme style -->
<link href="{{asset('assets')}}/admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link href="{{asset('assets')}}/admin/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css"/>
<!-- iCheck -->
<link href="{{asset('assets')}}/admin/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css"/>
<!-- Morris chart -->
<link href="{{asset('assets')}}/admin/plugins/morris/morris.css" rel="stylesheet" type="text/css"/>
<!-- jvectormap -->
<link href="{{asset('assets')}}/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
      type="text/css"/>
<!-- Date Picker -->
<link href="{{asset('assets')}}/admin/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css"/>
<!-- Daterange picker -->
<link href="{{asset('assets')}}/admin/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet"
      type="text/css"/>
<!-- bootstrap wysihtml5 - text editor -->
<link href="{{asset('assets')}}/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet"
      type="text/css"/>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>


</body>
</html>
