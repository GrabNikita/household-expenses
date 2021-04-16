<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@if(View::hasSection('pageTitle'))
            @yield('pageTitle') -
        @elseif(View::hasSection('pageHeader'))
            @yield('pageHeader') -
        @endif
        {{ config('app.name', 'Household expenses') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Household expenses') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="{{ route('markets.index') }}"
                                            class="nav-link">{{ __('MainMenu.MarketsLabel') }}</a></li>
                    <li class="nav-item"><a href="{{ route('manufacturers.index') }}"
                                            class="nav-link">{{ __('MainMenu.ManufacturersLabel') }}</a></li>
                    <li class="nav-item"><a href="{{ route('products.index') }}"
                                            class="nav-link">{{ __('MainMenu.ProductsLabel') }}</a></li>
                    <li class="nav-item"><a href="{{ route('basket-items.index') }}"
                                            class="nav-link">{{ __('MainMenu.BasketItemsLabel') }}</a></li>
                    <li class="nav-item"><a href="{{ route('baskets.index') }}"
                                            class="nav-link">{{ __('MainMenu.BasketsLabel') }}</a></li>
                    <li class="nav-item"><a href="{{ route('receipts.index') }}"
                                            class="nav-link">{{ __('MainMenu.ReceiptsLabel') }}</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <example-component></example-component>
    <main class="container py-3">
        @if(View::hasSection('pageHeader'))
            <h1>@yield('pageHeader')</h1>
        @endif
        @yield('content')
    </main>
</div>
<script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
