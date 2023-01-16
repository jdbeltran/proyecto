@extends('template')

@section('contenido')

<h2>Listado</h2>

@foreach ($posts as $post)
    <p>
        <strong>{{ $post->id }}</strong>
        <a href="{{ route('post', $post->slug )}}">
            {{ $post->title }}
        </a>
        <br/>
        <span>{{ $post->user->name }}</span>
    </p>
@endforeach

{{$posts->links()}}

@endsectionPHP