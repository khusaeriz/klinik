
        <div class="row">
          <div class="col-lg-12">
              <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-stethoscope"></i> Table Data Pemeriksaan</h3>
                    <hr/>
                    <div>
					<?php if ($this->session->userdata('user')->role == 'dokter') :?>
                      <a href="<?php echo base_url('Pemeriksaan/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
					<?php endif; ?>
                      <a data-href="<?php echo base_url('Pemeriksaan/detail/'); ?>" class="btn btn-warning replace-url" disabled="true"><i class="fa fa-eye"></i> Detail</a>
                      <!-- <a class="btn btn-warning" href=""><i class="fa fa-eye"></i> Detail</a> -->
					<?php if ($this->session->userdata('user')->role == 'dokter') :?>
                      <a data-href="<?php echo base_url('Pemeriksaan/hapus/'); ?>" class="btn btn-danger replace-url" disabled="true"><i class="fa fa-trash"></i> Hapus</a>
					<?php endif; ?>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body table-responsive">
                    <table class="table table-hover table-bordered table-selectable">
                      <tbody><tr>
                        <th style="width: 10px"></th>
                        <th>Kd. Pemeriksaan</th>
                        <th>Pasien</th>
                        <th>Dokter</th>
                        <!-- <th>Biaya Pemeriksaan</th> -->
                        <th>Hasil Pemeriksaan</th>
                        <!-- <th>Resep</th> -->
                      </tr>
                      <?php foreach($pemeriksaan as $key => $value): ?>
                      <tr>
                        <td><input type="radio" data-id="<?php echo $value->kd_pemeriksaan ?>" name="id" class="flat-green"></td>
                        <td><?php echo $value->kd_pemeriksaan ?></td>
                        <td><?php echo $value->nama_pasien ?></td>
                        <td><?php echo $value->nama_dokter ?></td>
                        <!-- <td>Rp. <?php echo number_format($value->biaya, 0, ',', '.') ?></td> -->
                        <td><?php echo $value->hasil_pemeriksaan ?></td>
                        <!-- <td><?php echo $value->resep ?></td> -->
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