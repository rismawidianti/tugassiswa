<?php

use Illuminate\Database\Seeder;

class siswaTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $c = [
            ['nama'=>'rismawidianti','jk'=>'perempuan','tgl_lahir'=>'2000-07-10','alamat'=>'cangkuang'],
            ['nama'=>'tantan','jk'=>'laki-laki','tgl_lahir'=>'2000-03-23','alamat'=>'rancamanyar'],
            ['nama'=>'windi','jk'=>'perempuan','tgl_lahir'=>'2000-02-12','alamat'=>'sayuran'],
            ['nama'=>'iswanto','jk'=>'laki-laki','tgl_lahir'=>'2000-05-28','alamat'=>'nusa'],
            ['nama'=>'nisa','jk'=>'perempuan','tgl_lahir'=>'2000-02-28','alamat'=>'sindangpalay'],
        ];

         DB::table('siswa')->insert($c);
    }
}
