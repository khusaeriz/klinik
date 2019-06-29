
        <div class="row">
          <div class="col-lg-12">
              <div class="box">
                  <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-file"></i> Rekam Medis</h3>
                    <hr/>
                    <div>
                      <button type="button" class="btn btn-primary my-5" onclick="javascript:history.go(-1)"><i class="fa fa-arrow-left"></i> Kembali</button>
                      <a href="<?php echo base_url('Pemeriksaan/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                      <a href="<?php echo base_url('Pasien/cetak_rekam_medis/'. $this->uri->segment(3)); ?>" class="btn btn-warning" ><i class="fa fa-print"></i> Cetak</a>
                      <!-- <a data-href="<?php echo base_url('Pasien/rekam_medis/'); ?>" class="btn btn-primary replace-url" disabled><i class="fa fa-info-circle"></i> Rekam Medis</a> -->
                      <!-- <a data-href="<?php echo base_url('Pasien/hapus/'); ?>" class="btn btn-danger replace-url" disabled="true"><i class="fa fa-trash"></i> Hapus</a> -->
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body table-responsive">
                    <table class="table table-hover table-bordered table-selectable">
                      <tbody><tr>
                        <th style="width: 10px"></th>
                        <th>No</th>
                        <th>Hasil Pemeriksaan</th>
                        <th>Tanggal Pemeriksaan</th>
                      </tr>
                      <?php foreach ($list as $key => $value) : ?>
                      <tr>
                        <td><input type="radio" name="id" data-id="<?php echo $key+1?>" class="flat-green"></td>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $value->hasil_pemeriksaan ?></td>
                        <td><?php echo date('d-M-Y', strtotime($value->tgl_pemeriksaan)) ?></td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody></table>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                      <li><a href="#">«</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
          </div>
        </div>