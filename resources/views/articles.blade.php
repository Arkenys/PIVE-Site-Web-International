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
    <div class="container px-5 py-16 mx-auto">
        @foreach($articles as $article)
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/2 px-3">
                <div class="h-full bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="px-6 py-4">
                        <h2 class="text-2xl font-semibold text-gray-900">{{$article->titre}}</h2>
                        <p class="text-gray-600 text-sm">{{date("F", mktime(0, 0, 0, $article->updated_at->month, 1))}}, {{$article->updated_at->year}}</p>
                    </div>
                    @if($article->lienimage!="")
                    <div class="px-6 py-4">
                        <img src="{{$article->lienimage}}" alt="">
                    </div>
                    @endif
                    <div class="px-6 py-4">
                        <a href="/article/{{$article->id}}" class="text-blue-700 text-base">Lire l'article</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
<footer>
    @include("footer")
</footer>

</html>