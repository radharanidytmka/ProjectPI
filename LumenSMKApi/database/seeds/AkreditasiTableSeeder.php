<?php

use Illuminate\Database\Seeder;

class AkreditasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('akreditasi')->insert([
            'akreditasi' => 'A'
        ]);

        DB::table('akreditasi')->insert([
            'akreditasi' => 'B'
        ]);

        DB::table('akreditasi')->insert([
            'akreditasi' => 'C'
        ]);
    }
}
