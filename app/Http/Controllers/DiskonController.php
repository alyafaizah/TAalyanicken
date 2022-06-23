<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DiskonController extends Controller
{
    function index()
    {

        $data = array(

            'diskon' => DB::table('diskon')->get()
        );

        return view('modules.diskon.datadiskon', $data);
    }

    function create()
    { //halaman buat petugas
        return view('modules.diskon.creatediskon');
    }

    // proses tambah
    function process(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:1024'
        ]);

        $file_name = $request->image->getClientOriginalName();

        $upload_image = $request->image->storeAs('diskon-images', $file_name);

        $ambilKode     = $request->input('kode_diskon');
        $ambilNama  = $request->input('nama_diskon');
        $ambilImage  = $upload_image;
        $ambilNilai  = $request->input('nilai_diskon');
        $ambilKeterangan  = $request->input('keterangan_diskon');
        $ambilTglawal  = $request->input('tgl_awal');
        $ambilTglakhir  = $request->input('tgl_akhir');

        $date_to_string_awal = strtotime($ambilTglawal);
        $date_to_string_akhir = strtotime($ambilTglakhir);
        $ambilTglawal = date('Y-m-d', $date_to_string_awal);
        $ambilTglakhir = date('Y-m-d', $date_to_string_akhir);

        $data = array(
            'kode_diskon'           => $ambilKode,
            'nama_diskon'           => $ambilNama,
            'image'                 => $ambilImage,
            'nilai_diskon'          => $ambilNilai,
            'keterangan_diskon'     => $ambilKeterangan,
            'tgl_awal'              => $ambilTglawal,
            'tgl_akhir'             => $ambilTglakhir,
            'status'                => "aktif",
        );

        // insert
        Diskon::create($data);

        return redirect('diskon');
    }

    //edit
    function view_edit($kd)
    {

        $data['diskon'] = Diskon::where('id_diskon', $kd)->first();
        $data['id_diskon'] = $kd;

        return view('modules.diskon.editdiskon', $data, [
            "title" => "Diskon Tiket"
        ]);
    }

    // function proses update
    function update(Request $request, $kd)
    {

        $request->validate([
            'image' => 'image|file|max:1024'
        ]);

        
        $file_name = $request->image->getClientOriginalName();
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
        }
        $upload_image = $request->image->storeAs('diskon-images', $file_name);

        $diskon = Diskon::where('id_diskon', $kd);

        if ($diskon) {
            $ambilKode          = $request->input('kode_diskon');
            $ambilNama          = $request->input('nama_diskon');
            $ambilImage         = $upload_image;
            $ambilNilai         = $request->input('nilai_diskon');
            $ambilKeterangan    = $request->input('keterangan_diskon');
            $ambilStatus        = $request->input('status');
            $ambilTglawal       = $request->input('tgl_awal');
            $ambilTglakhir      = $request->input('tgl_akhir');
            //konversi
            $date_to_string     = strtotime($ambilTglawal);
            $date_to_string     = strtotime($ambilTglakhir);
            $ambilTglawal       = date('Y-m-d', $date_to_string);
            $ambilTglakhir      = date('Y-m-d', $date_to_string);

            $data = array(
                'kode_diskon'           => $ambilKode,
                'nama_diskon'           => $ambilNama,
                'image'                 => $ambilImage,
                'nilai_diskon'          => $ambilNilai,
                'keterangan_diskon'     => $ambilKeterangan,
                'tgl_awal'              => $ambilTglawal,
                'tgl_akhir'             => $ambilTglakhir,
                'status'                => $ambilStatus,
            );

            $diskon->update($data);
            return redirect('diskon');

        } else {
            echo "invalid kd " . $kd;
        }
    }

    // fungsi hapus
    function delete($kd)
    {

        $diskon = Diskon::where('id_diskon', $kd);

        if ($diskon) {

            $diskon->delete();
            return redirect('diskon')->with('pesan', 'Diskon berhasil terhapus');
        } else {

            return redirect('diskon')->with('pesan', 'Hapus gagal, Kode diskon ' . $kd . ' tidak ditemukan');
        }
    }
   
}
