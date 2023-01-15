<nav>
    <ul class="nav-ul">
        @foreach ($menu as $navlink)
            <li><a class="nav-link" href="{{ route($navlink['route']) }}">{{ $navlink['label'] }}</a></li>
        @endforeach
    </ul>
</nav>
