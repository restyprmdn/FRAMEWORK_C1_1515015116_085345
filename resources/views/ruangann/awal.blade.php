@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Ruangan</strong>
		<a href="{{url('ruangann/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Ruangan</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Ruangan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $ruangann)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $ruangann->title or 'Ruangan Kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('ruangann/edit/'.$ruangann->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('ruangann/lihat/'.$ruangann->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('ruangann/hapus/'.$ruangann->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop