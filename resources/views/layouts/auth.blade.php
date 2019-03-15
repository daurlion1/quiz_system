<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('admin.includes.head')
</head>
<body>
<section class="body-sign">
    <div class="center-sign">
        <a href="/" class="logo pull-left">
            <img src="assets/images/logo.png" height="54" alt="Porto Admin"/>
        </a>

        <div class="panel panel-sign">
            @yield('content')
        </div>

        <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved. Template by <a
                    href="https://colorlib.com">Colorlib</a>.</p>
    </div>
</section>
@include('admin.includes.javascript')
</body>
</html>