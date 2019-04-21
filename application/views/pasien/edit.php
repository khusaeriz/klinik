<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-users"></i> Tambah Data Pasien</h3>
            </div>
            <div class="box-body">
                <form action="<?php echo base_url('pasien/update') ?>" method="post" class="form-horizontal">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kode Pasien</label>

                            <div class="col-sm-9">
                            <input type="text" name="kd_pasien" class="form-control" value="<?php echo $d->kd_pasien ?>" placeholder="Auto Generate" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama Pasien</label>

                            <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control" value="<?php echo $d->nama ?>" placeholder="Nama Pasien" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="radio" name="jk" class="flat-green" value="L" id="jk_l" <?php echo $d->jk == "L" ? "checked" : '' ?> required> <label for="jk_l" class="font-light">Laki-laki</label>
                                &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="jk" class="flat-green" value="P" id="jk_p" <?php echo $d->jk == "P" ? "checked" : '' ?> required> <label for="jk_p" class="font-light">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Golongan Darah</label>

                            <div class="col-sm-9">
                                <input type="radio" name="gol_darah" class="flat-green" value="A" <?php echo $d->gol_darah == "A" ? "checked" : '' ?> id="gol-a"> <label for="gol-a" class="font-light">A</label>
                                &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gol_darah" class="flat-green" value="B" <?php echo $d->gol_darah == "B" ? "checked" : '' ?> id="gol-b"> <label for="gol-b" class="font-light">B</label>
                                &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gol_darah" class="flat-green" value="AB" <?php echo $d->gol_darah == "AB" ? "checked" : '' ?> id="gol-ab"> <label for="gol-ab" class="font-light">AB</label>
                                &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gol_darah" class="flat-green" value="O" <?php echo $d->gol_darah == "O" ? "checked" : '' ?> id="gol-o"> <label for="gol-o" class="font-light">O</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Lahir</label>

                            <div class="col-sm-9">
                            <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $d->tgl_lahir ?>" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alamat</label>

                            <div class="col-sm-9">
                                <textarea name="alamat" class="form-control"><?php echo $d->alamat ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-lg-offset-0">
                        <hr/>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-primary my-5" onclick="javascript:history.go(-1)"><i class="fa fa-arrow-left"></i> Kembali</button>
                                <button type="reset" class="btn btn-default my-5"><i class="fa fa-undo"></i> Reset</button>
                                <button type="submit" class="btn btn-success my-5"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>