@extends('layouts.app')

@section('home-content')
    <div id="jumbotron"></div>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <div>
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <div>
                    <h3><strong>{{$comic['title']}}</strong></h3>
                </div>
                <div>
                    
                </div>
                <div>
                    <strong>{{$comic['price']}}</strong>
                </div>
                <div class="row justify-content-between">
                    {{-- PRIMA COLONNA --}}
                    <div class="col-6">
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
                        {{-- SECONDA COLONNA --}}
                        <div class="col-6">
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
                            <div class="row">
                                <div class="col-4">
                                    <p><strong>
                                        Series: 
                                    </strong>
                                    </p>
                                </div>
                                <div class="col-8">
                                    {{$comic['sale_date']}}
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection