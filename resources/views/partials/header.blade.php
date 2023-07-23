<header>
    <div id="header-blue">
        <div class="container">
            <ul class="list-inline text-uppercase py-1">
                <li class="list-inline-item mx-5">
                    dc power&#8480; visa&#174;
                </li>
                <li class="list-inline-item">
                    additional dc sites <span style="font-size: 12px">&#9660;</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <nav class="col-12 d-flex align-items-center justify-content-between">
                <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="">
                <ul class="text-uppercase list-unstyled d-flex aling-items-center" id="header-ul">
                    <li>
                        <a class="nav-link mx-2" href="">characters</a>
                    </li>
                    <li>
                        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'color: #0282F9;
                        border-bottom: 4px solid #0282F9' : ''}} mx-2" href="/">comics</a>
                    </li>
                    <li>
                        <a class="nav-link mx-2" href="">movies</a>
                    </li>
                    <li>
                        <a class="nav-link  mx-2" href="">tv</a>
                    </li>
                    <li>
                        <a class="nav-link  mx-2" href="">games</a>
                    </li>
                    <li>
                        <a class="nav-link  mx-2" href="">collectibles</a>
                    </li>
                    <li>
                        <a class="nav-link  mx-2" href="">videos</a>
                    </li>
                    <li>
                        <a class="nav-link  mx-2" href="">fans</a>
                    </li>
                    <li>
                        <a class="nav-link  mx-2" href="">news</a>
                    </li>
                    <li>
                        <a class="nav-link  mx-2" href="">shop <span style="color: #0282F9; font-size: 10px ">&#9660;</span></a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </nav>
        </div>
    </div>
</header>