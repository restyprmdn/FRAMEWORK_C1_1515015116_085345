@extends('master')
@extends('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('ruangann')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Pengguna</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Ruangan</td>
			<td>:</td>
			<td>{{$ruangann->title}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$ruangann->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$ruangann->updated_at}}</td>
		</tr>
	</table>
	</div>
	@stop