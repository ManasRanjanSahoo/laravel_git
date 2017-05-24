@extends('layouts.master')

@section('title')
Dashboard Template for Bootstrap : Login

@endsection

@section('content')
<div class="col-sm-8 blog-main">
@if(Session::has('error'))
        <div class="alert alert-error">
            <h2>{{ Session::get('error') }}</h2>
        </div>
    @endif
<h1>Sign In</h1>
<hr/>

<form action="/login" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="Title">Enter your username </label>
    <input type="text" class="form-control required" id="username" name="username" placeholder="john@gmail.com" >
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password </label>
    <input type="password" class="form-control required" id="password" name="password" placeholder="password" >
</div>

 

  <button type="submit" class="btn btn-default">Login</button>
</form>

@include('layouts.errors')
</div>

@endsection