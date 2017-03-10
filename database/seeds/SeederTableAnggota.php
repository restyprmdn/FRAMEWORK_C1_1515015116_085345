<?php

use Illuminate\Database\Seeder;

class SeederTableAnggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // mengosongkan tabel anggota
        DB::table('anggota')->delete();
        $anggota = array(
        	array('id'=>1,'nama'=>'Seojun','alamat'=>'jalan street no.11'),
        	array('id'=>2,'nama'=>'Minho','alamat'=>'jalan seoulcity no.9'),
        	array('id'=>3,'nama'=>'Yoona','alamat'=>'jalan kemakmuran no.78'),
        	array('id'=>4,'nama'=>'Resty','alamat'=>'jalan juanda 8 no.54')
        	);
        // masukkan data ke database
        DB::table('anggota')->insert($anggota);
    }
}
