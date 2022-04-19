<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Calls') - Callisto Test Calls</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- CSS -->
    <link rel="stylesheet" href="/css/app.css">

    @yield('css')
</head>

<body>

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Callisto Test Dialer</a>
    <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

@yield('content')

<script src="/js/vendor.js"></script>
@yield('javascript')
<script src="/js/manifest.js"></script>
<script src="/js/browser-calls.js"></script>

</body>

</html>
