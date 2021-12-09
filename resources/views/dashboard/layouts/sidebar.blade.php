<aside class="sidebar">
    <nav class="main-navigation">
        <ul class="page-navigation">
            <li class="page-navigation-item">
                <a class="page-navigation-link home" target="_blank" href="{{route('home')}}">Главная</a>
            </li>
            <li class="page-navigation-item">
                <a class="page-navigation-link products {{$route == 'dashboard' || $route == 'dashboard.products.categories' || $route == 'dashboard.products.create' || $route == 'dashboard.products.update' ? 'current' : ''}}" href="{{route('dashboard')}}">Продукты</a>
            </li>
            <li class="page-navigation-item">
                <a class="page-navigation-link news" href="#">Новости</a>
            </li>
            <li class="page-navigation-item">
                <a class="page-navigation-link histories" href="#">Истории</a>
            </li>
            <li class="page-navigation-item">
                <a class="page-navigation-link logout" href="{{route('auth.logout')}}">Выход</a>
            </li>
        </ul>
    </nav>
</aside>