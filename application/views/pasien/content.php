
        <div class="row">
          <div class="col-lg-12">
              <div class="box">
                  <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-users"></i> Tambah Data Pasien</h3>
                    <hr/>
                    <div>
                      <a href="<?php echo base_url('Obat/tambah') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                      <a data-href="<?php echo base_url('Obat/edit/'); ?>" class="btn btn-warning replace-url"><i class="fa fa-edit"></i> Edit</a>
                      <!-- <button class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button> -->
                      <a data-href="<?php echo base_url('Obat/hapus/'); ?>" class="btn btn-danger replace-url"><i class="fa fa-trash"></i> Hapus</a>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table class="table table-hover table-bordered table-selectable">
                      <tbody><tr>
                        <th style="width: 10px"></th>
                        <th>Kd. Obat</th>
                        <th>Nama Obat</th>
                        <th>Harga</th>
                        <th>Tgl Expired</th>
                        <th>Stok</th>
                      </tr>
                      <tr>
                        <td><input type="radio" name="id" class="flat-green"></td>
                        <td>O-001</td>
                        <td>Amitanol</td>
                        <td>
                          Rp. 30.000,00
                        </td>
                        <td>22/01/2020</td>
                        <td>20</td>
                      </tr>
                      <tr>
                        <td><input type="radio" name="id" class="flat-green"></td>
                        <td>O-002</td>
                        <td>Parasetamol</td>
                        <td>
                            Rp. 30.000,00
                        </td>
                        <td>22/01/2020</td>
                        <td>14</td>
                      </tr>
                      <tr>
                        <td><input type="radio" name="id" class="flat-green"></td>
                        <td>O-003</td>
                        <td>Ethanol</td>
                        <td>
                            Rp. 30.000,00
                        </td>
                        <td>22/01/2020</td>
                        <td>10</td>
                      </tr>
                      <tr>
                        <td><input type="radio" name="id" class="flat-green"></td>
                        <td>O-004</td>
                        <td>Alcohol</td>
                        <td>
                            Rp. 30.000,00
                        </td>
                        <td>22/01/2020</td>
                        <td>7</td>
                      </tr>
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