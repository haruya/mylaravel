@extends('layouts.master')

@section('title')
Create a new post - mylaravel
@stop

@section('body')
{!!link_to('posts', 'Back to list')!!}<br />
{!!Form::open(['url'=>'posts','method'=>'post'])!!}
	{!!Form::label('title', 'Title')!!}<br />
	{!!Form::text('title')!!}<br />
	{!!Form::label('body', 'Body')!!}<br />
	{!!Form::textarea('body')!!}<br />
	{!!Form::submit('Submit')!!}
{!!Form::close()!!}
@stop