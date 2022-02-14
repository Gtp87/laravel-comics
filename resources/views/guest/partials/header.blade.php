<header class="container">
    <div class="header-sx">
        <a href="{{route('home')}}">
            <img src="{{asset('img/dc-logo.png')}}" alt="logo-dc">
        </a>
    </div>
    <div class="header-dx">
        <ul class="navbar">
            <li class="navbar-item {{ 'characters' === Route::currentRouteName() ? 'active' : '' }}"> <a href="{{route('characters')}}">characters</a></li>
            <li class="navbar-item {{ 'comics' === Route::currentRouteName() ? 'active' : '' }}"> <a href="{{route('comics')}}">comics</a></li>
            <li class="navbar-item {{ 'movies' === Route::currentRouteName() ? 'active' : '' }}"> <a href="{{route('movies')}}">movies</a></li>
            <li class="navbar-item {{ 'tv' === Route::currentRouteName() ? 'active' : '' }}"> <a href="{{route('tv')}}">tv</a></li>
            <li class="navbar-item {{ 'games' === Route::currentRouteName() ? 'active' : '' }}"> <a href="{{route('games')}}">games</a></li>
            <li class="navbar-item {{ 'collectibles' === Route::currentRouteName() ? 'active' : '' }}"> <a href="{{route('collectibles')}}">collectibles</a></li>
            <li class="navbar-item {{ 'videos' === Route::currentRouteName() ? 'active' : '' }}"> <a href="{{route('videos')}}">videos</a></li>
            <li class="navbar-item {{ 'fans' === Route::currentRouteName() ? 'active' : '' }}"> <a href="{{route('fans')}}">fans</a></li>
            <li class="navbar-item {{ 'news' === Route::currentRouteName() ? 'active' : '' }}"> <a href="{{route('news')}}">news</a></li>
            <li class="navbar-item {{ 'shop' === Route::currentRouteName() ? 'active' : '' }}"> <a href="{{route('shop')}}">shop</a></li>
        </ul>
    </div>
    
</header>