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
        if ($dari) {
            $pemesanan = PemesananTiket::where('jenis_pemesanan', 'online')->where('tgl_kunjungan', '>=', $dari)->where('tgl_kunjungan', '<=', $sampai)->orderBy('created_at', 'asc')->get();
        } else {
            $pemesanan = PemesananTiket::where('jenis_pemesanan', 'online')->get();
        }




        return view('modules.laporanonline.laporanonline', compact('pemesanan', 'dari', 'sampai'));
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


        $pdf = new TCPDF;

        $pdf::SetTitle("Laporan Pemesanan Tiket Online");
        $pdf->setPaper('A4', 'landscape');
        $pdf::AddPage();
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


        $pdf = new TCPDF;

        $pdf::SetTitle("Laporan Pemesanan Tiket Offline");
        $pdf::AddPage();
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
}
