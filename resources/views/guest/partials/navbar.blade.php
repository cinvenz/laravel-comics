<nav>
    <ul>
        @foreach ($menu as $navlink)
            <li><a href="{{ route($navlink['route']) }}">{{ $navlink['label'] }}</a></li>
        @endforeach
    </ul>
</nav>
