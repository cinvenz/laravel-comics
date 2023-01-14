<nav>
    <ul>
        @foreach ($menu as $navlink)
            <li><a href="{{ route($navlink['route']) }}"></a>{{ $navlink['label'] }}</li>
        @endforeach
    </ul>
</nav>
