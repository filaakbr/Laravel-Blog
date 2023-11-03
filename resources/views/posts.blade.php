{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equlv="X-UA-Compatible" content="le=edge">
        <title>Halaman Post</title>
    </head>
    <body>
        <h1>
            Halaman Post
        </h1>
    </body>
    </html> --}}

    {{-- @extends('layouts.main')
    @section('content')
        @foreach ($posts as $post)
        <article class="mb-5">
            <h2>{{ $post["title"] }}</h2>
            {{-- <h2>href="{{$post}}"></h2> 
            <h5>By: {{ $post["author"]}}</h5>
            <p>{{ $post["body"] }}</p>
        </article>
        @endforeach
    @endsection   --}}
    @extends('layouts.main')

    @section('content')
        @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
            </h2>
            <h5>By: {{ $post["author"]}}</h5>
            <p>{{ $post["body"] }}</p>
        </article>
        @endforeach
    @endsection
    