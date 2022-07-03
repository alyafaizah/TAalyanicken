@extends('layouts.template-backend-navbar-cust')

@section('main-content-cust')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Layout-->
            <div class="flex-row-fluid ml-lg-8">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-body p-0">
                    
                        <!-- begin: Invoice-->
                        <!-- begin: Invoice header-->
                        <div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">

                            <div class="col-md-10">
                                <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                    <h1 class="display-4 font-weight-boldest mb-10">Detail Transaksi</h1>
                                    <div class="d-flex flex-column align-items-md-end px-0">
                                    </div>
                                </div>
                                <div class="border-bottom w-100"></div>
                                <div class="d-flex justify-content-between pt-6">
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">TANGGAL PEMESANAN</span>
                                        <span class="opacity-70">{{ $pemesanan->created_at }}</span>
                                    </div>
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">ORDER ID</span>
                                        <span class="opacity-70">{{ $pemesanan->kd_order }}</span>
                                    </div>
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">TANGGAL BERKUNJUNG</span>
                                        <span class="opacity-70">{{ date('d M Y', strtotime($pemesanan->tgl_kunjungan)) }}</span>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <!-- end: Invoice header-->
                        <!-- begin: Invoice body-->

                        <div class="row ">

                            <div class="col-md-9">

                                <div class="row justify-content-center">
                                    <div class="col-md-3">
                                        <p style="margin: 0px">Jenis Tiket</p>
                                        <h2 style="margin: 0px">{{ $pemesanan->jenis_tiket }}</h2>
                                    </div>
                                    <div class="col-md-3">
                                        <p style="margin: 0px">Kode Kupon</p>
                                        <h2 style="margin: 0px">{{ $pemesanan->coupon }}</h2>
                                    </div>
                                    <div class="col-md-3">
                                        <p style="margin: 0px">Status Pemesanan</p>
                                        @php
                                            
                                            $color = "";
                                            $qr = "";

                                            if ( $pemesanan->status == "diproses" ) {

                                                $color = "warning";
                                            } else if ( $pemesanan->status == "diterima" ) {

                                                $color = "success";
                                                $qr = asset('assets/qrcodes/'. $pemesanan->kd_order);
                                            
                                            } else if ( $pemesanan->status == "dibatalkan" ) {

                                                $color = "danger";
                                            
                                            } else if ( $pemesanan->status == "berhasil" ) {

                                                $color = "primary";
                                                $qr = asset('assets/qrcodes/'. $pemesanan->kd_order);
                                            }
                                            
                                        @endphp
                                        <span class="label label-light-{{ $color }} label-pill label-inline mr-2" style="font-size: 18px">{{ $pemesanan->status }}</span>
                                    </div>
                                    
                                </div>

                                <hr>

                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <table class="table">
                                            <tr>
                                                <td><b>Jumlah</b></td>
                                                <td><b>Subtotal</td>
                                                <td><b>TOTAL</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $pemesanan->jumlah }} Tiket</td>
                                                <td>{{ number_format($pemesanan->harga, 0, ',','.') }}</td>
                                                <td>{{ number_format($pemesanan->total, 0, ',','.') }}</td>
                                            </tr>
                                        </table>

                                        <hr>

                                        <b>TOTAL</b>
                                        <h4>{{ number_format($pemesanan->total, 0, ',','.') }}</h4>

                                        @php
                                            
                                            if ( $potongan > 0 ) {

                                                $total = $pemesanan->total;
                                                $diskon = $pemesanan->total * ($potongan / 100);

                                                $total_keseluruhan = $total - $diskon;


                                                echo '<b>Mendapatkan diskon sebesar '.$potongan.'%</b><br>
                                                    <h2>Total Keseluruhan '.number_format( $total_keseluruhan, 0, ',','.' ).'</h2> <br><br>
                                                ';
                                            }
                                        @endphp

                                        
                                    </div>
                                </div>

                                
                            </div>
                            <div class="col-md-3 text-center">
                                @php
                                    
                                    if ( $qr ) {

                                        echo '<img src="'.$qr.'.svg" alt="This is QR Code Section" style="width: 150px" />';
                                        echo "<br>Lampirkan atau Tunjukan kode QR ini ke petugas";
                                    } else {

                                    echo svg();
                                    echo "<br>Harap selesaikan Pembayaran Anda";
                                @endphp
                                    

                                <button id="pay-button" class="btn btn-primary btn-sm">Tambahkan Pembayaran</button>
                                <br><small>Klik untuk menyelesaikan pembayaran anda</small>
                                        
                                    
                                @php } @endphp
                            </div>

                        </div>


                       


                    </div>
                </div>
                <!-- end: Invoice body-->
                <!-- begin: Invoice footer-->
                <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0 mx-0">
                    <div class="col-md-10">
                        <div class="table-responsive">
                            
                        </div>
                    </div>
                </div>
                <!-- end: Invoice footer-->
                <!--begin: QR-->

                <!--end::QR-->
                <!-- begin: Invoice action-->
                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                    <div class="col-md-10">
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-light-primary font-weight-bold" onclick="window.print();">Download Order Details</button>
                            <button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">Print
                                Order Details</button>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice action-->
                <!-- end: Invoice-->
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Layout-->
</div>
<!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->

