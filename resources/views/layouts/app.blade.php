<!doctype html>
<html lang="en">

<head>
    @include('layouts.config')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @if(Auth::check())
            <nav id="sidebar" class="miauh-sidebar col-md-3 col-lg-2 d-md-block sidebar pl-0">
           
                @include('layouts.sidebar')
          
            </nav>
            <div role="main" class="col-md-9 ml-sm-auto col-lg-10">
                @include('layouts.flash-message')
                @yield('content')
            </div>

            @else
            <div class="container mt-5">
                @yield('content')
            </div>
            @endif
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>
