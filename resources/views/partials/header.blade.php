<header>
    <div class="container">
        <nav>
            <ul class="d-flex justify-content-between">
                <li><a class="{{ Route::currentRouteName() === 'home' ? 'activeItem' : '' }}"
                        href="{{ route('home') }}">Home</a></li>
                <li><a class="{{ Route::currentRouteName() === 'comics.index' ? 'activeItem' : '' }}"
                        href="{{ route('comics.index') }}">Comics</a></li>
            </ul>
        </nav>
    </div>
</header>
