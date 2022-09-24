<!--Hero Start-->

<div id="container">

    <div class="img-div">
        <img src="{{asset('assets')}}/img/order.png" alt="hero-photo"/>
    </div>
    <div class="text-div">
        <h1>نقدم خدمات إعلانية مجانية لأصحاب للمطاعم والمقاهي</h1>
        <button>عرض المطاعم</button>
        @if(!Auth::Check())
            <a href="{{route('registeruser')}}">
                <button>متابعة كصاحب مطعم</button>
            </a>
        @endif
        @if(Auth::Check() && Auth::user()->hasres == 1)
            <a href="{{route('dashboard')}}">
                <button>متابعة الى لوحة التحكم</button>
            </a>
        @endif
        @if(Auth::Check() && Auth::user()->hasres == 0)
            <a href="{{route('createres')}}">
                <button>أضف مطعمك الأن</button>
            </a>
        @endif

    </div>
</div>
<!--Hero End-->
</div>

<!--Brand section start-->
<section id="brands">
    <h1>المطاعم</h1>
    <div class="brand-gallery">
    </div>
</section>
<!--Brand section end-->
