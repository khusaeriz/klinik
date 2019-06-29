<html>
<head>

<link href="<?php echo base_url('assets/bootstrap-4.3.1-dist/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('dist/css/AdminLTE.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('dist/css/skins/skin-green.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

</head>

<body onload="window.print()">
<div class='container'>
<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-stethoscope"></i> Rekam Medis - <?php echo $pasien->nama ?></h3>
            </div>
                  <div class="box-body table-responsive">
                    <table class="table table-hover table-bordered table-selectable">
                      <tbody><tr>
                        <th>No</th>
                        <th>Hasil Pemeriksaan</th>
                        <th>Tanggal Pemeriksaan</th>
                      </tr>
                      <?php foreach ($list as $key => $value) : ?>
                      <tr>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $value->hasil_pemeriksaan ?></td>
                        <td><?php echo date('d-M-Y', strtotime($value->tgl_pemeriksaan)) ?></td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody></table>
                  </div>
        </div>
    </div>
</div>
</div>
</body>
</html>