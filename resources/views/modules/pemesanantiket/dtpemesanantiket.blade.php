@extends('layouts.template-backend-sidebar')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container" style="margin-top: 100px;">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h2 class="card-label">Data Pemesanan Tiket Online
                            <span class="d-block text-muted pt-2 font-size-sm">Wisata Kandang Sapi Wonosalam</span></h2>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2">
                            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                                            <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>Export</button>
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi flex-column navi-hover py-2">
                                    <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-print"></i>
                                            </span>
                                            <span class="navi-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-file-excel-o"></i>
                                            </span>
                                            <span class="navi-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-file-pdf-o"></i>
                                            </span>
                                            <span class="navi-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <!--end::Dropdown-->
                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Design/Flatten.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>New Record</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-xl-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                            <select class="form-control" id="kt_datatable_search_status">
                                                <option value="">All</option>
                                                <option value="1">Dibatalkan</option>
                                                <option value="2">Berhasil</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <!-- bingung -->
                    <!-- <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <div class="datatable-pager datatable-paging-loaded">
                            <ul class="datatable-pager-nav my-2 mb-sm-0">
                                <li><a title="First" class="datatable-pager-link datatable-pager-link-first datatable-pager-link-disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
                                <li><a title="Previous" class="datatable-pager-link datatable-pager-link-prev datatable-pager-link-disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
                                <li style="display: none;"><input type="text" class="datatable-pager-input form-control" title="Page number"></li>
                                <li><a class="datatable-pager-link datatable-pager-link-number datatable-pager-link-active" data-page="1" title="1">1</a></li>
                                <li><a class="datatable-pager-link datatable-pager-link-number" data-page="2" title="2">2</a></li>
                                <li><a class="datatable-pager-link datatable-pager-link-number" data-page="3" title="3">3</a></li>
                                <li><a class="datatable-pager-link datatable-pager-link-number" data-page="4" title="4">4</a></li>
                                <li><a class="datatable-pager-link datatable-pager-link-number" data-page="5" title="5">5</a></li>
                                <li><a title="Next" class="datatable-pager-link datatable-pager-link-next" data-page="2"><i class="flaticon2-next"></i></a></li>
                                <li><a title="Last" class="datatable-pager-link datatable-pager-link-last" data-page="20"><i class="flaticon2-fast-next"></i></a></li>
                            </ul>
                            <div class="datatable-pager-info my-2 mb-sm-0">
                                <div class="dropdown bootstrap-select datatable-pager-size" style="width: 60px;"><select class="selectpicker datatable-pager-size" title="Select page size" data-width="60px" data-container="body" data-selected="5">
                                        <option class="bs-title-option" value=""></option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Select page size">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">5</div>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="dropdown-menu ">
                                        <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                        </div>
                                    </div>
                                </div><span class="datatable-pager-detail">Showing 1 - 5 of 100</span>
                            </div>
                        </div>
                    </div> -->

                    <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">

                        <table class="datatable-table" style="display: block;">
                            <thead class="datatable-head">
                                <tr class="datatable-row" style="left: 0px;">
                                    <th data-field="RecordID" class="datatable-cell-center datatable-cell datatable-cell-check"><span style="width: 20px;"><label class="checkbox checkbox-single checkbox-all"><input type="checkbox">&nbsp;<span></span></label></span></th>
                                    <th data-field="OrderID" class="datatable-cell datatable-cell-sort datatable-cell-sorted" data-sort="asc"><span style="width: 108px">
                                            #
                                            <i class="flaticon2-arrow-up">

                                            </i>
                                        </span>
                                    </th>
                                    <th data-field="Country" class="datatable-cell datatable-cell-sort"><span style="width: 108px;">Kode Pesanan</span></th>
                                    <th data-field="CompanyName" class="datatable-cell datatable-cell-sort"><span style="width: 108px;">Nama</span></th>
                                    <th data-field="ShipDate" class="datatable-cell datatable-cell-sort"><span style="width: 108px;">Tanggal Berkunjung</span></th>
                                    <th data-field="Status" class="datatable-cell datatable-cell-sort"><span style="width: 108px;">Status</span></th>
                                    <th data-field="Actions" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort"><span style="width: 125px;">Actions</span></th>
                                </tr>
                            </thead>
                            <tbody class="datatable-body" style="">
                                <tr data-row="0" class="datatable-row" style="left: 0px;">
                                    <td class="datatable-cell-center datatable-cell datatable-cell-check" data-field="RecordID" aria-label="36"><span style="width: 20px">
                                            <label class="checkbox checkbox-single">
                                                <input type="checkbox" value="36">&nbsp;<span>

                                                </span>
                                            </label>
                                        </span>
                                    </td>
                                    <td class="datatable-cell-sorted datatable-cell" data-field="OrderID" aria-label="0023-4383">
                                        <span style="width: 108px;">1</span>
                                    </td>
                                    <td data-field="Country" aria-label="Philippines" class="datatable-cell"><span style="width: 108px;">0023-4383</span></td>
                                    <td data-field="ShipDate" aria-label="1/29/2017" class="datatable-cell"><span style="width: 108px;">Alya Faizah</span></td>
                                    <td data-field="CompanyName" aria-label="Witting, Lindgren and Kessler" class="datatable-cell">
                                        <span style="width: 108px;">1/29/2017</span>
                                    </td>
                                    <td data-field="Status" aria-label="4" class="datatable-cell"><span style="width: 108px;">
                                            <span class="label font-weight-bold label-lg  label-light-success label-inline">Success</span></span>
                                    </td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
                                        <span style="overflow: visible; position: relative; width: 125px;">
                                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
                                                <span class="svg-icon svg-icon-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                            </path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                                        </g>
                                                    </svg> </span> </a> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"> <span class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                        </span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="datatable-pager datatable-paging-loaded">
                            <ul class="datatable-pager-nav my-2 mb-sm-0">
                                <li><a title="First" class="datatable-pager-link datatable-pager-link-first datatable-pager-link-disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
                                <li><a title="Previous" class="datatable-pager-link datatable-pager-link-prev datatable-pager-link-disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
                                <li style="display: none;"><input type="text" class="datatable-pager-input form-control" title="Page number"></li>
                                <li><a class="datatable-pager-link datatable-pager-link-number datatable-pager-link-active" data-page="1" title="1">1</a></li>
                                <li><a class="datatable-pager-link datatable-pager-link-number" data-page="2" title="2">2</a></li>
                                <li><a class="datatable-pager-link datatable-pager-link-number" data-page="3" title="3">3</a></li>
                                <li><a class="datatable-pager-link datatable-pager-link-number" data-page="4" title="4">4</a></li>
                                <li><a class="datatable-pager-link datatable-pager-link-number" data-page="5" title="5">5</a></li>
                                <li><a title="Next" class="datatable-pager-link datatable-pager-link-next" data-page="2"><i class="flaticon2-next"></i></a></li>
                                <li><a title="Last" class="datatable-pager-link datatable-pager-link-last" data-page="10"><i class="flaticon2-fast-next"></i></a></li>
                            </ul>
                        </div>
                    </div>


                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->