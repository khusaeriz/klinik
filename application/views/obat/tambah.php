<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-plus-square-o"></i> Tambah Data Obat</h3> 
            </div>
            <div class="box-body">
                <form action="<?php echo base_url('obat/insert'); ?>" method="post" class="form-horizontal">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kode Obat</label>

                            <div class="col-sm-9">
                            <input type="text" name="kd_obat" class="form-control" placeholder="Kode Obat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Harga Obat</label>

                            <div class="col-sm-9">
                            <input type="text" name="harga" class="form-control" placeholder="Harga Obat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tgl. Expired</label>

                            <div class="col-sm-9">
                            <input type="date" name="tgl_expired" class="form-control" placeholder="Tgl. Expired">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama Obat</label>

                            <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Obat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Stok Obat</label>

                            <div class="col-sm-9">
                            <input type="text" name="stok" class="form-control" placeholder="Stok Obat">
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