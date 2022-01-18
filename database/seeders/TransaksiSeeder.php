<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Transaksis')->insert([
            'tgl_sewa' => '01-july-2020',
            'tgl_kembali' => '04-july2020',
            'lama' => '4 ',
            'harga' => '200000',
            'total' => '800000',
        ]);
    }
}
