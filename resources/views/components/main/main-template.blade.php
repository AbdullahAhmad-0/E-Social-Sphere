<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="TjUGUsno8_vIOkGX-s1SHmdpXePqdtlRuKM3YbSIcyQ" />

    @if (isset($title))
        <title>{{ $title }} - {{ config('webdet.website_name') }}</title>
    @else
        <title>{{ config('webdet.website_name') }}</title>
    @endif

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/59b7bb4e11.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">

    <!-- Style -->
    <link href="{{ asset('css/home/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/common/buttons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/common/heading.css') }}" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">

    <!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '833273261785411');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=833273261785411&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

</head>

<body>
    {{ $slot }}

    <style>
        @-webkit-keyframes come-in {
            0% {
                -webkit-transform: translatey(100px);
                transform: translatey(100px);
                opacity: 0;
            }

            30% {
                -webkit-transform: translateX(-50px) scale(0.4);
                transform: translateX(-50px) scale(0.4);
            }

            70% {
                -webkit-transform: translateX(0px) scale(1.2);
                transform: translateX(0px) scale(1.2);
            }

            100% {
                -webkit-transform: translatey(0px) scale(1);
                transform: translatey(0px) scale(1);
                opacity: 1;
            }
        }

        @keyframes come-in {
            0% {
                -webkit-transform: translatey(100px);
                transform: translatey(100px);
                opacity: 0;
            }

            30% {
                -webkit-transform: translateX(-50px) scale(0.4);
                transform: translateX(-50px) scale(0.4);
            }

            70% {
                -webkit-transform: translateX(0px) scale(1.2);
                transform: translateX(0px) scale(1.2);
            }

            100% {
                -webkit-transform: translatey(0px) scale(1);
                transform: translatey(0px) scale(1);
                opacity: 1;
            }
        }

        .floating-container {
            position: fixed;
            width: 100px;
            height: 100px;
            bottom: 0;
            right: 0;
            margin: 35px 25px;
        }

        .floating-container:hover {
            height: 300px;
        }

        .floating-container:hover .floating-button {
            box-shadow: 0 10px 25px rgba(44, 179, 240, 0.6);
            -webkit-transform: translatey(5px);
            transform: translatey(5px);
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .floating-container:hover .element-container .float-element:nth-child(1) {
            -webkit-animation: come-in 0.4s forwards 0.2s;
            animation: come-in 0.4s forwards 0.2s;
        }

        .floating-container:hover .element-container .float-element:nth-child(2) {
            -webkit-animation: come-in 0.4s forwards 0.4s;
            animation: come-in 0.4s forwards 0.4s;
        }

        .floating-container:hover .element-container .float-element:nth-child(3) {
            -webkit-animation: come-in 0.4s forwards 0.6s;
            animation: come-in 0.4s forwards 0.6s;
        }

        .floating-container .floating-button {
            position: absolute;
            width: 65px;
            height: 65px;
            background: #2cb3f0;
            bottom: 0;
            border-radius: 50%;
            left: 0;
            right: 0;
            margin: auto;
            color: white;
            line-height: 65px;
            text-align: center;
            font-size: 23px;
            z-index: 100;
            box-shadow: 0 10px 25px -5px rgba(44, 179, 240, 0.6);
            cursor: pointer;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .floating-container .float-element {
            position: relative;
            display: block;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin: 15px auto;
            color: white;
            font-weight: 500;
            text-align: center;
            line-height: 50px;
            z-index: 0;
            opacity: 0;
            -webkit-transform: translateY(100px);
            transform: translateY(100px);
        }

        .floating-container .float-element .material-icons {
            vertical-align: middle;
            font-size: 16px;
        }

        .float-element a {
            text-decoration: none;
            color: white;
        }

        .floating-container .float-element:nth-child(1) {
            background: #42A5F5;
            box-shadow: 0 20px 20px -10px rgba(66, 165, 245, 0.5);
        }

        .floating-container .float-element:nth-child(2) {
            background: #4CAF50;
            box-shadow: 0 20px 20px -10px rgba(76, 175, 80, 0.5);
        }

        .floating-container .float-element:nth-child(3) {
            background: #FF9800;
            box-shadow: 0 20px 20px -10px rgba(255, 152, 0, 0.5);
        }
    </style>

    <div class="floating-container">
        <div class="floating-button">
            <i class="far fa-address-book"></i>
        </div>
        <div class="element-container">

            <span class="float-element tooltip-left">
                <a href="{{ config('webdet.phonel') }}">
                    <i class="fas fa-phone"></i>
                </a>
            </span>
            <span class="float-element">
                <a href="{{ config('webdet.emaill') }}">
                    <i class="fas fa-envelope"></i>
                </a>
            </span>
            <span class="float-element">
                <a href="{{ config('webdet.whatsappl') }}">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </span>
        </div>
    </div>

</body>
<script src="{{ asset('js/common.js') }}"></script>

</html>
