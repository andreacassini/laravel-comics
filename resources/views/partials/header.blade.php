<header>
    <div class="container">
        <div class="row py-3">
            <nav class="col-12 d-flex align-items-center justify-content-between">
                <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="">
                <ul class="text-uppercase list-unstyled d-flex my-2 aling-items-center">
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'characters' ? 'color-primary' : ''}} mx-2" href="">characters</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'color-primary' : ''}} mx-2" href="">comics</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'moveis' ? 'color-primary' : ''}} mx-2" href="">moveis</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'tv' ? 'color-primary' : ''}} mx-2" href="">tv</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'games' ? 'color-primary' : ''}} mx-2" href="">games</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'collectibles' ? 'color-primary' : ''}} mx-2" href="">collectibles</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'videos' ? 'color-primary' : ''}} mx-2" href="">videos</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'fans' ? 'color-primary' : ''}} mx-2" href="">fans</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'news' ? 'color-primary' : ''}} mx-2" href="">news</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'shop' ? 'color-primary' : ''}} mx-2" href="">shop</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </nav>
        </div>
    </div>
</header>