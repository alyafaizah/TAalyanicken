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

    // public function invoice()
    // {
    //     $data = DB::table('pembayaran')->select([
    //         DB::raw('total_bayar as pemasukan'),
    //     ]);
    //     $data = DB::table('pemesanan')->select([
    //         DB::raw('count(*) as jumlah'),
    //         DB::raw('DATE(created_at) as tanggal')
    //     ])
    //         ->groupBy('tanggal')
    //         ->whereRaw('DATE(created_at)>=?', [date('Y-m-d', strtotime('-30 days'))])
    //         ->orderBy('tanggal', 'asc')
    //         ->get()
    //         ->toArray();

    //     return view('modules.laporanoffline.laporanoffline', compact('data'));
    // }


    public function laporanonline()
    {
        
        // $jenis_pemesanan = 'jenis_pemesanan';
        $pemesanan = PemesananTiket::where('jenis_pemesanan', 'online')->get();
     
        // $pemesanan=DB::table('pemesanan')->select([
        //     DB::raw('sum(total) as pemasukan')
        // ])
        // ->get();

        return view('modules.laporanonline.laporanonline',compact('pemesanan'));
        // return view('modules.laporanonline.laporanonline', $data);
    }

    public function cetakpdflaporanonline()
    {
       $pemesanan = PemesananTiket::where('jenis_pemesanan', 'online')->get();

        $view = \View::make('modules.laporanonline.cetaklaporanonline',compact('pemesanan'));
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

        return view('modules.laporanoffline.laporanoffline',compact('pemesanan'));
        // return view('modules.laporanonline.laporanonline', $data);
    }

    public function cetakpdflaporanoffline()
    {
        
        $pemesanan = PemesananTiket::where('jenis_pemesanan', 'offline')->get();


        $view = \View::make('modules.laporanoffline.cetaklaporanoffline',compact('pemesanan'));
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
        $tanggal_awal = $request->tanggal_awal;
        $tanggal_akhir = $request->tanggal_akhir;

        $title = "Filter laporan dari $tanggal_awal sampai $tanggal_akhir";
        $data = PemesananTiket::where('tgl_kunjungan', '>=', $tanggal_awal)->where('tgl_kunjungan', '<=', $tanggal_akhir)->get();

        return view('modules.laporanonline.filterlaporan', compact('title', 'data'));
    }
}
