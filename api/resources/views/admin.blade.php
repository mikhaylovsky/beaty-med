<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.head')
</head>

<body>
    <div class="wrapper ">

        <div class="top-right links">
            @include('layouts.partials.sidebar')
            <div class="main-panel">
            @include('layouts.partials.panel')

                @yield('content')
            </div>
            @include('layouts.partials.footer-scripts')
        </div>
    </div>
 </body>

</html>
