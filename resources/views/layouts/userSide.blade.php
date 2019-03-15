<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('userSide.includes.head')
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        @include('userSide.includes.header')
    </header>

    <!-- Menu -->

    @include('userSide.includes.menu')

    <!-- Home -->
    @yield('content')
    <!-- Footer -->

    <footer class="footer">
        @include('userSide.includes.footer')
    </footer>
</div>

@include('userSide.includes.javascript')
</body>
</html>