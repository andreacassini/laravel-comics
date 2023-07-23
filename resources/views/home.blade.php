<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include ('partials.header')
    <main>
        <div id="jumbotron">
            <div class="container">
                <h3>CURRENT SERIES</h3>
            </div>
        </div>
        <div style="background-color: #1C1C1C; padding: 2em 0">
            <div class="container d-flex flex-column align-items-center">
                <div class="row align-items-center" style="color: white">
                    @foreach($comics as $comic)
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2 my-3">
                        {{-- img --}}
                        <img src="{{$comic['thumb']}}" alt="comic" id='cards'>
                        {{-- title --}}
                        <h6 class="mt-3">{{$comic['title']}}</h6>
                    </div>
                    @endforeach
                </div>
                <button class="col-2" id="load-more">LOAD MORE</button>
            </div>
        </div>
    </main>
    <footer>
        <div class="blue-bg">
            <div class="container">
                <ul class="d-flex" id="options">
                    <li class="align-middle">
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="digital comics" style="max-width: 40px;">
                            digital comics
                        </a>
                    </li>
                    <li class="align-middle">
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="dc merchandise">
                            dc merchandise
                        </a>
                    </li>
                    <li class="align-middle">
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="subscription">
                            subscription
                        </a>
                    </li>
                    <li class="align-middle">
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="comic shop locator" style="max-width: 30px;">
                            comic shop locator
                        </a>
                    </li>
                    <li class="align-middle">
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="dc power visa">
                            dc power visa
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg">
            <div class="container">
                <div class="d-flex">
                    <ul>
                        <a href="#"><h3>DC COMICS</h3></a>
                        <a href=""><li>Characters</li></a>
                        <a href=""><li>Comics</li></a>
                        <a href=""><li>Movies</li></a>
                        <a href=""><li>Tv</li></a>
                        <a href=""><li>Games</li></a>
                        <a href=""><li>Videos</li></a>
                        <a href=""><li>News</li></a>
                    </ul>
                    <ul>
                        <a href=""><h3>SHOP</h3></a>
                        <a href=""><li>Shop DC</li></a>
                        <a href=""><li>Shop DC Collectibles</li></a>
                    </ul>
                    <ul>
                        <a href=""><h3>DC</h3></a>
                        <a href=""><li>Terms Of Use</li></a>
                        <a href=""><li>Privacy policy (New)</li></a>
                        <a href=""><li>Ad Choices</li></a>
                        <a href=""><li>Advertising</li></a>
                        <a href=""><li>Jobs</li></a>
                        <a href=""><li>Subscriptions</li></a>
                        <a href=""><li>Talent Workshops</li></a>
                        <a href=""><li>CPSC Certificates</li></a>
                        <a href=""><li>Ratings</li></a>
                        <a href=""><li>Shop Help</li></a>
                        <a href=""><li>Contact Us</li></a>
                    </ul>
                    <ul>
                        <a href=""><h3>SITES</h3></a>
                        <a href=""><li>DC</li></a>
                        <a href=""><li>MAD Magazine</li></a>
                        <a href=""><li>DC Kids</li></a>
                        <a href=""><li>DC Universe</li></a>
                        <a href=""><li>DC Power Visa</li></a>
                    </ul>
                </div>
                <img src="{{Vite::asset('resources/images/dc-logo-bg.png')}}" alt="logo">
            </div>
        </div>
        <div id="social-row">
            <div class="container d-flex">
                <button id="footer-btn">
                    SIGN-UP NOW!
                </button>
                <div class="d-flex">
                    <a href="#" style="margin-right: 1.2em;">FOLLOW US</a>
                    <a href="#">
                        <img src="{{Vite::asset('resources/images/footer-facebook.png')}}" alt="facebook">
                    </a>
                    <a href="#">
                        <img src="{{Vite::asset('resources/images/footer-twitter.png')}}" alt="twitter">
                    </a>
                    <a href="#">
                        <img src="{{Vite::asset('resources/images/footer-youtube.png')}}" alt="youtube">
                    </a>
                    <a href="#">
                        <img src="{{Vite::asset('resources/images/footer-pinterest.png')}}" alt="pinterest">
                    </a>
                    <a href="#">
                        <img src="{{Vite::asset('resources/images/footer-periscope.png')}}" alt="periscope">
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>