<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'kelas' => '10'
        ]);

        DB::table('kelas')->insert([
            'kelas' => '11'
        ]);

        DB::table('kelas')->insert([
            'kelas' => '12'
        ]);

        DB::table('kelas')->insert([
            'kelas' => '10, 11'
        ]);

        DB::table('kelas')->insert([
            'kelas' => '10, 12'
        ]);

        DB::table('kelas')->insert([
            'kelas' => '11, 12'
        ]);

        DB::table('kelas')->insert([
            'kelas' => '10, 11, 12'
        ]);
    }
}
