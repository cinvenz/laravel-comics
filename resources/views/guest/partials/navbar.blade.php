<nav>
    <a href="http://localhost:8000/"><img src="{{ asset('img/dc-logo.png') }}" alt=""></a>
    <ul class="nav-ul">
        @foreach ($menu as $navlink)
            <li><a class="nav-link" href="{{ route($navlink['route']) }}">{{ $navlink['label'] }}</a></li>
        @endforeach
    </ul>
</nav>
