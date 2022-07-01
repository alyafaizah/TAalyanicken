<!--begin::Content-->

<div class="card-body p-0">
    <!-- begin: Invoice-->
    <!-- begin: Invoice header-->

    <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
        <h2 class="display-4 text-white font-weight-boldest mb-10">LAPORAN PEMESANAN TIKET OFFLINE</h2>
    </div>
</div>
<!-- end: Invoice header-->
<!-- begin: Invoice body-->
<div class="card-body">
    <!--begin: Datatable-->
    <table border="1" cellpadding="10" style="margin-bottom: 100px;">
        <thead>
            <tr>
                <th class="pl-0 font-weight-bold text-muted text-uppercase">Order Id</th>
                <th class="text-right font-weight-bold text-muted text-uppercase">Jenis Tiket</th>
                <th class="text-right font-weight-bold text-muted text-uppercase">Tanggal Kunjungan</th>
                <th class="text-right font-weight-bold text-muted text-uppercase">Tanggal Pemesanan</th>
                <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Jumlah</th>
                <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Total</th>
            </tr>
        </thead>
        @foreach ( $pemesanan AS $e => $p )
        <tbody>
            <tr class="font-weight-boldest font-size-lg">
                <td class="pl-0 pt-7">{{$p->order_id}}</td>
                <td class="text-right pt-7">{{$p->jenis_tiket}}</td>
                <td class="text-right pt-7">{{date('d M Y', strtotime($p->tgl_kunjungan))}}</td>
                <td class="text-right pt-7">{{date('d M Y', strtotime($p->created_at))}}</td>
                <td class="text-danger pr-0 pt-7 text-right">{{$p->jumlah}}</td>
                <td class="text-danger pr-0 pt-7 text-right">{{number_format($p->total)}}</td>
            </tr>

        </tbody>
        @endforeach
    </table>
</div>
<!-- end: Invoice body-->
<!-- begin: Invoice footer-->
<div class="d-flex flex-column text-md-right">
    <span class="font-size-lg font-weight-bolder mb-1">TOTAL PEMASUKAN</span>
    <span class="font-size-h2 font-weight-boldest text-danger mb-1">Rp 5000000</span>
</div>

<div class="modal-body">

                <form role="form" action="/laporanoffline/periode" method="get">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mulai Tanggal</label>
                            <input type="date" name="darioffline" class="form-control datepicker" id="exampleInputEmail1" placeholder="Dari tanggal" value="{{date('d-m-Y')}}" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sampai Tanggal</label>
                            <input type="date" name="sampaioffline" class="form-control datepicker" id="exampleInputPassword1" placeholder="Sampai tanggal" value="{{date('d-m-Y')}}" autocomplete="off">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    $('#btn-filter').click(function(e) {
        e.preventDefault(); //mencegah menjalankan proses apapun

        $('#modal-filter').modal();
    })
</script>
<!-- end: Invoice footer-->
<!-- end::Card-->