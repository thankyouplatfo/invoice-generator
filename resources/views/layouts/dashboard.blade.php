<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo&family=Changa&family=Norican&family=Tajawal:wght@200;500&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/myApp.css') }}">
    <style>
        *:not(i) {
            font-family: "Tajawal" !important;
        }

        .err {
            color: #f44336 !important
        }

        label {
            font-size: x-large !important
        }

    </style>
    <!--icons-->
    <link rel="stylesheet" href="{{ asset('css/icons/fontawesome-free-6.1.1-web/css/all.min.css') }}">
</head>

<body dir="rtl">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main dir="rtl" class="text-right">
            <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-right"
                style="width:200px;right:0!important;" id="mySidebar">
                <button class="w3-bar-item w3-button w3-right-align w3-xlarge w3-large w3-hide-large w3-center"
                    onclick="w3_close()">إغلاق <i class="fas fa-close"></i></button>
                <a href="{{ route('home') }}" class="w3-bar-item w3-button w3-right-align w3-xlarge">
                    <i class="fas fa-chart-bar"></i> الإحصائيات
                </a>
                <a href="{{ route('users.index') }}" class="w3-bar-item w3-button w3-right-align w3-xlarge">
                    <i class="fa-solid fa-users"></i> المستخدمين
                </a>
                <a href="{{ route('companies.index') }}" class="w3-bar-item w3-button w3-right-align w3-xlarge">
                    <i class="fa-solid fa-building"></i> الشركات
                </a>
                <a href="{{ route('categories.index') }}" class="w3-bar-item w3-button w3-right-align w3-xlarge">
                    <i class="fa-solid fa-puzzle-piece"></i> التصنيفات
                </a>
                <a href="{{ route('products.index') }}" class="w3-bar-item w3-button w3-right-align w3-xlarge">
                    <i class="fa-solid fa-boxes-stacked"></i> المنتجات
                </a>

                <a href="{{ route('customers.index') }}" class="w3-bar-item w3-button w3-right-align w3-xlarge">
                    <i class="fa-solid fa-users"></i> العملاء
                </a>
                <a href="{{ route('invoices.index') }}" class="w3-bar-item w3-button w3-right-align w3-xlarge">
                    <i class="fa-solid fa-money-bill"></i> الفواتير
                </a>
                <a class="w3-bar-item w3-button w3-right-align w3-xlarge" onclick="myAccFunc()">
                    <i class="fa-solid fa-screwdriver-wrench"></i> الأدوات <i class="fa fa-caret-down"></i>
                </a>
                <div id="demoAcc" class="w3-hide w3-white w3-card">
                    <div class="w3-bar-item w3-button w3-right-align w3-xlarge">
                        <a href="{{ route('categoryProducts.create') }}"
                            class="w3-bar-item w3-button w3-right-align w3-xlarge w3-col">
                            <i class="fa-solid w3-col s4 m4 l4 fa-puzzle-piece"></i>
                            <i class="fa-solid w3-col s4 m4 l4 fa-link"></i>
                            <i class="fa-solid w3-col s4 m4 l4 fa-boxes-stacked"></i>
                        </a>
                    </div>
                    <div class="w3-bar-item w3-button w3-right-align w3-xlarge">
                        <a href="{{ route('companyCategory.create') }}"
                            class="w3-bar-item w3-button w3-right-align w3-xlarge w3-col">
                            <i class="fa-solid w3-col s4 m4 l4 w3-right fa-puzzle-piece"></i>
                            <i class="fa-solid w3-col s4 m4 l4 w3-right fa-link"></i>
                            <i class="fa-solid w3-col s4 m4 l4 w3-right fa-building"></i>
                        </a>
                    </div>
                </div>


            </div>

            <div class="w3-main" style="margin-right:200px;">
                <div class="w3-black">
                    <button class="w3-button w3-black w3-xlarge w3-hide-large w3-right"
                        onclick="w3_open()">&#9776;</button>
                    <div class="w3-container">
                        <a href="{{ route('home') }}"
                            class="w3-right w3-xlarge w3-button w3-hover-none w3-hover-text-white">{{ config('app.name') }}</a>
                    </div>
                </div>

                <div class="w3-container">
                    <div class="py-5">
                        <div class="p-0 m-0 w3-container py-3">
                            <ul class="p-0 m-0 d-inline w3-ul w3-xxlarge">
                                <li class="p-0 m-0 d-inline border-0"><a href=" " class="p-0 m-0 w3-text-black">لوحة
                                        التحكم</a></li>
                                <li class="p-0 m-0 d-inline border-0">
                                    <i class="p-0 m-0  fa-solid fa-arrow-left-long"></i>
                                    <h1 class="p-0 m-0 d-inline">@yield('breadcrumb')</h1>
                                </li>
                            </ul>
                        </div>
                        @yield('path_name')
                        @yield('content')
                        <br>

                        <div class="w3-center">
                            <div class="d-inline-block">
                                @yield('paginate')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jq.min.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>
    @yield('script')
</body>

</html>
