<!--begin::Content-->

<div class="card-body p-0">
    <!-- begin: Invoice-->
    <!-- begin: Invoice header-->

    <div class="" align="center">
        <h2>LAPORAN PEMESANAN TIKET ONLINE</h2>
        <h3>Wisata Kandang Sapi</h3>
        <span>Jl. Anjasmoro Dsn Tukum, RT.06/RW.04, Notorejo, Wonosalam,</span>
        <span>Kec. Wonosalam, Kabupaten Jombang, Jawa Timur 61476</span>
    </div>
</div>
<!-- end: Invoice header-->
<!-- begin: Invoice body-->
<div class="card-body">
    <!--begin: Datatable-->
    @php
    $pemasukan=0
    @endphp
    <table border="1" cellpadding="10" style="margin-bottom: 100px;">
        <thead>
            <tr>
                <th class="pl-0 font-weight-bold text-muted text-uppercase">Nama Pengunjung</th>
                <th class="pl-0 font-weight-bold text-muted text-uppercase">Kode Order</th>
                <th class="text-right font-weight-bold text-muted text-uppercase">Jenis Tiket</th>
                <th class="text-right font-weight-bold text-muted text-uppercase">Tanggal Kunjungan</th>
                <th class="text-right font-weight-bold text-muted text-uppercase">Tanggal Pemesanan</th>
                <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Jumlah</th>
                <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Total</th>
            </tr>
        </thead>
        @foreach ( $pemesanan AS $e => $p )
        @php
        $pemasukan+=$p->total;
        @endphp
        <tbody>

            <tr class="font-weight-boldest font-size-lg">
                <td class="pl-0 pt-7">{{$p->nama_lengkap}}</td>
                <td class="pl-0 pt-7">{{$p->kd_order}}</td>
                <td class="text-right pt-7">{{$p->jenis_tiket}}</td>
                <td class="text-right pt-7">{{date('d M Y', strtotime($p->tgl_kunjungan))}}</td>
                <td class="text-right pt-7">{{date('d M Y', strtotime($p->created_at))}}</td>
                <td class="text-danger pr-0 pt-7 text-right">{{$p->jumlah}}</td>
                <td class="text-danger pr-0 pt-7 text-right">{{number_format($p->total, 0, ',','.')}}</td>
            </tr>

        </tbody>
        @endforeach
    </table>
</div>
<!-- end: Invoice body-->
<!-- begin: Invoice footer-->
<div class="d-flex flex-column text-md-right" style="text-align: right;">
    <span class="font-size-lg font-weight-bolder mb-1" style="font-weight: bold;">TOTAL PEMASUKAN</span>
    <span class="font-size-h2 font-weight-boldest text-danger mb-1" style="font-weight: bold;">{{number_format($pemasukan, 0, ',','.')}}</span>
</div>
<!-- end: Invoice footer-->
<!-- end::Card-->