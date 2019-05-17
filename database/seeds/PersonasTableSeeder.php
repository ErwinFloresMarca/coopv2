<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
        	    'ci'=>'12345678',
              'nombres'=>'Juan',
              'paterno'=>'Mamani',
              'materno'=>'Mamani',
              'telefono'=>'76168899',
              'email'=> 'juan@gmail.com',
              'password'=>'juan@gmail.com',
              'created_at'=>date('Y-m-d H:i:s'),
              'updated_at'=>date('Y-m-d H:i:s'),
        	]);
          DB::table('personas')->insert([
          	    'ci'=>'12346678',
                'nombres'=>'Pablo',
                'paterno'=>'Ramirez',
                'materno'=>'Mamani',
                'telefono'=>'76435399',
                'email'=> 'pablo@gmail.com',
                'password'=>'pablo@gmail.com',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
          	]);
            DB::table('personas')->insert([
            	    'ci'=>'87654321',
                  'nombres'=>'Pedro',
                  'paterno'=>'Copa',
                  'materno'=>'Calle',
                  'telefono'=>'76435376',
                  'email'=> 'pedro@gmail.com',
                  'password'=>'pedro@gmail.com',
                  'created_at'=>date('Y-m-d H:i:s'),
                  'updated_at'=>date('Y-m-d H:i:s'),
            	]);
    }
}
//básicamente las semillas sirven para insertar valores en las tablas
//php artisan make:seeder PersonasTableSeeder
//php artisan db:seed
//php artisan db:seed --class PersonasTableSeeder
