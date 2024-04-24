@extends('layouts.app')

@section('pageTitle', 'Query 1 page')


@section('content')
<h1>Tutti i film usciti dopo il 1990 :</h1>

@foreach ($movies as $movie )
<div class="card">
    <div class="title">
        Titolo : {{$movie->title}}
    </div>
    <div class="original-title">
        Titolo originale : {{$movie->original_title}}
    </div>
    <div class="date">
        Data : {{$movie->date}}
    </div>
    <div class="poster">
        <img src="{{$movie->img}}" alt="">
    </div>
    
</div>
    
@endforeach

@endsection

<style>
    h1 {
        text-align: center;
        margin-top: 3rem;
    }
    .card{
        margin-top: 5rem;
        border: 2px black solid;
        width: 500px;
        margin-left: 40%
    }
    img {
            width: 100%;
        }
    </style>