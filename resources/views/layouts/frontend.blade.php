<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased">

    <div id="app" class="ml-12">

        <body>
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container px-4 px-lg-5">
                    <a class="navbar-brand" href="#!"> {{ config('app.name') }}</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item {{ request()->routeIs('welcome')?'bg-dark':'' }}"><a
                                    class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('about')?'bg-dark':'' }}"><a
                                    class="nav-link active" aria-current="page" href="{{ route('about') }}">About</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('product')?'bg-dark':'' }}"><a
                                    class="nav-link active" aria-current="page"
                                    href="{{ route('product') }}">Product</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('contract.index')?'bg-dark':'' }}"><a
                                    class="nav-link active" aria-current="page"
                                    href="{{ route('contract.index') }}">Contract</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('contract.show')?'bg-dark':'' }}"><a
                                    class="nav-link active" aria-current="page"
                                    href="{{ route('contract.show',['id'=>500]) }}">Contract2</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('product') }}">All Products</a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('product',[55]) }}">Popular Items</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('product',['id'=>99]) }}">New
                                            Arrivals</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item bg-dark">
                                <a class="nav-link" href="{{ route('login') }}">เข้าระบบ</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item bg-dark">
                                <a class="nav-link" href="{{ route('register') }}">ลงทะเบียน</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown bg-dark">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('home') }}"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }} {{ Auth::user()->id}}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item bg-danger" href="{{ route('home') }}"> > BackStage < </a>
                                    <a class="dropdown-item bg-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"> ออกจากระบบ </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>


                        <form class="d-flex">
                            <button class="btn btn-outline-dark" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                Cart
                                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-4 px-lg-5 my-5">
                    <div class="text-center text-white">
                        <h1 class="display-4 fw-bolder">({{ config('app.name') }} & 1)</h1>
                        <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                    </div>
                </div>
            </header>
            <!-- Section-->
            <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">

                    @yield('content')

                </div>
            </section>
            <!-- Footer-->
            @include('partials.footer')

    </div>


    <script src="{{ asset('js/app.js')}}"></script>
    @yield('footerscript')
</body>

</html>
