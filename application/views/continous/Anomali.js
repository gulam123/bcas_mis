// IBU KANDUNG
$(document).ready( function () {
    var Anomali = 'IBU'
    var dtable = $('#dataTable').DataTable({
        "ordering": false,
        "processing": true,
        oLanguage: {sProcessing: "<div id='loader'> <span class='spinner-grow spinner-grow-sm text-info' aria-hidden='true'></span><b class='text-info'> Processing...</b></div>"},
        "serverSide": true,
        "paging": true,
        deferLoading: false,
        "ajax": {
            "url": "<?php echo site_url('ListData'); ?>",
            "type": "POST",
            "data":function (d) {
                d.kd_cabang             = $('#cabang_ibu').val()
                d.cek_tgl_input         = $('#tgl_input_ibu').val()
                d.cek_tgl_inputakhir    = $('#tgl_inputakhir_ibu').val()
                d.cek_periode           = $('#periode_ibu').val()
                d.cari                  = $('#search_ibu').val()
            }
        },
        "columns": [
            {"data": "NO"},
            {"data": "CABANG_INDUK"},
            {"data": "NAMA_CABANG"},
            {"data": "KODE_CABANG"},
            {"data": "NOMOR_CIF"},
            {"data": "TANGGAL_BUKA"},
            {"data": "NAMA_SESUAI_IDENTITAS"},
            {"data": "NAMA_TANPA_SINGKATAN"},
            {"data": "NAMA_IBU_KANDUNG"},
            {"data": "USER_INPUT"},
            {"data": "USER_OTOR"},
            {"data": "TGL_OTOR"},
            {"data": "TGL_PERUBAHAN"},
            {"data": "JAM_PERUBAHAN"},
            {"data": "JENIS_NASABAH"},
            {"data": "STATUS"},
            {"data": "PERIODE"},
            {
                "data": "NO",
                "render":function (data,type,row){
                    // console.log(row['NOMOR_CIF'])
                    console.log(Anomali)
                    let tombol = ''
                    
                    tombol += '<button class="btn btn-sm btn-primary" onclick="DetailData('+"'"+row['NOMOR_CIF']+"'"+','+"'"+Anomali+"'"+')"><i class="fa fa-circle-info"></i>DETAIL</button>'
                    return tombol
                },
                "className":'text-right'
            }
        ],
        // "drawCallback": function (r) { 
        //     var data    = r.json.detail;
        // },
    });

    $('#cari').click(function (e) {
        e.preventDefault()
        dtable.draw()
    });
    
    $('#search_ibu').change(function (e) {
        e.preventDefault()
        dtable.draw()
    });
});

// NIK
$(document).ready( function () {
    var dtablenik = $('#dataTableNik').DataTable({
        "ordering": false,
        "processing": true,
        oLanguage: {sProcessing: "<div id='loader'> <span class='spinner-grow spinner-grow-sm text-info' aria-hidden='true'></span><b class='text-info'> Processing...</b></div>"},
        "serverSide": true,
        "paging": true,
        deferLoading: false,
        "ajax": {
            "url": "<?php echo site_url('ListDataNik'); ?>",
            "type": "POST",
            "data":function (d) {
                d.kd_cabang_nik             = $('#cabang_nik').val()
                d.cek_tgl_input_nik         = $('#tgl_input_nik').val()
                d.cek_tgl_inputakhir_nik    = $('#tgl_inputakhir_nik').val()
                d.cek_periode_nik           = $('#periode_nik').val()
                d.cari_nik                  = $('#search_nik').val()
            }
        },
        "columns": [
            {"data": "NO"},
            {"data": "CABANG_INDUK"},
            {"data": "NAMA_CABANG"},
            {"data": "KODE_CABANG"},
            {"data": "NOMOR_CIF"},
            {"data": "TANGGAL_BUKA"},
            {"data": "NAMA_SESUAI_IDENTITAS"},
            {"data": "NAMA_TANPA_SINGKATAN"},
            {"data": "JENIS_IDENTITAS"},
            {"data": "NOMOR_IDENTITAS"},
            {"data": "DIGIT_ID"},
            {"data": "USER_INPUT"},
            {"data": "USER_OTOR"},
            {"data": "TGL_OTOR"},
            {"data": "TGL_PERUBAHAN"},
            {"data": "JAM_PERUBAHAN"},
            {"data": "JENIS_NASABAH"},
            {"data": "STATUS"},
            {"data": "PERIODE"},
            {
                "data": "NO",
                "render":function (data,type,row){
                    // console.log(row['NOMOR_CIF'])
                    let tombol = ''
                    tombol += '<button class="btn btn-sm btn-primary" onclick="DetailData('+"'"+row['NOMOR_CIF']+"'"+')"><i class="fa fa-circle-info"></i>DETAIL</button>'
                    return tombol
                },
                "className":'text-right'
            }
        ],
        
    });

    $('#cari_nik').click(function (e) {
        e.preventDefault()
        dtablenik.draw()
    });

    $('#search_nik').change(function (e) {
        e.preventDefault()
        dtablenik.draw()
    });
});

