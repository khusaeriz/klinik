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
                    <h3 class="box-title"><i class="fa fa-stethoscope"></i> Detail Data Pemeriksaan</h3>
            </div>
            <div class="box-body">
                <form action="<?php echo base_url('pemeriksaan/insert'); ?>" method="post" class="form-horizontal">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label class="col-sm-4 control-label">Kode Pemeriksaan</label>

                            <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $d->kd_pemeriksaan ?>" placeholder="Auto Generate" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label">Kode Dokter</label>

                            <div class="col-sm-8">
                                <input type="text" name="kd_dokter" value="<?php echo $d->nama_dokter ?>" class=" form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label">Pasien</label>

                            <div class="col-sm-8">
                                <input name="kd_pasien" value="<?php echo $d->nama_pasien ?>" class=" form-control" id="select-pasien" readonly>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-sm-4 control-label">Biaya Pemeriksaan</label>

                            <div class="col-sm-8">
                            <input type="text" name="biaya" value="Rp. <?php echo number_format($d->biaya, 0, ',', '.') ?>" class="form-control" readonly>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-sm-4 control-label">Hasil Pemeriksaan</label>

                            <div class="col-sm-8">
                                <textarea name="hasil_pemeriksaan" class="form-control" readonly><?php echo $d->hasil_pemeriksaan ?> </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label">Total Biaya</label>

                            <div class="col-sm-8">
                            <?php 
                                $total = $d->biaya;

                                foreach ($d->obat as $key => $value) {
                                    if ($value->stok > 0) {
                                        $total += $value->harga;
                                    }
                                }
                            ?>
                                <input type="text" name="biaya" value="Rp. <?php echo number_format($total, 0, ',', '.') ?>" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 row">
                        <!-- <label class="col-sm-3 control-label">Resep<br></label> -->
                            <table class="table table-bordered">
                                <tr>
                                    <th class="text-center">Nama Obat</th>
                                    <th class="text-center">Harga Obat</th>
                                </tr>
                                <?php foreach($d->obat as $key => $value): ?>
                                    <tr>
                                        <td class="text-center"><?php echo $value->nama ?></td>
                                        <?php if($value->stok > 0): ?>
                                            <td class="text-center">Rp. <?php echo number_format($value->harga, 0, ',', '.') ?></td>
                                        <?php else: ?>
                                            <td class="text-center">Stok Habis</td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>