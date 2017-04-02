@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('dosenmatkul') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Mengajar</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Dosen</td>
			<td>:</td>
			<td>{{ $dosenmatkul->dosen_id }}</td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>{{ $dosenmatkul->matakuliah_id }}</td>
		</tr>
		
		
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$dosenmatkul->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$dosenmatkul->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
