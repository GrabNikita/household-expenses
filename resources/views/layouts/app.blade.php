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
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<div id="app">
    <top-panel
        home-url="{{ url('/') }}"
        app-name="{{ config('app.name', 'Household expenses') }}"
        toggle-navigation-label="{{ __('Toggle navigation') }}"
    >
        <top-panel-main-menu>
            <top-panel-main-menu-item
                url="{{ route('markets.index') }}"
                title="{{ __('MainMenu.MarketsLabel') }}"
            ></top-panel-main-menu-item>
            <top-panel-main-menu-item
                url="{{ route('manufacturers.index') }}"
                title="{{ __('MainMenu.ManufacturersLabel') }}"
            ></top-panel-main-menu-item>
            <top-panel-main-menu-item
                url="{{ route('products.index') }}"
                title="{{ __('MainMenu.ProductsLabel') }}"
            ></top-panel-main-menu-item>
            <top-panel-main-menu-item
                url="{{ route('basket-items.index') }}"
                title="{{ __('MainMenu.BasketItemsLabel') }}"
            ></top-panel-main-menu-item>
            <top-panel-main-menu-item
                url="{{ route('baskets.index') }}"
                title="{{ __('MainMenu.BasketsLabel') }}"
            ></top-panel-main-menu-item>
            <top-panel-main-menu-item
                url="{{ route('receipts.index') }}"
                title="{{ __('MainMenu.ReceiptsLabel') }}"
            ></top-panel-main-menu-item>

        </top-panel-main-menu>
        <top-panel-auth-panel
            login-url="{{ route('login') }}"
            login-button-label="{{ __('Login') }}"
            register-url="{{ route('register') }}"
            register-button-label="{{ __('Register') }}"
            logout-url="{{ route('logout') }}"
            logout-button-label="{{ __('Logout') }}"
            user-name="{{ (auth()->check() ? Auth::user()->name : '') }}"
            csrf-token="{{ csrf_token() }}"
            is-guest="{{ !auth()->check() }}"
        ></top-panel-auth-panel>
    </top-panel>
    <main class="container py-3">
        @if(View::hasSection('pageHeader'))
            <h1>@yield('pageHeader')</h1>
        @endif
        @yield('content')
    </main>
</div>
</body>
</html>
