<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //query builder
        DB::table('karyawan')
            ->insert([
                [
                    'nik' => '2021090032',
                    'nama' => 'Ayu Dewe',
                    'jk' => 'P',
                    'alamat' => 'Jalan Bahagia',
                    'tmp_lahir' => 'Malang',
                    'tgl_lahir' => '2000-10-10',
                    'telepon' => '081345678545',
                    'jurusan' => 1,
                    'nilai' => 100
                ]
            ]);

        //eloquent
        Karyawan::insert([
            [
                'nik' => '2021090033',
                'nama' => 'Bagas',
                'jk' => 'L',
                'alamat' => 'Jalan Jalur Bahagia',
                'tmp_lahir' => 'Malang',
                'tgl_lahir' => '2000-10-10',
                'telepon' => '081345678545',
                'jurusan' => 1,
                'nilai' => 100
            ]
        ]);
    }
}
