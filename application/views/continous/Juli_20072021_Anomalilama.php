<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Continous Audit</title>
  <?php $this->load->view('admin/Header',true);?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <?php $this->load->view('admin/Navbar',true);?>
    <?php $this->load->view('admin/Sidebar',true);?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="alert alert-custom alert-light alert-shadow gutter-b" role="alert">
                    <div class="alert-text">
                        <span class="mr-2"><i class="fas fa-home"></i> Anomali Data</span>
                    </div>
                </div>
                <ul class="nav nav-tabs nav-bg-primary" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#Aibu">Nama Ibu Kandung</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Anik">No. KTP</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Anpwp">NPWP</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Adata">Data Umum</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Aalamat">Alamat</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Asemua">Semua</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="Aibu" class="tab-pane active"><br>
                        <div>
                            <?php $this->load->view('continous/Anomali_ibu');?>
                        </div>
                    </div>
                    <div id="Anik" class="tab-pane fade"><br>
                        <div>
                            <?php $this->load->view('continous/Anomali_nik');?>
                        </div>
                    </div>
                    <div id="Anpwp" class="tab-pane fade"><br>
                        <div>
                            <?php $this->load->view('continous/Anomali_npwp');?>
                        </div>
                    </div>
                    <div id="Adata" class="tab-pane fade"><br>
                        <div>
                            <?php $this->load->view('continous/Anomali_umum');?>
                        </div>
                    </div>
                    <div id="Aalamat" class="tab-pane fade"><br>
                        <div>
                            <?php $this->load->view('continous/Anomali_alamat');?>
                        </div>
                    </div>
                    <div id="Asemua" class="tab-pane fade"><br>
                    <marquee behavior="" direction=""><h3>Under Contruction</h3></marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('admin/Footer',true);?>
</body>
</html>