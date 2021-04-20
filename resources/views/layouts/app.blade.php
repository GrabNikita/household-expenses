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
    <the-header
        home-url="{{ url('/') }}"
        app-name="{{ config('app.name', 'Household expenses') }}"
        toggle-navigation-label="{{ __('Toggle navigation') }}"
    >
        <the-header-main-menu>
            <the-header-main-menu-item
                url="{{ route('markets.index') }}"
                title="{{ __('MainMenu.MarketsLabel') }}"
            ></the-header-main-menu-item>
            <the-header-main-menu-item
                url="{{ route('manufacturers.index') }}"
                title="{{ __('MainMenu.ManufacturersLabel') }}"
            ></the-header-main-menu-item>
            <the-header-main-menu-item
                url="{{ route('products.index') }}"
                title="{{ __('MainMenu.ProductsLabel') }}"
            ></the-header-main-menu-item>
            <the-header-main-menu-item
                url="{{ route('basket-items.index') }}"
                title="{{ __('MainMenu.BasketItemsLabel') }}"
            ></the-header-main-menu-item>
            <the-header-main-menu-item
                url="{{ route('baskets.index') }}"
                title="{{ __('MainMenu.BasketsLabel') }}"
            ></the-header-main-menu-item>
            <the-header-main-menu-item
                url="{{ route('receipts.index') }}"
                title="{{ __('MainMenu.ReceiptsLabel') }}"
            ></the-header-main-menu-item>

        </the-header-main-menu>
        <the-header-auth-panel
            login-url="{{ route('login') }}"
            login-button-label="{{ __('Login') }}"
            register-url="{{ route('register') }}"
            register-button-label="{{ __('Register') }}"
            logout-url="{{ route('logout') }}"
            logout-button-label="{{ __('Logout') }}"
            user-name="{{ (auth()->check() ? Auth::user()->name : '') }}"
            csrf-token="{{ csrf_token() }}"
            is-guest="{{ !auth()->check() }}"
        ></the-header-auth-panel>
    </the-header>
    <the-content>
        @yield('content')
    </the-content>
    <the-footer></the-footer>
</div>
</body>
</html>
