<!doctype html>
<html class="fixed">
<head>
    @include('admin.includes.head')
</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        @include('admin.includes.header')
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        @include('admin.includes.sidebar')
        <section role="main" class="content-body">
            @yield('content')
        </section>
    </div>

</section>
@include('admin.includes.javascript')
</body>
</html>