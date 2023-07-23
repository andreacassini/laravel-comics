<header>
    <div class="container">
        <div class="row">
            <nav class="col-12 d-flex align-items-center justify-content-between">
                <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="">
                <ul class="text-uppercase list-unstyled d-flex aling-items-center" id="header-ul">
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'characters' ? 'color: #0282F9;
                        border-bottom: 4px solid #0282F9' : ''}} mx-2" href="">characters</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'color: #0282F9;
                        border-bottom: 4px solid #0282F9' : ''}} mx-2" href="">comics</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'moveis' ? 'color: #0282F9;
                        border-bottom: 4px solid #0282F9' : ''}} mx-2" href="">moveis</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'tv' ? 'color: #0282F9;
                        border-bottom: 4px solid #0282F9' : ''}} mx-2" href="">tv</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'games' ? 'color: #0282F9;
                        border-bottom: 4px solid #0282F9' : ''}} mx-2" href="">games</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'collectibles' ? 'color: #0282F9;
                        border-bottom: 4px solid #0282F9' : ''}} mx-2" href="">collectibles</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'videos' ? 'color: #0282F9;
                        border-bottom: 4px solid #0282F9' : ''}} mx-2" href="">videos</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'fans' ? 'color: #0282F9;
                        border-bottom: 4px solid #0282F9' : ''}} mx-2" href="">fans</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'news' ? 'color: #0282F9;
                        border-bottom: 4px solid #0282F9' : ''}} mx-2" href="">news</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'shop' ? 'color: #0282F9;
                        border-bottom: 4px solid #0282F9' : ''}} mx-2" href="">shop</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </nav>
        </div>
    </div>
</header>