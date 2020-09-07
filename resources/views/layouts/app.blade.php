<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/nav.js') }}" defer></script>


<!-- Styles -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div id="app">
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="h-100 p-4">
                <h1><a href="index.html" class="logo">MI(AU)</a></h1>
                <ul class="list-unstyled components mb-5">

                    <li class="active">
                        <a href="{{ route('home') }}"><span class="fa fa-home mr-3"></span> Home</a>
                    </li>
                    @can('manage-user')
                    <div class="dropdown mr-3">
                    <span class="fa fa-user mr-3"></span>    
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            {{__('Usuários')}}
                        </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('admin.users.index') }}">{{__('Todos os usuários')}}</a>
                        <a href="" class="dropdown-item">{{__('Usuários bloqueados')}}</a>
                    </div>
                    </div>
                    @endcan
                    <li>
                        <a href="#"><span class="fa fa-briefcase mr-3"></span> Portfolio</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-sticky-note mr-3"></span> Blog</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="fa fa-paper-plane mr-3"></span> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                </ul>


            </div>

        </nav>
        <div id="content" class="p-4 p-md-5 pt-5">
            <section>
                @yield('content')
            </section>
        </div>
    </div>
</div>