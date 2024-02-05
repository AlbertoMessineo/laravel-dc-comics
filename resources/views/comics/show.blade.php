@extends('welcome')

<body class="text-center">
    <h1>{{ $comic->title}}</h1>
    <p>{{ $comic->descrption }}</p>
    <a href="{{route('comics.index')}}"> Torna alla lista dei fumetti</a>

</body>

</html>
