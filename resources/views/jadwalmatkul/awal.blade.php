@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data jadwal matakuliah</strong>
		<a href="{{url('jadwalmatkul/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> jadwal Matakuliah</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Mahasiswa</th>
				<th>Nama Ruangan</th>
				<th>Nama Dosen</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $jadwalmatkul)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $jadwalmatkul->mahasiswa_id or 'mahasiswa kosong' }}</td>
				<td>{{ $jadwalmatkul->ruangan_id or 'ruangan kosong' }}</td>
				<td>{{ $jadwalmatkul->dosen_matakuliah_id or 'dosen kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('jadwalmatkul/edit/'.$jadwalmatkul->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('jadwalmatkul/lihat/'.$jadwalmatkul->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('jadwalmatkul/hapus/'.$jadwalmatkul->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop