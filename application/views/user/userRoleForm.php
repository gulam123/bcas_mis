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
							
                                <div class="row g-5 g-xl-10 mb-xl-10">
                                    <!--begin::Basic info-->
                                    <div class="card mb-1 mb-xl-10">
                                        <div class="card-header py-3 mb-3">
                                            <div class="col-lg-12">
                                                <form onsubmit="return false;">
                                                    <div class="row form-group col-sm-12">
                                                        <label for="pemeriksa" class="col-sm-2 col-form-label">Pilih Level User</label>
                                                        <div class="col-sm-3">
														<select name="level_user" id="level_user" class="col-12 form-control" required>
															<option value="">Pilih</option>
															<?=$this->lookUpLevelUser?>
														</select>
                                                        </div>
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
                                                    <input type="text" name="search" id="inpSearch" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Role" />
														
														
                                                        <label for="" class="col-sm-6 col-form-label" style="padding-right:10px;">
														<span style="float:right;">Check / UnCheck All</span></label>
                                                        <div class="col-sm-3">
														<select name="checkUncheckAll" id="checkUncheckAll" class="col-12 form-control" required>
															<option value="">Pilih</option>
															<option value="checkAll">Check All</option>
															<option value="unCheckAll">UnCheck All</option>
														</select>
                                                        </div>
													
                                                </div>
                                                <!--end::Search-->
												
                                            </div>
                                            <div class="table-responsive">
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="crudTable">
											</table>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Basic info-->
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
		
		<script src="<?php echo base_url('Metro/dist/assets/js/custom/utilities/global.js'); ?>"></script>
		<script>
		var titleAdd="<?=$this->titleAdd?>";
		var titleEdit="<?=$this->titleEdit?>";
		var titleDel="<?=$this->titleDel?>";
		var urlDatatable="<?=$this->urlDatatable?>";
		var urlAdd="<?=$this->urlAdd?>";
		var urlEdit="<?=$this->urlEdit?>";
		var urlDel="<?=$this->urlDel?>";
		var urlSave="<?=$this->urlSave?>";
		var urlGetById="<?=$this->urlGetById?>";
		var isAdd=Boolean("<?=$this->isAdd?>");
		var isEdit=Boolean("<?=$this->isEdit?>");
		var isDel=Boolean("<?=$this->isDel?>");
		var isDetail=Boolean("<?=$this->isDetail?>");
		
		var column=JSON.parse('<?=$this->column?>');
		column[2].render=function(data, type, item, meta) {
						isCheck = (item.is_view=="1" ? 'checked="checked"' : '');
                        return '<input type="checkbox"  '+isCheck+' class="checkView">';
                    };
		column[3].render=function(data, type, item, meta) {
						if(item.has_child < 1){
							isCheck = (item.is_create=="1" ? 'checked="checked"' : '');
							return '<input type="checkbox"  '+isCheck+' class="checkCreate">';
						}
						else return '';
                    };
		column[4].render=function(data, type, item, meta) {
						if(item.has_child < 1){
							isCheck = (item.is_edit=="1" ? 'checked="checked"' : '');
							return '<input type="checkbox"  '+isCheck+' class="checkEdit">';
						}
						else return '';
						
                    };
		column[5].render=function(data, type, item, meta) {
						if(item.has_child < 1){
							isCheck = (item.is_delete=="1" ? 'checked="checked"' : '');
							return '<input type="checkbox"  '+isCheck+' class="checkDel">';
						}
						else return '';
                    };
		column[6].render=function(data, type, item, meta) {
						if(item.has_child < 1){
							isCheck = (item.is_print=="1" ? 'checked="checked"' : '');
							return '<input type="checkbox"  '+isCheck+' class="checkPrint">';
						}
						else return '';
                    };
					
		</script>
		<script src="<?php echo base_url('Metro/dist/assets/js/custom/utilities/crud.js'); ?>"></script>
		<script>
		$(function(){
			
			crud.run=function(){
				
				dCrudTable = $('#crudTable').DataTable({
					"ordering": false,
					"processing": true,
					"serverSide": true,
					"ajax": {
						"url": urlDatatable,
						"type": "POST",
						"data":function (d) {
							d.cari = $("#inpSearch").val();
							d.level_user = $("#level_user").val();
						}
					},
					"columns": column,
					destroy: true,
					paging: true,
				});		
				
				
			};
			
			crud.save=function(p){
				$.ajax({
					url:urlSave,
					data:p,
					type:"POST",
					beforeSend:function(){
					},
					success:function(response){
						dCrudTable.ajax.reload();
					},
					error:function(xhr,status,err){
						console.log(xhr.status+" : "+err);
					},
				});
				
			},
			
			crud.onEvent=function(){
				
				$('#level_user').change(function(){
					crud.run();
				});
				
				$('#inpSearch').keydown(function (e) {
					if (e.keyCode == 13) {
						dCrudTable.ajax.reload();
					}
				})
				
				$('#crudTable').on('click', '.checkView', function () {
					var data = dCrudTable.row($(this).parents('tr')).data();
					if($(this).prop('checked')) {
						data.is_view="1";
					} else {
						data.is_view="0";
					}					
					crud.save({
						post:[data]
					});
				});
				
				$('#crudTable').on('click', '.checkCreate', function () {
					var data = dCrudTable.row($(this).parents('tr')).data();
					if($(this).prop('checked')) {
						data.is_create="1";
					} else {
						data.is_create="0";
					}					
					crud.save({
						post:[data]
					});
				});
				
				$('#crudTable').on('click', '.checkEdit', function () {
					var data = dCrudTable.row($(this).parents('tr')).data();
					if($(this).prop('checked')) {
						data.is_edit="1";
					} else {
						data.is_edit="0";
					}					
					crud.save({
						post:[data]
					});
				});
				
				$('#crudTable').on('click', '.checkDel', function () {
					var data = dCrudTable.row($(this).parents('tr')).data();
					if($(this).prop('checked')) {
						data.is_delete="1";
					} else {
						data.is_delete="0";
					}					
					crud.save({
						post:[data]
					});
				});
				
				$('#crudTable').on('click', '.checkPrint', function () {
					var data = dCrudTable.row($(this).parents('tr')).data();
					if($(this).prop('checked')) {
						data.is_print="1";
					} else {
						data.is_print="0";
					}					
					crud.save({
						post:[data]
					});
				});
				
				$('#checkUncheckAll').change(function () {
					if( $('#crudTable tbody tr').length > 1 ){
						
						dataArr= [];
						
						switch( $(this).val() ){
							case "checkAll":
								$.each($('#crudTable tbody tr'),function(i,row){
									var data = dCrudTable.row($(row)).data();
									data.is_view="1";
									data.is_create="1";
									data.is_edit="1";
									data.is_delete="1";
									data.is_print="1";
									dataArr[i]=data;
								});
							break;
							case "unCheckAll":
								$.each($('#crudTable tbody tr'),function(i,row){
									var data = dCrudTable.row($(row)).data();
									data.is_view="0";
									data.is_create="0";
									data.is_edit="0";
									data.is_delete="0";
									data.is_print="0";
									dataArr[i]=data;
								});
							break;
						}
						console.log(dataArr);
						crud.save({
							post:dataArr
						});
					}
					else{
						//alert("Tabel belum ready");
						$(this).val("");
					}
				});
				
			};
			
			crud.onEvent();
			
		});
		</script>
		
	</body>
	<!--end::Body-->
</html>