<!--Footer start-->

<footer id="footer">
    <div id="footer-container">
        <div class="pages">
            <ul>
                <h1>المنزل</h1>
                <li><a href="{{route('index')}}">الصفحة الرئيسية</a></li>
                <li><a href="#">المطاعم</a></li>
                <li><a href="#">من نحن</a></li>
            </ul>
        </div>
        <div id="social-media">
            <div class="phone">
                <a href="#" class="contact"
                ><i class="fa-solid fa-phone"></i>
                    <p>{!! $setting->phone !!}</p></a
                >
            </div>
            <div class="email">
                <a href="#" class="contact"
                ><i class="fa-solid fa-envelope"></i>
                    <p>{!! $setting->email !!}</p></a
                >
            </div>
            <div class="adress">
                <a href="#" class="contact"
                ><i class="fa-solid fa-map-location-dot"></i>
                    <p>{!! $setting->address !!}</p></a
                >
            </div>
        </div>
    </div>
</footer>
<!--Footer end-->
<script
    src="https://kit.fontawesome.com/9f80d7611b.js"
    crossorigin="anonymous"
></script>
<script src="{{asset('assets')}}/js/main.js"></script>

