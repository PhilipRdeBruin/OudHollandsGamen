<header>
    <div id="head">
                <div id="logo">
                </div>
                <nav>
                @guest
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                @else
                <a href="#">{{ Auth::user()->gebr_naam }}</a>
                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                @endguest
                </nav>
            </div>
        </header>             
