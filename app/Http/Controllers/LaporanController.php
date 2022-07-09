<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\DB;
use App\Models\Identitas;
use App\Models\Profile;
use App\Models\PemesananTiket;
use GuzzleHttp\BodySummarizer;

class LaporanController extends Controller
{
    public function index()
    {
        return view('modules.laporan.laporan');
    }

    public function laporanonline(Request $request)
    {

        // dd($request->all());
        $dari = $request->dari;
        $sampai = $request->sampai;
        $id_profile = session("id");
        if ($dari) {

            $status = array("diterima", "berhasil");
            $pemesanan = DB::table('pemesanan')->select('pemesanan.*', 'nama_lengkap')
                                                ->join('identitas', 'pemesanan.id_profile', '=', 'identitas.id_profile')
                                                ->where('tgl_kunjungan', '>=', $dari)
                                                ->where('tgl_kunjungan', '<=', $sampai)
                                                ->where('jenis_pemesanan', 'online')
                                                // ->where('status', 'diterima')
                                                // ->orWhere('status', 'berhasil')
                                                ->whereIn('status', $status)
                                                ->orderBy('created_at', 'asc')
                                                ->get();

            // $pemesanan = DB::table('pemesanan')->select('pemesanan.*', 'nama_lengkap')
            //                                     ->join('identitas', 'pemesanan.id_profile', '=', 'identitas.id_profile')
            //                                     ->where('jenis_pemesanan', 'online')
            //                                     ->where('status', 'diterima')
            //                                     ->orWhere('status', 'berhasil')
            //                                     ->orderBy('created_at', 'asc')
            //                                     ->get();

            // $pemesanan = PemesananTiket::where('jenis_pemesanan', 'online')->where('status', 'diterima')->orWhere('status', 'berhasil')->where('tgl_kunjungan', '>=', $dari)->where('tgl_kunjungan', '<=', $sampai)->orderBy('created_at', 'asc')->get();
            // $identitas = Identitas::where('id_profile', $id_profile)->get();
        } else {
            // $pemesanan = PemesananTiket::where('jenis_pemesanan', 'online')->where('status', 'diterima')->orWhere('status', 'berhasil')->get();
            // $identitas = Identitas::where('id_profile', $id_profile)->get();

            $pemesanan = DB::table('pemesanan')->select('pemesanan.*', 'nama_lengkap')
                                                ->join('identitas', 'pemesanan.id_profile', '=', 'identitas.id_profile')
                                                ->where('jenis_pemesanan', 'online')
                                                ->where('status', 'diterima')
                                                ->orWhere('status', 'berhasil')
                                                ->orderBy('created_at', 'asc')
                                                ->get();
        }


        // $pemesanan = PemesananTiket::paginate(30);


        // return view('modules.laporanonline.laporanonline', compact('data', 'dari', 'sampai'));
        return view('modules.laporanonline.laporanonline', [
            "pemesanan" => $pemesanan,
            "dari" => $dari,
            "sampai" => $sampai
        ]);
    }

    public function cetakpdflaporanonline(Request $request)
    {
        $dari = $request->dari;
        $sampai = $request->sampai;

        if ($dari) {
            $pemesanan = PemesananTiket::where('jenis_pemesanan', 'online')->where('tgl_kunjungan', '>=', $dari)->where('tgl_kunjungan', '<=', $sampai)->orderBy('created_at', 'asc')->get();
        } else {
            $pemesanan = PemesananTiket::where('jenis_pemesanan', 'online')->get();
        }

        $view = \View::make('modules.laporanonline.cetaklaporanonline', compact('pemesanan', 'dari', 'sampai'));
        $html_content = $view->render();


        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf::Cell(0, 0, 'A4 LANDSCAPE', 1, 1, 'C');


        $pdf::SetTitle("Laporan Pemesanan Tiket Online");
        $pdf::AddPage('L', 'A4');
        $pdf::SetAuthor('Wisata Kandang Sapi');
        // set margins
        $pdf::SetMargins(10, PDF_MARGIN_TOP, 10);
        // set auto page breaks
        $pdf::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf::writeHTML($html_content, true, false, true, false, '');
        // D is the change of these two functions. Including D parameter will avoid 
        // loading PDF in browser and allows downloading directly
        $pdf::Output('laporanpemesanantiketonline.pdf', 'D');

        return response()->download(public_path($html_content));
    }

