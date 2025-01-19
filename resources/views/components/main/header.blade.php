<div class="header" id="header">
    <div class="header-mc">
        <div class="header-content">
            <nav id="navbar">
                <a href="/">
                    <img src="{{ asset('img/logo.png') }}" alt="{{ config('webdet.website_name') }} Logo" class="logo">
                </a>
                <ul id="sidemenu">
                    <li><a href="/" class="{{ $acttabn === 'index' ? 'index active' : 'index' }}" onclick="activeNav('index')">Home</a></li>
                    <li><a href="/about" class="{{ $acttabn === 'about' ? 'about active' : 'about' }}" onclick="activeNav('about')">About</a></li>
                    <li><a href="/services" class="{{ $acttabn === 'services' ? 'services active' : 'services' }}" onclick="activeNav('services')">Services</a></li>
                    <li><a href="/portfolio" class="{{ $acttabn === 'portfolio' ? 'portfolio active' : 'portfolio' }}" onclick="activeNav('portfolio')">Portfolio</a></li>
                    <li><a href="https://esocialsphere.blogspot.com/" class="{{ $acttabn === 'blog' ? 'blog active' : 'blog' }}" onclick="activeNav('blog')">Blog</a></li>
                    <li><a href="/contact" class="{{ $acttabn === 'contact' ? 'contact active' : 'contact' }}" onclick="activeNav('contact')">Contact</a></li>

                    <li>
                        <a href="/work-with-us" class="workwithus btn-anim-s-u-h" onclick="activeNav('workwithus')">Work With Us</a>
                    </li>
                    <i class="fas fa-times dis-none" onclick="closemenu()"></i>
                </ul>
                <i class="fas fa-bars dis-none" onclick="openmenu()"></i>
            </nav>
        </div>

        <div class="header-text">
            @if (isset($header))
                @if ($header == 'False')
                    <h1>{{ $h1 }}</h1>
                @endif
            @else
                <h1>Welcome to our digital marketing website!</h1>
                <p>We specialize in helping businesses of all sizes succeed online. Our team of experts is dedicated to providing the best digital marketing services to help you achieve your business goals. We offer a wide range of services, including search engine optimization (SEO), pay-per-click (PPC) advertising, social media marketing, email marketing, content marketing, and more. Whatever your digital marketing needs are, we can help.</p>
                <br><a href="/about" class="btn-anim"><b>Learn More ➡</b></a>
            @endif
        </div>
    </div>
</div>
