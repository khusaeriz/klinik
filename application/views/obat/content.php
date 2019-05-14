
        <div class="row">
          <div class="col-lg-12">
              <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-plus-square-o"></i> Table Data Obat</h3>
                    <hr/>
                    <div>
                      <a href="<?php echo base_url('Obat/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                      <a data-href="<?php echo base_url('Obat/edit/'); ?>" class="btn btn-warning replace-url" disabled="true"><i class="fa fa-edit"></i> Edit</a>
                      <!-- <button class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button> -->
                      <a data-href="<?php echo base_url('Obat/hapus/'); ?>" class="btn btn-danger replace-url" disabled="true"><i class="fa fa-trash"></i> Hapus</a>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body table-responsive">
                    <table class="table table-hover table-bordered table-selectable">
                      <tbody><tr>
                        <th style="width: 10px"></th>
                        <th>Kd. Obat</th>
                        <th>Nama Obat</th>
                        <th>Harga</th>
                        <th>Tgl Expired</th>
                        <th>Stok</th>
                      </tr>
                      <?php foreach($obat as $key => $value): ?>
                      <tr>
                        <td><input type="radio" data-id="<?php echo $value->kd_obat ?>" name="id" class="flat-green"></td>
                        <td><?php echo $value->kd_obat ?></td>
                        <td><?php echo $value->nama ?></td>
                        <td>
                          Rp. <?php echo number_format($value->harga, 0, ',', '.') ?>
                        </td>
                        <td><?php echo date('d/m/Y', strtotime($value->tgl_expired)) ?></td>
                        <td><?php echo $value->stok ?></td>
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