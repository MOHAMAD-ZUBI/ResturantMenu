<footer class="footer">

    <div class="container-aboutus">
        <div class="tm-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d530.5209756133829!2d32.6729314827458!3d41.2200306591857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x33833dd699ee68a5!2zNDHCsDEzJzExLjQiTiAzMsKwNDAnMjIuNiJF!5e0!3m2!1sen!2str!4v1660407324678!5m2!1sen!2str"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                class="googleMap"
            ></iframe>
        </div>
        <div class="aboutus" id="aboutus">
            <div class="info">
                <h1 class="title">REACH US!</h1>
                <p class="adress">{!! $setting->address !!}</p>
                <ul class="ul">
                    <li class="li">
                        <a href="tel:{!! $setting->phone !!}" class="a"
                        ><i class="fa-solid fa-phone"></i> {!! $setting->phone !!}</a
                        >
                    </li>
                    <li class="li">
                        <a href="mailto:{!! $setting->email !!}" class="a"
                        ><i class="fa-solid fa-envelope"></i> {!! $setting->email !!}</a
                        >
                    </li>
                    
                </ul>
            </div>
            <div class="tm-contact-social" id="cont">
                <a href="{!! $setting->facebook !!}" class="tm-social-link"><i
                        class="fab fa-facebook tm-social-icon"></i></a>
                <a href="{!! $setting->twitter !!}" class="tm-social-link"><i
                        class="fab fa-twitter tm-social-icon"></i></a>
                <a href="{!! $setting->instagram !!}" class="tm-social-link"><i
                        class="fab fa-instagram tm-social-icon"></i></a>
                <a href="{!! $setting->whatsapp !!}" class="tm-social-link"><i
                        class="fab fa-whatsapp tm-social-icon"></i></a>
            </div>
        </div>
    </div>
</footer>

<script
    src="https://kit.fontawesome.com/9f80d7611b.js"
    crossorigin="anonymous"
></script>
