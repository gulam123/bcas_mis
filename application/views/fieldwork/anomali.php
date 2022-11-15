<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Anomali Data</title>
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
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Anomali Data Cabang</h1>
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
										<div class="card-header card-header-stretch">
											<div class="card-toolbar m-0">
												<ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bolder" role="tablist">
													<li class="nav-item">
														<a class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#Aibu">Nama Ibu Kandung</a>
														<!-- <a class="nav-link justify-content-center text-active-gray-800 active" role="presentation" data-bs-toggle="tab" role="tab" href="#Aibu">Nama Ibu Kandung</a> -->
													</li>
													<li class="nav-item">
														<a class="nav-link justify-content-center text-active-gray-800" role="presentation" data-bs-toggle="tab" role="tab" href="#Anik">KTP</a>
													</li>
													<li class="nav-item">
														<a class="nav-link justify-content-center text-active-gray-800" role="presentation" data-bs-toggle="tab" role="tab" href="#Anpwp">NPWP</a>
													</li>
													<li class="nav-item">
														<a class="nav-link justify-content-center text-active-gray-800" role="presentation" data-bs-toggle="tab" role="tab" href="#Adata">Data Umum</a>
													</li>
													<li class="nav-item">
														<a class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800" role="presentation" data-bs-toggle="tab" role="tab" href="#Asemua">Semua</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- Tab panes -->
										<!-- Belum Fix bagian choose -->
										<div class="tab-content">
											<div id="Aibu" class="tab-pane fade show active"><br>
												<div>
													<?php $chooseibu['Anomaliibu']='IBU'; $this->load->view('continous/Anomali_ibu',$chooseibu);?>
												</div>
											</div>
											<div id="Anik" class="tab-pane fade show"><br>
												<div>
													<?php $choosenik['Anomalinik']='NIK'; $this->load->view('continous/Anomali_nik',$choosenik);?>
												</div>
											</div>
											<div id="Anpwp" class="tab-pane fade show"><br>
												<div>
													<?php $choosenpwp['Anomalinpwp']='NPWP'; $this->load->view('continous/Anomali_npwp',$choosenpwp);?>
												</div>
											</div>
											<div id="Adata" class="tab-pane fade show"><br>
												<div>
													<?php $chooseumum['Anomaliumum']='UMUM'; $this->load->view('continous/Anomali_umum',$chooseumum);?>
												</div>
											</div>
											<!-- <div id="Aalamat" class="tab-pane fade show"><br>
												<div>
													</?php $this->load->view('continous/Anomali_alamat');?>
												</div>
											</div> -->
											<div id="Asemua" class="tab-pane fade show"><br>
											<marquee behavior="" direction=""><h3>Under Contruction</h3></marquee>
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