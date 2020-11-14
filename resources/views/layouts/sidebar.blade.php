<div class="sidebar-sticky pt-3">
    <a href="index.html" class="logo"><img src="../../images/miah-logo.png" alt="mi(au)" /></a>

    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link active"><span class="fa fa-home mr-3"></span> Home</a>
        </li>
        @can('manage-user')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 font-weight-bold">
            <span>{{__('Animais')}}</span>
        </h6>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('animal.list') }}">
                <span class="fa fa-paw"></span>
                {{__('Todos os animais')}}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('animal.create') }}">
                <span class="fa fa-plus-circle"></span> {{__('Cadastrar animais')}}
            </a>
        </li>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 font-weight-bold">
            <span>{{__('Usuários')}}</span>
        </h6>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.users.index') }}">
                <span class="fa fa-user"></span>
                {{__('Todos os usuários')}}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">
                <span class="fa fa-plus-circle"></span> {{__('Cadastrar usuários')}}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.blocked-users') }}">
                <span class="fa fa-ban"></span> {{__('Usuários bloqueados')}}
            </a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 font-weight-bold">
            <span>{{__('Produtos')}}</span>
        </h6>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('products.list-products') }}">
                <span class="fa fa-product-hunt"></span>
                {{__('Todos os produtos')}}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('products.create-product') }}">
                <span class="fa fa-plus-circle "></span> {{__('Cadastrar produto')}}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.list-categories') }}">
                <span class="fa fa-folder-open-o "></span> {{__('Todos as categorias')}}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.create-category') }}">
                <span class="fa fa-plus-circle"></span> {{__('Cadastrar categoria')}}
            </a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 font-weight-bold">
            <span>{{__('Serviços')}}</span>
        </h6>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('service.list-services') }}">
                <span class="fa fa-list-alt"></span>
                {{__('Todos os serviços')}}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('service.create-service') }}">
                <span class="fa fa-plus-circle"></span> {{__('Cadastrar serviço')}}
            </a>
        </li>
        @endcan
        <li class="nav-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" class="nav-link"><span
                    class="fa fa-paper-plane mr-3"></span> Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>

    </ul>
</div>
