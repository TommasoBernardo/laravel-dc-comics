<header class="bg-light">
    <nav class="navbar navbar-expand ">
        <div class="container-fluid justify-content-start">
            <a class="brand" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3d/DC_Comics_logo.svg" alt="img-logo"
                    width="55" height="55">
            </a>
            <div class="navbar-nav">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                    href="{{ route('home') }}">Home</a>
                <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}"
                    href="{{ route('comics.index') }}">Comics</a>
            </div>
        </div>
    </nav>
</header>
