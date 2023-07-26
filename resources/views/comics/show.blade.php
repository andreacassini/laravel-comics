@extends('layouts.app')

@section('home-content')
    <div id="jumbotron"></div>
    <div class="container">
        <img src="{{$comic['thumb']}}" class="position-absolute" id="cover">
    </div>
    <div class="blue-bg">
        <br>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <div class="my-4">
                    <h1>{{$comic['title']}}</h1>
                </div>
                <div id="price" class="my-3 px-3">
                    <div class="row me-5">
                        <div class="col-8 p-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col">
                                    <span style="color: #A6F79B">
                                        U.S. Price: 
                                    </span> {{$comic['price']}}
                                </div>
                                <div class="col text-uppercase text-end" style="color: #A6F79B">
                                    available
                                </div>
                            </div>
                        </div>
                        <div class="col-4 p-3 text-center">
                            Check Availability <span style="font-size: 10px" class="align-middle ms-1">&#9660;</span>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    {{$comic['description']}}
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row justify-content-between">
            {{-- PRIMA COLONNA --}}
            <div class="col m-3">
                <h3>Talent</h3>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <p><strong>
                            Art by: 
                        </strong>
                        </p>
                    </div>
                    <div class="col-9">
                        @foreach ($comic['artists'] as $index => $artist)
                        {{$artist}},
                        @endforeach
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <p><strong>
                            Written by: 
                        </strong>
                        </p>
                    </div>
                    <div class="col-9">
                        @foreach ($comic['writers'] as $index => $writer)
                        {{$writer}},
                        @endforeach
                    </div>
                </div>
                <hr>
            </div>
            {{-- SECONDA COLONNA --}}
            <div class="col m-3">
                <h3>Specs</h3>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <p><strong>
                            Series: 
                        </strong>
                        </p>
                    </div>
                    <div class="col-8 text-uppercase">
                        {{$comic['series']}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <p><strong>
                            U.S. Price: 
                        </strong>
                        </p>
                    </div>
                    <div class="col-8">
                        {{$comic['price']}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <p><strong>
                            On Sale Date: 
                        </strong>
                        </p>
                    </div>
                    <div class="col-8">
                        {{$comic['sale_date']}}
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection