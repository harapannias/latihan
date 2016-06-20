@extends('template.t_index')
@section('title', 'Laravel 5.2')
@section('content')
    <div class="container">
        @if(Session::has('message'))
            <span class="label label-success">{{ Session::get('message') }}</span>
        @endif
        <p></p>
    	<div class="panel panel-info">
    		<div class="panel-heading">Ubah data</div>
    		<div class="panel-body">
    		{!! Form::open(['url' => '/prosesedit']) !!}
            {!! Form::hidden('id', $siswa->id, ['class' => 'form-control']) !!}
            Nama:
    		{!! Form::text('nama', $siswa->nama, ['placeholder'=>'Nama', 'class' => 'form-control']) !!}
    		Alamat:
    		{!! Form::text('alamat', $siswa->alamat, ['placeholder'=>'Alamat', 'class' => 'form-control']) !!}
			Kelas:
    		{!! Form::text('kelas', $siswa->kelas, ['placeholder'=>'Kelas', 'class' => 'form-control']) !!}
    		<p></p>
            <a href="./../" class="btn btn-danger">Batal</a>
    		{!! Form::submit('Ubah Data', ['class' => 'btn btn-success']) !!}
    		{!! Form::close() !!}
    		</div>
    	</div>
    </div>
@endsection