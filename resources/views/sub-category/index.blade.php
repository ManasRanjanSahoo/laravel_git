@extends('layouts.master')

@section('title')
Show Category List : Home

@endsection

@section('content')
<div class="col-sm-8 blog-main">
<h1>Sub-Category Listing</h1>
<hr/>
@foreach($sub_category as $crow)
        <div class="blog-post">
            <h2 class="blog-post-title">

            <a href="/{{$crow->id}}"> 	
            {{$crow->category_name}} - {{$crow->sub_name}}
            </a>
            </h2>
           
          </div>
 @endforeach

</div>



@endsection