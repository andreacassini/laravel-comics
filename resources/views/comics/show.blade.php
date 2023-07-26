@extends('layouts.app')

@section('home-content')
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <div class="col-6">
                        <h3><strong>{{$comic['title']}}</strong></h3>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection