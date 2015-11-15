@extends('layouts.master')

@section('title')
Posts list - mylaravel
@stop

@section('body')
<h1>Post list {!!link_to('posts/create', 'create a new post')!!}</h1>
<ul>
@foreach($posts as $post)
	<h2>{!!link_to('posts/'.$post->id, $post->title)!!}</h2>
	<p>{{$post->body}}</p>
@endforeach
</ul>
@stop