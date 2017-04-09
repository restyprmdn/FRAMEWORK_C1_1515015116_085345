@extends('master')
@section('container')

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('jadwalmatkul')}}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Jadwal Matakuliah</strong>
	</div>
	{!! Form::model($jadwalmatkul,['url'=>'jadwalmatkul/edit/'.$jadwalmatkul->id,'class'=>'form-horizontal']) !!}
	@include('jadwalmatkul.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop