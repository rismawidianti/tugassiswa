<?php

use Illuminate\Database\Seeder;

class postsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[
        	['title'=>'Tips Cepat Nikah','content'=>'Loren Ipsum'],
        	['title'=>'Tips Cepat Kaya','content'=>'Loren Ipsum'],
        	['title'=>'Tips Cepat Punya Anak','content'=>'Loren Ipsum'],
        ];

        DB::table('post')->insert($a);
    }
}