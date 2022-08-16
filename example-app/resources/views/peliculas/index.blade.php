<html>
    <body>
        <h1>Peliculas</h1>

        <ul>

            @foreach($peliculas as $pelicula)
            <li>
                <a href="/peliculas/{{$pelicula->id}}">

                    {{$pelicula -> titulo}}
                </a>    
            </li>
            @endforeach
        </ul>

    </body>
</html>