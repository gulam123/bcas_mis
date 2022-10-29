<form action="<?php echo site_url('C_excel/Lap_anomali_nik'); ?>" method="POST">
    <div class="card-header py-3">
        <h3 class="font-weight-bold text-primary mb-4">CARI DATA ANOMALI NOMOR KTP</h3>
        <div class="col-lg-12">
            <div class="row form-group col-sm-8">
                <label for="cabang" class="col-sm-3 col-form-label">Cabang</label>
                <div class="col-sm-6">
                    <select name="cabang" id="cabang_nik" class="form-select form-select-solid" data-kt-select2="true">
                        <option value="" readonly>Pilih Cabang</option>
                        <!-- <option value="ALL">Semua Cabang</option> -->
                        <?php foreach($getCabang as $a): ?>
                            <option value="<?php echo $a->KODE;?>"><?php echo $a->KODE.' - '.$a->NAMA_CABANG;?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="row form-group col-sm-8 mt-3">
                <label for="tgl_input" class="col-sm-3 col-form-label">Tgl Input</label>
                <div class="col-sm-3 mb-3">
                    <input type="date" name="tgl_input" id="tgl_input_nik" class="form-control">
                </div>
                <div class="col-sm-3">
                    <input type="date" name="tgl_inputakhir" id="tgl_inputakhir_nik" class="form-control">
                </div>
            </div>
            <div class="row form-group col-sm-8">
                <label for="periode" class="col-sm-3 col-form-label">Periode Data</label>
                <div class="col-sm-6 mb-3">
                    <input type="date" name="periode" id="periode_nik" class="form-control">
                </div>
                <div class="col-sm-3">
                    <input class="btn btn-md btn-primary" type="button" id="cari_nik" value="CARI">
                </div>
            </div>
            <div class="col-sm-2 mt-10">
                <button type="submit" class="btn btn-md btn-success" id="exceldata" aria-expanded="false" aria-controls="collapseExcel">
                    <i class="fa fa-file-excel" aria-hidden="true"></i> Export</i>
                </button>
            </div>
        </div>
    </div>
</form>
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
            <input type="text" name="search" id="search_nik" class="form-control form-control-solid w-250px ps-14" placeholder="Tekan Enter" />
        </div>
        <!--end::Search-->
    </div>
    <div class="table-responsive">
        <table class="table table-striped align-middle table-row-dashed fs-6 gy-5" id="dataTableNik">
            <thead>
                <tr class="text-start text-primary fw-bolder fs-5 text-uppercase gs-0">
                    <th class="w-10px pe-2">No.</th>
                    <th class="min-w-125px">CABANG INDUK</th>
                    <th class="min-w-125px">NAMA CABANG</th>
                    <th class="min-w-125px">KODE CABANG</th>
                    <th class="min-w-125px">NOMOR CIF</th>
                    <th class="min-w-125px">TGL BUKA</th>
                    <th class="min-w-150px">NAMA SESUAI ID</th>
                    <th class="min-w-200px">NAMA TANPA SINGKATAN</th>
                    <th class="min-w-125px">JENIS ID</th>
                    <th class="min-w-125px">NOMOR ID</th>
                    <th class="min-w-125px">DIGIT ID</th>
                    <th class="min-w-125px">USER INPUT</th>
                    <th class="min-w-125px">USER OTOR</th>
                    <th class="min-w-125px">TGL OTOR</th>
                    <th class="min-w-125px">TGL UBAH</th>
                    <th class="min-w-125px">JAM UBAH</th>
                    <th class="min-w-125px">JENIS NASABAH</th>
                    <th class="min-w-100px">STATUS</th>
                    <th class="min-w-100px">PERIODE</th>
                    <th class="min-w-100px">OPSI</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>
 