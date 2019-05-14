<?php

use Illuminate\Database\Seeder;

class AmortizacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amortizaciones')->insert([
        	'capital'=>2000,
        	'interes'=>10,
        	'seguro'=>1000,
        	'prestamo_id'=>1,
        	'cajera_id'=>1,
        	'created_at'=>date('Y-m-d H-i-s'),
        	'updated_at'=>date('Y-m-d H-i-s')
        	]);
    }
}
