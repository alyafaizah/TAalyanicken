<!--begin::Card-->
<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h2 class="card-label" align="center">Data Pengunjung Pemesanan Tiket Online</h2>
            <h4 align="center">Wisata Kandang Sapi Wonosalam</h4>
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table border="1" cellpadding="10" style="margin-bottom: 100px;">
            <thead>
                <tr style="background-color:#82b74b;">
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $identitas->nama_lengkap }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>{{ $identitas->alamat }}</td>
                    <td>{{ $identitas->telepon }}</td>
                    <td> {{ $identitas->tempat_lahir}}</td>
                    <td> {{date('d M Y', strtotime($identitas->tgl_lahir))}}</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<!--end::Card-->