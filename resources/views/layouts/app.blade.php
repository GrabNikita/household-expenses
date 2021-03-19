<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Household expenses</title>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<ul class="nav container">
    <li class="nav-item"><a href="{{route('index')}}" class="nav-link">Главная</a></li>
    <li class="nav-item"><a href="{{route('markets.index')}}" class="nav-link">Магазины</a></li>
    <li class="nav-item"><a href="{{route('manufacturers.index')}}" class="nav-link">Производители</a></li>
</ul>
<div class="container">
    @yield('content')
</div>
<script src="/js/app.js"></script>
</body>
</html>
