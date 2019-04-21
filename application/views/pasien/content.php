
        <div class="row">
          <div class="col-lg-12">
              <div class="box">
                  <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-users"></i> Tambah Data Pasien</h3>
                    <hr/>
                    <div>
                      <a href="<?php echo base_url('Pasien/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                      <a data-href="<?php echo base_url('Pasien/edit/'); ?>" class="btn btn-warning replace-url"><i class="fa fa-edit"></i> Edit</a>
                      <!-- <button class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button> -->
                      <a data-href="<?php echo base_url('Pasien/hapus/'); ?>" class="btn btn-danger replace-url"><i class="fa fa-trash"></i> Hapus</a>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table class="table table-hover table-bordered table-selectable">
                      <tbody><tr>
                        <th style="width: 10px"></th>
                        <th>Kd. Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Tgl Lahir/Umur</th>
                        <th>Gol. Darah</th>
                      </tr>
                      <?php foreach ($pasien as $key => $value) : ?>
                      <tr>
                        <td><input type="radio" name="id" data-id="<?php echo $value->kd_pasien?>" class="flat-green"></td>
                        <td><?php echo $value->kd_pasien ?></td>
                        <td><?php echo $value->nama ?></td>
                        <td><?php echo $value->jk ?></td>
                        <td><?php
                          echo $value->tgl_lahir."/".$value->umur." thn";
                        ?></td>
                        <td><?php echo $value->gol_darah == "" ? "-" : $value->gol_darah ?></td>
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