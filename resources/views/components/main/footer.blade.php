<div class="footer">
    <div class="f-grid">
        <div class="f-s-grid">
            <a href="\">
                <img src="{{ asset('img/logo_only.png') }}" alt="Prophestics Path Logo">
            </a>
            <div class="social-media">
                <x-main.socialmedia />
            </div>
        </div>

        <div class="f-s-grid">
            <h4 class="heading-common-s-l-na">Quick Links</h4>
            <p><i class="fas fa-check"></i><a href="/">Home</a></p>
            <p><i class="fas fa-check"></i><a href="/services">Services</a></p>
            <p><i class="fas fa-check"></i><a href="/portfolio">portfolio</a></p>
            <p><i class="fas fa-check"></i><a href="/pricing">Pricing</a></p>
            <p><i class="fas fa-check"></i><a href="/testimonials">Testimonials</a></p>
            <p><i class="fas fa-check"></i><a href="/about">About Us</a></p>
            <p><i class="fas fa-check"></i><a href="/contact">Contact Us</a></p>
            <p><i class="fas fa-check"></i><a href="/work-with-us">Work With Us</a></p>
        </div>

        <div class="f-s-grid">
            <h4 class="heading-common-s-l-na">Our Courses</h4>
            @foreach ($services as $service)
                <p><i class="fas fa-check"></i><a href="/services/{{ $service['url'] }}">{{ $service['heading'] }}</a></p>
            @endforeach
        </div>

        <div class="f-s-grid">
            <h4 class="heading-common-s-l-na">Contact Us</h4>
            <p><i class="fas fa-phone"></i><a href="{{ config('webdet.phonel') }}">{{ config('webdet.phone') }}</a></p>
            <p><i class="far fa-envelope"></i><a href="{{ config('webdet.emaill') }}">{{ config('webdet.email') }}</a></p>
            <p><i class="fas fa-map-marker-alt"></i><a href="{{ config('webdet.addressl') }}">{{ config('webdet.address') }}</a></p>
        </div>

    </div>
    <hr>
    <div class="f-foot">
        <p>{{ config('webdet.website_name') }} Designed by <a href="https://wa.me/923150490481">Abdullah Ahmad</a> © All Rights Reserved
        </p>
        <div>
            <a href="/privacy-policy">Privacy Policy</a>
            <a href="/terms-and-conditions">Terms & Conditions</a>
        </div>
    </div>
</div>
