@extends('master')
@section('container')

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('dosenmatkul')}}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data Mengajar</strong>
	</div>
	{!! Form::model($dosenmatkul,['url'=>'dosenmatkul/edit/'.$dosenmatkul->id,'class'=>'form-horizontal']) !!}
	@include('dosenmatkul.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop