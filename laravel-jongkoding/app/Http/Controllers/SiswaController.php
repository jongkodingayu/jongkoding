<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use DB;

class SiswaController extends Controller
{
    //
    public function index()
    {
        //mengambil semua nama siswa
        // foreach (Siswa::all() as $siswa) {
        //     echo $siswa->nama . "<br>";
        // }

        //mengambil data siswa dengan jk == l
        // $siswa_laki = Siswa::where('jk', 'L')
        //     ->orderBy('nama')
        //     ->get();

        // foreach ($siswa_laki as $siswa) {
        //     echo $siswa->nis . " - " . $siswa->nama . "<br>";
        // }


        //mengambil model dengan nilai primary key
        // $siswa = Siswa::find('2021010005');

        // ambil model pertama yang cocok dengan batasan query
        // $siswa = Siswa::where('nis', '2021010001')->first();

        //alternatif untuk mengambil modep pertama yang cocok dengan batasan query
        // $siswa = Siswa::firstWhere('nis', '2021010002');

        // $siswa_pertama_dari_jurusan = Siswa::where('id_jurusan', '=', 3)->firstOr(function () {
        //     //jika tidak ada data yang ditemukan makan akan menjalankan perintah disini
        //     echo "Tidak ada hasil yang ditemukan";
        // });

        // findorfail dengan primarykey
        // $siswa = Siswa::findOrFail('2021010019');

        //firstorfail dengan pembatasan query
        // $siswa = Siswa::where('id_jurusan', '>', 2)->firstOrFail();

        // echo $siswa;


        //mengambil semua siswa dengan query builder
        // $siswa_all = DB::table('siswa')->get();

        // foreach ($siswa_all as $siswa) {
        //     echo $siswa->nis . " - " . $siswa->nama . " - " . $siswa->tmp_lahir . "<br>";
        // }

        //mengambil 1 row data yang memiliki nama 'Sony'
        // $siswa_single = DB::table('siswa')
        //     ->where('nama', 'Sony Dwi')
        //     ->first();

        //mengambil nilai dari kolom nis yang memiliki nama sony
        // $siswa_nis = DB::table('siswa')
        //     ->where('nama', 'Sony Dwi')
        //     ->value('nis');

        //mengambil 1 row data dengan primary key '2021010010
        // $siswa_single_by_id = DB::table('siswa')->find('2021010010');

        // return $siswa_single_by_id;

        // $siswa_nis = DB::table('siswa')->pluck('nis', 'nama');

        // foreach ($siswa_nis as $nama => $nis) {
        //     echo $nis . " <br>";
        // }

        //mendapatkan jumlah semua siswa dalam tabel
        // $jml_siswa = DB::table('siswa')->count();

        // return $jml_siswa;

        //mendapatkan nis, nama, jk siswa
        // $siswa = DB::table('siswa')
        //     ->select('nis', 'nama', 'jk as jenis_kelamin')
        //     ->get();

        // $siswa = DB::table('siswa')
        //     ->distinct()
        //     ->get();

        // $siswa = DB::table('siswa')
        //     ->select(DB::raw('count(*) as jml_siswa, id_jurusan'))
        //     ->where('id_jurusan', '>', 0)
        //     ->groupBy('id_jurusan')
        //     ->get();

        // $siswa = DB::table('siswa')
        //     ->leftJoin('jurusan', 'siswa.id_jurusan', '=', 'jurusan.id_jurusan')
        //     ->get();

        // $jurusan_siswa = DB::table('siswa')->where('id_jurusan', '>', 1);
        // $siswa = DB::table('siswa')
        //     ->whereNull('nilai')
        //     ->union($jurusan_siswa)
        //     ->get();

        $siswa = DB::table('siswa')
            ->orderBy('id_jurusan', 'asc')
            ->groupBy('nis')
            ->offset(3) // data diambil mulai urutan setelah 3
            ->limit(6) //jumlah ddata diambil maksimal 6
            ->get();

        return $siswa;
    }

