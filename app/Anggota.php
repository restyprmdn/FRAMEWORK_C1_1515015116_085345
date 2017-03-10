<?php
namespace app;

useIlluminate\Database\Eloquent\Model;

class Anggota extends Model
{
	protected $table ='Anggota';
	protected $fileable = ['nama','alamat'];
	public function hobi()
	{
	return $this->hasMany('App\hobi');
	}
}