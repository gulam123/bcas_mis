<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title><?=$this->title?></title>
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
					<div id="kt_header" style="" class="header align-items-stretch">
						<!--begin::Container-->
						<?php $this->load->view('admin/ContentHeader',true);?>
						<!--end::Container-->
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
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1"><?=$this->title?></h1>
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
                                <!--begin::Card-->
                                <div class="card card-flush h-xl-100">
                                    <!--begin::Card body-->
                                    <div class="card-body py-4">
                                        <!--begin::Table-->
										
										

	<script src="<?php echo base_url('codebase/dhtmlxgantt.js?v=7.1.12')?>" ></script>
	<link rel="stylesheet" href="<?php echo base_url('codebase/dhtmlxgantt.css?v=7.1.12')?>" >
	<style>
		html, body {
			height: 100%;
			padding: 0px;
			margin: 0px;
			overflow: hidden;
		}
	</style>
	<div id="gantt_here" style='width:100%; height:100%;'></div>
										
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
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
		
		<script src="<?php echo base_url('Metro/dist/assets/js/custom/utilities/global.js'); ?>"></script>
	<script>
		projek_id = "<?=$this->projek->id?>";
		
		gantt.config.min_column_width = 50;
		gantt.config.scale_height = 90;

		var weekScaleTemplate = function (date) {
			var dateToStr = gantt.date.date_to_str("%d %M");
			var endDate = gantt.date.add(gantt.date.add(date, 1, "week"), -1, "day");
			return dateToStr(date) + " - " + dateToStr(endDate);
		};

		var daysStyle = function(date){
			// you can use gantt.isWorkTime(date)
			// when gantt.config.work_time config is enabled
			// In this sample it's not so we just check week days

			if(date.getDay() === 0 || date.getDay() === 6){
				return "weekend";
			}
			return "";
		};

		gantt.config.scales = [
			{unit: "month", step: 1, format: "%F, %Y"},
			{unit: "week", step: 1, format: weekScaleTemplate},
			{unit: "day", step:1, format: "%D", css:daysStyle }
		];
		
		
		gantt.i18n.setLocale("id");
		gantt.init("gantt_here");
		gantt.load("<?=$this->urlGanttChartItem?>", "json");
				
		var dp = gantt.createDataProcessor(function(entity, action, data, id) { 
			data["projek_id"] = projek_id;
			switch(action) {
				
				case "create":
				   gantt.ajax.post(
						"<?=$this->urlAdd?>",
						data
				   );
				break;
				case "update":
				   gantt.ajax.post(
						"<?=$this->urlEdit?>",
						 data
					);
				break;
				case "delete":
				   gantt.ajax.post(
						"<?=$this->urlDel?>",
						 data
				   );
				 break;
		   }
			//gantt.load("<?=$this->urlGanttChartItem?>", "json");
		   
		});		
	</script>
		
	</body>
	<!--end::Body-->
</html>