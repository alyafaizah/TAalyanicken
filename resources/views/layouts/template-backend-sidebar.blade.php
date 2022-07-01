@extends('layouts.template-backend')

@section('main-sidebar')
    <!--begin::Aside-->
    <div class="aside aside-left d-flex flex-column" id="kt_aside">
        <!--begin::Brand-->
        <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-4 py-lg-8">
        </div>
        <!--end::Brand-->
        <!--begin::Nav Wrapper-->
        <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pt-7">
            <!--begin::Nav-->
            <ul class="nav flex-column">
                <!--begin::Item-->
                <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
                    data-boundary="window" title="Dashboard">
                    <a href="/dashboard" class="nav-link btn btn-icon btn-clean btn-icon-white btn-lg active">
                        <i class="flaticon2-protection icon-lg"></i>
                    </a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
                    data-boundary="window" title="Data Tiket">

				<a href="/tiket" class="nav-link btn btn-icon btn-icon-white btn-lg" role="tab">
					<i class="icon-l fas fa-ticket-alt"></i>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Data Petugas">
				<a href="/petugas" class="nav-link btn btn-icon btn-icon-white btn-lg" role="tab">
					<i class="icon-l fas fa-user-plus"></i>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Riwayat">
				<a href="/riwayatadmin" class="nav-link btn btn-icon btn-icon-white btn-lg" role="tab">
					<i class="icon-l fas fa-file-invoice-dollar"></i>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Laporan Pengunjung">
				<a href="/laporanpengunjung" class="nav-link btn btn-icon btn-icon-white btn-lg" role="tab">
					<i class="icon-l fas fa-fax"></i>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Laporan Penjualan">
				<a href="/laporan" class="nnav-link btn btn-icon btn-icon-white btn-lg" role="tab">
					<i class="icon-xl fas fa-chart-line"></i>
				</a>
			</li>
			<!--end::Item-->
			<li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Data Diskon">
				<a href="/diskon" class="nnav-link btn btn-icon btn-icon-white btn-lg" role="tab">
					<i class="icon-xl fas fa-donate"></i>
				</a>
			</li>
		</ul>
		<!--end::Nav-->
	</div>
	<!--end::Nav Wrapper-->
	<!--begin::Footer-->
	<div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-8">
		
	</div>
	<!--end::Footer-->
</div>
<!--end::Aside-->
@endsection