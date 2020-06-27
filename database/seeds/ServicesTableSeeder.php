<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([ 'id' => 1, 'name' => 'Depilación con cera', 'created_at' => new DateTime() ]);
        DB::table('services')->insert([ 'id' => 2, 'name' => 'Maquillaje', 'created_at' => new DateTime() ]);
        DB::table('services')->insert([ 'id' => 3, 'name' => 'Servicios y cuidados de los pies', 'created_at' => new DateTime() ]);
    }
}
