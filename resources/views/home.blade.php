<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <section class="sezione sezione-1">

        <h2 class="titolo" >Tutti i film in formato tabella(database)</h2>

        <div class="container">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">original_title</th>
                        <th scope="col">nationality</th>
                        <th scope="col">date</th>
                        <th scope="col">vote</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                    <tr>
                        <th scope="row">{{ $movie->id }}</th>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->original_title }}</td>
                        <td>{{ $movie->nationality }}</td>
                        <td>{{ $movie->date }}</td>
                        <td>{{ $movie->vote }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>


    <section class="sezione sezione-2">

        <h2>Tutti i film in cards</h2>
    
        <div class="container contenitore-card">

            @foreach ($movies as $movie)
            <div class="card col-2">

                <strong>{{ $movie->title }}</strong>
                <em>{{ $movie->original_title }}</em>
                <small>{{ $movie->nationality }}</small>
                <small>{{ $movie->date }}</small>
                <small>{{ $movie->vote }}</small>

            </div>
            @endforeach

        </div>
            
    </section>
        
</body>

</html>