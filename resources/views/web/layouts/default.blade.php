<!doctype html>
<html>
<head>
    @include('web.includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('web.includes.header')
    </header>

    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
        @include('web.includes.footer')
    </footer>

</div>
</body>
</html>