@extends('layouts.master')

@section('title')
Show Category List : Home

@endsection

@section('content')
<div class="col-sm-8 blog-main">
<h1>Category Listing</h1>
<hr/>
@foreach($category as $crow)
        <div class="blog-post">
            <h2 class="blog-post-title">

            <a href="/{{$crow->id}}"> 	
            {{$crow->name}}
            </a>
            </h2>
            <p class="blog-post-meta"><b>Created at:</b> {{$crow->created_at->toFormattedDateString()}} <a href="#"></a></p>

          </div>
 @endforeach

</div>



@endsection