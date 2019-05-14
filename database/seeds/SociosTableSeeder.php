<?php

use Illuminate\Database\Seeder;

class SociosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('socios')->insert([
        	//'id'=>1,
            'persona_id'=>2,
        	'numero'=>1,
        	'estado'=>1,
        	'created_at'=>date('Y-m-d H:i:s'),
        	'updated_at'=>date('Y-m-d H:i:s'),
        	]);
    }
}