// NPWP
$(document).ready( function () {
    var dtablenpwp = $('#dataTableNPWP').DataTable({
        "ordering": false,
        "processing": true,
        oLanguage: {sProcessing: "<div id='loader'> <span class='spinner-grow spinner-grow-sm text-info' aria-hidden='true'></span><b class='text-info'> Processing...</b></div>"},
        "serverSide": true,
        "paging": true,
        deferLoading: false,
        "ajax": {
            "url": "<?php echo site_url('ListDataNpwp'); ?>",
            "type": "POST",
            "data":function (d) {
                d.kd_cabang_npwp             = $('#cabang_npwp').val()
                d.cek_tgl_input_npwp         = $('#tgl_input_npwp').val()
                d.cek_tgl_inputakhir_npwp    = $('#tgl_inputakhir_npwp').val()
                d.cek_periode_npwp           = $('#periode_npwp').val()
                d.cari_npwp                  = $('#search_npwp').val()
            }
        },
        "columns": [
            {"data": "NO"},
            {"data": "CABANG_INDUK"},
            {"data": "NAMA_CABANG"},
            {"data": "KODE_CABANG"},
            {"data": "NOMOR_CIF"},
            {"data": "TANGGAL_BUKA"},
            {"data": "NAMA_SESUAI_IDENTITAS"},
            {"data": "NAMA_TANPA_SINGKATAN"},
            {"data": "NOMOR_NPWP"},
            {"data": "DIGIT_NPWP"},
            {"data": "USER_INPUT"},
            {"data": "USER_OTOR"},
            {"data": "TGL_OTOR"},
            {"data": "TGL_PERUBAHAN"},
            {"data": "JAM_PERUBAHAN"},
            {"data": "JENIS_NASABAH"},
            {"data": "STATUS"},
            {"data": "PERIODE"},
            {
                "data": "NO",
                "render":function (data,type,row){
                    // console.log(row['NOMOR_CIF'])
                    let tombol = ''
                    tombol += '<button class="btn btn-sm btn-primary" onclick="DetailData('+"'"+row['NOMOR_CIF']+"'"+')"><i class="fa fa-circle-info"></i>DETAIL</button>'
                    return tombol
                },
                "className":'text-right'
            }
        ],
    });

    $('#cari_npwp').click(function (e) {
        e.preventDefault()
        dtablenpwp.draw()
    });

    $('#search_npwp').change(function (e) {
        e.preventDefault()
        dtablenpwp.draw()
    });
});


