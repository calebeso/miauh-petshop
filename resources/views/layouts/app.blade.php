<!DOCTYPE html>
<html lang="en">

<body>
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
                            <i class="fa fa-user"></i>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                {{__('Usuários')}}
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('admin.users.index') }}">{{__('Todos os usuários')}}</a>
                                <a href="{{ route('register') }}" class="dropdown-item">{{__('Cadastrar usuários')}}</a>
                                <a href="{{ route('admin.blocked-users') }}" class="dropdown-item">{{__('Usuários bloqueados')}}</a>
                            </div>
                        </div>
                        <div class="dropdown mr-3">
                            <i class="fa fa-plus-circle "></i>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                {{__('Produtos')}}
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('admin.products.index') }}">{{__('Todos os produtos')}}</a>
                            </div>
                        </div>
                        @endcan
                        <div class="dropdown mr-3">
                            <span class="fa fa-user mr-3"></span>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                {{__('Serviços')}}
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('service.list-services') }}">{{__('Todos os serviços')}}</a>
                                <a href="{{ route('service.create-service') }}" class="dropdown-item">{{__('Cadastrar serviço')}}</a>
                            </div>
                        </div>
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
</body>

</html>