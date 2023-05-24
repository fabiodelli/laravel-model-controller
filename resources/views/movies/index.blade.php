<!-- resources/views/movies/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Movies</h1>

        <div class="movie-cards">
            @foreach ($movies as $movie)
                <div class="card">
                    <h2>{{ $movie->title }}</h2>
                    <p><strong>Original Title:</strong> {{ $movie->original_title }}</p>
                    <p><strong>National
