<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Masukan nama mahasiswa"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id='nim'>Nim</label>
	<div class="col-sm-10">
		{!! Form::text('nim',null,['class'=>'form-control','id'=>'nim','placeholder'=>"Masukan Nim Mahasiswa"]) !!}		
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id='alamat'>Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"Masukan Alamat mahasiswa"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" >Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Masukan Username"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" >Password</label>
	<div class="col-sm-10">
		{!! Form::text('password',null,['class'=>'form-control','placeholder'=>"Masukan password"]) !!}	
	</div>
</div>
