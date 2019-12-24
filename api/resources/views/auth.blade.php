<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
<div class="wrapper ">
    <div class="top-right links">
        <div class="main-panel">
            @yield('content')
        </div>
        @include('layout.partials.footer-scripts')
    </div>
</div>
</body>
</html>