@include('layout.frontbase')
@section('title', 'user login')
@section('content')
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}">Home </a> \</li>
        <li class="active"> User LogIn</li>
    </ul>


    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    @include('auth.login')

                </div>
            </div>
        </div>
    </div>
@endsection
