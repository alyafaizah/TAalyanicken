<table class="datatable-table" style="display: block;">
    <thead class="datatable-head">
        <tr class="datatable-row" style="left: 0px;">
            <th class="datatable-cell datatable-toggle-detail datatable-cell-sort">
                <span></span>
            </th>
            <th data-field="Product" class="datatable-cell datatable-cell-sort datatable-cell-sorted" data-sort="desc"><span style="width: 160px;">Kode Order</span></th>
            <th data-field="OrderID" class="datatable-cell datatable-cell-sort"><span style="width: 114px;">Status Pembayaran</span></th>
            <th data-field="tgl_kunjungan" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort"><span style="width: 114px;">Tanggal Berkunjung</span></th>
            <th data-field="Status" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort"><span style="width: 114px;">Jenis Tiket</span></th>
            <th data-field="tgl_kunjungan" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort"><span style="width: 114px;">Jumlah Tiket</span></th>
            <th data-field="tgl_kunjungan" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort"><span style="width: 114px;">Total</span></th>
        </tr>
    </thead>
    <tbody class="datatable-body">
        @foreach ($pemesanan as $p)
        <tr data-row="0" class="datatable-row" style="left: 0px;">
            <td class="datatable-cell datatable-toggle-detail"><a class="datatable-toggle-detail" href=""><i class="fa fa-caret-right"></i></a></td>
            <td class="datatable-cell-sorted datatable-cell" data-field="Product" aria-label="null"><span style="width: 160px;">
                    <div class="d-flex align-items-center">
                        <div class="ml-4">
                            <a href="#" class="text-dark-75 font-weight-bolder font-size-lg mb-0">{{ $p->kd_order }}</a>
                        </div>
                    </div>
                </span></td>
            <td data-field="kd_order" aria-label="64616-103" class="datatable-cell"><span style="width: 114px;">{{ $p->status }}</span></td>
            <td data-field="status" data-autohide-disabled="false" aria-label="1" class="datatable-cell"><span style="width: 114px;"><span class="font-weight-bold">{{ $p->jenis_pemesanan }}</span></span>
            </td>
            <td data-field="tgl_berkunjung" aria-label="64616-103" class="datatable-cell"><span style="width: 114px;">{{ $p->tgl_kunjungan }}</span>
            </td>
            <td data-field="jumlah" aria-label="64616-103" class="datatable-cell"><span style="width: 114px;">{{ $p->jumlah }}</span></td>
            <td data-field="tgl_berkunjung" aria-label="64616-103" class="datatable-cell"><span style="width: 114px;">{{ $p->total }}</span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>