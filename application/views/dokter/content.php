
        <div class="row">
          <div class="col-lg-12">
              <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-user-md"></i> Table Data Dokter</h3>
                    <hr/>
                    <div>
                      <a href="<?php echo base_url('Dokter/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                      <a data-href="<?php echo base_url('Dokter/edit/'); ?>" class="btn btn-warning replace-url"><i class="fa fa-edit"></i> Edit</a>
                      <!-- <button class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button> -->
                      <a data-href="<?php echo base_url('Dokter/hapus/'); ?>" class="btn btn-danger replace-url"><i class="fa fa-trash"></i> Hapus</a>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table class="table table-hover table-bordered table-selectable">
                      <tbody><tr>
                        <th style="width: 10px"></th>
                        <th>Kd. Dokter</th>
                        <th>Nama Dokter</th>
                        <th>Spesialis</th>
                        <th>No. Telp</th>
                        <th>Alamat</th>
                      </tr>

                      <?php foreach ($dokter as $key => $value) : ?>
                      <tr>
                        <td><input type="radio" name="id" data-id="<?php echo $value->kd_dokter ?>" class="flat-green"></td>
                        <td><?php echo $value->kd_dokter ?></td>
                        <td><?php echo $value->nama ?></td>
                        <td><?php echo $value->spesialis ?></td>
                        <td><?php echo $value->no_telp ?></td>
                        <td><?php echo $value->alamat ?></td>
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