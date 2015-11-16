@extends('layouts.master')

@section('title')
{{$post->title}} - mylaravel
@stop

@section('body')
<h1>{{$post->title}}</h1>
<p>{{$post->body}}</p>
{!!Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE'])!!}
	{!!link_to_route('posts.edit','Edit',$post->id)!!}
	{!!Form::submit('Delete')!!}
	{!!link_to('posts', 'Back to list')!!}
{!!Form::close()!!}
@stop