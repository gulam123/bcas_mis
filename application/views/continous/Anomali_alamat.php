
<div class="card-header py-3">
    <h3 class="font-weight-bold text-primary mb-4">CARI DATA ANOMALI ALAMAT</h3>
    <div class="col-lg-12">
        <div class="row form-group col-sm-8">
            <label for="cabang" class="col-sm-3 col-form-label">Cabang</label>
            <div class="col-sm-6">
                <select name="cabang" id="cabang" class="form-control">
                    <option value="" readonly>Pilih Cabang</option>
                    <?php foreach($getCabang as $a): ?>
                        <option value="<?php echo $a->KODE;?>"><?php echo $a->KODE.' - '.$a->NAMA_CABANG;?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>
        <div class="row form-group col-sm-8 mt-3">
            <label for="tgl_input" class="col-sm-3 col-form-label">Tanggal Input</label>
            <div class="col-sm-3 mb-3">
                <input type="date" name="tgl_input" id="tgl_input" class="form-control">
            </div>
            <div class="col-sm-3">
                <input type="date" name="tgl_inputakhir" id="tgl_inputakhir" class="form-control">
            </div>
        </div>
        <div class="row form-group col-sm-8">
            <label for="periode" class="col-sm-3 col-form-label">Periode Data</label>
            <div class="col-sm-6">
                <input type="date" name="periode" id="periode" class="form-control">
            </div>
            <!-- <input type="submit" class="btn btn-sm btn-primary pr-2 col-sm-2" value="SEARCH"> -->
        </div>
        <div class="row form-group col-sm-2 mt-10">
            <button class="btn btn-sm btn-success" type="button" id="exceldata" aria-expanded="false" aria-controls="collapseExcel">
                <i class="fa fa-file-excel" aria-hidden="true"></i>
                Download Excel		
            </button>
        </div>
    </div>
</div>
<!-- <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-hover display nowrap" id="dataTableAlamat" style="width:100%">
            <thead style="background-image:linear-gradient(180deg, rgb(48, 241, 241), rgb(4, 126, 196));">
                <tr>
                    <th>No.</th>
                    <th>Kode CIF</th>
                    <th>Kode Cabang</th>
                    <th>Cabang Induk</th>
                    <th>Nama</th>
                    <th>Nama Ibu</th>
                    <th>Tanggal Input</th>
                    <th>NPWP</th>
                    <th>No. KTP</th>
                    <th>Status</th>
                    <th>Periode</th>
                
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div> -->