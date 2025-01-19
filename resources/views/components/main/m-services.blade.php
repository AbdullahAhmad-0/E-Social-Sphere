<div class="service">
    <h2 class="heading-common">Our Services</h2>

    <div class="services-con">

        @foreach ($services as $service)
            <div class="services-list">
                <i class="{{ $service['icon class'] }}"></i>
                <h3>{{ $service['heading'] }}</h3>
                <p>{{ $service['paragraph'] }}</p>
                <a href="/services/{{ $service['url'] }}">Learn More</a>
            </div>
        @endforeach

    </div>
    <div style="height: 100px;"></div>
</div>
