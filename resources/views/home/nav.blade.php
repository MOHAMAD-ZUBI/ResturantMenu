<div class="container">
    <!-- Top box -->
    <!-- Logo & Site Name -->
    <div class="placeholder">
        <div class="parallax-window" data-parallax="scroll"
             data-image-src="{{Storage::url($setting->image)}}">
            <div class="tm-header">
                <div class="row tm-header-inner">
                    <div class="col-md-6 col-12">
                        <img src="{{Storage::url($setting->icon)}}" alt="Logo" class="tm-site-logo"
                             style="height: 100px"/>
                        <div class="tm-site-text-box">
                            <h1 class="tm-site-title">{{$setting->title}}</h1>
                            <h6 class="tm-site-description">{{$setting->description}}</h6>
                        </div>
                    </div>
                    <nav class="col-md-6 col-12 tm-nav">
                        <ul class="tm-nav-ul">
                            <li class="tm-nav-li"><a href="{{route('index')}}" class="tm-nav-link active">Home</a></li>
                            <li class="tm-nav-li"><a href="#cont" class="tm-nav-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
