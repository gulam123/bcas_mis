<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Data LTLHA</title>
        <?php $this->load->view('admin/Header',true);?>
		<!--end::Global Stylesheets Bundle-->
		
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-light aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="<?= base_url();?>">
							<img alt="Logo" src="<?php echo base_url('Metro/image/react.png'); ?>" class="h-55px logo" width="180px" />
						</a>
						<!--begin::Aside toggler-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
							<span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
									<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside toggler-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					<?php $this->load->view('admin/Sidebar',true);?>
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header align-items-stretch">
						<?php $this->load->view('admin/ContentHeader',true);?>
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Data Laporan Tindak Lanjut</h1>
									<!--end::Title-->
								</div>
								<!--end::Page title-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
                        <div class="post d-flex flex-column-fluid" id="kt_post">
                            <!--begin::Container-->
                            <div id="kt_content_container" class="container-xxl">
                                <!--begin::Row-->
                                <div class="row g-5 g-xl-10 mb-xl-10">
                                    <!--begin::Basic info-->
                                    <div class="card mb-1 mb-xl-10">
                                        <div class="card-header py-3 mb-3">
                                            <h3 class="font-weight-bold text-primary mb-4">CARI DATA LTLHA</h3>
                                            <div class="col-lg-12">
                                                <form action="<?php echo base_url('save');?>" method="POST">
                                                    <div class="row form-group col-sm-8">
                                                        <label for="pemeriksa" class="col-sm-3 col-form-label">Pemeriksa</label>
                                                        <div class="col-sm-6">
                                                            <select name="pemeriksa" id="pemeriksa_ltlha" class="form-control">
                                                                <option value="" readonly>Pilih Pemeriksa</option>
                                                                <option value="INTERNAL">INTERNAL</option>
                                                                <option value="BCA">BCA</option>
                                                                <option value="KAP">KAP</option>
                                                                <option value="OJK">OJK</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group col-sm-8 mt-3">
                                                        <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                                                        <div class="col-sm-6">
                                                            <select name="tahun" id="tahun_ltlha" class="form-control">
                                                                <option value="" readonly>Pilih Tahun</option>
                                                                <?php
                                                                $tg_awal= date('Y')-12;
                                                                $tgl_akhir= date('Y')+3;
                                                                for ($i=$tgl_akhir; $i>=$tg_awal; $i--)
                                                                {
                                                                echo "
                                                                <option value='$i'";
                                                                if(date('Y')==$i){echo "selected";}
                                                                echo">$i</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group col-sm-8 mt-3">
                                                        <label for="periode" class="col-sm-3 col-form-label">Periode Data</label>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="periode" id="periode_ltlha" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group col-sm-8 mt-3">
                                                        <label for="no_lha" class="col-sm-3 col-form-label">Nomor LHA</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="no_lha" id="no_lha" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group col-sm-2 mt-10">
                                                        <button class="btn btn-sm btn-primary" type="submit" aria-expanded="false" aria-controls="collapseExcel">
                                                            CARI		
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--begin::Post-->
                                        <div class="card-body mt-5">
                                            <div class="card-title">
                                                <!--begin::Search-->
                                                <div class="d-flex align-items-center position-relative my-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <input type="text" name="search" id="search_ibu" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table align-middle table-row-dashed fs-6 gy-5" id="dataLTLHA">
                                                    <thead>
                                                        <tr class="text-start text-primary fw-bolder fs-5 text-uppercase gs-0">
                                                            <th class="w-10px pe-2">No.</th>
                                                            <th class="min-w-125px">AUDITOR</th>
                                                            <th class="min-w-125px">PERIODE</th>
                                                            <th class="min-w-125px">JUDUL LHA</th>
                                                            <th class="min-w-125px">TGL TERBIT LHA</th>
                                                            <th class="min-w-125px">LHA REF.</th>
                                                            <th class="min-w-150px">TEMUAN</th>
                                                            <th class="min-w-200px">KOMITMEN UNIT KERJA</th>
                                                            <th class="min-w-200px">UNIT KERJA</th>
                                                            <th class="min-w-125px">TARGET PENYELESAIAN</th>
                                                            <th class="min-w-125px">TINDAK LANJUT PENYELESAIAN</th>
                                                            <th class="min-w-125px">STATUS LTLHA</th>
                                                            <th class="min-w-125px">TARGET DILAKSANAKAN</th>
                                                            <th class="min-w-125px">TGL INPUT</th>
                                                            <th class="min-w-125px">WAKTU PENYELESAIAN</th>
                                                            <th class="min-w-125px">TARGET PENYELESAIAN BARU</th>
                                                            <th class="min-w-125px">ALASAN PEMUNDURAN TARGET</th>
                                                            <th class="min-w-125px">PENILAIAN</th>
                                                            <th class="min-w-125px">OPSI</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Basic info-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Post-->
					</div>
					<!--end::Content-->
					<?php $this->load->view('admin/Footer',true);?>
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		<?php $this->load->view('admin/Modal',true);?>
		<?php $this->load->view('admin/AppMetronic',true);?>
		<?php $this->load->view('admin/Script',true);?>
	</body>
	<!--end::Body-->
</html>
