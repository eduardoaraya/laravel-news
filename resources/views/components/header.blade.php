<header class="main-header">
    <nav>
        <ul>
            <li><a href="{{route('news.register.form')}}">Cadastrar Notícias</a></li>
            <li><a href="{{route('news.list')}}">Exibir Notícias</a></li>
        </ul>
        <div class="search-area">
            <form action="{{route('news.list')}}" method="GET">
                @csrf
                <input type="text" name="search" class="controll-input" />
                <button class="btn btn-search">Buscar</button>
            </form>
        </div>
    </nav>
</header>
