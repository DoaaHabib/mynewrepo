<ul class="nav navbar-nav navbar-right">
    <!-- Authentication Links -->
    @guest
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ Session::get('name') }} <span class="caret"></span>
            </a>
        </li>
</ul>