<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'CrimsonHacks 2019') }}</title>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js" defer></script>
</head>
<body>
    <div id="app">
        <the-navbar></the-navbar>
        <router-view></router-view>
    </div>
</body>
</html>