// DATA UMUM
$(document).ready( function () {
    var dtableumum = $('#dataTableUmum').DataTable({
        "ordering": false,
        "processing": true,
        oLanguage: {sProcessing: "<div id='loader'> <span class='spinner-grow spinner-grow-sm text-info' aria-hidden='true'></span><b class='text-info'> Processing...</b></div>"},
        "serverSide": true,
        "paging": true,
        deferLoading: false,
        "ajax": {
            "url": "<?php echo site_url('ListDataUmum'); ?>",
            "type": "POST",
            "data":function (d) {
                d.kd_cabang_umum             = $('#cabang_umum').val()
                d.cek_tgl_input_umum         = $('#tgl_input_umum').val()
                d.cek_tgl_inputakhir_umum    = $('#tgl_inputakhir_umum').val()
                d.cek_periode_umum           = $('#periode_umum').val()
                d.cari_umum                  = $('#search_umum').val()
            }
        },
        "columns": [
            {"data": "NO"},
            {"data": "CABANG_INDUK"},
            {"data": "NAMA_CABANG"},
            {"data": "KODE_CABANG"},
            {"data": "NOMOR_CIF"},
            {"data": "TANGGAL_BUKA"},
            {"data": "NAMA_SESUAI_IDENTITAS"},
            {"data": "NAMA_TANPA_SINGKATAN"},
            {"data": "TEMPAT_LAHIR"},
            {"data": "TANGGAL_LAHIR"},
            // {"data": "NAMA_IBU_KANDUNG"},
            {"data": "JENIS_KELAMIN"},
            {"data": "AGAMA"},
            {"data": "STATUS_PERKAWINAN"},
            // {"data": "JENIS_IDENTITAS"},
            {"data": "NOMOR_NPWP"},
            {"data": "NOMOR_IDENTITAS"},
            {"data": "TANGGAL_IDENTITAS"},
            {"data": "TANGGAL_JT_IDENTITAS"},
            {"data": "NEGARA_ASAL"},
            {"data": "USER_INPUT"},
            {"data": "USER_OTOR"},
            {"data": "TGL_OTOR"},
            {"data": "TGL_PERUBAHAN"},
            {"data": "JAM_PERUBAHAN"},
            {"data": "JENIS_NASABAH"},
            {"data": "STATUS"},
            {"data": "PERIODE"},
            {
                "data": "NO",
                "render":function (data,type,row){
                    // console.log(row['NOMOR_CIF'])
                    let tombol = ''
                    tombol += '<button class="btn btn-sm btn-primary" onclick="DetailData('+"'"+row['NOMOR_CIF']+"'"+')"><i class="fa fa-circle-info"></i>DETAIL</button>'
                    return tombol
                },
                "className":'text-right'
            }
        ],
    });

    $('#cari_umum').click(function (e) {
        e.preventDefault()
        dtableumum.draw()
    });

    $('#search_umum').change(function (e) {
        e.preventDefault()
        dtableumum.draw()
    });
});

// NASABAH INDIVIDU
$(document).ready( function () {
    var dtablensbhindividu = $('#dataTableNsbhIndividu').DataTable({
        "ordering": false,
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?php echo site_url('ListDataNsbhIndividu'); ?>",
            "type": "POST",
            "data":function (d) {
                d.kd_cabang_nasabahind             = $('#cabang_nsbh_individu').val()
                d.cek_tgl_input_nasabahind         = $('#tgl_input_nsbh_individu').val()
                d.cek_tgl_inputakhir_nasabahind    = $('#tgl_inputakhir_nsbh_individu').val()
                d.cek_periode_nasabahind           = $('#periode_nsbh_individu').val()
                d.cari_nasabahind                  = $('#search_nsbh_individu').val()
            }
        },
        "columns": [
            {"data": "NO"},
            {"data": "CABANG_INDUK"},
            {"data": "NAMA_CABANG"},
            {"data": "KODE_CABANG"},
            {"data": "NOMOR_CIF"},
            {"data": "TANGGAL_BUKA"},
            {"data": "NAMA_SESUAI_IDENTITAS"},
            {"data": "NAMA_TANPA_SINGKATAN"},
            {"data": "JENIS_IDENTITAS"},
            {"data": "NOMOR_IDENTITAS"},
            {"data": "DIGIT_ID"},
            {"data": "USER_INPUT"},
            {"data": "TGL_INPUT"},
            {"data": "USER_OTOR"},
            {"data": "TGL_OTOR"},
            {"data": "TGL_PERUBAHAN"},
            {"data": "JAM_PERUBAHAN"},
            {"data": "JENIS_NASABAH"},
            {"data": "STATUS"},
            {"data": "PERIODE"}
        ],
    });

    $('#cabang_nsbh_individu, #tgl_input_nsbh_individu, #tgl_inputakhir_nsbh_individu, #periode_nsbh_individu, #search_nsbh_individu').change(function (e) {
        e.preventDefault()
        dtablensbhindividu.draw()
    });
});

