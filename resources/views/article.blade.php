<!DOCTYPE html>
<html class="bg-gray-200" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Polytech Nancy International</title>
  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  @include(" nav")
</head>

<body>
  <div class="bg-white rounded-lg w-3/4 container px-5 py-16 mx-auto flex flex-col items-center">
    <h1 class="m-8 text-center sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">{{$article->titre}}</h1>
    <img class="m-8 rounded-lg w-3/4" src="{{asset($article->lienimage)}}" alt="" class="mx-auto">
    <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">{!! nl2br(e($article->contenu)) !!}</p>
  </div>
</body>
<footer>
  @include("footer")
</footer>

</html>
