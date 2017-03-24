@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('ruangann') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data ruangann</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Ruangan</td>
			<td>:</td>
			<td> {{ $ruangann->title }} </td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td> {{$ruangann->created_at}} </td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{ $ruangann->updated_at }}</td>
		</tr>
	</table>
</div>
@stop
