@extends('layouts.master')

@section('title')
{{$post->title}} - mylaravel
@stop

@section('body')
<h1>{{$post->title}}</h1>
<p>{{$post->body}}</p>
{!!link_to('posts', 'Back to list')!!}
@stop