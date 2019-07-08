@extends('layouts.app', ['title' => 'Блог'])
 
@section('title', 'Блог')
 
@section('content')
 
     @foreach ($models as $model)
 
        @include('blog._view', ['model' => $model])
 
    @endforeach
 
    {{ $models->links() }}
 
@endsection