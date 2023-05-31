<?php

use App\Destination;

$destinations = Destination::all();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polytech Nancy International</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>

<body class="bg-gray-200">
    @include('nav')
    <section class="text-gray-600 bg-white body-font m-6 rounded-lg">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Découvrez où nos étudiants ont choisi de partir pour leur mobilité internationale!</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
            </div>
            <div class="flex flex-wrap ">
                @foreach($destinations as $destination)
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    @if(session('isPolytech') == true || (session('isAdmin') == true || session('isEditeur') == true))
                    <a href="/destination/{{$destination->nom}}">
                    @else
                    <p>
                    @endif
                        <div class="bg-gray-100 p-6 rounded-lg">
                            @if($photos[$destination->nom]!=null)
                            <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{$photos[$destination->nom]->url}}" alt="content">
                            @endif
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">{{$destination->pays}}, {{$destination->continent}}</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">{{$destination->nom}}</h2>
                            <p class="leading-relaxed text-base truncate">{{$destination->intro}}</p>
                        </div>
                    @if(session('isPolytech') == true || (session('isAdmin') == true || session('isEditeur') == true))
                    </a>
                    @else
                    </p>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </section>
</body>
<footer>
    @include('footer')
</footer>