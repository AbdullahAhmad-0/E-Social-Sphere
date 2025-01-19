<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel - {{ config('webdet.website_name') }}</title>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/59b7bb4e11.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">

    <!-- Style -->
    <style>
        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);

        /* Bootstrap Icons */
        @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");
    </style>

    <link href="{{ asset('css/home/admin.css') }}" rel="stylesheet" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- Banner -->
    {{-- https://webpixels.io/components?ref=codepen --}}
    <a href="https://wa.me/923150490481?text=" class="btn w-full btn-primary text-truncate rounded-0 py-2 border-0 position-relative" style="z-index: 1000;">
        Created by <strong>Abdullah Ahmad</strong> Contact: +92 315 0490481 →
    </a>

    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <!-- Vertical Navbar -->

        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
            <div class="container-fluid">
                <!-- Toggler -->
                <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- User menu (mobile) -->
                <div class="navbar-user d-lg-none">
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <!-- Toggle -->
                        <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                            <a href="/admin/contact" class="dropdown-item">Messages</a>
                            <a href="/admin/work" class="dropdown-item">Work With Us Messages</a>
                            <a href="/admin/review" class="dropdown-item">Reviews</a>
                            <hr class="dropdown-divider">
                            <a href="/logout" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/contact">
                                <i class="bi bi-chat"></i> Messages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/work">
                                <i class="bi bi-bookmarks"></i> Work With Us Messages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/review">
                                <i class="bi bi-people"></i> Reviews
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.blogger.com/blog/posts/2394027648257237007">
                                <i class="bi bi-people"></i> Blog
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="navbar-divider my-5 opacity-40">
                    <!-- User (md) -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/account">
                                <i class="bi bi-person-square"></i> Account and Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">

            <!-- Main -->
            {{ $slot }}
        </div>
    </div>
</body>

</html