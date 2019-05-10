<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-stethoscope"></i> Detail Data Pemeriksaan</h3>
            </div>
            <div class="box-body">
                <form action="<?php echo base_url('pemeriksaan/insert'); ?>" method="post" class="form-horizontal">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kode Pemeriksaan</label>

                            <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $d->kd_pemeriksaan ?>" placeholder="Auto Generate" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kode Dokter</label>

                            <div class="col-sm-9">
                                <input type="text" name="kd_dokter" value="<?php echo $d->nama_dokter ?>" class=" form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Pasien</label>

                            <div class="col-sm-9">
                                <input name="kd_pasien" value="<?php echo $d->nama_pasien ?>" class=" form-control" id="select-pasien" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Biaya Pemeriksaan</label>

                            <div class="col-sm-9">
                            <input type="text" name="biaya" value="Rp. <?php echo number_format($d->biaya, 0, ',', '.') ?>" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Hasil Pemeriksaan</label>

                            <div class="col-sm-9">
                                <textarea name="hasil_pemeriksaan" class="form-control" readonly><?php echo $d->hasil_pemeriksaan ?> </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Total Biaya</label>

                            <div class="col-sm-9">
                            <?php 
                                $total = $d->biaya;

                                foreach ($d->obat as $key => $value) {
                                    $total += $value->harga;
                                }
                            ?>
                                <input type="text" name="biaya" value="Rp. <?php echo number_format($total, 0, ',', '.') ?>" class="form-control" readonly>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="col-sm-3 control-label">Resep</label>

                            <div class="col-sm-9">
                                <textarea name="resep" class="form-control" readonly></textarea>
                                <select name="resep[]" class="form-control select2-obat" multiple>
                                <?php //foreach($obat as $key => $value): ?>
                                    <option value="<?php echo $value->kd_obat ?>"><?php echo $value->nama ?></option>
                                <?php //endforeach; ?>
                                </select>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-6">
                        <!-- <label class="col-sm-3 control-label">Resep<br></label> -->
                            <table class="table table-bordered">
                                <tr>
                                    <th class="text-center">Nama Obat</th>
                                    <th class="text-center">Harga Obat</th>
                                </tr>
                                <?php foreach($d->obat as $key => $value): ?>
                                    <tr>
                                        <td class="text-center"><?php echo $value->nama ?></td>
                                        <td class="text-center">Rp. <?php echo number_format($value->harga, 0, ',', '.') ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                    </div>
                    <div class="col-lg-12 col-lg-offset-0">
                        <hr/>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-primary my-5" onclick="javascript:history.go(-1)"><i class="fa fa-angle-left"></i> Kembali</button>
                                <button type="button" class="btn btn-primary my-5" onclick="javascript:history.go(-1)"><i class="fa fa-print"></i> Print</button>
                                <!-- <button type="reset" class="btn btn-default my-5"><i class="fa fa-undo"></i> Reset</button> -->
                                <!-- <button type="submit" class="btn btn-success my-5"><i class="fa fa-save"></i> Simpan</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>