    public function laporanoffline(Request $request)
    {
        $dari = $request->darioffiline;
        $sampai = $request->sampai;
        if ($dari) {
            $pemesanan = PemesananTiket::where('jenis_pemesanan', 'offline')->where('tgl_kunjungan', '>=', $dari)->where('tgl_kunjungan', '<=', $sampai)->orderBy('created_at', 'asc')->get();
        } else {
            $pemesanan = PemesananTiket::where('jenis_pemesanan', 'offline')->get();
        }




        return view('modules.laporanoffline.laporanoffline', compact('pemesanan', 'dari', 'sampai'));
    }

    public function cetakpdflaporanoffline(Request $request)
    {

        $dari = $request->dari;
        $sampai = $request->sampai;

        if ($dari) {
            $pemesanan = PemesananTiket::where('jenis_pemesanan', 'offline')->where('tgl_kunjungan', '>=', $dari)->where('tgl_kunjungan', '<=', $sampai)->orderBy('created_at', 'asc')->get();
        } else {
            $pemesanan = PemesananTiket::where('jenis_pemesanan', 'offline')->get();
        }

        $view = \View::make('modules.laporanoffline.cetaklaporanoffline', compact('pemesanan', 'dari', 'sampai'));
        $html_content = $view->render();


        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf::Cell(0, 0, 'A4 LANDSCAPE', 1, 1, 'C');


        $pdf::SetTitle("Laporan Pemesanan Tiket Online");
        $pdf::AddPage('L', 'A4');
        $pdf::SetAuthor('Wisata Kandang Sapi');
        // set margins
        $pdf::SetMargins(10, PDF_MARGIN_TOP, 10);
        // set auto page breaks
        $pdf::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf::writeHTML($html_content, true, false, true, false, '');
        // D is the change of these two functions. Including D parameter will avoid 
        // loading PDF in browser and allows downloading directly
        $pdf::Output('laporanpemesanantiketoffline.pdf', 'D');

        return response()->download(public_path($html_content));
    }

    public function periode(Request $request)
    {
        try {
            $dari = $request->dari;
            $sampai = $request->sampai;

            $title = "Filter laporan dari $dari sampai $sampai";

            $pemesanan = PemesananTiket::where('jenis_pemesanan', 'online')->where('tgl_kunjungan', '>=', $dari)->where('tgl_kunjungan', '<=', $sampai)->orderBy('created_at', 'asc')->get();

            return view('modules.laporanonline.laporanonline', compact('title', 'pemesanan', 'dari', 'sampai'));
        } catch (\Exception $e) {
            \Session::flash('gagal', $e->getMessage());

            return redirect()->back();
        }
    }

    public function periodeoffline(Request $request)
    {
        try {
            $dari = $request->dari;
            $sampai = $request->sampai;

            $title = "Filter laporan dari $dari sampai $sampai";

            $pemesanan = PemesananTiket::where('jenis_pemesanan', 'offline')->where('tgl_kunjungan', '>=', $dari)->where('tgl_kunjungan', '<=', $sampai)->orderBy('created_at', 'asc')->get();

            return view('modules.laporanoffline.laporanoffline', compact('title', 'pemesanan', 'dari', 'sampai'));
        } catch (\Exception $e) {
            \Session::flash('gagal', $e->getMessage());

            return redirect()->back();
        }
    }

    public function test()
    {
        $id_profile = session("id");
        $pemesanan  = Profile::where('id_profile', $id_profile)->get();
        $pemesanan  = Identitas::where('nama_lengkap', $id_profile)->get();
        $pemesanan  = PemesananTiket::where('jenis_pemesanan', 'online')->get();

        $data = array(
            'pemesanan' => $pemesanan
        );

        // echo $id_profile;

        return view('modules.test', $data);
    }
}
