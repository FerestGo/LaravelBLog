@extends('layouts.app', ['title' => $article->title])

@section('title')
    {{ $article->title }}
@endsection
@section('content')
 
    <h2>{{ $article->title }}</h2>
 
 
    <p>{!! $article->body !!}</p>
 
    @if ($article->tags)
        @foreach ($article->tags as $tag)
            <a href="{{ route('blog.tag', ['slug'=> $tag->slug]) }}"><span class="badge badge-info">{{ $tag->title }}</span></a>
        @endforeach
    @endif
    
    
 
@endsection