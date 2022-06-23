<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;
use Illuminate\Support\Facades\DB;
use App\Models\Identitas;
use App\Models\Profile;
use App\Models\Pemesanan;

class LaporanController extends Controller
{
    public function index()
    {
        return view('modules.laporan.laporan');
    }

    public function laporanpengunjung()
    {
        $id_profile = session("id");
        $data['identitas'] = Identitas::where('id_profile', $id_profile)->first();
        $data['profile'] = Profile::where('id_profile', $id_profile)->first();

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

    public function invoice()
    {
        $data = DB::table('pembayaran')->select([
            DB::raw('total_bayar as pemasukan'),
        ]);
        $data = DB::table('pemesanan')->select([
            DB::raw('count(*) as jumlah'),
            DB::raw('DATE(created_at) as tanggal')
        ])
            ->groupBy('tanggal')
            ->whereRaw('DATE(created_at)>=?', [date('Y-m-d', strtotime('-30 days'))])
            ->orderBy('tanggal', 'asc')
            ->get()
            ->toArray();

        return view('modules.laporanoffline.laporanoffline', compact('data'));
    }
}
