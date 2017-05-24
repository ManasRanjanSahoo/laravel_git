@extends('layouts.master')

@section('title')
Show Post List : Home

@endsection

@section('content')
<div class="col-sm-8 blog-main">
<h1>Post Listing</h1>
<hr/>

@foreach($posts as $post)
	@include('post.post')
 @endforeach

</div>


@endsection