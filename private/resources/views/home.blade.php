@extends('template.t_index')
@section('title', 'Laravel 5.2')
@section('content')
    <div class="container">
    	<p></p>
    	<div class="panel panel-info">
    		<div class="panel-heading">Tambah data</div>
    		<div class="panel-body">
    		{!! Form::open(['url' => '/prosestambah']) !!}
    		Nama:
                @if($errors->has())<br>
                    <span class="label label-danger">{{ $errors->first('nama') }}</span>
                    <p></p>
                @endif
    		{!! Form::text('nama', '', ['placeholder'=>'Nama', 'class' => 'form-control']) !!}
    		Alamat:
            @if($errors->has())<br>
                    <span class="label label-danger">{{ $errors->first('alamat') }}</span>
                    <p></p>
                @endif
    		{!! Form::text('alamat', '', ['placeholder'=>'Alamat', 'class' => 'form-control']) !!}
			Kelas:
            @if($errors->has())<br>
                    <span class="label label-danger">{{ $errors->first('kelas') }}</span>
                    <p></p>
                @endif
    		{!! Form::text('kelas', '', ['placeholder'=>'Kelas', 'class' => 'form-control']) !!}
    		<p></p>
    		<a href="./" class="btn btn-danger">Kembali</a>
    		{!! Form::submit('Tambah Data', ['class' => 'btn btn-success']) !!}
    		{!! Form::close() !!}
    		</div>
    	</div>
    </div>
@endsection