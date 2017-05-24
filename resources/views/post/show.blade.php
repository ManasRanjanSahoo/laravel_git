@extends('layouts.master')

@section('title')
Show Post Detail : Home

@endsection

@section('content')
<div class="col-sm-8 blog-main">

<h1>{{$post->title}}</h1>

{{$post->description}}

<hr/>

	<div class="comments" >
	<h4>Comments : </h4>
		@foreach($post->comments as $comment)

		
		<li class="list-group-item">
		<strong>
			{{$comment->created_at->diffForHumans()}} &nbsp;
		</strong>
		{{$comment->comment}} by {{$comment->user->name}}

		</li>

		@endforeach
	</div>
</div>
@endsection