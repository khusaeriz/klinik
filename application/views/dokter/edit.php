<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-user-md"></i> Edit Data Dokter</h3>
            </div>
            <div class="box-body">
                <form action="<?php echo base_url('dokter/update') ?>" method="post" class="form-horizontal">

                <input type="hidden" name="kd_dokter_old" value="<?php echo $dokter->kd_dokter ?>">
                <div class="row">
                    <div class="col-lg-12">
                        <?php 
                        $error = $this->session->flashdata('error');
                        if ($error != null) {
                            echo "<div class='text-danger'>",$error ,"</div><hr>";

                        }
                        ?>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kode Dokter</label>

                            <div class="col-sm-9">
                            <input type="text" name="kd_dokter" class="form-control" placeholder="Kode Dokter" value="<?php echo $dokter->kd_dokter ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Password</label>

                            <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak diubah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alamat</label>

                            <div class="col-sm-9">
                                <textarea name="alamat" class="form-control"><?php echo $dokter->alamat ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama Dokter</label>

                            <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Dokter" value="<?php echo $dokter->nama ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Spesialis</label>

                            <div class="col-sm-9">
                            <input type="text" name="spesialis" class="form-control" placeholder="Spesialis" value="<?php echo $dokter->spesialis ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Telp</label>

                            <div class="col-sm-9">
                            <input type="text" name="no_telp" class="form-control" placeholder="No. Telp"  value="<?php echo $dokter->no_telp ?>">
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