    public function store(Request $request)
    {
        // $siswa = new Siswa;
        // $siswa->nama = $request->nama;
        // $siswa->nis = $request->nis;
        // $siswa->jk = $request->jk;
        // $siswa->tmp_lahir = $request->tmp_lahir;
        // $siswa->tgl_lahir = $request->tgl_lahir;
        // $siswa->id_jurusan = $request->id_jurusan;
        // $siswa->save();

        //metode create()
        // $me = Siswa::create([
        //     'nama' => 'JongKoding',
        //     'nis' => '2021010014',
        //     'jk' => 'L',
        //     'tmp_lahir' => 'Surabaya',
        //     'tgl_lahir' => '2000-01-01',
        //     'id_jurusan' => '1'
        // ]);
        // return $me;

        //akan mencari data dengan keyword nis terlebih dahulu
        //bila data DITEMUKAN makan akan mendapat record data
        //bila data TIDAK DITEMUKAN makan akan memasukkan record baru
        // $siswa = Siswa::firstOrCreate(
        //     ['nis' => '2021010017'],
        //     ['nama' => 'JongKoding0806', 'jk' => 'L', 'nis' => '2021010015', 'tmp_lahir' => 'surakarta', 'tgl_lahir' => '1999-01-01', 'id_jurusan' => '1']
        // );

        //single record
        // $siswa = DB::table('siswa')
        //     ->insert([
        //         'nama' => 'JongKoding',
        //         'nis' => '13',
        //         'jk' => 'L',
        //         'tmp_lahir' => 'Surabaya',
        //         'tgl_lahir' => '2000-01-01',
        //         'id_jurusan' => '1'
        //     ]);

        //multi record
        $siswa = DB::table('siswa')
            ->insert(
                [
                    [
                        'nama' => 'JongKoding',
                        'nis' => '16',
                        'jk' => 'L',
                        'tmp_lahir' => 'Surabaya',
                        'tgl_lahir' => '2000-01-01',
                        'id_jurusan' => '1'
                    ],
                    [
                        'nama' => 'JongKoding',
                        'nis' => '15',
                        'jk' => 'L',
                        'tmp_lahir' => 'Surabaya',
                        'tgl_lahir' => '2000-01-01',
                        'id_jurusan' => '1'
                    ]
                ]
            );
        return $siswa;
    }

    public function update(Request $request, $id)
    {
        // $siswa = Siswa::find($id);
        // $siswa->nama = $request->nama;
        // $siswa->save();

        // $siswa = Siswa::where('nis', $id)
        //     ->update(['nama' => $request->nama, 'jk' => $request->jk]);

        // $siswa = Siswa::updateOrCreate(
        //     ['nis' => $id, 'nama' => 'Jong Siang'],
        //     [
        //         'jk' => $request->jk,
        //         'tmp_lahir' => $request->tmp_lahir,
        //         'tgl_lahir' => $request->tgl_lahir,
        //         'id_jurusan' => $request->id_jurusan,
        //     ]
        // );

        // $siswa = DB::table('siswa')
        //     ->where('nis', $id)
        //     ->update(["nama" => $request->nama]);

        $siswa = DB::table('siswa')
            ->updateOrInsert(
                ['nis' => $id, 'nama' => 'Jong Semangat 0911 berubah'],
                [
                    'jk' => $request->jk,
                    'tmp_lahir' => $request->tmp_lahir,
                    'tgl_lahir' => $request->tgl_lahir,
                    'id_jurusan' => $request->id_jurusan,
                ]
            );


        return $siswa;
    }

    public function destroy($id)
    {
        // $siswa = Siswa::where('tmp_lahir', 'surabaya')->delete();

        // $siswa = Siswa::destroy([$id]);
        $siswa = DB::table('siswa')
            ->where('nis', $id)
            ->delete();

        return $siswa;
    }
}
