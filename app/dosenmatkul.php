<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosenmatkul extends Model
{
    protected $table ='dosenmatkul';
	protected $fillable = ['dosen_id','matakuliah_id'];
}
