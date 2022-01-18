<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Mobils')->insert([
            'no_plat' => 'M 234 DF',
            'jenis_mobil' => 'Avanza',
            'tahun_pembuatan' => '2010',
        ]);
    }
}
