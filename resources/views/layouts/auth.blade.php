<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('admin.includes.head')
</head>
<body>
<section class="body-sign">
    <div class="center-sign">
        <a href="/" class="logo pull-left">
            <img src="{{asset('assets/images/logo.png')}}" height="54" alt="Porto Admin"/>
        </a>

        <div class="panel panel-sign">
            @yield('content')
        </div>
    </div>
</section>
@include('admin.includes.javascript')
</body>
</html>