@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->titulo }}</h2>
            <p>{{ $post->contenido }}</p>
        </div>
    @endforeach

    {{ $posts->links() }}
@endsection