// ADD FUNCTION 18-10-2022
function DetailData(NOMOR_CIF,Anomali) {
    // NOMOR_CIF.preventDefault()
    const url = "<?= site_url('C_anomali/detail') ?>"
    const formData = new FormData()
    formData.append('NOMOR_CIF',NOMOR_CIF)
    formData.append('Anomali',Anomali)
    console.log(Anomali)

    const cab_induk         = $('#CABANG_INDUK')
    const cabang            = $('#NAMA_CABANG')
    const cif               = $('#NOMOR_CIF')
    const tgl_buka          = $('#TGL_BUKA')
    const nama_sesuai       = $('#NAMA_SESUAI_ID')
    const nama_tnp_singkat  = $('#NAMA_TANPA_SINGKATAN')
    const ibu_kandung       = $('#NAMA_IBU_KANDUNG')
    const user_input        = $('#USER_INPUT')
    const user_otor         = $('#USER_OTOR')
    const tgl_otor          = $('#TGL_OTOR')
    const tgl_ubah          = $('#TGL_UBAH')
    const jam_ubah          = $('#JAM_UBAH')
    const jenis             = $('#JENIS_NASABAH')
    const status            = $('#STATUS')
    const anom              = $('#ANOMALI')

    cab_induk.html("<div> <span class='spinner-grow spinner-grow-sm text-primary' aria-hidden='true'></span><b class='text-primary'> Loading</b></div>")
    cabang.html("<div> <span class='spinner-grow spinner-grow-sm text-primary' aria-hidden='true'></span><b class='text-primary'> Loading</b></div>")
    cif.html("<div> <span class='spinner-grow spinner-grow-sm text-primary' aria-hidden='true'></span><b class='text-primary'> Loading</b></div>")
    tgl_buka.html("<div> <span class='spinner-grow spinner-grow-sm text-primary' aria-hidden='true'></span><b class='text-primary'> Loading</b></div>")
    nama_sesuai.html("<div> <span class='spinner-grow spinner-grow-sm text-primary' aria-hidden='true'></span><b class='text-primary'> Loading</b></div>")
    nama_tnp_singkat.html("<div> <span class='spinner-grow spinner-grow-sm text-primary' aria-hidden='true'></span><b class='text-primary'> Loading</b></div>")
    ibu_kandung.html("<div> <span class='spinner-grow spinner-grow-sm text-primary' aria-hidden='true'></span><b class='text-primary'> Loading</b></div>")
    user_input.html("<div> <span class='spinner-grow spinner-grow-sm text-primary' aria-hidden='true'></span><b class='text-primary'> Loading</b></div>")
    user_otor.html("<div> <span class='spinner-grow spinner-grow-sm text-primary' aria-hidden='true'></span><b class='text-primary'> Loading</b></div>")
    tgl_otor.html("<div> <span class='spinner-grow spinner-grow-sm text-primary' aria-hidden='true'></span><b class='text-primary'> Loading</b></div>")
    tgl_ubah.html("<div> <span class='spinner-grow spinner-grow-sm text-primary' aria-hidden='true'></span><b class='text-primary'> Loading</b></div>")
    jam_ubah.html("<div> <span class='spinner-grow spinner-grow-sm text-primary' aria-hidden='true'></span><b class='text-primary'> Loading</b></div>")
    jenis.html("<div> <span class='spinner-grow spinner-grow-sm text-primary' aria-hidden='true'></span><b class='text-primary'> Loading</b></div>")
    status.html("<div> <span class='spinner-grow spinner-grow-sm text-primary' aria-hidden='true'></span><b class='text-primary'> Loading</b></div>")

    $("#detailAnomali").modal('toggle');
    fetch(url,{
        method : 'POST',
        body : formData
    // }).then(response => response.json())
    //   .then(data => console.log(data));
    })
    // .then(res=>res.json()).then(res=>{
    //     cab_induk.html(res.CABANG_INDUK)
    //     cabang.html(res.KODE_CABANG+' - '+res.NAMA_CABANG)
    //     cif.html(res.NOMOR_CIF ? res.NOMOR_CIF : '-')
    //     tgl_buka.html(res.TANGGAL_BUKA ? res.TANGGAL_BUKA : '-')
    //     nama_sesuai.html(res.NAMA_SESUAI_IDENTITAS ? res.NAMA_SESUAI_IDENTITAS : '-')
    //     nama_tnp_singkat.html(res.NAMA_TANPA_SINGKATAN ? res.NAMA_TANPA_SINGKATAN : '-')
    //     ibu_kandung.html(res.NAMA_IBU_KANDUNG ? res.NAMA_IBU_KANDUNG : '-')
    //     user_input.html( res.USER_INPUT ? res.USER_INPUT : '-')
    //     user_otor.html(res.USER_OTOR ? res.USER_OTOR : '-')
    //     tgl_otor.html(res.TGL_OTOR ? res.TGL_OTOR : '-')
    //     tgl_ubah.html(res.TGL_PERUBAHAN ? res.TGL_PERUBAHAN : '-')
    //     jam_ubah.html(res.JAM_PERUBAHAN ? res.JAM_PERUBAHAN : '-')
    //     jenis.html(res.JENIS_NASABAH ? res.JENIS_NASABAH : '-')
    //     status.html(res.STATUS ? res.STATUS : '-')
    // }).catch(err=>alert('Tidak Ada data atas Nomor CIF : '+NOMOR_CIF+' Tersebut'))

    // sementara tutup, karena mau coba yang atas 19-10-2022
    .then(res=>res.json()).then(res=>{
        anom.html(res.Anomali) //sementara ini dlu
        cab_induk.html(res.data['CABANG_INDUK'])
        cabang.html(res.data['KODE_CABANG']+' - '+res.data['NAMA_CABANG'])
        cif.html(res.data['NOMOR_CIF'] ? res.data['NOMOR_CIF'] : '-')
        tgl_buka.html(res.data['TANGGAL_BUKA'] ? res.data['TANGGAL_BUKA'] : '-')
        nama_sesuai.html(res.data['NAMA_SESUAI_IDENTITAS'] ? res.data['NAMA_SESUAI_IDENTITAS'] : '-')
        nama_tnp_singkat.html(res.data['NAMA_TANPA_SINGKATAN'] ? res.data['NAMA_TANPA_SINGKATAN'] : '-')
        ibu_kandung.html(res.data['NAMA_IBU_KANDUNG'] ? res.data['NAMA_IBU_KANDUNG'] : '-')
        user_input.html( res.data['USER_INPUT'] ? res.data['USER_INPUT'] : '-')
        user_otor.html(res.data['USER_OTOR'] ? res.data['USER_OTOR']  : '-')
        tgl_otor.html(res.data['TGL_OTOR'] ? res.data['TGL_OTOR'] : '-')
        tgl_ubah.html(res.data['TGL_PERUBAHAN'] ? res.data['TGL_PERUBAHAN'] : '-')
        jam_ubah.html(res.data['JAM_PERUBAHAN'] ? res.data['JAM_PERUBAHAN'] : '-')
        jenis.html(res.data['JENIS_NASABAH'] ? res.data['JENIS_NASABAH'] : '-')
        status.html(res.data['STATUS'] ? res.data['STATUS'] : '-')
    }).catch(err=>alert('Tidak Ada data atas Nomor CIF : '+NOMOR_CIF+' Tersebut'))
}


