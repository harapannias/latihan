@extends('template.t_index')
@section('title', 'Laravel 5.2')
@section('content')
    <div class="container">
    <p></p>
    	<div class="alert alert-success" role="alert">
          <span class="fa fa-check fa-fw" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
          Selamat datang {{ Auth::user()->username }}<br>
          <a href="{{ URL('logout') }}">Logout</a>
        </div>
    </div>
@endsection