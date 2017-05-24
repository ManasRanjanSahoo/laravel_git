@extends('layouts.master')

@section('title')
Dashboard Template for Bootstrap : Logged In

@endsection

@section('content')
<div class="col-sm-8 blog-main">
@if(Session::has('error'))
        <div class="alert alert-success">
            <h2>{{ Session::get('status') }}</h2>
        </div>
    @endif
<h1>Welcome to BOOTSTRAP</h1>
<hr/>


</div>

@endsection