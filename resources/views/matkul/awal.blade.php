@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Matakuliah</strong>
		<a href="{{url('matkul/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> matkul</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama matkul</th>
				<th>Keterangan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $matkul)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $matkul->title or 'title kosong' }}</td>
				<td>{{ $matkul->keterangan or 'keterangan kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('matkul/edit/'.$matkul->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('matkul/lihat/'.$matkul->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('matkul/hapus/'.$matkul->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop