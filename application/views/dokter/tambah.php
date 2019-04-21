<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-user-md"></i> Tambah Data Dokter</h3>
            </div>
            <div class="box-body">
                <form action="<?php echo base_url('dokter/insert') ?>" method="post" class="form-horizontal">
                <div class="row">
                    <div class="col-lg-12">
                        <?php 

                        if (validation_errors() != false) {
                            echo validation_errors('<div class="text-danger">', "</div>"), "<hr>";

                        }
                        ?>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kode Dokter</label>

                            <div class="col-sm-9">
                            <input type="text" name="kd_dokter" class="form-control" placeholder="Kode Dokter" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Spesialis</label>

                            <div class="col-sm-9">
                            <input type="text" name="spesialis" class="form-control" placeholder="Spesialis">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alamat</label>

                            <div class="col-sm-9">
                                <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama Dokter</label>

                            <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Dokter" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Telp</label>

                            <div class="col-sm-9">
                            <input type="text" name="no_telp" class="form-control" placeholder="No. Telp">
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