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
        <div style="background-color: #1C1C1C; padding: 2.5em 0">
            <div class="container d-flex flex-column align-items-center">
                <div class="row" style="color: white">
                    @foreach($comics as $comic)
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2 py-3">
                        {{-- img --}}
                        <img src="{{$comic['thumb']}}" alt="comic" id='cards'>
                        {{-- title --}}
                        <h6 class="mt-3 text-uppercase">{{$comic['title']}}</h6>
                    </div>
                    @endforeach
                </div>
                <button class="col-2" id="load-more">LOAD MORE</button>
            </div>
        </div>
    </main>
    @include ('partials.footer')
</body>

</html>