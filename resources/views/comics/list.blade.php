@extends('welcome')

<body>
    <h1>Elenco fumetti</h1>
    <div class="container d-flex">
        @foreach ($comics as $comic)
            <div class="card m-5" style="width: 18rem;">
                <img src={{ $comic->thumb}} class="card-img-top" alt="Img1">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text"><a href="{{ route('comics.show', $comic->id) }}">View details</a></p>
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>
            </div>
            {{-- <li>{{ $comic->title }} - <a href="{{route('comics.show', $comic->id)}}">View details</a></li>    --}}
        @endforeach
    </div>

    <a href="{{ route('comics.create') }}"> Aggiungi un fumetto alla collezione</a>
</body>

</html>