<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-wKAF6jye0ktTBz4a"></script>

<script>
    $(function() {


        $('#pay-button').click(function() {

            window.snap.pay('{{$snap_token}}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    console.log(result);
                    // send_response_to_form(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    console.log(result);
                    // send_response_to_form(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    console.log(result);
                    // send_response_to_form(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        })
    })
</script>



@php 

    function svg() {

        return '<svg style="width: 150px" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 773.97946 419.08428" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M633.01027,462.15071v.91a31.51524,31.51524,0,0,1-31.52,31.51h-355.77a31.513,31.513,0,0,1-31.50976-31.51v-.91Z" transform="translate(-213.01027 -240.45786)" fill="#f2f2f2"/><path d="M288.62013,312.15071c-25.71,6.35-48.79-13.43-52.81982-31.78l1.79-.32C259.26027,275.26069,283.45021,290.75068,288.62013,312.15071Z" transform="translate(-213.01027 -240.45786)" fill="#6c63ff"/><path d="M910.0796,651.98225c-7.43556-3.21061-9.12473-14.90825-2.90123-20.09126s17.42245-1.40526,19.23475,6.48848l-6.93646-49.61838c-1.59471-11.40737-2.87074-24.1593,4.02319-33.3867,6.4557-8.64085,19.06721-11.40925,29.19167-7.68961s17.60728,12.99846,20.78194,23.30681,2.42556,21.51063-.34668,31.9344-7.48159,20.21476-12.24451,29.89231c-4.88058,9.91664-10.80012,20.66286-21.23254,24.31311C929.68387,660.6184,910.0796,651.98225,910.0796,651.98225Z" transform="translate(-213.01027 -240.45786)" fill="#f2f2f2"/><path d="M942.66527,546.74367a135.26451,135.26451,0,0,1,6.42227,44.04385,138.9936,138.9936,0,0,1-7.91119,43.618,132.59534,132.59534,0,0,1-10.66924,22.89929,1.50112,1.50112,0,0,0,2.59041,1.51416,137.90954,137.90954,0,0,0,16.14792-42.32482,141.49932,141.49932,0,0,0,1.81249-45.50827,136.68806,136.68806,0,0,0-5.49982-25.03974c-.58928-1.83039-3.48688-1.04765-2.89284.79752Z" transform="translate(-213.01027 -240.45786)" fill="#fff"/><path d="M905.67137,633.71706,929.415,658.66863c1.33359,1.40144,3.45267-.72224,2.12132-2.12132l-23.74362-24.95157c-1.3336-1.40144-3.45268.72223-2.12132,2.12132Z" transform="translate(-213.01027 -240.45786)" fill="#fff"/><path d="M885.50127,539.50573a3.50849,3.50849,0,0,1-2.303-.856,165.03257,165.03257,0,0,1-38.66138-35.00831,3.53629,3.53629,0,0,1-.18676-4.93847l7.19726-7.94776,1.48242,1.34278-7.19726,7.94775a1.53612,1.53612,0,0,0,.10742,2.16944l.10523.11083a163.02694,163.02694,0,0,0,38.29785,34.68213l.13086.1001a1.53607,1.53607,0,0,0,2.16943-.10742L900.68584,521.493a1.53546,1.53546,0,0,0-.032-2.09571c-3.25415-1.773-6.429-3.70605-9.43921-5.74658l1.12207-1.65527c2.99292,2.02881,6.1521,3.94922,9.39014,5.70849l.19384.1377a3.53546,3.53546,0,0,1,.24756,4.99414l-14.04248,15.50781a3.51172,3.51172,0,0,1-2.446,1.15772Q885.59039,539.50573,885.50127,539.50573Z" transform="translate(-213.01027 -240.45786)" fill="#3f3d56"/><path d="M870.02056,513.39929c4.41015,3.99,8.93994,6.18,10.12011,4.88a1.6302,1.6302,0,0,0,.17969-1.53,11.738,11.738,0,0,0-2.25-4.01q-5.87988-4.18506-11.42969-9.03c-1.16015-.38-2.05029-.37-2.48.11a.91207.91207,0,0,0-.1499.23C863.27056,505.55926,865.84038,509.60931,870.02056,513.39929Z" transform="translate(-213.01027 -240.45786)" fill="#6c63ff"/><path d="M843.44048,481.24926a3.45751,3.45751,0,0,0,1.1001,2.39,173.29219,173.29219,0,0,0,19.47021,20.41,154.85773,154.85773,0,0,0,16.30957,12.7c.9502.65,1.91016,1.28,2.88037,1.9a3.47136,3.47136,0,0,0,2.29981.86c.06006,0,.12011-.01.18017-.01a3.51346,3.51346,0,0,0,2.44971-1.16l14.04-15.5a3.54107,3.54107,0,0,0-.25-5l-.18994-.14a108.15843,108.15843,0,0,1-38.18994-34.57l-.14991-.18a3.54149,3.54149,0,0,0-5,.25l-14.04,15.5A3.52525,3.52525,0,0,0,843.44048,481.24926Zm2-.1a1.52224,1.52224,0,0,1,.39014-1.1l14.04-15.51a1.52157,1.52157,0,0,1,1.06983-.5,1.5001,1.5001,0,0,1,1.02.32,110.1969,110.1969,0,0,0,38.68994,35.04,1.53215,1.53215,0,0,1,.04,2.09l-14.04981,15.51a1.482,1.482,0,0,1-1.06005.5,1.56047,1.56047,0,0,1-1.10987-.38995l-.13037-.1q-3.17945-2.04-6.27-4.27-5.87988-4.18506-11.42969-9.03a171.42068,171.42068,0,0,1-20.60009-21.38l-.1001-.11A1.56505,1.56505,0,0,1,845.44048,481.14929Z" transform="translate(-213.01027 -240.45786)" fill="#3f3d56"/><ellipse cx="872.15098" cy="491.04889" rx="3.1698" ry="10.77731" transform="translate(-290.26027 567.47291) rotate(-47.83838)" fill="#6c63ff"/><polygon points="578.904 406.55 566.645 406.549 560.812 359.261 578.906 359.262 578.904 406.55" fill="#ffb8b8"/><path d="M795.04105,658.89183l-39.53052-.00147v-.5A15.38605,15.38605,0,0,1,770.897,643.00413h.001l24.1438.001Z" transform="translate(-213.01027 -240.45786)" fill="#2f2e41"/><polygon points="614.904 406.55 602.645 406.549 596.812 359.261 614.906 359.262 614.904 406.55" fill="#ffb8b8"/><path d="M831.04105,658.89183l-39.53052-.00147v-.5A15.38605,15.38605,0,0,1,806.897,643.00413h.001l24.1438.001Z" transform="translate(-213.01027 -240.45786)" fill="#2f2e41"/><path d="M836.1423,455.9l-2.92743,173.69392a4,4,0,0,1-4.36157,3.91617l-14.34623-1.3042a4,4,0,0,1-3.6259-3.67443l-8.39885-108.34524a1,1,0,0,0-1.9963.03944l-4.19794,110.82575A4,4,0,0,1,792.29095,634.9H776.90532a4,4,0,0,1-3.99255-3.756L762.1423,454.9l64-16Z" transform="translate(-213.01027 -240.45786)" fill="#2f2e41"/><circle cx="576.71077" cy="27.78466" r="24.56103" fill="#ffb8b8"/><path d="M759.95089,461.067a4.46926,4.46926,0,0,1-1.3645-3.165l-1.65674-118.44238a28.50084,28.50084,0,0,1,19.282-27.44141c2.301-10.43945,14.54785-11.74707,21.68725-11.59082a11.08482,11.08482,0,0,1,8.97754,4.92285l5.11792,7.67676,11.28027,6.61231a28.528,28.528,0,0,1,13.47022,30.8164l-1.73657,7.89942a181.54005,181.54005,0,0,0,1.69775,84.66015l3.49463,13.32422a4.49944,4.49944,0,0,1-4.698,5.62793l-4.05859-.3125a4.49384,4.49384,0,0,1-4.13257-4.03808l-.67163-6.7168a.50005.50005,0,0,0-.99512,0l-.65015,6.50293a4.49951,4.49951,0,0,1-4.40844,4.05176l-57.43091.88379c-.02393,0-.04761.001-.07153.001A4.47133,4.47133,0,0,1,759.95089,461.067Z" transform="translate(-213.01027 -240.45786)" fill="#3f3d56"/><path d="M791.6423,282.4c.1007,3.472,2.51116,5.48065,5.47052,7.29924s6.41877,2.60712,9.80795,3.36775a2.99863,2.99863,0,0,0,4.40516-2.62457l3.1084-11.82324a74.84087,74.84087,0,0,0,2.39306-11.537c.74861-7.50914-1.031-15.58706-6.27223-21.01634s-14.33083-7.35795-20.61159-3.17478c-7.45361-9.51978-41.52344,11.513-33.11914,18.13281,1.49512,1.17767,3.78063-.31249,5.67841-.45693s4.02454.18937,5.23,1.66219c1.57495,1.9242.889,4.79052,1.538,7.19089a6.71433,6.71433,0,0,0,8.4837,4.34834,23.08966,23.08966,0,0,0,4.39987-2.8286c1.45566-.96958,3.29506-1.686,4.93368-1.0745,2.15991.80607,2.92722,3.45041,3.12242,5.74755A53.2333,53.2333,0,0,0,791.6423,282.4Z" transform="translate(-213.01027 -240.45786)" fill="#2f2e41"/><polygon points="572.896 107.768 568.896 156.768 547.896 207.768 578.896 157.768 572.896 107.768" opacity="0.2"/><path d="M755.9958,467.2182a10.05576,10.05576,0,0,0,.31761-15.41606l13.37856-33.136-18.20228,3.67571-9.9139,30.903a10.11028,10.11028,0,0,0,14.42,13.97337Z" transform="translate(-213.01027 -240.45786)" fill="#ffb8b8"/><path d="M755.02167,452.60406l-10.30361-3.71344A4.52376,4.52376,0,0,1,741.903,443.471l16.99724-62.21933,2.59146-56.2325a12.81885,12.81885,0,1,1,25.588,1.55127l-4.62839,61.57336L760.79374,449.862a4.509,4.509,0,0,1-4.57608,2.99941A4.52235,4.52235,0,0,1,755.02167,452.60406Z" transform="translate(-213.01027 -240.45786)" fill="#3f3d56"/><path d="M861.20705,470.46813a10.05578,10.05578,0,0,0-5.64645-14.34828l-.421-35.73237-15.38084,10.405,2.75785,32.33687a10.11027,10.11027,0,0,0,18.69046,7.33881Z" transform="translate(-213.01027 -240.45786)" fill="#ffb8b8"/><path d="M854.67755,457.35754l-10.93889.54305a4.52374,4.52374,0,0,1-4.68581-3.91661l-8.287-63.96466-19.274-52.88971a12.81886,12.81886,0,1,1,24.21028-8.42712l19.4521,58.603,3.79337,65.29778a4.509,4.509,0,0,1-3.06718,4.53093A4.52179,4.52179,0,0,1,854.67755,457.35754Z" transform="translate(-213.01027 -240.45786)" fill="#3f3d56"/><path d="M985.98973,659.39929h-381a1,1,0,0,1,0-2h381a1,1,0,0,1,0,2Z" transform="translate(-213.01027 -240.45786)" fill="#3f3d56"/><path d="M536.22878,443.5008c-5.74341,0-10.31079-1.708-13.57691-5.07715-7.38159-7.61523-6.91919-22.29345-6.54761-34.08789.10791-3.43115.21-6.67236.10694-9.3872l-.00073-.041a20.13637,20.13637,0,0,1,20.02685-20.03711H583.853c5.73609,0,10.29883,1.70557,13.56275,5.07031,7.38135,7.60889,6.92407,22.2837,6.55688,34.0752-.10718,3.43848-.20849,6.68652-.10327,9.40625A20.149,20.149,0,0,1,583.833,443.5008H536.22878Zm-18.01831-48.60742c.10449,2.77979.0017,6.04688-.10743,9.50537-.35962,11.417-.80713,25.626,5.98487,32.63281,2.91528,3.00733,6.88672,4.46924,12.14062,4.46924h47.60156a18.13619,18.13619,0,0,0,18.04-18.043c-.10717-2.748-.00488-6.02978.10352-9.50439.35547-11.41406.79809-25.61963-5.99341-32.62012-2.91284-3.00293-6.88037-4.46289-12.12695-4.46289h-47.613A18.13148,18.13148,0,0,0,518.21047,394.89338Z" transform="translate(-213.01027 -240.45786)" fill="#3f3d56"/><path d="M278.10036,313.991a44.61893,44.61893,0,0,1-23.574-6.90479c-10.33874-6.42431-18.14514-16.71338-20.37268-26.85058l-.22326-1.01612,2.79394-.5c21.99317-4.854,46.86878,10.78809,52.19788,32.83643l.23364.9668-.96558.23877A41.98311,41.98311,0,0,1,278.10036,313.991ZM236.349,280.81867c2.39978,9.29932,9.683,18.63428,19.233,24.56885a41.6881,41.6881,0,0,0,31.14587,5.6626c-5.57556-20.5415-28.92248-34.95606-49.59118-30.373Z" transform="translate(-213.01027 -240.45786)" fill="#3f3d56"/><path d="M250.35793,427.63313c-6.54261,0-11.858-2.92774-14.97864-8.26856a20.76205,20.76205,0,0,1-.00635-20.35791c3.17053-5.43213,8.61267-8.3789,15.33374-8.27588h63.44373c6.69836-.08545,12.14453,2.84815,15.317,8.28662a20.762,20.762,0,0,1-.00183,20.355c-3.17114,5.42578-8.61584,8.32373-15.3302,8.2583H250.69045Q250.52364,427.63288,250.35793,427.63313Zm.03711-34.90479c-5.83472,0-10.54786,2.58008-13.2948,7.28662a18.70417,18.70417,0,0,0,.006,18.34034c2.79321,4.78125,7.6029,7.36914,13.56921,7.27539h63.475c5.97253.09521,10.79712-2.4917,13.58838-7.26758a18.70478,18.70478,0,0,0,.00109-18.33789c-2.79309-4.78809-7.61865-7.36621-13.57531-7.29444H250.68569C250.58876,392.72932,250.49135,392.72834,250.395,392.72834Z" transform="translate(-213.01027 -240.45786)" fill="#3f3d56"/><path d="M552.51027,398.65071h-20a5,5,0,0,1,0-10h20a5,5,0,0,1,0,10Z" transform="translate(-213.01027 -240.45786)" fill="#6c63ff"/><path d="M552.51027,414.65071h-20a5,5,0,0,1,0-10h20a5,5,0,0,1,0,10Z" transform="translate(-213.01027 -240.45786)" fill="#6c63ff"/><path d="M552.51027,430.65071h-20a5,5,0,0,1,0-10h20a5,5,0,0,1,0,10Z" transform="translate(-213.01027 -240.45786)" fill="#6c63ff"/><path d="M587.51027,398.65071h-20a5,5,0,0,1,0-10h20a5,5,0,0,1,0,10Z" transform="translate(-213.01027 -240.45786)" fill="#6c63ff"/><path d="M587.51027,414.65071h-20a5,5,0,0,1,0-10h20a5,5,0,0,1,0,10Z" transform="translate(-213.01027 -240.45786)" fill="#6c63ff"/><path d="M587.51027,430.65071h-20a5,5,0,0,1,0-10h20a5,5,0,0,1,0,10Z" transform="translate(-213.01027 -240.45786)" fill="#6c63ff"/><rect x="1.2002" y="87.13376" width="418.7998" height="2" fill="#3f3d56"/><path d="M600.01027,495.15071h-354a33.03734,33.03734,0,0,1-33-33v-172a33.03734,33.03734,0,0,1,33-33h354a33.03734,33.03734,0,0,1,33,33v172A33.03734,33.03734,0,0,1,600.01027,495.15071Zm-354-236a31.03528,31.03528,0,0,0-31,31v172a31.03529,31.03529,0,0,0,31,31h354a31.0352,31.0352,0,0,0,31-31v-172a31.0352,31.0352,0,0,0-31-31Z" transform="translate(-213.01027 -240.45786)" fill="#3f3d56"/></svg>';
    }

@endphp


@endsection



