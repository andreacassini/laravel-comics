<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include ('partials.header')
    <main>
        <div style="background-color: #1C1C1C">
            <div class="container">
                <div class="row align-items-center" style="color: white">
                    @foreach($comics as $comic)
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2 my-3">
                        <div>
                            {{-- img --}}
                            <img src="{{$comic['thumb']}}" alt="" class="">
                            {{-- title --}}
                            <h6 class="mt-3">{{$comic['title']}}</h6>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>