@extends('template.t_index')
@section('title', 'Laravel 5.2')
@section('content')
    <div class="container">
    	<p></p>
    	<div class="panel panel-info">
    		<div class="panel-heading">
                <i class="fa fa-user fa-fw"></i> Register
                @if(Session::has('message'))
                    <span class="label label-danger">{{ Session::get('message') }}</span>
                @endif
            </div>

    		<div class="panel-body">
    		{!! Form::open(['url' => '/tambahlogin']) !!}
            Username: 
                    @if($errors->has())<br>
                        <span class="label label-danger">{{ $errors->first('username') }}</span>
                        <p></p>
                    @endif
                {!! Form::text('username', '', ['placeholder'=>'Username', 'class' => 'form-control']) !!}
            Password: 
                    @if($errors->has())<br>
                        <span class="label label-danger">{{ $errors->first('password') }}</span>
                        <p></p>
                    @endif
                {!! Form::password('password',  array('class' => 'form-control', 'placeholder'=>'Password')) !!}
    		<p></p>
    		<a href="./" class="btn btn-danger">Kembali</a>
    		{!! Form::submit('Register', ['class' => 'btn btn-success']) !!}
    		{!! Form::close() !!}
    		</div>
    	</div>
    </div>
@endsection