<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
	<?php $this->load->view('admin/Header',true);?>
	<title>Dashboard</title>
</head>
<style>
	@keyframe putar{
		0%{
			transform: rotate(0deg)
		}
		100%{
			transform: rotate(360deg)
		}
	}
</style>
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
								<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">ReacT Dashboard</h1>
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
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-sm-6 col-xl-4 mb-xl-10">
									<!--begin::Card widget 2-->
									<div class="card h-lg-100">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<!--begin::Title-->
											<div class="card-title d-flex flex-column">
												<!--begin::Info-->
												<div class="d-flex align-items-center">
													<!--begin::Currency-->
													<!-- <span class="fs-4 fw-bold text-gray-400 me-1 align-self-start">$</span> -->
													<!--end::Currency-->
													<!--begin::Amount-->
													<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">Schedule</span>
													<!--end::Amount-->
													<!--begin::Badge-->
													<span class="badge badge-success fs-base">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
													<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" >
															<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
															<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->2.2%</span>
													<!--end::Badge-->
												</div>
												<!--end::Info-->
												<!--begin::Subtitle-->
												<span class="text-gray-400 pt-1 fw-bold fs-6">Audit</span></span>
												<!--end::Subtitle-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-between align-items-center flex-column">
										<!-- card-body pt-2 pb-4 d-flex align-items-center -->
											<!--begin::Chart-->
											<div class="d-flex flex-center me-5 pt-2">
												<div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
											</div>
											<!--end::Chart-->
											<!--begin::Labels-->
											<div class="d-flex flex-column content-justify-center w-100">
												<!--begin::Label-->
												<div class="d-flex fs-6 fw-bold align-items-center">
													<!--begin::Bullet-->
													<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
													<!--end::Bullet-->
													<!--begin::Label-->
													<div class="text-dark-500 flex-grow-1 me-4">Closed Issues</div>
													<!--end::Label-->
													<!--begin::Stats-->
													<div class="fw-boldest text-gray-700 text-xxl-end">150</div>
													<!--end::Stats-->
												</div>
												<!--end::Label-->
												<!--begin::Label-->
												<div class="d-flex fs-6 fw-bold align-items-center my-3">
													<!--begin::Bullet-->
													<div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
													<!--end::Bullet-->
													<!--begin::Label-->
													<div class="text-dark-500 flex-grow-1 me-4">On Progress</div>
													<!--end::Label-->
													<!--begin::Stats-->
													<div class="fw-boldest text-gray-700 text-xxl-end">75</div>
													<!--end::Stats-->
												</div>
												<!--end::Label-->
												<!--begin::Label-->
												<div class="d-flex fs-6 fw-bold align-items-center">
													<!--begin::Bullet-->
													<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
													<!--end::Bullet-->
													<!--begin::Label-->
													<div class="text-dark-500 flex-grow-1 me-4">Open</div>
													<!--end::Label-->
													<!--begin::Stats-->
													<div class="fw-boldest text-gray-700 text-xxl-end">7</div>
													<!--end::Stats-->
												</div>
												<!--end::Label-->
											</div>
											<!--end::Labels-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card widget 2-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-sm-6 col-xl-4 mb-xl-10">
									<!--begin::Card widget 2-->
									<div class="card h-lg-100" style="width:100%; background-image:url(<?php echo base_url('Metro/dist/assets/media/svg/shapes/abstract-5.svg');?>)">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<!--begin::Title-->
											<div class="card-title d-flex flex-column" >
												<!--begin::Info-->
												<div class="d-flex align-items-center">
													<!--begin::Currency-->
													<span class="fs-4 fw-bold text-gray-400 me-1 align-self-start"></span>
													<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">232</span>
												</div>
												<!--end::Info-->
												<!--begin::Subtitle-->
												<span class="text-dark-400 pt-1 fw-bold fs-6">Issues</span>
												<!--end::Subtitle-->
											</div>
											<!--end::Title-->
										</div>
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-between align-items-start flex-column" >
											<div class="d-flex align-items-center flex-column mt-3 w-100">
												<span class="svg-icon svg-icon-5hx svg-icon-dark">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="180" viewBox="0 0 24 24" fill="none">
														<rect width="200" height="200"/>
														<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
														<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
													</svg>
												</span>
												<div class="d-flex justify-content-between fw-bolder fs-6 text-dark opacity-70 w-100 mt-auto mb-2">
													<span>150 Closed</span>
													<span>65%</span>
												</div>
												<div class="h-8px mx-3 w-100 bg-light-danger rounded">
													<div class="bg-success rounded h-8px" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<!--end::Progress-->
											<!--end::Chart-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card widget 2-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-sm-6 col-xl-4 mb-xl-10">
									<!--begin::Card widget 2-->
									<div class="card h-lg-100" style="width:100%; background-image:url(<?php echo base_url('Metro/dist/assets/media/svg/shapes/abstract-5.svg');?>)">
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">Jenis Temuan</span>
											</h3>
										</div>
										<div class="card-body d-flex justify-content-between align-items-start flex-column">
											<div class="row pt-10 gy-5 g-xl-10 justify-content-center">
												<div class="col-4 align-items-center text-center">
													<span class="fs-2hx fw-bolder text-danger me-2 lh-1 ls-n2">16</span>
													<span class="text-dark opacity-70 pt-1 fw-bold fs-6">Temuan Berulang</span>
												</div>
												<div class="col-4 align-items-center text-center">
													<span class="fs-2hx fw-bolder text-primary me-2 lh-1 ls-n2">10</span>
													<span class="text-dark opacity-70 pt-1 fw-bold fs-6">Temuan Baru</span>
												</div>
											</div>
										</div>
									</div>
									<!--end::Card widget 2-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-sm-6 col-xl-4 mb-xl-10">
									<!--begin::Card widget 2-->
									<div class="card h-lg-100 bg-danger" style="background-color: #c4bc1f">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<!--begin::Title-->
											<div class="card-title d-flex flex-column">
												<!--begin::Info-->
												<div class="d-flex align-items-center">
													<!--begin::Amount-->
													<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">150</span>
												</div>
												<!--end::Info-->
												<!--begin::Subtitle-->
												<span class="text-dark-400 pt-1 fw-bold fs-6">Closed Issues</span>
												<!--end::Subtitle-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-between align-items-start flex-column">
											<!--begin::Progress-->
											<div class="d-flex align-items-center flex-column mt-3 w-100">
												<span class="svg-icon svg-icon-5hx svg-icon-dark">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="animation: putar 5s linear infinite">
														<path opacity="0.3" d="M2.10001 10C3.00001 5.6 6.69998 2.3 11.2 2L8.79999 4.39999L11.1 7C9.60001 7.3 8.30001 8.19999 7.60001 9.59999L4.5 12.4L2.10001 10ZM19.3 11.5L16.4 14C15.7 15.5 14.4 16.6 12.7 16.9L15 19.5L12.6 21.9C17.1 21.6 20.8 18.2 21.7 13.9L19.3 11.5Z" fill="currentColor" />
														<path d="M13.8 2.09998C18.2 2.99998 21.5 6.69998 21.8 11.2L19.4 8.79997L16.8 11C16.5 9.39998 15.5 8.09998 14 7.39998L11.4 4.39998L13.8 2.09998ZM12.3 19.4L9.69998 16.4C8.29998 15.7 7.3 14.4 7 12.8L4.39999 15.1L2 12.7C2.3 17.2 5.7 20.9 10 21.8L12.3 19.4Z" fill="currentColor" />
													</svg>
												</span>
												<div class="d-flex justify-content-between w-100 mt-auto mb-2">
													<span class="fw-boldest fs-6 text-dark">82 to Goal</span>
													<span class="fw-bolder fs-6 text-dark-400">65%</span>
												</div>
												<div class="h-8px mx-3 w-100 bg-light-success rounded">
													<div class="bg-success rounded h-8px" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<!--end::Progress-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card widget 2-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-sm-6 col-xl-4 mb-xl-10">
									<!--begin::Card widget 2-->
									<div class="card h-lg-100 bg-primary" style="background-color: #36b7d1">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<!--begin::Title-->
											<div class="card-title d-flex flex-column">
												<!--begin::Amount-->
												<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">75</span>
												<!--end::Amount-->
												<!--begin::Subtitle-->
												<span class="text-dark opacity-70 pt-1 fw-bold fs-6">On Progress</span>
												<!--end::Subtitle-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-between align-items-start flex-column">
											<!--begin::Progress-->
											<div class="d-flex align-items-center flex-column mt-3 w-100">
												<span class="svg-icon svg-icon-5hx svg-icon-dark">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="currentColor" />
														<path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="currentColor" />
													</svg>
												</span>
												<div class="d-flex justify-content-between fw-bolder fs-6 text-dark opacity-70 w-100 mt-auto mb-2">
													<span>43 Pending</span>
													<span>58%</span>
												</div>
												<div class="h-8px mx-3 w-100 bg-light-danger rounded">
													<div class="bg-success rounded h-8px" role="progressbar" style="width: 58%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<!--end::Progress-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card widget 2-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-sm-6 col-xl-4 mb-xl-10">
									<!--begin::Card widget 2-->
									<div class="card h-lg-100" style="background-color: #E4E6EF">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<!--begin::Title-->
											<div class="card-title d-flex flex-column">
												<!--begin::Info-->
												<div class="d-flex align-items-center">
													<!--begin::Amount-->
													<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">7</span>
												</div>
												<!--end::Info-->
												<!--begin::Subtitle-->
												<span class="text-dark-400 pt-1 fw-bold fs-6">Open</span>
												<!--end::Subtitle-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-between align-items-start flex-column">
											<!--begin::Progress-->
											<div class="d-flex align-items-center flex-column mt-3 w-100">
												<span class="svg-icon svg-icon-5hx svg-icon-dark">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M18.0002 22H6.00019C5.20019 22 4.8002 21.1 5.2002 20.4L12.0002 12L18.8002 20.4C19.3002 21.1 18.8002 22 18.0002 22Z" fill="currentColor"/>
														<path opacity="0.3" d="M18.8002 3.6L12.0002 12L5.20019 3.6C4.70019 3 5.20018 2 6.00018 2H18.0002C18.8002 2 19.3002 2.9 18.8002 3.6Z" fill="currentColor"/>
													</svg>
												</span>
												
												<div class="d-flex justify-content-between w-100 mt-auto mb-2">
													<span class="fw-boldest fs-6 text-dark">7 to Clear Issues</span>
													<!-- <span class="fw-bolder fs-6 text-dark-400">65%</span> -->
												</div>
												<!-- <div class="h-8px mx-3 w-100 bg-light-success rounded">
													<div class="bg-success rounded h-8px" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div> -->
											</div>
											<!--end::Progress-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card widget 2-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<div class="row gy-5 g-xl-10">
								<div class="col-lg-6 col-xl-6 col-xxl-6 mb-5 mb-xl-0">
									<div class="card h-md-50">
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">Level Temuan</span>
											</h3>
										</div>
										<div class="card-body pt-7 px-0">
											<ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-center mb-8">
												<!--begin::Nav item-->
												<li class="nav-item p-0 ms-0">
													<a class="nav-link btn d-flex flex-column flex-center min-w-45px my-2 mx-7 px-3 btn-danger" style="width:100%">
														<span class="fs-7 text-dark fw-bold">HIGH</span>
														<span class="fs-6 fw-bolder"><b><h2>15</h2></b></span>
													</a>
													<a class="nav-link btn d-flex flex-column flex-center min-w-45px my-2 mx-7 px-3 btn-warning" style="width:100%">
														<span class="fs-7 text-dark fw-bold">MODERATE TO HIGH</span>
														<span class="fs-6 fw-bolder"><b><h2>35</h2></b></span>
													</a>
													<a class="nav-link btn d-flex flex-column flex-center min-w-45px my-2 mx-7 px-3 btn-success" style="width:100%">
														<span class="fs-7 text-dark fw-bold">MODERATE</span>
														<span class="fs-6 fw-bolder"><b><h2>100</h2> </b></span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!--begin::Col-->
								<div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
									<!--begin::Timeline widget 3-->
									<div class="card h-md-100">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder text-dark">What’s up Today</span>
												<span class="text-muted mt-1 fw-bold fs-7">Timesheet Tim Audit Bulan Agustus</span>
											</h3>
											<!--begin::Toolbar-->
											<!-- <div class="card-toolbar">
												<a href="#" class="btn btn-sm btn-light">Report Cecnter</a>
											</div> -->
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-7 px-0">
											<!--begin::Nav-->
											<ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5">
												<!--begin::Nav item-->
												<li class="nav-item p-0 ms-0">
													<!--begin::Date-->
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_1">
														<span class="fs-7 fw-bold">Mo</span>
														<span class="fs-6 fw-bolder">01</span>
													</a>
													<!--end::Date-->
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item p-0 ms-0">
													<!--begin::Date-->
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_2">
														<span class="fs-7 fw-bold">Tu</span>
														<span class="fs-6 fw-bolder">02</span>
													</a>
													<!--end::Date-->
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item p-0 ms-0">
													<!--begin::Date-->
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_3">
														<span class="fs-7 fw-bold">We</span>
														<span class="fs-6 fw-bolder">03</span>
													</a>
													<!--end::Date-->
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item p-0 ms-0">
													<!--begin::Date-->
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger active" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4">
														<span class="fs-7 fw-bold">Th</span>
														<span class="fs-6 fw-bolder">04</span>
													</a>
													<!--end::Date-->
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item p-0 ms-0">
													<!--begin::Date-->
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_5">
														<span class="fs-7 fw-bold">Fr</span>
														<span class="fs-6 fw-bolder">05</span>
													</a>
													<!--end::Date-->
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item p-0 ms-0">
													<!--begin::Date-->
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_6">
														<span class="fs-7 fw-bold">Mo</span>
														<span class="fs-6 fw-bolder">08</span>
													</a>
													<!--end::Date-->
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item p-0 ms-0">
													<!--begin::Date-->
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_7">
														<span class="fs-7 fw-bold">Tu</span>
														<span class="fs-6 fw-bolder">09</span>
													</a>
													<!--end::Date-->
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item p-0 ms-0">
													<!--begin::Date-->
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_8">
														<span class="fs-7 fw-bold">We</span>
														<span class="fs-6 fw-bolder">10</span>
													</a>
													<!--end::Date-->
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item p-0 ms-0">
													<!--begin::Date-->
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_9">
														<span class="fs-7 fw-bold">Th</span>
														<span class="fs-6 fw-bolder">11</span>
													</a>
													<!--end::Date-->
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item p-0 ms-0">
													<!--begin::Date-->
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_10">
														<span class="fs-7 fw-bold">Fr</span>
														<span class="fs-6 fw-bolder">12</span>
													</a>
													<!--end::Date-->
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item p-0 ms-0">
													<!--begin::Date-->
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_11">
														<span class="fs-7 fw-bold">Mo</span>
														<span class="fs-6 fw-bolder">15</span>
													</a>
													<!--end::Date-->
												</li>
												<!--end::Nav item-->
											</ul>
											<!--end::Nav-->
											<!--begin::Tab Content (ishlamayabdi)-->
											<div class="tab-content mb-2 px-9">
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_1">
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit DTI - SA</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Johan Wijaya</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit API dan Data Center</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Albanna</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
															<span class="text-gray-400 fw-bold fs-7">PM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit Cabang Samanhudi</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Yuni Safitri</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_2">
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
															<span class="text-gray-400 fw-bold fs-7">PM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit Cabang Samanhudi</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Yuni Safitri</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit DTI - SA</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Johan Wijaya</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit DTI - SA</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Johan Wijaya</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3">
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit DTI - SA</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Johan Wijaya</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit API dan Data Center</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Albanna</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
															<span class="text-gray-400 fw-bold fs-7">PM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit Cabang Samanhudi</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Yuni Safitri</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4">
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit DTI - SA</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Johan Wijaya</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
															<span class="text-gray-400 fw-bold fs-7">PM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit API dan Data Center</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Albanna</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit Cabang Samanhudi</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Yuni Safitri</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5">
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit API dan Data Center</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Albanna</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit Cabang Panakukang</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Yuni Safitri</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
															<span class="text-gray-400 fw-bold fs-7">PM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit DTI - SA</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Johan Wijaya</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6">
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit Cabang Samanhudi</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Yuni Safitri</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
															<span class="text-gray-400 fw-bold fs-7">PM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit DTI - SA</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Johan Wijaya</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit API dan Data Center</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Albanna</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7">
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit DTI - SA</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Albanna</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit API dan Data Center</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Johan Wijaya</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
															<span class="text-gray-400 fw-bold fs-7">PM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit Cabang Samanhudi</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Yuni Safitri</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_8">
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
															<span class="text-gray-400 fw-bold fs-7">PM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit DTI - SA</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Johan Wijaya</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit Cabang Banda Aceh</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Yuni Safitri</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit API dan Data Center</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Albanna</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_9">
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit DTI - SA</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Albanna</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
															<span class="text-gray-400 fw-bold fs-7">PM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit Cabang Samanhudi</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Yuni Safitri</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit API dan Data Center</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Johan Wijaya</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_10">
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit DTI - SA</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Johan Wijaya</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit API dan Data Center</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Albanna</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
															<span class="text-gray-400 fw-bold fs-7">PM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit DTI - SA</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Yuni Safitri</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_11">
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">16:30 - 17:00
															<span class="text-gray-400 fw-bold fs-7">PM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit Cabang Jatinegara</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Yuni Safitri</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">10:20 - 11:00
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit DTI - SA</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Johan Wijaya</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div class="d-flex align-items-center mb-6">
														<!--begin::Bullet-->
														<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>
														<!--end::Bullet-->
														<!--begin::Info-->
														<div class="flex-grow-1 me-5">
															<!--begin::Time-->
															<div class="text-gray-800 fw-bold fs-2">12:00 - 13:40
															<span class="text-gray-400 fw-bold fs-7">AM</span></div>
															<!--end::Time-->
															<!--begin::Description-->
															<div class="text-gray-700 fw-bold fs-6">Audit DTI - SA</div>
															<!--end::Description-->
															<!--begin::Link-->
															<div class="text-gray-400 fw-bold fs-7">Lead by
															<!--begin::Name-->
															<a href="#" class="text-primary opacity-75-hover fw-bold">Lead by Albanna</a>
															<!--end::Name--></div>
															<!--end::Link-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
														<!--end::Action-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Tap pane-->
											</div>
											<!--end::Tab Content-->
											<!--begin::Action-->
											<div class="float-end d-none">
												<a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">Add Lesson</a>
												<a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
											</div>
											<!--end::Action-->
										</div>
										<!--end: Card Body-->
									</div>
									<!--end::Timeline widget 3-->
									<!--begin::Timeline widget 3-->
									<div class="card card-flush d-none h-md-100">
										<!--begin::Card header-->
										<div class="card-header mt-6">
											<!--begin::Card title-->
											<div class="card-title flex-column">
												<h3 class="fw-bolder mb-1">What's on the road?</h3>
												<div class="fs-6 text-gray-400">Total 482 participants</div>
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Select-->
												<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bolder w-100px">
													<option value="1" selected="selected">Options</option>
													<option value="2">Option 1</option>
													<option value="3">Option 2</option>
													<option value="4">Option 3</option>
												</select>
												<!--end::Select-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body p-0">
											<!--begin::Dates-->
											<ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2 ms-4">
												<!--begin::Date-->
												<li class="nav-item me-1">
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_0">
														<span class="text-gray-400 fs-7 fw-bold">Fr</span>
														<span class="fs-6 text-gray-800 fw-bolder">20</span>
													</a>
												</li>
												<!--end::Date-->
												<!--begin::Date-->
												<li class="nav-item me-1">
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_1">
														<span class="text-gray-400 fs-7 fw-bold">Sa</span>
														<span class="fs-6 text-gray-800 fw-bolder">21</span>
													</a>
												</li>
												<!--end::Date-->
												<!--begin::Date-->
												<li class="nav-item me-1">
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_2">
														<span class="text-gray-400 fs-7 fw-bold">Su</span>
														<span class="fs-6 text-gray-800 fw-bolder">22</span>
													</a>
												</li>
												<!--end::Date-->
												<!--begin::Date-->
												<li class="nav-item me-1">
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger active" data-bs-toggle="tab" href="#kt_schedule_day_3">
														<span class="text-gray-400 fs-7 fw-bold">Mo</span>
														<span class="fs-6 text-gray-800 fw-bolder">23</span>
													</a>
												</li>
												<!--end::Date-->
												<!--begin::Date-->
												<li class="nav-item me-1">
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_4">
														<span class="text-gray-400 fs-7 fw-bold">Tu</span>
														<span class="fs-6 text-gray-800 fw-bolder">24</span>
													</a>
												</li>
												<!--end::Date-->
												<!--begin::Date-->
												<li class="nav-item me-1">
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_5">
														<span class="text-gray-400 fs-7 fw-bold">We</span>
														<span class="fs-6 text-gray-800 fw-bolder">25</span>
													</a>
												</li>
												<!--end::Date-->
												<!--begin::Date-->
												<li class="nav-item me-1">
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_6">
														<span class="text-gray-400 fs-7 fw-bold">Th</span>
														<span class="fs-6 text-gray-800 fw-bolder">26</span>
													</a>
												</li>
												<!--end::Date-->
												<!--begin::Date-->
												<li class="nav-item me-1">
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_7">
														<span class="text-gray-400 fs-7 fw-bold">Fr</span>
														<span class="fs-6 text-gray-800 fw-bolder">27</span>
													</a>
												</li>
												<!--end::Date-->
												<!--begin::Date-->
												<li class="nav-item me-1">
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_8">
														<span class="text-gray-400 fs-7 fw-bold">Sa</span>
														<span class="fs-6 text-gray-800 fw-bolder">28</span>
													</a>
												</li>
												<!--end::Date-->
												<!--begin::Date-->
												<li class="nav-item me-1">
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_9">
														<span class="text-gray-400 fs-7 fw-bold">Su</span>
														<span class="fs-6 text-gray-800 fw-bolder">29</span>
													</a>
												</li>
												<!--end::Date-->
												<!--begin::Date-->
												<li class="nav-item me-1">
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_10">
														<span class="text-gray-400 fs-7 fw-bold">Mo</span>
														<span class="fs-6 text-gray-800 fw-bolder">30</span>
													</a>
												</li>
												<!--end::Date-->
												<!--begin::Date-->
												<li class="nav-item me-1">
													<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_11">
														<span class="text-gray-400 fs-7 fw-bold">Tu</span>
														<span class="fs-6 text-gray-800 fw-bolder">31</span>
													</a>
												</li>
												<!--end::Date-->
											</ul>
											<!--end::Dates-->
											<!--begin::Tab Content-->
											<div class="tab-content px-9">
												<!--begin::Day-->
												<div id="kt_schedule_day_0" class="tab-pane fade show">
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">16:30 - 17:30
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit Cabang Samanhudi</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Mark Randall</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">13:00 - 14:00
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Karina Clarke</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">14:30 - 15:30
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Michael Walters</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
												</div>
												<!--end::Day-->
												<!--begin::Day-->
												<div id="kt_schedule_day_1" class="tab-pane fade show active">
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">11:00 - 11:45
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Sean Bean</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">12:00 - 13:00
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">David Stevenson</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">12:00 - 13:00
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Sean Bean</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
												</div>
												<!--end::Day-->
												<!--begin::Day-->
												<div id="kt_schedule_day_2" class="tab-pane fade show">
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">10:00 - 11:00
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Karina Clarke</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">12:00 - 13:00
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit Cabang Samanhudi</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Terry Robins</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">14:30 - 15:30
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit API dan Data Center</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">David Stevenson</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
												</div>
												<!--end::Day-->
												<!--begin::Day-->
												<div id="kt_schedule_day_3" class="tab-pane fade show">
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">9:00 - 10:00
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Kendell Trevor</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">10:00 - 11:00
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Caleb Donaldson</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">9:00 - 10:00
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Michael Walters</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
												</div>
												<!--end::Day-->
												<!--begin::Day-->
												<div id="kt_schedule_day_4" class="tab-pane fade show">
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">11:00 - 11:45
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit Cabang Samanhudi</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Kendell Trevor</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">9:00 - 10:00
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Sean Bean</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">10:00 - 11:00
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit DTI - SA</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Bob Harris</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
												</div>
												<!--end::Day-->
												<!--begin::Day-->
												<div id="kt_schedule_day_5" class="tab-pane fade show">
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">9:00 - 10:00
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit DTI - SA</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Walter White</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">16:30 - 17:30
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit DTI - SA</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Johan Wijaya</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">16:30 - 17:30
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit DTI - SA</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Johan Wijaya</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
												</div>
												<!--end::Day-->
												<!--begin::Day-->
												<div id="kt_schedule_day_6" class="tab-pane fade show">
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">11:00 - 11:45
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit API dan Data Center</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Sean Bean</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">11:00 - 11:45
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Karina Clarke</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">13:00 - 14:00
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit API dan Data Center</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Terry Robins</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
												</div>
												<!--end::Day-->
												<!--begin::Day-->
												<div id="kt_schedule_day_7" class="tab-pane fade show">
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">13:00 - 14:00
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Caleb Donaldson</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">14:30 - 15:30
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit DTI - SA</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Johan Wijaya</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">16:30 - 17:30
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit API dan Data Center</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Terry Robins</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
												</div>
												<!--end::Day-->
												<!--begin::Day-->
												<div id="kt_schedule_day_8" class="tab-pane fade show">
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">9:00 - 10:00
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit Cabang Samanhudi</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Terry Robins</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">16:30 - 17:30
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit Cabang Samanhudi</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Sean Bean</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">10:00 - 11:00
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Bob Harris</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
												</div>
												<!--end::Day-->
												<!--begin::Day-->
												<div id="kt_schedule_day_9" class="tab-pane fade show">
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">9:00 - 10:00
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Caleb Donaldson</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">14:30 - 15:30
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit Cabang Samanhudi</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Kendell Trevor</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">9:00 - 10:00
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Bob Harris</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
												</div>
												<!--end::Day-->
												<!--begin::Day-->
												<div id="kt_schedule_day_10" class="tab-pane fade show">
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">13:00 - 14:00
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">David Stevenson</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">16:30 - 17:30
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Terry Robins</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">16:30 - 17:30
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Audit DTI - SA</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Johan Wijaya</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
												</div>
												<!--end::Day-->
												<!--begin::Day-->
												<div id="kt_schedule_day_11" class="tab-pane fade show">
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">10:00 - 11:00
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Caleb Donaldson</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">11:00 - 11:45
															<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">Caleb Donaldson</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
													<!--begin::Time-->
													<div class="d-flex flex-stack position-relative mt-8">
														<!--begin::Bar-->
														<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
														<!--end::Bar-->
														<!--begin::Info-->
														<div class="fw-bold ms-5 text-gray-600">
															<!--begin::Time-->
															<div class="fs-5">13:00 - 14:00
															<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
															<!--end::Time-->
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
															<!--end::Title-->
															<!--begin::User-->
															<div class="text-gray-400">Lead by
															<a href="#">David Stevenson</a></div>
															<!--end::User-->
														</div>
														<!--end::Info-->
														<!--begin::Action-->
														<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
														<!--end::Action-->
													</div>
													<!--end::Time-->
												</div>
												<!--end::Day-->
											</div>
											<!--end::Tab Content-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Timeline widget-3-->
								</div>
								<!--end::Col-->
							</div>
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