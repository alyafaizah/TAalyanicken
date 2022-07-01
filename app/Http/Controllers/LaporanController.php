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

    public function laporanpengunjung()
    {
        $id_profile = session("id");
        $data['identitas'] = Identitas::where('id_profile', $id_profile)->get();
        $data['profile'] = Profile::where('id_profile', $id_profile)->get();

        // echo $id_profile;
        return view('modules.laporan.laporanpengunjung', $data);
    }

    public function cetakpdfcust()
    {
        $id_profile = session("id");

        $data['identitas'] = Identitas::where('id_profile', $id_profile)->first();
        $data['profile'] = Profile::where('id_profile', $id_profile)->first();

        $view = \View::make('modules.laporan.cetaklaporanpengunjung', $data);
        $html_content = $view->render();


        $pdf = new TCPDF;

        $pdf::SetTitle("List Pengunjung");
        $pdf::AddPage();
        $pdf::writeHTML($html_content, true, false, true, false, '');
        // D is the change of these two functions. Including D parameter will avoid 
        // loading PDF in browser and allows downloading directly
        $pdf::Output('laporanpengunjung.pdf', 'D');

        return response()->download(public_path($html_content));
    }

    public function laporanonline(Request $request)
    {

        // dd($request->all());
        // $dari = $request->dari;
        // $sampai = $request->sampai;
        if ($dari) {
            $pemesanan = PemesananTiket::where('jenis_pemesanan', 'online')->where('tgl_kunjungan', '>=', $dari)->where('tgl_kunjungan', '<=', $sampai)->orderBy('created_at', 'asc')->get();
        }else{
            $pemesanan = PemesananTiket::where('jenis_pemesanan', 'online')->get();
        }




        return view('modules.laporanonline.laporanonline', compact('pemesanan', 'dari', 'sampai'));
        // return view('modules.laporanonline.laporanonline', $data);
    }

    public function cetakpdflaporanonline(Request $request)
    {
        $dari = $request->dari;
        $sampai = $request->sampai;
        $pemesanan = PemesananTiket::where('jenis_pemesanan', 'online')->where('tgl_kunjungan', '>=', $dari)->where('tgl_kunjungan', '<=', $sampai)->orderBy('created_at', 'asc')->get();

        $view = \View::make('modules.laporanonline.cetaklaporanonline', compact('pemesanan', 'dari', 'sampai'));
        $html_content = $view->render();


        $pdf = new TCPDF;

        $pdf::SetTitle("Laporan Pemesanan Tiket");
        $pdf::AddPage();
        $pdf::writeHTML($html_content, true, false, true, false, '');
        // D is the change of these two functions. Including D parameter will avoid 
        // loading PDF in browser and allows downloading directly
        $pdf::Output('laporanpemesanantiketonline.pdf', 'D');

        return response()->download(public_path($html_content));
    }

    public function laporanoffline()
    {
        // $data = array(

        //     'pemesanan' => DB::table('pemesanan')->get()
        // );


        $pemesanan = PemesananTiket::where('jenis_pemesanan', 'offline')->get();

        return view('modules.laporanoffline.laporanoffline', compact('pemesanan'));
        // return view('modules.laporanonline.laporanonline', $data);
    }

    public function cetakpdflaporanoffline(Request $request)
    {

        $dari = $request->dari;
        $sampai = $request->sampai;
        $pemesanan = PemesananTiket::where('jenis_pemesanan', 'offline')->whereDate('tgl_kunjungan', '>=', $dari)->whereDate('tgl_kunjungan', '<=', $sampai)->orderBy('created_at', 'asc')->get();


        $view = \View::make('modules.laporanoffline.cetaklaporanoffline', compact('pemesanan'));
        $html_content = $view->render();


        $pdf = new TCPDF;

        $pdf::SetTitle("Laporan Pemesanan Tiket");
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

            $pemesanan = PemesananTiket::where('tgl_kunjungan', '>=', $dari)->where('tgl_kunjungan', '<=', $sampai)->orderBy('created_at', 'asc')->get();

            return view('modules.laporanonline.laporanonline', compact('title', 'pemesanan','dari','sampai'));
        } catch (\Exception $e) {
            \Session::flash('gagal', $e->getMessage());

            return redirect()->back();
        }
    }

    public function periodeoffline(Request $request)
    {
        try {
            $dari = $request->darioffline;
            $sampai = $request->sampaioffline;

            $title = "Filter laporan dari $dari sampai $sampai";

            $pemesanan = PemesananTiket::whereDate('tgl_kunjungan', '>=', $dari)->whereDate('tgl_kunjungan', '<=', $sampai)->orderBy('created_at', 'asc')->get();

            return view('modules.laporanoffline.laporanoffline', compact('title', 'pemesanan'));
        } catch (\Exception $e) {
            \Session::flash('gagal', $e->getMessage());

            return redirect()->back();
        }
    }
}
