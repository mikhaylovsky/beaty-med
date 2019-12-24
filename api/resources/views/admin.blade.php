<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partials.head')
</head>

<body>
    <div class="wrapper ">

        <div class="top-right links">
            @include('layout.partials.sidebar')
            <div class="main-panel">
            @include('layout.partials.panel')

                @yield('content')
            </div>
            @include('layout.partials.footer-scripts')
        </div>
    </div>
 </body>

</html>