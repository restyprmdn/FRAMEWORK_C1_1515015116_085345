<?php

use Illuminate\Database\Seeder;

class SeederTableHobi extends Seeder
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
        DB::table('hobi')->delete();
        $anggota = array(
            array('hobi'=>'Travelling','anggota_id'=>'1'),
            array('hobi'=>'Nonton Film','anggota_id'=>'2'),
            array('hobi'=>'kuliner','anggota_id'=>'1'),
        	array('hobi'=>'Bacabuku','anggota_id'=>'2')
        	);
        // masukkan data ke database
        DB::table('hobi')->insert($hobi);
    }
}
