@extends('master')
@extends('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('matkul')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Matakuliah</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Matakuliah</td>
			<td>:</td>
			<td>{{$matkul->title}}</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td>{{$matkul->keterangan}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$matkul->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$matkul->updated_at}}</td>
		</tr>
	</table>
	</div>
	@stop