<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-stethoscope"></i> Tambah Data Pemeriksaan</h3>
            </div>
            <div class="box-body">
                <form action="<?php echo base_url('pemeriksaan/insert'); ?>" method="post" class="form-horizontal">
                    <div class="col-lg-12">
                        <?php 

                        if (validation_errors() != false) {
                            echo validation_errors('<div class="text-danger">', "</div>"), "<hr>";
                        }
                        ?>
                    </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kode Pemeriksaan</label>

                            <div class="col-sm-9">
                            <input type="text" name="kd_pemeriksaan" class="form-control" value="<?php echo $kd ?>" placeholder="Auto Generate" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kode Dokter</label>

                            <div class="col-sm-9">
                                <select name="kd_dokter" class="select2-dokter form-control">
                                    <option value="<?php echo $this->session->userdata('user')->username ?>" selected><?php echo $this->session->userdata('user')->nama ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Pasien</label>

                            <div class="col-sm-9">
                                <select name="kd_pasien" class="select2-pasien form-control" id="select-pasien" ></select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!--<div class="form-group">
                            <label class="col-sm-3 control-label">Biaya</label>

                            <div class="col-sm-9">
                            <input type="number" name="biaya" class="form-control" placeholder="Rp. 000.000, 00" >
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Hasil Pemeriksaan</label>

                            <div class="col-sm-9">
                                <textarea name="hasil_pemeriksaan" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Resep</label>

                            <div class="col-sm-9">
                                <select name="resep[]" class="form-control select2" multiple>
                                    <?php foreach($obat as $key => $value): ?>
                                        <option value="<?php echo $value->kd_obat ?>"><?php echo $value->nama ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <!-- <select name="resep[]" class="form-control select2-obat" multiple>
                                <?php //foreach($obat as $key => $value): ?>
                                    <option value="<?php echo $value->kd_obat ?>"><?php echo $value->nama ?></option>
                                <?php //endforeach; ?>
                                </select> -->
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
<!-- Modal -->
<div id="add-pasien" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data Pasien</h4>
      </div>
      <div class="modal-body">

        <form action="<?php echo base_url('api/pasien/add'); ?>" method="POST" id="form-add-pasien" class="form-horizontal">
        <div id="app">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Kode Pasien</label>

                    <div class="col-sm-9">
                    <input type="text" name="kd_pasien" class="form-control" placeholder="Auto Generate" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Tanggal Lahir</label>

                    <div class="col-sm-9">
                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat</label>

                    <div class="col-sm-9">
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Pasien</label>

                    <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Pasien" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Kelamin</label>

                    <div class="col-sm-9">
                        <input type="radio" name="jk" class="flat-green" value="L" id="jk_l" > <label for="jk_l" class="font-light">Laki-laki</label>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" name="jk" class="flat-green" value="P" id="jk_p" > <label for="jk_p" class="font-light">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Golongan Darah</label>

                    <div class="col-sm-9">
                        <input type="radio" name="gol_darah" class="flat-green" value="A" id="gol-a"> <label for="gol-a" class="font-light">A</label>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gol_darah" class="flat-green" value="B" id="gol-b"> <label for="gol-b" class="font-light">B</label>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gol_darah" class="flat-green" value="AB" id="gol-ab"> <label for="gol-ab" class="font-light">AB</label>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gol_darah" class="flat-green" value="O" id="gol-o"> <label for="gol-o" class="font-light">O</label>
                    </div>
                </div>
            </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-success" id="form-add-pasien-submit">Simpan</button>
        </form>
      </div>
    </div>

  </div>
</div>

<script>

</script>