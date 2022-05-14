<!-- extends('layouts.template-backend') -->
@extends('layouts.template-backend-sidebar')

@section('main-content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-5 py-lg-10 gutter-b subheader-transparent" id="kt_subheader" style="background-color: #663259; background-position: right bottom; background-size: auto 100%; background-repeat: no-repeat; background-image: url(assets/media/svg/patterns/taieri.svg)">
		<div class="container d-flex flex-column">
			
		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Modal-->
	<div class="modal fade" id="subheader7Modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Select Location</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<div class="modal-body">
					<div id="kt_subheader_leaflet" style="height:450px; width: 100%;"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
					<button id="submit" type="button" class="btn btn-primary font-weight-bold" data-dismiss="modal">Apply</button>
				</div>
			</div>
		</div>
	</div>
	<!--end::Modal-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Dashboard-->
			<!--begin::Row-->
			<div class="row">
				<div class="col-xl-4">

				</div>

			</div>
			<!--end::Row-->
			<div class="row">

				<div class="col-xl-4">

				</div>
				<div class="col-xl-4">

				</div>
			</div>
			<!--end::Row-->
			<div class="row">
				<div class="col-xl-4">

				</div>
				<div class="col-xl-4">

				</div>
				<div class="col-xl-4">

				</div>
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row">
				<div class="col-lg-4">

				</div>
				<div class="col-lg-8">

				</div>
			</div>
			<!--end::Row-->
			<!--end::Dashboard-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
<!--end::Content-->

@endsection