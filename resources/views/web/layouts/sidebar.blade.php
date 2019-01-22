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

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('web.includes.sidebar')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-8">
            @yield('content')
        </div>

    </div>

    <footer class="row">
        @include('web.includes.footer')
    </footer>

</div>
</body>
</html>